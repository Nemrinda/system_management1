<?php
include "../init/db.init.php";

// Enable error reporting (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_save"])) {

    // Get form inputs
    $student_name = $_POST['student_name'] ?? '';
    $gender       = $_POST['gender'] ?? '';
    $phone        = $_POST['phone'] ?? '';
    $address      = $_POST['address'] ?? '';
    $course       = $_POST['course'] ?? '';
    $start_date   = $_POST['start_date'] ?? '';
    $end_date     = $_POST['end_date'] ?? '';
    $total        = $_POST['total'] ?? 0;
    $paid         = $_POST['paid'] ?? 0;
    $indebted     = $_POST['indebted'] ?? 0;
    $discount     = $_POST['discount'] ?? 0;
    $remark       = $_POST['remark'] ?? '';
    echo $student_name;
    // ==========================
    // UPLOAD photo
    // ==========================
    $photo = '';
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {

        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $ext = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            die("Invalid file type for photo.");
        }

        $newName = uniqid("STUDENT_", true) . "." . $ext;
        $upload_dir = "uploads/";
        $path = $upload_dir . $newName;

        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        move_uploaded_file($_FILES['photo']['tmp_name'], $path);

        $photo = $path;
    }

    // ==========================
    // UPLOAD photo_card_student
    // ==========================
    $photo_card_student = '';
    if (isset($_FILES['photo_card_student']) && $_FILES['photo_card_student']['error'] === UPLOAD_ERR_OK) {

        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $ext = strtolower(pathinfo($_FILES['photo_card_student']['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            die("Invalid file type for student card photo.");
        }

        $newName = uniqid("CARD_", true) . "." . $ext;
        $upload_dir = "uploads/";
        $path2 = $upload_dir . $newName;

        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        move_uploaded_file($_FILES['photo_card_student']['tmp_name'], $path2);

        $photo_card_student = $path2;
    }

    // ==========================
    // INSERT INTO student TABLE
    // ==========================
    $stmt = $db->prepare("
      INSERT INTO `tbl_students` (
          `student_name`, `gender`, `phone`, `address`, `course`,
          `start_date`, `end_date`, `total`, `paid`, `indebted`,
          `discount`, `photo`, `photo_card_student`, `remark`
      ) 
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
  ");

    // 14 parameters → 14 types (mostly string)
    $stmt->bind_param(
        "ssssisssssssss",
        $student_name,
        $gender,
        $phone,
        $address,
        $course,
        $start_date,
        $end_date,
        $total,
        $paid,
        $indebted,
        $discount,
        $photo,
        $photo_card_student,
        $remark
    );

    if ($stmt->execute()) {
        header("Location: ./student.php?msg=created");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
}
