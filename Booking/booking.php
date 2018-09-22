<?php
  include('../koneksi.php');
  session_start();
  if($_SESSION["email"]){
    $id = $_SESSION['id']; // buat dapat data id, pake echo ya kalau mau nampilin
    $email = $_SESSION["email"]; //email itu variabelnya buat nampung session email, trus dipake disini buat ambil datanya
    $nama = $_SESSION["nama"];
    $phone =$_SESSION['phone'];
    

?>
<!DOCTYPE html>
<html>
<title>BOOKING</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../css/booking.css">

<body>

 <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card" id="myNavbar">
    <a href="../profile/profile.php" class="w3-bar-item w3-button w3-wide">Hi, <?php echo $nama;?>! </a> 
  
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-smal l">
      <a href="../index.php" class="w3-bar-item w3-button">HOME</a>
      <a href="../Services.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVICES</a>
      <a href=#book class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BOOK</a>
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
<header class="bgimg-1 w3-display-container" id="home">
</header>

<!-- Booking Section -->
<div class="w3-container w3-light-blue" id="book">
  <h3 class="w3-center" id="judulBook">MY BOOKING</h3>
  <div class="w3-row-padding" style="margin-top:10px">
    <div class="w3-half">

      <form>
        <label>Service/Paket</label>
        <select id="SP" name="SP" onchange="showSelection()">
          <option value="">---Service/Paket---</option>
          <option value="Service">Service</option>
          <option value="Paket">Paket</option>
        </select>

        <select name="Ser" style="display:none" id="service" onchange="showSelection()">
          <option value="hair">Hair Styling</option>
          <option value="nail">Nail Art</option>
          <option value="makeup">Make Up</option>
        </select>

        <select name="SerPac" style="display:none" id="paket" onchange="showSelection()">
          <option value="Basic">Basic</option>
          <option value="Pro">Pro</option>
          <option value="Premium">Premium</option>
        </select>

        <select name="SerPac" style="display:none" id="hair" onchange="showSelection()">
          <option value="Straight Hair">Straight Hair</option>
          <option value="Wavy Hair">Wavy Hair</option>
          <option value="Curly Hair">Curly Hair</option>
        </select>

        <select name="SerPac" style="display:none" id="nail" onchange="showSelection()">
          <option value="Digi World Nail Art">Digi World Nail Art</option>
          <option value="Airbrush Nail Art Technique">Airbrush Nail Art Technique</option>
          <option value="Sharpie Nail Art">Sharpie Nail Art</option>
        </select>

        <select name="SerPac" style="display:none" id="makeup" onchange="showSelection()">
          <option value="Natural Makeup">Natural Makeup</option>
          <option value="Bridal Makeup">Bridal Makeup</option>
          <option value="Gothic Makeup">Gothic Makeup</option>
        </select>

        

        <p><label>Tanggal Kedatangan</label> <input class="w3-input w3-border" type="date" placeholder="Tanggal Kedatangan" name="arrival"></p>
        <p><label>Tanggal Pemesanan</label> <input class="w3-input w3-border" type="date" placeholder="Tanggal Pemesanan" name="bookDate"></p>
        <p>
          <button class="w3-button" id="btn_add" type="submit" style="margin: 12px 280px">
            <i class="fa fa-paper-plane"></i> BOOK
          </button>
        </p>
      </form>
    </div>
    <div id="live_data"></div>
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

<script src="../vendor/jquery/dist/jquery.min.js"></script>
<script src="../vendor/boostrap/dist/js/bootstrap.min.js"></script>
<script src="../js/booking.js"></script>
<script src="../js/style.js"></script>
</body>

<script>
  $(document).ready(function(){
    function fetch_data(){
      $.ajax({
        url:"select.php",
        method:"POST",
        success:function(data){
          $('#live_data').html(data);
        }
      });
    }
    fetch_data();
    $(document).on('click','#btn_add',function(){
      $.ajax({
        url:"insert.php",
        method:"POST",
        data:{SerPac:SerPac},
        dataType:"text",
        data:{arrival:arrival,bookDate:bookDate},
        dataType:"date",
        success:function(data){
          alert(data);
          fetch_data();
        }
      });
    });
    function edit_data_text(id,text,column_name){
      $.ajax({
        url:"edit.php",
        method:"POST",
        data:{id:id,text:text,column_name:column_name},
        dataType:"text",
        success:function(data){
          alert(data);
        }
      });
    }
    function edit_data_date(id,date,column_name){
      $.ajax({
        url:"edit.php",
        method:"POST",
        data:{id:id,date:date,column_name:column_name},
        dataType:"text",
        success:function(data){
          alert(data);
        }
      });
    }
    $(document).on('blur','.SerPac',function(){
      var id=$(this).data("id1");
      var SerPac=$(this).text();
      edit_data_text(id,SerPac,"SerPac");
    });
    $(document).on('blur','.arrival',function(){
      var id=$(this).data("id2");
      var arrival=$(this).date();
      edit_data_date(id,arrival,"arrival");
    });
    $(document).on('blur','.bookDate',function(){
      var id=$(this).data("id3");
      var bookDate=$(this).date();
      edit_data_date(id,bookDate,"bookDate");
    });
    $(document).on('click','.btn_delete',function(){
      var id=$(this).data("id4");
      if(confirm("Are you Sure?"))
      $.ajax({
        url:"delete.php",
        method:"POST",
        data:{id:id},
        dataType:"text",
        success:function(data){
          alert(data);
          fetch_data();
        }
      });

    });
  });
</script>
</html>

<?php
    }else{
        header("Location: ../login/login.php");
    }
?>
