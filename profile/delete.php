<?php
  include('../koneksi.php');

  if($isset($_POST['del'])){
    $_SESSION["id"] = $row['id_user'];
    $sql="DELETE FROM register WHERE id_user='$id'";
    if (mysqli_query($con,$sql)) {
      echo "Data Deleted";
    }
  }
  
 ?> 