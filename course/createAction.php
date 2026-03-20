<?php
include('../init/db.init.php');


// Enable error reporting for debugging (optional, remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_save"])) {

    $course_name = $_POST['course_name'] ?? '';
    $course_price = $_POST['course_price'] ?? '';

    // Handle file upload
    $photo = '';

    // Check if file is uploaded

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $_FILES['photo']['name'];
        $temp = $_FILES['photo']['tmp_name'];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        // Validate file type
        if (!in_array($ext, $allowed_types)) {
            die("Invalid file type! Only JPG, JPEG, PNG, and GIF are allowed.");
        }

        // Validate file size
        $max_size = 5 * 1024 * 1024; // 5MB max
        if ($_FILES['photo']['size'] > $max_size) {
            die("File is too large! Maximum file size is 5MB.");
        }

        // Create unique filename and move the file
        $new_filename = uniqid("IMG_", true) .  '.' . $ext;
        $upload_dir = 'uploads/';
        $path = $upload_dir . $new_filename;
        // Make sure the upload directory exists
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        if (!is_writable($upload_dir)) {
            die("Upload directory is not writable!");
        }

        if (!move_uploaded_file($temp, $path)) {
            die("Failed to upload image!");
        }

        $photo = $path;
    }
    // Only insert if a file was uploaded
    if ($photo !== '') {

        $stm = $db->prepare("INSERT INTO `tbl_course`(`course_name`, `course_price`, `photo`) VALUES (?,?,?)");
        $stm->bind_param("sss", $course_name, $course_price, $photo);
        if ($stm->execute()) {
            header("Location: ./course.php");
            exit();
        } else {
            echo "Error: " . $stm->error;
        }
        $stm->close();
    } else {
        echo "No file uploaded or invalid file.";
    }
}
