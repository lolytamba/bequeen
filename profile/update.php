<?php
    include('../koneksi.php');

    if(isset($_POST['update'])){
        $nama           =$_POST['nama'];
        $phone          =$_POST['no_hp'];
        $email          = $_POST['email'];
        $password       =$_POST['password'];
        $password_hash  = password_hash($password, PASSWORD_DEFAULT);

        $update = mysqli_query($con, "UPDATE register SET nama='$nama', no_hp = '$phone', password = '$password_hash' where email = '$email' ");
        if($update){
            echo 'Profile updated';
        }else{
            echo 'Failed updated profile';
        }
    }
?>
