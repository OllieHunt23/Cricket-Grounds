<?php
//Call connection page
require 'connection.php';
require 'functions_inc.php';

if (isset($_POST['login_btn'])) {
  //store email address & password in variables
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  //Check if text fields are empty
  if (emptyInputLogin($email, $pwd)) {
    header('Location:../login.php?error=empty_fields');

    //stop the script
    exit();
  }
  loginUser($conn, $email, $pwd);
  //if credentials are invalid redirect to login page
} else {
  header('Location:../control_panel.php');
}
