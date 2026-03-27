<?php

include '../init/db.init.php';

//delete data in db

if (!isset($_GET['id'])) {
      return;
}

// echo "
// <script>
//       alert('Are you sure want to delete?')
// </script>
// ";
$id  = $_GET['id'];

$delete = "DELETE FROM `tbl_students` WHERE id = ?";
$delete_stm = $db->prepare($delete);
$delete_stm->bind_param('i', $id);
// $delete_stm->execute();

if ($delete_stm->execute()) {
      echo "<script>alert('Record delete successfully!');</script>";
      header("Location: ./student.php");
} else {
      echo "<script>alert('Error: " . $delete_stm->error . "');</script>";
}
