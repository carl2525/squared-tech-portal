<?php
session_start();


// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'administrator', 'password123', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);
  $Birthday = mysqli_real_escape_string($db, $_POST['Birthday']);
  $Course = mysqli_real_escape_string($db, $_POST['Course']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $Level = mysqli_real_escape_string($db, $_POST['Level']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Name)) { array_push($errors, "Name is required"); }
  if (empty($Password)) { array_push($errors, "Password is required"); }
  if (empty($Birthday)) { array_push($errors, "Birthday is required"); }
  if (empty($Course)) { array_push($errors, "Course is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Level)) { array_push($errors, "User Level is required"); }

  $message = "The Data Has Been Successfully Submitted in The Database";

  header("location: successPage.php");

  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($Password);

    $query = "INSERT INTO user (Name, Password, Birthday, Course, Email, Level) 
          VALUES('$Name', '$Password', '$Birthday', '$Course', '$Email', $Level)";
    mysqli_query($db, $query);
  }

   $query = "DELETE FROM user where Name ='';";
    mysqli_query($db, $query);

    $query = "ALTER TABLE user AUTO_INCREMENT =1";
    mysqli_query($db, $query);

    if (isset($_POST['login_user'])) {
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($Name)) {
    $nameOutput =  "Fullname is Required";
  }
  if (empty($Password)) {
    $passOutput =  "Password is Required";
  }

  if (count($errors) == 0) {
    $password = md5($Password);
    $query = "SELECT * FROM user WHERE Name='$Name' AND Password='$Password'";
    $results = mysqli_query($db, $query);
    $results1 = mysqli_fetch_assoc($results);

    if (mysqli_num_rows($results) == 1) {
      if($results1['Level'] == '1'){
      $_SESSION['success'] = "You are now logged in";
      header('location: adminHomepage.php');
    }
    else{
      header('location: succesLogin.php');
    }
    }else {
      $errorLogin = "Wrong username/password combination";
    }
  }
}






?>
