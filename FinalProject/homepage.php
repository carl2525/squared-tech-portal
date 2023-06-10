<!doctype html>
<html lang="en">
<head>
	 <meta charset="utf-8">

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

	 <title>Homepage</title>
</head>

<body>
		<div class="bgImage1">
		<img src="css/img/rtubg2.png">
	
		<br><br><br><br>

	<div class="container2">

	<h1>Choose Function</h1>
	<hr>
	<p>Create User, and Database First, and Next is Select Create Table Button Before Creating Default Admin Account</p>
	<p>Default Admin Account Login Details: Full Name: <b>Admin</b> Password: <b>Password</b></p>
	
	<button onclick="document.location.href ='createUser.php' " class="registerbtn" name="submit"><b>Create User, and Database Button</button></b><br>
	<button onclick="document.location.href ='createTable.php' " class="registerbtn" name="submit"><b>Create user Table Button (Admin Table)</button></b>
	<button onclick="document.location.href ='addRecordTable.php' " class="registerbtn" name="submit"><b>Create Table Button (User Add Record Table)</button></b>
	
	<p>Important Reminders Please Click Create Default Admin Button</p>
	<button id="idOfButton" onclick="document.location.href='createAdmin_Account.php' " class="registerbtn" name="submit"><b>Create Default Admin Account Button</button></b>
	<p>Only Once to Avoid a Certain Problems!!</p>


	<hr>
	<button onclick="document.location.href ='loginpage.php' " class="registerbtn" name="submit"><b>Login Page Button</button></b>
	<p>Click Login Button if you Already Sucessfully Create an Admin Account</p>

</div>
</body>


</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>
	<script>
		function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

window.transitionToPage = function(href) {
    document.querySelector('body').style.opacity = 0
    setTimeout(function() { 
        window.location.href = href
    }, 500)
}

document.addEventListener('DOMContentLoaded', function(event) {
    document.querySelector('body').style.opacity = 1
})


	</script>



	<div class="footer">
	<p><b>© Copyright Squared Tech Innv. All Rights Reserved 2021</p></b>
</div>

</head>