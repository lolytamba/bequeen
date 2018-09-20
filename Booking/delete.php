<?php
include 'koneksi.php';
$sql="DELETE FROM test_book WHERE id='".$_POST["id"]."'";
if (mysqli_query($con,$sql)) {
  echo "Data Deleted";
}
 ?>
