<!DOCTYPE html>
<html>
<title>Edit Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/BeQueen.css">
<link rel="stylesheet" type="text/css" media="screen" href="vendor/boostrap/dist/css/bootstrap.min.css" />

<body>

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
      <a href="Login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGIN</a>
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
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="#service" onclick="w3_close()" class="w3-bar-item w3-button">SERVICES</a>
  <a href="#service" onclick="w3_close()" class="w3-bar-item w3-button">BOOK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="Login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home"></header>

<!-- Edit Section -->
<div class="w3-container w3-light-grey" id="service" style = "padding-top: 60px">
    <div class="w3-row-padding">
    <div class="w3-col m6 ourServiceText" >

    <form action="update.php" method="post">
            <input type="hidden" name="id_user" value="<?php echo $id; ?>">
            <table cellpading="3" cellspacing="0">
                <td><strong>Edit Profile</strong></td>
                
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input id="nama" type="text" name="nama" size = "40" required></td>
                </tr>
                <tr>
                    <td>No Handphone</td>
                    <td>:</td>
                    <td><input  id="no_hp" type="text" name="no_hp" required></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td>:</td>
                    <td><input id="email" type="text" name="email" size="30" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input id="password" type="password" name="password" size="30" required></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:</td>
                    <td><input id="active" type="password" name="active" size="30" required></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="save" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="images/services.jpg" width="800" height="394">
    </div>
</div> 

<!-- Edit Section -->
<!-- <div class="w3-container" style="padding:128px 16px;background-color:#00BFFF" id="about">
  <div class="container">
      <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
             <A href="" ></A>
          <A href="" ></A>
         <br>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">EDIT PROFIL</h3>
            </div>
              
          <div class=" col-md-12 col-lg-12 "> 
            <form action="" method="post" >
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td><br><div class="panel-body">
                      <div class="row">
                        <div class="col-md-3 col-lg-3 " style="align: center"> <img src="qw.jpg" height="125" width="125"> </div>
                      </div></td> 
                  </tr>
                  
                  <tr>
                    <td><br><a href="Profil.html" class="btn btn-primary center-block">BROWSE</a></td>
                    <td><input type="hidden" name="name" id="name" placeholder="Full Name" ></td>
                    <td><input id="name" type="hidden"  ><td>
                  </tr>

                  <tr>
                    <td><br></td>
                    <td><input type="text" name="no_hp" placeholder="No. Handphone"></td>
                    <td><input id="name" type="hidden" name="Name" value="<?php echo $data['name'];?>" required><td>
                  </tr>

                  <tr>
                      <td><br></td>
                      <td><input type="text" name="password" placeholder="Password"></td>
                  </tr>

                  <tr>
                    <td><br></td>
                    <td><input type="text" name="confirm" placeholder="Confirm Password"></td>
                  </tr>
                </tbody>
                </table>
                <button type='button' class='btn btn-primary center-block'> <a href="Profil.html" class="btn btn-primary">SAVE</a></button>
            </form>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
</div>
  
  </div> -->
<!-- </div>  -->
 
 <!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Send us a Message</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div cla  ss="w3-half">
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

</body>
</html>
