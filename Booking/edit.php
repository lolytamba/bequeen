<!DOCTYPE html>
<html>
<title>Edit Booking</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/w3.css">
<link rel="stylesheet" type="text/css" href="../css/BeQueen.css">
<link rel="stylesheet" type="text/css" media="screen" href="../vendor/boostrap/dist/css/bootstrap.min.css" />

<body>
<?php 
session_start();
if($_SESSION['id']){
  $SP = $_SESSION["SP"];
  $Ser = $_SESSION["Ser"];
  $SerPac =$_SESSION['SerPac'];
  // $arrival =$_SESSION['arrival'];
  // $bookDate =$_SESSION['bookDate'];

?>
 <!-- Navbar (sit on top) -->
 <div class="w3-top">
  <div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a href="../profile/profile.php" class="w3-bar-item w3-button w3-wide">Hi, <?php echo $nama;?>!</a> 
  
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="../index.php" class="w3-bar-item w3-button">HOME</a>
      <a href="../Services.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
      <a href="../Booking/booking.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
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
    <a href="../index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="../Service.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
    <a href="../Booking/booking.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
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

<body>
<div class="w3-container w3-center w3-light" style="padding-bottom: 50px">    

    <div class="w3-container w3-center">    
    </div>
    <?php
        include('../koneksi.php');
        $id=$_GET['id'];

        $show =mysqli_query($con,"SELECT *FROM test_book WHERE id='$id'");

        if(mysqli_num_rows($show)==0){
            echo 'Empty';
        }
        else{
            $data=mysqli_fetch_assoc($show);
        }
    ?>
    
<div class="w3-container w3-light-grey" id="book">
  <h3 class="w3-center" id="judulBook">EDIT BOOKING</h3>
  <div class="w3-row-padding" style="margin-top:10px; padding-bottom: 30px">
    <div class="w3-half">

    <form action="edit-proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    
        <input class="w3-border" type="text" name="SP"  value="<?php echo $data['SP']; ?>" readonly>
        <input class="w3-border" type="text" name="Ser"  value="<?php echo $data['Ser']; ?>" readonly>

        <?php if($data['Ser'] == 'hair'){ ?>
        <select name="SerPac1" >
         <option value=""></option>
          <option value="Straight Hair" <?php if($data['SerPac']=='Straight Hair'){echo 'selected';} ?>>Straight Hair</option>
          <option value="Wavy Hair"<?php if($data['SerPac']=='Wavy Hair'){echo 'selected';}?>>Wavy Hair</option>
          <option value="Curly Hair"<?php if($data['SerPac']=='Curly Hair'){echo 'selected';}?>>Curly Hair</option>
        </select>
        
        <?php }else if($data['Ser'] == 'nail'){ ?>

        <select name="SerPac2" >
         <option value=""></option>
          <option value="Digi World Nail Art" <?php if($data['SerPac']=='Digi World Nail Art'){echo 'selected';} ?>>Digi World Nail Art</option>
          <option value="Airbrush Nail Art Technique"<?php if($data['SerPac']=='Airbrush Nail Art Technique'){echo 'selected';}?>>Airbrush Nail Art Technique</option>
          <option value="Sharpie Nail Art"<?php if($data['SerPac']=='Sharpie Nail Art'){echo 'selected';}?>>Sharpie Nail Art</option>
        </select>

        <?php }else if($data['Ser'] == 'makeup'){ ?>

        <select name="SerPac3" >
         <option value=""></option>
          <option value="Natural Makeup" <?php if($data['SerPac']=='Natural Makeup'){echo 'selected';} ?>>Natural Makeup</option>
          <option value="Bridal Makeup"<?php if($data['SerPac']=='Bridal Makeup'){echo 'selected';}?>>Bridal Makeup</option>
          <option value="Gothic Makeup"<?php if($data['SerPac']=='Gothic Makeup'){echo 'selected';}?>>Gothic Makeup</option>
        </select>
  
        <?php }else{ ?>

        <select name="SerPac4" >
         <option value=""></option>
          <option value="Basic" <?php if($data['SerPac']=='Basic'){echo 'selected';} ?>>Basic</option>
          <option value="Pro"<?php if($data['SerPac']=='Pro'){echo 'selected';}?>>Pro</option>
          <option value="Premium"<?php if($data['SerPac']=='Premium'){echo 'selected';}?>>Premium</option>
        </select>

        <?php }?>

        <p><label>Tanggal Kedatangan</label> <input class="w3-input w3-border" type="date" placeholder="Tanggal Kedatangan" name="arrival"  value="<?php echo $data['arrival']; ?>" required ></p>
        <p><label>Tanggal Pemesanan</label> <input class="w3-input w3-border" type="date" placeholder="Tanggal Pemesanan" name="bookDate" value="<?php echo $data['bookDate']; ?>" required ></p>
      
         <tr>
              <td>&nbsp;</td>
              <td></td>
              <td><input type="submit" name="edit" id="edit" value="Save" class="w3-button w3-black" style="margin-left: 315px"></td>
            </tr>
      </form>
 
      </div>
  </div>
</div>
</body>

<!-- Contact Section -->
<div class="w3-container w3-light-blue" style="padding-bottom: 50px" id="contact">
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

<!-- Footer -->
<footer class="w3-center w3-black" style="padding-top: 30px">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a title="BeQueen" href="../index.php" class="w3-hover-text-blue">BeQueen</a></p>
</footer>

<script src="../vendor/jquery/dist/jquery.min.js"></script>
<script src="../vendor/boostrap/dist/js/bootstrap.min.js"></script>
<script src="../js/booking.js"></script>
<script src="../js/style.js"></script>
</body>
</html>