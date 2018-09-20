<?php

    include("../koneksi.php");
    
    $email = $_GET['email'];
    $active = $_GET['active'];

    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['active']) && !empty($_GET['active'])){
        $email = mysqli_real_escape_string($con, $email);
        $active = mysqli_real_escape_string($con, $active);    

        $search = mysqli_query($con, "SELECT email, active, status FROM register WHERE email='".$email."' AND active='".$active."' AND status='0'") or die(mysqli_sconnect_error());
        $match = mysqli_num_rows($search);

        echo $match;

        if($match > 0){
            mysqli_query($con, "UPDATE register SET status='1' WHERE email='".$email."' AND active='".$active."' AND status='0'") or die(mysqli_connect_error());
            echo '<div class="statusMsg">Your account has be actived, you can now login</div>';
            header('location: login/login.php');
        }else{
            echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
        }
    }else{
        echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
    }
?>