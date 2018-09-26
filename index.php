<!DOCTYPE html>
<!-- cek -->
<html>
<title>BeQueen</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/BeQueen.css">
<link rel="stylesheet" type="text/css" media="screen" href="vendor/boostrap/dist/css/bootstrap.min.css" />

<body>
<?php 
session_start();
if($_SESSION['id']){
  $id = $_SESSION['id']; // buat dapat data id, pake echo ya kalau mau nampilin
  $email = $_SESSION["email"]; //email itu variabelnya buat nampung session email, trus dipake disini buat ambil datanya
  $nama = $_SESSION["nama"];
  $phone =$_SESSION['phone'];
  
?>
 <!-- Navbar (sit on top) -->
 <div class="w3-top">
  <div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a href="../profile/profile.php" class="w3-bar-item w3-button w3-wide">Hi, <?php echo $nama;?> </a> 
  
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">HOME</a>
      <a href="#service" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
      <a href="#packet" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="../login/logout.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGOUT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<?php
}else{
?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
<div class="w3-bar w3-blue w3-card" id="myNavbar">
  <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
  <!-- Right-sided navbar links -->
  <div class="w3-right w3-hide-small">
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="#service" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
    <a href="#packet" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
    <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="login/login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGIN</a>
  </div>
  <!-- Hide right-floated links on small screens and replace them with a menu icon -->

  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>
<?php }
?>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="#service" onclick="w3_close()" class="w3-bar-item w3-button">SERVICES</a>
  <a href="#service" onclick="w3_close()" class="w3-bar-item w3-button">BOOK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="./login/login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home"></header>

<!-- Welcome Section -->
<div class="w3-container" id="home-tengah" style = "padding-top: 100px">
  <div class="w3-row-padding" >
    <table>
      <td><img src="images/welcome.jpg" alt=""></td>
      <td style="padding: center">
        <h1 class="w3-center w3" id="welcome">WELCOME</h1>
        <h3 class="w3-center w3-large">TO BEQUEEN EXPERIENCE</h3>
        <h3 class="w3-center w3-large">EVERY WOMEN IS QUEEN</h3>
      </td>
      </table>
  </div>
</div>

<!-- Services Section - "Services" -->
<div class="w3-container w3-light-grey" id="service" style = "padding-top: 60px">
    <div class="w3-row-padding">
    <div class="w3-col m6 ourServiceText" >
      <h3>Our Services</h3>
      <p>1. Hair Styling<br>2. Nail Art<br>3. Make Up Studio</p>
      <p><a href="#services" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Services</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="images/services.jpg" width="800" height="394">
    </div>
</div>  

<!-- Our Services Section -->
<div class="w3-container" style="padding:128px 16px" id="services">
  <h3 class="w3-center">Our Services</h3>
  <p class="w3-center w3-large">What we've done for our customers</p>
  <div class="w3-row-padding" style="margin-top:64px">

    <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 30px">
      <div class="w3-card">
        <img src="images/hair.jpg" alt="Hair" style="width:100%; height: 235px">
        <div class="w3-container">
          <h3>Hair Styling</h3>
          <p class="w3-opacity">Bee Queen</p>
          <p>A hairstyle, hairdo, or haircut refers to the styling of hair, usually on the human scalp. <br>Sometimes, this could also mean an editing of facial or body hair. </p>
          <p><button onclick="document.getElementById('hair').style.display='block'" class="w3-button w3-blue w3-padding-large w3-block" ><i class="th"> </i>View</a></button></p>  
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 140px">
      <div class="w3-card">
        <img src="images/nail art.jpg" alt="Jane" style="width:100%; height: 235px;">
        <div class="w3-container">
          <h3>Nail Art</h3>
          <p class="w3-opacity">Bee Queen</p>
          <p>Nail art is a creative way to paint, decorate, enhance, and embellish the nails. It is a type of artwork that can be done on fingernails and toenails, usually after manicures or pedicures.</p>
          <p><button onclick="document.getElementById('nail').style.display='block'" class="w3-button w3-blue w3-padding-large w3-block" ><i class="th"> </i>View</a></button></p>  
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 120px">
      <div class="w3-card">
        <img src="images/makeup.jpg" alt="Nail" style="width:100%; height: 235px">
        <div class="w3-container">
          <h3>Make Up</h3>
          <p class="w3-opacity">Bee Queen</p>
          <p>Cosmetics (such as lipstick, mascara, and eye shadow) are substances or products used to enhance or alter the appearance of the face or fragrance and texture of the body.</p>
          <p><button onclick="document.getElementById('makeup').style.display='block'" class="w3-button w3-blue w3-padding-large w3-block" ><i class="th"> </i>View</a></button></p>  
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Menu Hair -->
<div id="hair" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-light-blue w3-display-container">
      <span onclick="document.getElementById('hair').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1 style="font-size: 25px">Straight Hair $20</h1>
    </div>
    <div class="w3-container">
      <h5>Straight Hair is very hard to damage, and also difficult to curl <b> </b></h5>
    </div>
    <div class="w3-container w3-light-blue">
      <h1 style="font-size: 25px">Wavy Hair $30<h1>
    </div>
    <div class="w3-container">
      <h5>Wavy Hair has a texture and sheen between straight and curly hair and is likely to become fizzy<b> </b></h5>
    </div>
    <div class="w3-container w3-light-blue">
      <h1 style="font-size: 25px">Curly Hair $40</h1>
    </div>
    <div class="w3-container">
      <h5>The pattern of the hair resembles an 'S' shape and sometimes a 'Z' shape<b> </b></h5>
    </div>
  </div>
</div>

<!-- Menu Nail -->
<div id="nail" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-light-blue w3-display-container">
      <span onclick="document.getElementById('nail').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1 style="font-size: 25px">Digi World Nail Art $50</h1>
    </div>
    <div class="w3-container">
      <h5>The producedure is automated, and therefore it takes very less time to get the desired nail art look. <b> </b></h5>
    </div>
    <div class="w3-container w3-light-blue">
      <h1 style="font-size: 25px">Airbrush Nail Art Technique  $60</h1>
    </div>
    <div class="w3-container">
      <h5>Airbrush machines are used for drizzling paint on nails. These are combined witch stencils or stickers to get desired look.<b></b></h5>
    </div>
    <div class="w3-container w3-light-blue">
      <h1 style="font-size: 25px">Sharpie Nail Art $70</h1>
    </div>
    <div class="w3-container">
      <h5>Sharpie nails have the resemblance to watercolor paintings, and they actually look lovely.<b> </b></h5>
    </div>
  </div>
</div>

<!-- Menu Makeup -->
<div id="makeup" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
      <div class="w3-container w3-light-blue w3-display-container">
        <span onclick="document.getElementById('makeup').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
        <h1 style="font-size: 25px">Natural Makeup $100</h1>
      </div>
      <div class="w3-container">
        <h5>This style is made for women who just want a light enhancement from their.</h5>
      </div>
      <div class="w3-container w3-light-blue">
        <h1 style="font-size: 25px">Bridal Makeup $110</h1>
      </div>
      <div class="w3-container">
        <h5>Bridal makeup is usually pretty soft and natural to mimic the soft sophistication of the bride's dress.</h5>
      </div>
      <div class="w3-container w3-light-blue">
        <h1 style="font-size: 25px">Gothic Makeup $120</h1>
      </div>
      <div class="w3-container">
        <h5>Gothic makeup is one of the most extreme styles of makeup you could come across.</h5>
      </div>
    </div>
  </div>
  

<!-- Packet Section -->
<div class="w3-container w3-center w3-light-blue" style="padding:128px 16px" id="packet">
  <h3>BeQueen's Packet</h3>
  <p class="w3-large">Choose a packet that you want to book.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>Hair Styling</b>Straight Hair</li>
        <li class="w3-padding-16"><b>Nail Art</b> Digi World</li>
        <li class="w3-padding-16"><b>Make up</b>Natural</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 210</h2>
          <span class="w3-opacity">per packet</span>
        </li>
        <li class="w3-lighligt-grey w3-padding-24">
          <a href="Booking/booking.php" class="w3-button w3-blue w3-padding-large"><i class="th"></i> Book</a>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>Hair Styling</b>Wavy</li>
        <li class="w3-padding-16"><b>Nail Art</b> Airbrush NailArt Technique</li>
        <li class="w3-padding-16"><b>Make up</b>Bridal</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 500</h2>
          <span class="w3-opacity">per packet</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="Booking/booking.php" class="w3-button w3-blue w3-padding-large"><i class="th"></i> Book</a>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>Hair Styling</b>Curly</li>
        <li class="w3-padding-16"><b>Nail Art</b> Sharpie</li>
        <li class="w3-padding-16"><b>Make up</b>Gothic</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 350</h2>
          <span class="w3-opacity">per packet</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="Booking/booking.php" class="w3-button w3-blue w3-padding-large"><i class="th"></i> Book</a>
        </li>
      </ul>
    </div>
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
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i>  Email: Bequeen@hair-beauty.com</p>
      <br>
      <form action="/action_page.php" target="_blank">
        <textarea class="w3-input w3-border" rows="5" id="message" placeholder="Message"></textarea>
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
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a title="BeQueen" target="_blank" class="w3-hover-text-green">BeQueen</a></p>
</footer>

<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/boostrap/dist/js/bootstrap.min.js"></script>
 
</body>
</html>