<?php
   // $sMsg="";
    if(isset($_POST['signin'])){
        
    include('koneksi.php');
    // $sMsg         ="";
    $email        = $_POST['email'];
    $password     = $_POST['password'];

    // $sql = mysqli_query($con, "SELECT password FROM register WHERE email='$email'") or die(mysqli_connect_error());

    // if(mysqli_num_rows($sql) ==0){
    //     $sMsg = "User not valid";  
    // }
    // else{
    //     $row = mysqli_fetch_array($sql);
    //     $passwordhash=htmlspecialchars(strip_tags($password));

    //     if(password_verify($password,$row['password'])){  
    //         $sql2 = mysqli_query($con, "SELECT id_user FROM register WHERE email='$email'")or die(mysqli_connect_error());
    //         session_start();
    //         $row = mysqli_fetch_array($sql);
    //         $id = $row['id_user'];
    //        // return true;    
    //         //$sMsg = "Password matched - Login Succesfull";
    //         echo 'Password matched - Login Succesfull';
    //     }else{
    //         //$sMsg = "Password not matched - Login Failed";
    //         // return false;
    //         echo 'Gagal Login';
    //     }
    // }

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
