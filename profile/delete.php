<?php
  include('../koneksi.php');

  $id = $_SESSION['id'];
  $sql="DELETE FROM register WHERE id_user='$id'";
  if (mysqli_query($con,$sql)) {
    echo "Data Deleted";
  }
 ?> 