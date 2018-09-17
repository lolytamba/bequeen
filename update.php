<?php
    if(isset($_POST['save'])){
        include('koneksi.php');

        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $active =$_GET['active'];

        $update = mysqli_query($con, "UPDATE register SET nama ='$nama', no_hp='$no_hp', email='$email', password='$password', WHERE active='$active'") or die(mysqli_error($con));
        
        if($update){
            echo 'Data berhasil di diedit!'; 
            echo '<a href="index.php">Kembali</a>';
        }else{
            echo 'Gagal mengedit data!';
            echo '<a href="index.php">Kembali</a>';
        }
    }else{
        echo '<script>window.history.back()</script>';
    }

?>