<?php
  include('../koneksi.php');
  
  if(isset($_POST['booking'])){  
    if($_POST['SP'] == 'Service'){
      if($_POST['Ser']=='hair'){
        $SerPac = $_POST['SerPac1'];
      }else if($_POST['Ser']=='nail'){
        $SerPac = $_POST['SerPac2'];
      }else if($_POST['Ser']=='makeup'){
        $SerPac = $_POST['SerPac3'];
      }else {
        $SerPac = "tidak diketahui";
      }
      $Ser = $_POST['Ser'];
    }else if($_POST['SP'] == 'Paket'){
      $SerPac = $_POST['SerPac4'];
      $Ser = "-";
    }else{
      $SerPac = "kesalahan pada SP";
    }

    session_start();
    $id = $_SESSION['id'];

    $sql="INSERT INTO test_book(user,SP,Ser,SerPac,arrival,bookDate) VALUES('$id','".$_POST["SP"]."','".$Ser."','".$SerPac."','".$_POST["arrival"]."','".$_POST["bookDate"]."')";
    $result=mysqli_query($con,$sql);
    
    $sql ="SELECT *FROM test_book WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    $data=mysqli_fetch_assoc($result); 
    
    $_SESSION["SP"] = $data['SP'];
    $_SESSION["Ser"] = $data['Ser'];
    $_SESSION["SerPac"] = $data['SerPac'];
    $_SESSION["arrival"] = $data['arrival'];
    $_SESSION["bookDate"] = $data['bookDate'];


    if ($result) {
      echo "<script>alert('Booking Inserted!')
          window.history.back()</script>";
    }
  }
 ?>
