<?php include('phpScript.php') ?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
    <span style="font-size:32px;color:white;font-weight:bold;font-family:Gill Sans MT;cursor:pointer;float:right;padding-right:15px;padding-top:16px;position:relative" onclick="openNav()"> Group Members &#9776</span>

    <div class="logo">
    <a href="homepage.php"><img src="css/img/rtulogo.png" height="75" width="200"></a>
    </div>

        <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
      <ul>
        <li><a href="#">Carl Erwin Gorobao</a></li>
        <li><a href="#">Ian Conrad Baarde</a></li>
        <li><a href="#">Simon Wayne Palma</a></li>
        <li><a href="#">Basteen Ison</a></li>
        <li><a href="#">Iris Faye Raguine</a></li>
        </ul>
      </div>
      </div>

  <title>Login Page</title>
<body>
  
  <form method="post" action="loginpage.php">
    <?php include('error.php'); ?>
    <div class="bgImage">
    <img src="css/img/rtubg2.png">
  
    <br><br><br><br>
    <div class="container1">
    <h1>Login</h1>
    <p>Enter Login Details in Order to Login.</p>
    <hr>

       <label for="inputFullname"><b>Enter Full Name:</b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" value="<?php echo $Name; ?>" required>

      <label for="inputCourse"><b>Enter Password:</b></label>
      <input type="Password" name="Password" placeholder="Enter Password" value="<?php echo $Password; ?>"required>
    
      <button type="submit" class="registerbtn" name="login_user">Login</button>
      <p style="color:red;"><b><?php echo "<br>". $errorLogin?></p></b>
    </div>
  </form>

    <script>
    function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
  </script>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="footer">
  <p><b>© Copyright Squared Tech Innv. All Rights Reserved 2021</p></b>
</div>

</html>