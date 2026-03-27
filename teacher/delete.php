<?php

include '../init/db.init.php';

//delete data in db

if (!isset($_GET['teacher_id'])) {
      return;
}

// echo "
// <script>
//       alert('Are you sure want to delete?')
// </script>
// ";
$id  = $_GET['teacher_id'];

$delete = "DELETE FROM `tbl_teachers` WHERE teacher_id = ?";
$delete_stm = $db->prepare($delete);
$delete_stm->bind_param('i', $id);
// $delete_stm->execute();

if ($delete_stm->execute()) {
      echo "<script>alert('Record delete successfully!');</script>";
      header("Location: ./teacher.php");
} else {
      echo "<script>alert('Error: " . $delete_stm->error . "');</script>";
}
