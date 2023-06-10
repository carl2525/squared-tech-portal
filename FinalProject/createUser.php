<?php
## make sure you connect first to mysql with a super user (ex: root)
mysql_connect('localhost', 'root', '');

$dbName = 'registration'; // new database name
$dbUser = 'administrator';       // new user name
$dbPass = 'password123';       // new user password
$servername = 'localhost';

$queries = array(
    "CREATE DATABASE `$dbName` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci",
    "CREATE USER '$dbUser'@'localhost' IDENTIFIED BY '$dbPass'",
    "GRANT USAGE ON * . * TO '$dbUser'@'localhost' IDENTIFIED BY '$dbPass' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0",
    "GRANT SELECT , INSERT , UPDATE, DELETE, CREATE, ALTER ON `$dbName` . * TO '$dbUser'@'localhost'",
    "FLUSH PRIVILEGES"
);

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

  <title>Create User and Database Page</title>
<body>
  
  <form method="post" action="register.php">
    <div class="bgImage3">
    <img src="css/img/rtubg2.png">
  
    <br><br><br><br>
    <div class="container1">
    <h1>Query Success</h1>
    <p>User, Database, and Table has Been Successfully Query See Below if its Success or Not:</p>
    <hr>

    <?php foreach($queries as $query):?>
	<?echo 'Executing query: "'.htmlentities($query).'" ... '?>
	<?$rs = mysql_query($query);?>
	<?echo ($rs ? 'STATUS: -SUCCESS-' : 'STATUS: -FAILED-') . '<br/><br/>'?>


	<?php endforeach;?>
	<p><?php echo $output?></p>
	<p><?php echo $outputTable?></p>

      <button onclick="document.location.href ='homepage.php' " type="button" class="registerbtn" name="clr_user">Go Back to Homepage</button>
      <p><?php echo $message?></p>
    </div>
  </form>
   <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br>

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



