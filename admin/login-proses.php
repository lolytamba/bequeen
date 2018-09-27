<?php
    if(isset($_POST['signin'])){
       
        include('../koneksi.php');
        $username    = $_POST['username'];
        $password = $_POST['password'];
        echo $username;
        
            $sql="SELECT password FROM admin WHERE username='$username'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result); //data diambil trus jadi bentuk array

            if(password_verify($password,$row['password'])){
                $sql="SELECT * FROM admin WHERE username='".$username."'";
                $result=mysqli_query($con,$sql); //jalanin sql
                $row=mysqli_fetch_assoc($result);

                session_start();
                $_SESSION["id"] = $row['id_user'];
                $_SESSION["admin"] = $username;
              

                header("Location: admin.php");
            }else{
                echo "<script>alert('password atau email salah ')
                            window.history.back()</script>";
            }
        }

        

?>