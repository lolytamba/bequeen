<?php

    include("../koneksi.php");
    
    $email = $_GET['email'];
    $active = $_GET['active'];

    $search = mysqli_query($con, "SELECT status FROM register WHERE email='".$email."' AND active='".$active."'") or die(mysqli_connect_error());
    $row = mysqli_fetch_assoc($search);

    if($row['status']=='0'){
        mysqli_query($con, "UPDATE register SET status='1' WHERE email='".$email."' AND active='".$active."' ") or die(mysqli_connect_error());
        echo 'Your account has be actived, you can now login!';
    }else{
        echo 'The url is either invalid or you already have activated your account.';
    }
?>