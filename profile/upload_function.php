
<?php
include('../koneksi.php');

if(isset($_POST['uploadfilesub'])) {
  session_start();
  $nama           =$_POST['nama'];
  $phone          =$_POST['no_hp'];
  $email          =$_SESSION['email'];
  echo $email;
  $filename = $_FILES['uploadfile']['name'];
  $filetmpname = $_FILES['uploadfile']['tmp_name'];
  $folder = 'terupload/';

  move_uploaded_file($filetmpname, $folder.$filename);
  $update = mysqli_query($con, "UPDATE register SET  foto='$filename' where email='$email' ");

  if($update){
    $_SESSION['foto'] = $filename;
    header("Location: profile.php");
  }
    
    else{
        echo 'Failed updated profile';
    }
}
?>
