<?php
$dbName = 'registration'; // new database name
$dbUser = 'administrator';       // new user name
$dbPass = 'password123';       // new user password
$servername = 'localhost';

$conn = new mysqli($servername, $dbUser, $dbPass, $dbName);

$sql =  "INSERT INTO user (Name, Password, Birthday, Course, Email, Level) 
          VALUES('Admin', 'Password', '2001-06-25', 'BSIT', 'adminlevel@gmail.com', '1')";

if ($conn->query($sql) === TRUE) {
  $outputTable = " <b>Default Admin User Successfullly Created:</b><br> <br> Name: Admin <br> Password: Password";
} else {
  $outputTable =  "Error creating table: " . $conn->error;
}
?>



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

  <title>Create Deafult Admin Account/title></title>
<body>
  
  <form method="post" action="register.php">
    <div class="bgImage4">
    <img src="css/img/rtubg2.png">
  
    <br><br><br><br>
    <div class="container1">
    <h1>Create Default Admin Account</h1>
    <p>Default Admin Account Has Been Successfully Created.</p>
    <p>Full Name: Admin<br> Password: Password</p>
    <hr>

	<p><?php echo $outputTable?></p>
  <hr>

      <button onclick="document.location.href ='homepage.php' " type="button" class="registerbtn" name="clr_user">Go Back to Homepage</button>
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


  <div class="footer">
  <p><b>© Copyright Squared Tech Innv. All Rights Reserved 2021</p></b>
</div>


</html>

