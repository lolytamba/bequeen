<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/BeQueen.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="vendor/boostrap/dist/css/bootstrap.min.css" /> -->

</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">BeQueen</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="../index.php" class="w3-bar-item w3-button">HOME</a>
        <a href="../Services.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
        <a href="../index.php#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
        <a href="../index.php#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGIN</a>
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

    <a href="../index.phpindex.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
    <a href="../index.phpServices.php" onclick="w3_close()" class="w3-bar-item w3-button">SERVICES</a>
    <a href="../index.php#pricing" onclick="w3_close()" class="w3-bar-item w3-button">BOOK</a>
    <a href="../index.php#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>

  </nav>

<div class="cont" style="margin-top: 100px; z-index: 0;">
<form action="login-proses.php" method="post" id="signin" name ="signin" onsubmit="return cekform2()">
    <div class="form sign-in" style="padding-top: 100px">
      <h2>Welcome back,</h2>
      <label>
        <span>Email</span>
        <input type="email" name="email" id="email" value="" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" id="password" value=""/>
      </label>
      <p class="forgot-pass">Forgot password?</p>
      <button type="submit" class="submit" name="signin" id="btnSubmit1">Sign In</button>
  </div>
  </form>

    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">
              <h2>New here?</h2>
              <p>Sign up and discover great amount of new opportunities!</p>
            </div>

            <div class="img__text m--in">
              <h2>One of us?</h2>
              <p>If you already has an account, just sign in. We've missed you!</p>
            </div>

            <div class="img__btn">
              <span class="m--up">Sign Up</span>
              <span class="m--in">Sign In</span>
            </div>
        </div>
    
        <form action="register-proses.php" method="post" id="signup" name="signup" onsubmit="return cekform()">
        <div class="form sign-up" style="padding-top: 110px">
            <h2 style="margin-top:-30px">Time to feel like home,</h2>
            <label>
              <input type="text" name="name" id="name" value="" placeholder="Full Name"/>
            </label>

            <label>
              <input type="number" name="no_hp" id="no_hp" value="" placeholder="No. Handphone" />
            </label>

            <label>
              <input type="email" name = "email" id="email" value="" placeholder="Email" />
            </label>

            <label>   
                <input type="password" name="password" id="pass" onchange="cekPassword()" value="" placeholder="Password" />
            </label>

            <label>
                <input type="password" name="confirm" id="confirm" value="" onchange="cekPassword()" placeholder="Confirm Password" />
            </label>

            <button type="submit" class="submit" id="btnSubmit" name="register">Sign Up</button>
            <span id="errorMsg" style="display: none"></span>
        </div>
      </form>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black" style="padding-top: 30px">
  <a href="login.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a title="BeQueen" href = "../index.php" target="_blank" class="w3-hover-text-blue">BeQueen</a></p>
</footer>

<script src="../jquery/dist/jquery.min.js"></script>
<script src="../boostrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script  src="../js/index.js"></script>
<script  src="../js/style.js"></script>

</body>
</html>
