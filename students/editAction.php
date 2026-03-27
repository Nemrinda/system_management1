<?php
include "../init/db.init.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btn_update'])) {

    // Receive form data
    $id = $_POST['id'] ?? '';
    $student_name = $_POST['student_name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $course = $_POST['course'] ?? '';
    $start_date = $_POST['start_date'] ?? '';
    $end_date = $_POST['end_date'] ?? '';
    $total = $_POST['Total'] ?? 0;
    $paid = $_POST['Paid'] ?? 0;
    $indebted = $_POST['Indebted'] ?? 0;
    $discount = $_POST['discount'] ?? 0;
    $remark = $_POST['remark'] ?? '';

    // Fetch existing photos
    $stmt = $db->prepare("SELECT photo, photo_card_student FROM tbl_students WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $current = $result->fetch_assoc();
    $stmt->close();

    $photo = $current['photo'];
    $photo_card_student = $current['photo_card_student'];

    // Upload function
    function uploadImage($fileInput, $oldPath)
    {
        if (isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] === UPLOAD_ERR_OK) {
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
            $filename = $_FILES[$fileInput]['name'];
            $tmp = $_FILES[$fileInput]['tmp_name'];
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            if (!in_array($ext, $allowed_types)) {
                die("Invalid file type. Only JPG, JPEG, PNG, GIF allowed.");
            }

            $newName = uniqid("IMG_", true) . ".$ext";
            $uploadPath = "uploads/$newName";

            if (move_uploaded_file($tmp, $uploadPath)) {
                if ($oldPath && file_exists($oldPath)) {
                    unlink($oldPath);
                }
                return $uploadPath;
            }
        }
        return $oldPath; // keep old image if no new file
    }

    // Upload both images
    $photo = uploadImage("photo", $photo);
    $photo_card_student = uploadImage("photo_card_student", $photo_card_student);

    // Update query
    $stmt = $db->prepare("
        UPDATE tbl_students 
        SET 
            student_name = ?, 
            gender = ?, 
            phone = ?, 
            address = ?, 
            course = ?, 
            start_date = ?, 
            end_date = ?, 
            Total = ?, 
            Paid = ?, 
            Indebted = ?, 
            discount = ?, 
            photo = ?, 
            photo_card_student = ?, 
            remark = ?
        WHERE id = ?
    ");

    $stmt->bind_param(
        "ssssssssssssssi",
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
        $remark,
        $id
    );

    if ($stmt->execute()) {
        header("Location: ./student.php");
        exit;
    } else {
        echo "Error updating: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
} else {
    echo "Invalid request.";
}
