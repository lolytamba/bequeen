<?php
    if(isset($_POST['edit']))
    {
        include('../koneksi.php');
        session_start();

        $id  = $_POST['id'];
        if($_POST['Ser']=='hair'){
          $SerPac = $_POST['SerPac1'];
        }else if($_POST['Ser']=='nail'){
          $SerPac = $_POST['SerPac2'];
        }else if($_POST['Ser']=='makeup'){
          $SerPac = $_POST['SerPac3'];
        }

        $arrival    =$_POST['arrival'];
        $bookDate   =$_POST['bookDate'];

        $update=mysqli_query($con,"UPDATE test_book SET id='$id', SerPac='$SerPac', arrival='$arrival', bookDate='$bookDate'") or die (mysqli_connect_error());
        if($update){
            echo '<script language="javascript">alert("Booking Updated!"); document.location="read.php";</script>';
        }else{
            echo '<script language="javascript">alert("Booking failed!"); document.location="read.php";</script>';
        }
    }
?>