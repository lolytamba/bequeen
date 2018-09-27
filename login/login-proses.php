<?php
    if(isset($_POST['signin'])){
       
        include('../koneksi.php');
        $email    = $_POST['email'];
        $password = $_POST['password'];

        $sql2="SELECT status FROM register WHERE email='".$email."'";
        $result2=mysqli_query($con,$sql2);
        $row2=mysqli_fetch_assoc($result2);
    

       if(mysqli_num_rows($result2) == 0){
            echo '<script language="javascript">alert("Your account not registered yet!"); document.location="login.php";</script>';
       }else{

                

            if($row2['status']=='1'){
                $sql="SELECT password FROM register WHERE email='".$email."'";
                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($result); 

                if(password_verify($password,$row['password'])){
                    $sql="SELECT * FROM register WHERE email='".$email."'";
                    $result=mysqli_query($con,$sql); //jalanin sql
                    $row=mysqli_fetch_assoc($result);

                    session_start();
                    $_SESSION["id"] = $row['id_user'];
                    $_SESSION["email"] = $row['email'];
                    $_SESSION["nama"] = $row['nama'];
                    $_SESSION["phone"] = $row['no_hp'];
                    $_SESSION["status"] = $row['status'];

                    header("Location: ../Booking/booking.php");
                }else{
                    echo "<script>alert('Password Not Match.')
                                window.history.back()</script>";
                }
            }
            else{
                echo "<script>alert('Verify Your Email Address')";
            }        
        } 
    }
?>

 
