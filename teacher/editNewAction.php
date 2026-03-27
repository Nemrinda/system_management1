<?php
include "../init/db.init.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btn_update'])) {

  $id          = $_POST['teacher_id'] ?? '';
  $teacher_name = $_POST['teacher_name'] ?? '';
  $gender       = $_POST['gender'] ?? '';
  $phone        = $_POST['phone'] ?? '';
  $address      = $_POST['address'] ?? '';

  // IMPORTANT — Must match select name="course_id" in your form
  $course_id    = $_POST['course_id'] ?? '';

  $start_date   = $_POST['start_date'] ?? '';
  $end_date     = $_POST['end_date'] ?? '';

  // Fetch current photo
  $stmt = $db->prepare("SELECT photo FROM tbl_teachers WHERE teacher_id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $stmt->close();

  $photo = $row['photo']; // keep old photo by default

  // Handle new image upload
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $filename = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
      die("Invalid file type. Only JPG, JPEG, PNG, GIF allowed.");
    }

    $new_name = uniqid("IMG_", true) . "." . $ext;
    $upload_path = "uploads/" . $new_name;

    if (!move_uploaded_file($tmp, $upload_path)) {
      die("Failed to upload image.");
    }

    // Remove old image
    if (!empty($photo) && file_exists($photo)) {
      unlink($photo);
    }

    $photo = $upload_path;
  }

  // Validate: course ID must exist (prevents foreign key error)
  $check = $db->prepare("SELECT id FROM tbl_course WHERE id = ?");
  $check->bind_param("i", $course_id);
  $check->execute();
  $check_result = $check->get_result();

  if ($check_result->num_rows == 0) {
    die("Error: Selected course does not exist in course table.");
  }
  $check->close();

  // Update teacher record
  $stmt = $db->prepare("
      UPDATE tbl_teachers
      SET teacher_name = ?, gender = ?, phone = ?, address = ?, 
          course_id = ?, start_date = ?, end_date = ?, photo = ?
      WHERE teacher_id = ?
  ");

  // s = string, i = integer
  $stmt->bind_param(
    "ssssisssi",
    $teacher_name,
    $gender,
    $phone,
    $address,
    $course_id,
    $start_date,
    $end_date,
    $photo,
    $id
  );

  if ($stmt->execute()) {
    header("Location: ./teacher.php");
    exit;
  } else {
    echo "Error updating record: " . $stmt->error;
  }

  $stmt->close();
  $db->close();
} else {
  echo "Invalid request.";
}
