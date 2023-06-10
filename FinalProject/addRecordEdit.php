<?php

include "addRecordScript.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from addrecord where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Name = $_POST['Name'];
    $Password = $_POST['Password'];
    $Birthday = $_POST['Birthday'];
    $Course = $_POST['Course'];
    $Email = $_POST['Email'];


	
    $edit = mysqli_query($db,"update addrecord set Name='$Name', Password='$Password', Birthday='$Birthday' , Course='$Course', Email='$Email' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:recordEditSuccess.php"); // redirects to all records page
        exit;


    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
    <span style="font-size:32px;color:white;font-weight:bold;font-family:Gill Sans MT;cursor:pointer;float:right;padding-right:15px;padding-top:16px;position:relative" onclick="openNav()">  Group Members &#9776</span>

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

  <title>Edit User Add Record Data Page</title>
<body>
  
  <form method="post">
    <div class="bgImage">
    <img src="css/img/rtubg2.png">
  
    <br><br><br><br>
    <div class="container1">
    <h1>Update Edit Information</h1>
    <p>Please fill in this form to update the information of User</p>

    <hr>

       <label for="inputFullname"><b>Full Name:</b></label>
      <input type="text" name="Name" placeholder="Enter Full Name" value="<?php echo $data['Name'] ?>" required>

      <label for="inputFullname"><b>Password:</b></label>
      <input type="password" name="Password" placeholder="Enter Password" value="<?php echo $data['Password'] ?>" required>

      <label for="inputBirthday"><b>Birthday:</b></label>
      <input type="date" placeholder="yyyy-mm-dd" name="Birthday" value="<?php echo $data['Birthday'] ?>"required>

      <label for="inputCourse"><b>Course:</b></label>
      <input type="text" name="Course" placeholder="Enter Course" value="<?php echo $data['Course'] ?>"required>
    
    
      <label for="inputEmail"><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="Email"value="<?php echo $data['Email'] ?>"required>

      <button type="submit" class="registerbtn" name="update" value="Update">Update</button>

      <button onclick="document.location.href ='addRecordData.php' " type="button" class="registerbtn" name="reg_user">Go Back to View, and Edit User Data (User Add Record Table)</button>


       <button onclick="document.location.href ='adminHomepage.php' " type="button" class="registerbtn" name="reg_user">Go Back Admin Homepage</button>
      <p><?php echo $message?></p>
    </div>
  </form>
  <br><br><br><br><br><br><br>

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
</form>