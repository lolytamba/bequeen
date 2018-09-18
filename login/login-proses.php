<?php
    if(isset($_POST['signin'])){
        
    include('koneksi.php');
    $sMsg         ="";
    $email        = $_POST['email'];
    $password     = $_POST['password'];

    if(isset($email) && !empty($email) AND isset($password) && !empty($password)){
        $email = mysqli_escape_string($email);
        $password = mysqli_escape_string($password);
    }else{
        $search = mysqli_query($con, "SELECT email, active, status FROM register WHERE email='".$email."' AND active='".$active."' AND status='0'") or die(mysqli_error());
        $match = mysqli_num_roms($search);
    }

    if($match > 0){
        $sMsg = 'Login Complete! Thanks';
       session_start();
       $_SESSION["id"] = $id;
    }else{
        $sMsg = 'Login Failed! Please make sure that you enter the correct details and that you have activated your account.';
    }
}
?>
