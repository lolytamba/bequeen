<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>

<div class="cont" style="margin-top: 150px">
<form action="login-proses.php" method="post" id="signin" name ="signin" onsubmit="return cekform2()">
    <div class="form sign-in" style="padding-top: 100px">
      <h2>Welcome back, Admin</h2>
      <label>
        <span>Username</span>
        <input type="username" name="username" id="username" value="" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" id="password" value=""/>
      </label>
      <button type="submit" class="submit" name="signin" id="btnSubmit1">Sign In</button>
  </div>
  </form>

  <div class="sub-cont">
    <div class="img">
    </div>
  </div>
</div>
  

<script  src="js/index.js"></script>
</body>
</html>
