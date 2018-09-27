<?php
  include('../koneksi.php');

  if(isset($_POST['del'])){
    session_start();
    $id     = $_SESSION['id'];
    $cek=mysqli_query($con, "SELECT id_user from register where id_user ='$id'")or die(mysqli_connect_error());

    if(mysqli_num_rows($cek) == 0){
      echo 'User not found';
    }else{
      $del=mysqli_query($con, "DELETE FROM register WHERE id_user='$id'") or die(mysqli_connect_error());
      if ($del) {
        echo "<script>alert('Account Deleted')";
        header('Location: ../login/login.php');
      }else{
        echo "<script>alert('Gak kehapus')";
      }
    }
  }
  
 ?> 