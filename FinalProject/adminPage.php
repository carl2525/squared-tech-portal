<?php
session_start();
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

  <title>View,and Edit User Data from user Table</title>
<body>
  
  <form method="post" action="register.php">
    <div class="bgImageLast1">
    <img src="css/img/rtubg2.png">
  
    <br><br><br><br>
    <div class="containerLast1">
    <h1>View, and Edit User Data (Admin Table)</h1>
    <p>Hello Admin You can Edit Certain Data of Users Coming From the Databases</p>
    <p><b>User Level: 1 = Admin 2 = User</p></b>


    <table id="customers">
  <tr>
    <td>ID</td>
    <td>Full Name</td>
    <td>Password</td>
    <td>Birthday</td>
    <td>Course</td>
    <td>Email</td>
    <td>User Level</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

  <?php

include "phpScript.php"; // Using database connection file here

$records = mysqli_query($db,"select * from user"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['Password']; ?></td>
    <td><?php echo $data['Birthday']; ?></td>
    <td><?php echo $data['Course']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['Level']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>
</table>



    <hr>
      <button onclick="document.location.href ='adminHomepage.php' " type="button" class="registerbtn" name="reg_user">Go Back to Admin Homepage</button>
      <button onclick="document.location.href ='homepage.php' " type="button" class="registerbtn" name="clr_user">Logout Admin Account/Go Back to Homepage</button>
      <p><?php echo $message?></p>
    </div>
  </form>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br>

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

