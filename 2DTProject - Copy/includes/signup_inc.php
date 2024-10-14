<?php
// Calling the Connection Page
require('connection.php');

// Calling the Functions_Inc Page
require('functions_inc.php');


// Check If The User Got Here Legitimately
// When The SignUp Button Is Clicked
// The Data Is Stored In Variables & Text Fields Are
// Sanitised/Sanitized
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $repeat_pwd = mysqli_real_escape_string($conn, $_POST['repeat_pwd']);

    // Checks If Text Fields Are Empty
    if (emptyInputSignUp($fname, $email, $pwd, $repeat_pwd) !== false) {
        // Redirect To The SignUp Page
        header("Location: ../signup.php?error=empty_fields&fname=" . $fname . "&email=" . $email . "&pwd=" . $pwd . "&repeat_pwd=" . $repeat_pwd);
        // Kills It
        exit();
    }

    // Validate Email, Recieves A Parameter
    if (invalidEmail($email) !== false) {
        // Redirect To The SignUp Page
        header("Location: ../signup.php?error=invalid_email");
        // Kills It
        exit();
    }

    // Validate Password Matches
    // Recieve Two Parameters
    if (pwdMatch($pwd, $repeat_pwd) !== false) {
        // Redirect To The SignUp Page
        header("Location: ../signup.php?error=password_does_not_match");
        // Kills It
        exit();
    }

    // Check If The Password Length Is Too Long
    // Recieve one Parameter
    if (longPwd($pwd) !== false) {
        // Redirect To The SignUp Page
        header("Location: ../signup.php?error=password_is_too_long");
        // Kills It
        exit();
    }

    // Check If The Password Length Is Too Short
    // Recieve one Parameter
    if (shortPwd($pwd) !== false) {
        // Redirect To The SignUp Page
        header("Location: ../signup.php?error=password_is_too_short");
        // Kills It
        exit();
    }

    // Check If Username/Email Already Exists
    if (emailExists($conn, $email)) {
        // Redirect To The SignUp Page
        header("Location: ../signup.php?error=email_already_exists");
        // Kills It
        exit();
    }

    // Create A New User/Admin If Input Is Correct & Valid
    // Recieves 3 Parameters
    createUser($conn, $fname, $email, $pwd);
    header("Location: ../control_panel.php");
    exit();
} else {
    // Redirect To The SignUp Page
    header("Location: ../signup.php");
    // Kills It
    exit();
}
