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

    $firstname = mysqli_real_escape_string($conn, $_POST['Firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['Lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $mobileno = mysqli_real_escape_string($conn, $_POST['MobileNo']);
    $bookingdate = mysqli_real_escape_string($conn, $_POST['Bookingdate']);
    $bookingtime = mysqli_real_escape_string($conn, $_POST['Bookingtime']);
    $nopeople = mysqli_real_escape_string($conn, $_POST['nopeople']);
    $occasion = mysqli_real_escape_string($conn, $_POST['occasion']);

    // Checks If Text Fields Are Empty
    if (emptyInputBooking($firstname, $lastname, $email, $mobileno, $bookingdate, $bookingtime, $nopeople, $occasion) !== false) {
        // Redirect To The Booking Page
        header("Location: ../booking.php?error=empty_fields&Firstname=" . $firstname . "&Lastname=" . $lastname . "&Email=" . $email . "&MobileNo=" . $mobileno . "&Bookingdate" . $bookingdate . "&Bookingtime" . $bookingtime . "&nopeople" . $nopeople . "&occasion" . $occasion);
        // Kills It
        exit();
    }


    // Check If The phone number Length Is Too Long
    // Recieve one Parameter
    if (longPhone($mobileno) !== false) {
        // Redirect To The SignUp Page
        header("Location: ../booking.php?error=phone_number_is_too_long");
        // Kills It
        exit();
    }

    if (shortPhone($mobileno) !== false) {
        // Redirect To The SignUp Page
        header("Location: ../booking.php?error=phone_number_is_too_short");
        // Kills It
        exit();
    }

    // Check If Username/Email Already Exists
    if (customeremailExists($conn, $email)) {
        // Redirect To The Booking Page
        header("Location: ../booking.php?error=email_already_exists");
        // Kills It
        exit();
    }

    if (invalidEmail($email) !== false) {
        // Redirect To The SignUp Page
        header("Location: ../signup.php?error=invalid_email");
        // Kills It
        exit();
    }
    // Create A Booking If Input Is Correct & Valid
    // Recieves 9 PSarameters
    createCustomer($conn, $firstname, $lastname, $email, $mobileno, $bookingdate, $bookingtime, $nopeople, $occasion);
    header("Location: ../index.php");
    exit();
} else {
    // Redirect To The Booking Page
    header("Location: ../booking.php");
    // Kills It
    exit();
}
