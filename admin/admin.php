<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<?php 
session_start();

  $id = $_SESSION['id']; // buat dapat data id, pake echo ya kalau mau nampilin
  $username = $_SESSION["admin"]; //email itu variabelnya buat nampung session email, trus dipake disini buat ambil datanya
 
  
?>

<?php
            include('../koneksi.php');
            $sql="SELECT count(id_user) as jumlahUser FROM register";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result); //data diambil trus jadi bentuk array
            $jumlah=$row['jumlahUser'];
            
        ?>

<?php
            include('../koneksi.php');
            $sql="SELECT count(id) as jumlahBooking FROM test_book";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result); //data diambil trus jadi bentuk array
            $jumlahBooking=$row['jumlahBooking'];
            
        ?>

<?php
            include('../koneksi.php');
            $sql="SELECT count(id) as jumlahFeedback FROM feedback";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result); //data diambil trus jadi bentuk array
            $jumlahFeedback=$row['jumlahFeedback'];
            
        ?>





<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">BeQueen</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../images/admin.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION["admin"];?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#userTabel" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  User</a>
    <a href="#bookTabel" class="w3-bar-item w3-button w3-padding"><i class="fa fa-usd fa-fw"></i>  Booking</a>
    <a href="#feedbackTabel" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw"></i>  Feedback</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-out fa-fw"></i>  Logout</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

   <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $jumlahFeedback;?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Feedback</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-usd w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $jumlahBooking;?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Booking</h4>
      </div>
    </div>
 
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $jumlah;?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>

  <div  id="content"  class="w3-container">
    <h5>User</h5>
    <table id="userTabel" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Handphone</th>
        <th>Email</th>
        <th>Status</th>
    </tr>

    <?php
            include('../koneksi.php');
            $query= mysqli_query($con,"SELECT * FROM register ORDER BY id_user DESC") or die(mysqli_connect_error());
            if(mysqli_num_rows($query)==0)
            {
                echo '<tr><td colspan="6">Tidak ada Data!</td></tr>';
            }

            else
            {
                $no=1;
                while($data=mysqli_fetch_assoc($query))
                {
                    echo '<tr>';
                      echo '<td>'.$no.'</td>';
                      echo '<td>'.$data['nama'].'</td>';
                      echo '<td>'.$data['no_hp'].'</td>';
                      echo '<td>'.$data['email'].'</td>';
                      
                      if($data['status']=="1") echo '<td>Active</td>';
                      else echo '<td>Not Active</td>';
                    //   echo '<td>'.$data['status'].'</td>';
                      
                    //   echo '<td><a href="edit.php?id='.$data['ID_Reserve'].'">
                    //   Edit</a> /

                    //   <a href="hapus.php?id='.$data['ID_Reserve'].'"
                    //   onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
                    echo '</tr>';

                    $no++;
                }
            }
        ?>
     
    </table>
    <br>

    <h5>Booking</h5>
    <table id="bookTabel" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
    <tr>
        <th>No.</th>
        <th>ID Pemesan</th>
        <th>Service/Paket</th>
        <th>Detail</th>
        <th>Book Date</th>
        <th>Arrival Date</th>
    </tr>

    <?php
            include('../koneksi.php');
            $query= mysqli_query($con,"SELECT * FROM test_book ORDER BY id DESC") or die(mysqli_connect_error());
            if(mysqli_num_rows($query)==0)
            {
                echo '<tr><td colspan="6">Tidak ada Data!</td></tr>';
            }

            else
            {
                $no=1;
                while($data=mysqli_fetch_assoc($query))
                {
                    echo '<tr>';
                      echo '<td>'.$no.'</td>';
                      echo '<td>'.$data['user'].'</td>';
                      echo '<td>'.$data['SP'].'</td>';
                      echo '<td>'.$data['SerPac'].'</td>';
                      echo '<td>'.$data['bookDate'].'</td>';
                      echo '<td>'.$data['arrival'].'</td>';
                      
                    //   echo '<td>'.$data['status'].'</td>';
                      
                    //   echo '<td><a href="edit.php?id='.$data['ID_Reserve'].'">
                    //   Edit</a> /

                    //   <a href="hapus.php?id='.$data['ID_Reserve'].'"
                    //   onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
                    echo '</tr>';

                    $no++;
                }
            }
        ?>
     
    </table>

    <br>
    <h5>Feedback</h5>
    <table id="feedbackTable" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
    <tr>
        <th>No.</th>
        <th>ID User</th>
        <th>Message</th>
      
    </tr>

    <?php
            include('../koneksi.php');
            $query= mysqli_query($con,"SELECT * FROM feedback ORDER BY id DESC") or die(mysqli_connect_error());
            if(mysqli_num_rows($query)==0)
            {
                echo '<tr><td colspan="6">Tidak ada Data!</td></tr>';
            }

            else
            {
                $no=1;
                while($data=mysqli_fetch_assoc($query))
                {
                    echo '<tr>';
                      echo '<td>'.$no.'</td>';
                      echo '<td>'.$data['user'].'</td>';
                      echo '<td>'.$data['message'].'</td>';
                      
                      
                    
                    echo '</tr>';

                    $no++;
                }
            }
        ?>
     
    </table>
  </div>

  <!-- <div id="content" style="display:none">
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
       <p>Nama : Ecen</p>
   </div> -->
   <hr>

<button  id="cmd" class="submit" type="submit">Download</button>

  

  
  <br>
  

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="http://bequuen.thekingcorp.org/" target="_blank">BeQueen</a></p>
  </footer>

  <!-- End page content -->
</div>



</body>
<script src="../jquery/dist/jquery.min.js"></script>
<script src="../boostrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/jspdf/dist/jspdf.min.js"></script>
<script>
var doc = new jsPDF("p","px","a4");
var specialElementHandlers = {
      'DIV to be rendered out': function(element, renderer){
       return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#content').html(), 20, 0, {
        'width':800,
            'elementHandlers': specialElementHandlers
    });
    doc.save('saveInCallback.pdf');
});</script>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</html>
