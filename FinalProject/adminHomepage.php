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

  <title>Admin Homepage</title>
<body>
  
  <form method="post" action="register.php">
    <div class="bgImage">
    <img src="css/img/rtubg2.png">
  
    <br><br><br><br>
    <div class="container1">
    <h1>Login Success Admin</h1>
    <p>Hello Admin You Successfully login to the Website Page you Can Opt</p>
     <p>Add User Account if you want to Create User Or View, Edit Data</p>
     <p>If you want to Edit a Certain User Data.</p>
    <hr>
      <button onclick="document.location.href ='Register.php' " type="button" class="registerbtn" name="reg_user">Register New User Account</button>
      <hr>
      <button onclick="document.location.href ='adminPage.php' " type="button" class="registerbtn" name="clr_user">Edit, and View Data From user Table (Admin Table) </button>
      <button onclick="document.location.href ='addRecordData.php' " type="button" class="registerbtn" name="clr_user">Edit, and View Data From addRecord Table (User Add Record Table) </button><hr>
      <button onclick="document.location.href ='homepage.php' " type="button" class="registerbtn" name="clr_user">Logout Admin Account/Go Back to Homepage</button>
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

