<?php
$dbName = 'registration'; // new database name
$dbUser = 'administrator';       // new user name
$dbPass = 'password123';       // new user password
$servername = 'localhost';

$conn = new mysqli($servername, $dbUser, $dbPass, $dbName);

$sql = "CREATE TABLE addRecord (
id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(255) NOT NULL,
Password VARCHAR(255) NOT NULL,
Birthday DATE NOT NULL,
Course VARCHAR(255) NOT NULL,
Email VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  $outputTable = " The addRecord Table created successfully";
} else {
  $outputTable =  "Error creating table: " . $conn->error;
}
?>
<div class="bg">

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

  <title>Create Table Page</title>
<body>
  
  <form method="post" action="register.php">
    <div class="bgImage4">
  <img src="css/img/rtubg2.png">
    <br><br><br><br>
    <div class="container1">
    <h1>Query Create Table Success</h1>
    <p>Table has Been Successfully Query See Below if its Success or Not:</p>
    <hr>

	<p><?php echo $outputTable?></p>

      <button onclick="document.location.href ='homepage.php' " type="button" class="registerbtn" name="clr_user">Go Back to User Homepage Button</button>
      <p><?php echo $message?></p>
       <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br>
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
</div>


</html>

