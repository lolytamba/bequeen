<?php
    if(isset($_POST['edit']))
    {
        include('../koneksi.php');

        $id=$_POST['id'];
        $message=$_POST['fd'];
   
        $update=mysqli_query($con,"UPDATE feedback SET id='$id', message='$message'") or die (mysqli_connect_error());
     
        if($update){
            echo '<script language="javascript">alert("Feedback Updated!"); document.location="read.php";</script>';
        }else{
            echo '<script language="javascript">alert("Feedback failed!"); document.location="read.php";</script>';
        }
    }
?>