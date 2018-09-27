<?php
  include('../koneksi.php');
    if(isset($_POST['send'])){  
        session_start();
        $id = $_SESSION['id'];
        
        $sql="INSERT INTO feedback(user,message) VALUES('$id','".$_POST["message"]."')";
        if (mysqli_query($con,$sql)) {
          echo "<script>alert('Feedback Inserted!')
          window.history.back()</script>";
        }
    } 
    ?>
    
   