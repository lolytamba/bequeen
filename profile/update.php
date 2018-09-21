<?php
    include('../koneksi.php');

    $id             =$_POST['id'];
    $phone          =$_POST['no_hp'];
    $email          =$_POST['email'];
    $password       =$_POST['password'];
    $password_hash  = password_hash($password, PASSWORD_DEFAULT);
    
    $update = mysqli_query($con, "UPDATE register SET id_user='$id', no_hp='$phone', password='$password_hash' WHERE email='$email'");
    if($update){
        echo 'Profile updated';
        header('location : profile.php');
    }else{
        echo 'Failed updated profile';
    }
?>
