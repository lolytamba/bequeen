<?php
  include('../koneksi.php');
  session_start();
  if($_SESSION["email"]){  
    $id = $_SESSION['id'];
    $nama = $_SESSION['nama'];
    $email = $_SESSION['email'];
    $phone =$_SESSION['phone'];
    $status = $_SESSION['status'];
?>
<!DOCTYPE html>
<html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="vendor/boostrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/BeQueen.css">
<link rel="stylesheet" type="text/css" href="../css/w3.css">

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a href="profile.php"class="w3-bar-item w3-button w3-wide">Hi, <?php echo $nama;?>!</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="../index.php" class="w3-bar-item w3-button">HOME</a>
      <a href="../Services.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="../login/logout.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGOUT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">SERVICES</a>
  
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="#login" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home"></header>


<!-- Profile Section -->
<div class="w3-container w3-light-blue" style="padding:128px 16px" id="about">
    <div class="container">
        <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
             <a href="edit.html" ></a>
              <a href="edit.html" ></a>
         <br>
        </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title" style="text-align: center">PROFILE</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3 " style="text-align: center"> <img src="qw.jpg" height="125" width="125"> </div>
                  
                  <form action="delete.php" method="post" name="del" id="delete" onsubmit="return cekform()">
                  <div class=" col-md-9 col-lg-9 "> 
                    <table class="table table-user-information">
                      <tbody>

                        <tr>
                          <td>Full Name:</td> 
                          <td><input id="name"  name="nama" value="<?php echo $nama ?>" size ="30" disabled></td>
                        </tr>

                        <tr>
                          <td>Email</td>
                          <td><input id="email" name="email" value="<?php echo $email ?>" size ="30" disabled></td>
                        </tr>

                        <tr>
                          <td>Phone Number</td>
                          <td><input id="no_hp"  name="no_hp" value="<?php echo $phone ?>" size ="30" disabled></td>
                        </tr>

                        <tr>
                          <td>Status</td>
                          <td><input id="status"  name="status" value="<?php if($status =='1'){
                                  echo 'Active';
                                }
                                ?>" size ="30" disabled>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <a href="updateProfile.php" class="btn btn-primary">Edit</a>
                    <button type="submit" class="submit" id="btnDelete" name="del">Delete</button>
                    <!-- <a href="updateProfile.php" class="btn btn-primary">Edit</a>
                    <a href="delete.php" class="btn btn-primary">Delete</a> -->
                  </div>
                  </form>  
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
  
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a title="BeQueen" href = "../index.php" target="_blank" class="w3-hover-text-green">BeQueen</a></p>
</footer>
 
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/boostrap/dist/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>
</html>
<?php
  }else{
    echo 'sudahi saja';
  }
?>
