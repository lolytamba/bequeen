<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>
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
      <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
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
<form action="login/login-proses.php" method="post" id="signin" name ="signin" onsubmit="return cekform2()">
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

  <!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Send us a Message</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Yogyakarta, Indonesia</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +0274 67890</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: Bequeen@hair-beauty.com</p>
      <br>
      <form action="/action_page.php" target="_blank">
        <textarea class="w3-input w3-border" rows="5" id="message" placeholder="Message"  ></textarea>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
    <div class="w3-half">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-max" style="width:100%;height:510px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0994412282853!2d110.41331831525825!3d-7.779280194393621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1fb2f2b45%3A0x20986e2fe9c79cdd!2sUniversitas+Atma+Jaya+Yogyakarta+-+Kampus+3+Gedung+Bonaventura+Babarsari!5e0!3m2!1sid!2sid!4v1536506939386" style="width:100%;height:510px;"></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="login.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a title="BeQueen" target="_blank" class="w3-hover-text-green">BeQueen</a></p>
</footer>

<script src="../jquery/dist/jquery.min.js"></script>
<script src="../boostrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script  src="../js/index.js"></script>
<script  src="../js/style.js"></script>

</body>
</html>
