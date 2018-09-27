<!DOCTYPE html>
<html>
<title>My Feedback</title>
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
  $id = $_SESSION['id']; 
  $email = $_SESSION["email"];
  $nama = $_SESSION["nama"];
  $phone =$_SESSION['phone'];
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
  <a href="#home" class="w3-bar-item w3-button w3-wide">BeQueen</a>
  <!-- Right-sided navbar links -->
  <div class="w3-right w3-hide-small">
    <a href="../index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="../Service.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
    <a href="../Booking/booking.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
    <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="../login/login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGIN</a>
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
    

<!-- Packet Section -->
<div class="w3-container w3-center w3-light" style="padding-bottom: 80px" id="packet">
  <h3>My Feedback</h3>
  <div class="w3-container w3-center w3-light" style="margin-left: 350px">
    <table cellpadding="10" cellspacing="0" border="2">
        <tr class = "w3-light-blue">
            <th width="10%">No.</th>
            <th>Order ID</th>
            <th width="50%">Feedback</th>
            <th width="25%">Action</th>
        </tr>

        <?php 
            include('../koneksi.php');
            $query= mysqli_query($con,"SELECT * FROM feedback WHERE user='$id'") or die(mysqli_connect_error());
            if(mysqli_num_rows($query)==0)
            {
                echo '<tr><td colspan="4">Tidak ada Data! <a href="../Services.php#contact" class="w3-button w3-black" style="margin-left: 20px">
                !New</a> </td></tr>';
                
            }else
            {
                $no=1;
                while($data=mysqli_fetch_assoc($query))
                {
                    echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$data['user'].'</td>';
                    echo '<td>'.$data['message'].'</td>';
                    echo '<td><a href="edit.php?id='.$data['id'].'" class="w3-button w3-black">
                        Edit</a>  <a href="delete.php?id='.$data['id'].'"  class="w3-button w3-black"
                        onclick="return confirm(\Yakin?\')">Hapus</a></td>';
                    $no++;
                }
            }
        ?>
    </table>
    </div>        
</div>

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

</body>
</html>