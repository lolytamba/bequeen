<!DOCTYPE html>
<html>
<title>BeQueen</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/BeQueen.css">

<body>

<?php 
session_start();
if($_SESSION['id']){
  $id = $_SESSION['id']; 
  $email = $_SESSION["email"];
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
      <a href="Services.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
      <a href="Booking/booking.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="login/logout.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGOUT</a>
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
  <a href="#home" class="w3-bar-item w3-button w3-wide">BeQueen</a>
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

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home"></header>

<!-- Our Services Section -->
<div class="w3-container" id="team">
    <h3 class="w3-center">Our Services</h3>
    <p class="w3-center w3-large">What we've done for our customers</p>
    <div class="w3-row-padding" style="padding-bottom: 50px">
        <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 30px">
        <div class="w3-card">
            <img src="images/hair.jpg" alt="Hair" style="width:100%; height: 230px">
            <div class="w3-container">
            <h3>Hair Styling</h3>
            <p class="w3-opacity">Bee Queen</p>
            <p>A hairstyle, hairdo, or haircut refers to the styling of hair, usually on the human scalp. <br>Sometimes, this could also mean an editing of facial or body hair. </p>
            <p><button onclick="document.getElementById('hair').style.display='block'" class="w3-button w3-blue w3-padding-large w3-block" ><i class="th"> </i>View</a></button></p>  
            </div>
        </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 90px">
        <div class="w3-card">
            <img src="images/nail art.jpg" alt="Jane" style="width:100%; height: 200px;">
            <div class="w3-container">
            <h3>Nail Art</h3>
            <p class="w3-opacity">Bee Queen</p>
            <p>Nail art is a creative way to paint, decorate, enhance, and embellish the nails. It is a type of artwork that can be done on fingernails and toenails, usually after manicures or pedicures.</p>
            <p><button onclick="document.getElementById('nail').style.display='block'" class="w3-button w3-blue w3-padding-large w3-block" ><i class="th"> </i>View</a></button></p>  
            </div>
        </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 90px">
        <div class="w3-card">
            <img src="images/makeup.jpg" alt="Nail" style="width:100%; height: 200px">
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
            <h5>Straight Hair is very hard to damage, and also difficult to curl</h5>
          </div>
          <div class="w3-container w3-light-blue">
            <h1 style="font-size: 25px">Wavy Hair $30</h1>
          </div>
          <div class="w3-container">
            <h5>Wavy Hair has a texture and sheen between straight and curly hair and is likely to become fizzy</h5>
          </div>
          <div class="w3-container w3-light-blue">
            <h1 style="font-size: 25px">Curly Hair $40</h1>
          </div>
          <div class="w3-container">
            <h5>The pattern of the hair resembles an 'S' shape and sometimes a 'Z' shape</h5>
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
            <h1 style="font-size: 25px">Airbrush Nail Art Technique $60</h1>
          </div>
          <div class="w3-container">
            <h5>Airbrush machines are used for drizzling paint on nails. These are combined witch stencils or stickers to get desired look.<b> </b></h5>
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

<?php
if($_SESSION['id']){
?>

<!-- Contact Section -->
<div class="w3-container w3-light-blue" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <div class="w3-row-padding">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Yogyakarta, Indonesia</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +0274 67890</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i>  Email: Bequeen@hair-beauty.com</p>
      <br>
      <form action="feedback/create.php" method="post">
        <textarea class="w3-input w3-border" rows="5" id="message" name="message" placeholder="Your feedback is important to us..."></textarea>
        <p>
          <button class="w3-button w3-black" type="submit" name="feedback">
            <i class="fa fa-paper-plane"></i> SEND FEEDBACK
          </button>
        </p>
      </form>
      <form action="feedback/read.php" method="post">
          <button class="w3-button w3-black" type="submit" name="view" style="margin-left: 300px; margin-bottom: 200px">
              <i class="fa fa-paper-plane"></i> VIEW FEEDBACK
          </button>
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

<?php
  }else{ 
?>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <div class="w3-row-padding">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Yogyakarta, Indonesia</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +0274 67890</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i>  Email: Bequeen@hair-beauty.com</p>
      <br>
    </div>
    <div class="w3-half">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-max" style="width:100%;height:510px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0994412282853!2d110.41331831525825!3d-7.779280194393621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1fb2f2b45%3A0x20986e2fe9c79cdd!2sUniversitas+Atma+Jaya+Yogyakarta+-+Kampus+3+Gedung+Bonaventura+Babarsari!5e0!3m2!1sid!2sid!4v1536506939386" style="width:100%;height:510px;"></iframe>
      </div>
    </div>
  </div>
</div>

<?php
  }
?>
      
<!-- Footer -->
<footer class="w3-center w3-black" style="padding-top: 20px">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a title="BeQueen" target="_blank" href="index.php" class="w3-hover-text-blue">BeQueen</a></p>
</footer>
 
<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-blue";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
