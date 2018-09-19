<?php
    if(isset($_POST['signin'])){
        
    include('../koneksi.php');
    $sMsg         ="";
    $email        = mysqli_escape_string($con, $_POST['email']);
    $password     = mysqli_escape_string($con, $_POST['password1']);
    $active       = $_GET['active'];

    $search = mysqli_query($con, "SELECT email, active, status FROM register WHERE email='".$email."' AND active='".$active."' AND status='0'") or die(mysqli_connect_error());

    $match = mysqli_num_rows($search);
    
    if($match > 0){
        $sMsg = 'Login Complete! Thanks';
       session_start();
       $_SESSION["id"] = $id;
    }else{
        $sMsg = 'Login Failed! Please make sure that you enter the correct details and that you have activated your account.';
    }
}
?>
