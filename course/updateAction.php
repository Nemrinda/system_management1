<?php

include "../init/db.init.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btn_update'])) {
    $id = $_POST['id'] ?? '';
    $course_name = $_POST['course_name'] ?? '';
    $course_price = $_POST['course_price'] ?? '';
    $photo = ''; // Initialize photo variable

    // Fetch current photo from DB in case no new file is uploaded
    $stm = $db->prepare("SELECT * FROM tbl_course WHERE id = ?");
    $stm->bind_param("i", $id);
    $stm->execute();
    $result = $stm->get_result();
    $course = $result->fetch_assoc();
    $stm->close();

    $photo = $course['photo'];
    // Handle image upload if a new file is provided

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $_FILES['photo']['name'];
        $temp = $_FILES['photo']['tmp_name'];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed_types)) {
            die("Invalid file type. Only JPG, JPEG, PNG, and GIF allowed.");
        }

        // Generate new unique filename
        $new_filename = uniqid("IMG_", true) . '.' . $ext;
        $upload_path = 'uploads/' . $new_filename;

        if (!move_uploaded_file($temp, $upload_path)) {
            die("Failed to upload image.");
        }

        // Optionally delete the old photo if you want
        if (file_exists($photo)) {
            unlink($photo);
        }

        $photo = $upload_path;
    }

    // Update the record in the DB
    $stmt = $db->prepare("UPDATE tbl_course SET course_name=?, course_price=?,photo=? WHERE id = ?");
    $stmt->bind_param("sssi", $course_name, $course_price, $photo, $id);
    if ($stmt->execute()) {
        header("Location: ./course.php");
        exit;
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
} else {
    echo "Invalid request.";
}
