<!DOCTYPE html>
<html>
<title>BeQueen</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="BeQueen.css">

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">HOME</a>
     
      <a href="#service" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="#login" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGIN</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Services Section - "Services" -->
<div class="w3-container w3-light-grey" id="service"  style = "padding-top: 100px"  >
  <div class="w3-row-padding">
    <div class="w3-col m6 ourServiceText" >
      <h3>Our Services</h3>
      <p>1. Hair Styling<br>2. Nail Art<br>3. Make Up Studio</p>
      <p><a href="#team" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Services</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="services.jpg" width="800" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">Our Services</h3>
  <p class="w3-center w3-large">What we've done for our customers</p>
  <div class="w3-row-padding" style="margin-top:64px">

    <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 30px">
      <div class="w3-card">
        <img src="hair.jpg" alt="Hair" style="width:100%; height: 235px">
        <div class="w3-container">
          <h3>Hair Styling</h3>
          <p class="w3-opacity">Bee Queen</p>
          <p>A hairstyle, hairdo, or haircut refers to the styling of hair, usually on the human scalp. <br>Sometimes, this could also mean an editing of facial or body hair. </p>
          <p><button class="w3-button w3-light-grey w3-block">1</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 140px">
      <div class="w3-card">
        <img src="nail art.jpg" alt="Jane" style="width:100%; height: 235px;">
        <div class="w3-container">
          <h3>Nail Art</h3>
          <p class="w3-opacity">Bee Queen</p>
          <p>Nail art is a creative way to paint, decorate, enhance, and embellish the nails. It is a type of artwork that can be done on fingernails and toenails, usually after manicures or pedicures.</p>
          <p><button class="w3-button w3-light-grey w3-block">2</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom" style="margin-left: 120px">
      <div class="w3-card">
        <img src="makeup.jpg" alt="Nail" style="width:100%; height: 235px">
        <div class="w3-container">
          <h3>Make Up</h3>
          <p class="w3-opacity">Bee Queen</p>
          
          <p>Cosmetics (such as lipstick, mascara, and eye shadow) are substances or products used to enhance or alter the appearance of the face or fragrance and texture of the body.</p>
          <p><button class="w3-button w3-light-grey w3-block">3</button></p>
        </div>
      </div>
    </div>
  </div>
</div>
