<?php
?>

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

  <title>Registed Success Page</title>
<body>
  
  <form method="post" action="register.php">
    <div class="bgImage">
    <img src="css/img/rtubg2.png">
  
    <br><br><br><br>
    <div class="container1">
    <h1>Register Success</h1>
    <p>Your Registration Has Been Succesfully Recorded in the Database.</p>
    <hr>
     <button onclick="document.location.href ='adminHomepage.php' " type="button" class="registerbtn" name="reg_user">Go to Admin Homepage Button</button>
      <button onclick="document.location.href ='register.php' " type="button" class="registerbtn" name="reg_user">Go Back to Registration Form Button</button>
      <button onclick="document.location.href ='homepage.php' " type="button" class="registerbtn" name="clr_user">Logout/Go Back to Homepage Button</button>
      <p><?php echo $message?></p>
    </div>
  </form>
   <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br>

    <script>
    function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
  </script>

</body>

  <div class="footer">
  <p><b>© Copyright Squared Tech Innv. All Rights Reserved 2021</p></b>
</div>

</html>

