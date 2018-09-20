<?php
  include('../koneksi.php');
  $sql="INSERT INTO test_book(SerPac,arrival,bookDate) VALUES('".$_POST["SerPac"]."','".$_POST[arrival]."','".$_POST["bookDate"]."')";
  if (mysqli_query($con,$sql)) {
    echo "Data Inserted";
  }
 ?>
