<?php
  include('../koneksi.php');
  if(isset($_POST['booking'])){  
    echo '1';
    session_start();
    $id = $_SESSION['id'];

    $sql="INSERT INTO test_book(id,Ser,SerPac,arrival,bookDate) VALUES('".$_POST["id"]."','".$_POST["Ser"]."','".$_POST["SerPac"]."','".$_POST[arrival]."','".$_POST["bookDate"]."')";
    if (mysqli_query($con,$sql)) {
      echo "Data Inserted";
    }
  }
 ?>
