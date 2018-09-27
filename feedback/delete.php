<?php

if(isset($_GET['id']))
{
    include('../koneksi.php');
    $id=$_GET['id'];
    $cek=mysqli_query($con,"SELECT id FROM feedback WHERE id='$id'") or die (mysqli_connect_error());

    if(mysqli_num_rows($cek)==0){
        echo $id;
    }
    else
    {
        $del=mysqli_query($con,"DELETE FROM feedback WHERE id='$id'");

        if($del){
            echo '<script language="javascript">alert("Feedback Deleted!"); document.location="read.php";</script>';
        }else{ 
            echo '<script language="javascript">alert("Delete failed!"); document.location="read.php";</script>';
        }
    }

}
?>