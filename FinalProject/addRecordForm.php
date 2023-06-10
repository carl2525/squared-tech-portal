<?php include('addRecordScript.php') ?>


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

  <title>Add Record Form Page</title>
<body>
  
  <form method="post" action="addRecordForm.php">
    <div class="bgImage">
    <img src="css/img/rtubg2.png">
  
    <br><br><br><br>
    <div class="container1">
    <h1>Add Record Form</h1>
    <p>Please fill in this form to add a record.</p>
    <hr>

       <label for="inputFullname"><b>Full Name:</b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" value="<?php echo $Name; ?>" required>

      <label for="inputFullname"><b>Password:</b></label>
      <input type="password" name="Password" placeholder="Enter Password" value="<?php echo $Password; ?>" required>

      <label for="inputBirthday"><b>Birthday:</b></label>
      <input type="date" placeholder="yyyy-mm-dd" name="Birthday" value="<?php echo $Birthday; ?>"required>

      <label for="inputCourse"><b>Course:</b></label>
      <input type="text" name="Course" placeholder="Enter Course" value="<?php echo $Course; ?>"required>
    
    
      <label for="inputEmail"><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="Email"value="<?php echo $Email; ?>"required>


      <button type="submit" class="registerbtn" name="reg_user">Register</button>
      <button type="reset" class="registerbtn" name="clr_user">Clear</button>
       <button onclick="document.location.href ='succesLogin.php' " type="button" class="registerbtn" name="reg_user">Go Back User Homepage</button>
      <p><?php echo $message?></p>
    </div>
  </form>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>

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

