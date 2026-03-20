<?php
include "../init/db.init.php"; // make sure this file connects to your DB properly
if (isset($_POST['btn_save'])){
      // Collect form inputs safely
    $teacher_name = $_POST['teacher_name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $start_date = $_POST['start_date'] ?? null;
    $end_date = $_POST['end_date'] ?? null;
    $course_id = $_POST['course_id'] ?? null;
    $address = $_POST['address'] ?? '';
  
    // Handle photo upload
    $photo_path = null;
    if (!empty($_FILES['photo']['name'])) {
        $target_dir = "./uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $photo_path = $target_dir . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
    }

    // Prepare SQL insert
    $sql = "INSERT INTO tbl_teachers (teacher_name, gender, phone, start_date, end_date, course_id, photo, address)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

      $stmt = $db->prepare($sql);
      if ($stmt) {
      $stmt->bind_param("ssssssss", $teacher_name, $gender, $phone, $start_date, $end_date, $course_id, $photo_path, $address);

      if ($stmt->execute()) {
        header("Location: ./teacher.php");
        exit();
      } else {
        echo "Error: " . $stmt->error;
      }

      $stmt->close();
      } else {
      echo "<script>alert('Error preparing SQL: " . $db->error . "');</script>";
      }

      $db->close();
}
