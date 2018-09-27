<?php

    include("koneksi.php");
    
    $active = $_GET['active'];

    $search = mysqli_query($con, "SELECT status FROM register WHERE active='".$active."'") or die(mysqli_connect_error());
    $row = mysqli_fetch_assoc($search);

    if($row['status']=='0'){
        mysqli_query($con, "UPDATE register SET status='1' WHERE active='".$active."' ") or die(mysqli_connect_error());
        echo 'Udah active';
    }else{
        echo "Belum aktif";
    }
?>