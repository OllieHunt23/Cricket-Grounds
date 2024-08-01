<?php
// ------------ SignUp Function ------------

// Function For Checking Empty Text Fields
// Recieves 3 Parameters
function emptyInputSignUp($email, $fname, $pwd, $repeat_pwd)
{
    // Declare Boolean Variable
    $result = false;

    // Check Fields Are Empty Using Built-In Function
    if (empty($fname) || empty($email) || empty($pwd) || empty($repeat_pwd)) {
        // Sets To True, Sends Error Message
        $result = true;

        // If the Fields Are Filled, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

// Function For Checking Invalid Email Adress
// Recieves 1 Parameter
function invalidEmail($email)
{
    // Declare Boolean Variable
    $result = false;

    // Check Fields Are Empty Using Built-In Function
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Sets To True, If Email Is Invalid Sends Error Message
        $result = true;

        // If the Email Address Is Valid, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

// Function For Checking Password Matches Against Repeated Password
// Recieves 2 Parameters
function pwdMatch($pwd, $repeat_pwd)
{
    // Declare Boolean Variable
    $result = false;

    // Check If Password Matches
    if ($pwd !== $repeat_pwd) {
        // Sets To True, If Password Does Not Match & Sends Error Message
        $result = true;

        // If Password Match, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

// Function For Checking Length of Password
// Recieves 1 Parameter

// Long Password
function longPwd($pwd)
{
    // Declare Boolean Variable
    $result = false;

    // Set The Maximum Length Of The Password To 10
    $max = 10;

    // Stores The Number Of Characters In A Variable
    $len = strlen($pwd);


    // Check If The Number Of Characters Is Greater Than The Maximum
    if ($len > $max) {
        // Sets To True, If Length Of Characters Is Longer Than 10 & Sends Error Message
        $result = true;

        // If Password Length Is Less Than 11, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

// Short Password
function shortPwd($pwd)
{
    // Declare Boolean Variable
    $result = false;

    // Set The Minimum Length Of The Password To 8
    $min = 8;

    // Stores The Number Of Characters In A Variable
    $len = strlen($pwd);


    // Check If The Number Of Characters Is Less Than The Minimum
    if ($len < $min) {
        // Sets To True, If Length Of Characters Is Less Than 8 & Sends Error Message
        $result = true;

        // If Password Length Is Greater Than 7, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

// Function For Checking If Email Exists In The Database
// Recieves 2 Parameters
function emailExists($conn, $email)
{
    // Basic SQL Statement & Stores The Result In A Variable
    //? Is Place Holder For Email Address
    $sql = "SELECT * FROM admin_tbl WHERE Email = ?; ";

    // Initialise Prepared Statement
    $stmt = mysqli_stmt_init($conn);

    // Check If There Are Any Errors, And Return Error Message
    // To The SignUp Page.
    // Using Built-In PHP Function
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../signup.php?error=fail");
    }

    // If There Are No Errors, Pass The Data From User
    // By Usisng A Built-In PHP Function
    mysqli_stmt_bind_param($stmt, "s", $email);

    /*
        Execute It & Pass In The $stmt Parameter
        We Do Not Want To Sign Up The User If Email Exists Already
        In The Database Using The Built-In PHP Function
        */
    mysqli_stmt_execute($stmt);

    // Grab The Data From The Database & Store It In A Variable
    // And Pass In The $stmt Parameter

    $resultData = mysqli_stmt_get_result($stmt);

    // Check If There Is Any Result Data/Email Using The Built-In PHP Function
    // If There Is Data/Email, It Will True
    // & Stores The Result In A Variable Called $row

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        // If There Is No Result/Email, Returns False
        $result = false;
        return $result;
    }
    // Close The Prepared Statement
    mysqli_stmt_close($stmt);
}


// Function To Create A New User
// Recieves 3 Parameters
function createUser($conn, $fname, $email, $pwd)
{
    // Create Basic SQL Statment & Stores The Result In A Variable
    $sql = "INSERT INTO admin_tbl (Fullname, Email, Password) VALUES (?, ?, ?)";

    // Initialise Prepared Statement
    $stmt = mysqli_stmt_init($conn);

    // Check If There Are Any Errors & Return Error Message
    // On The SignUp Page
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../signup.php?error=stmt_failed");
        exit();
    }

    // Hash The Password & Store The Result In A Variable
    // Using The Built-In PHP Function
    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

    // If There Are No Errors, Pass The Data From The User
    // By Using The Built-In PHP Function
    mysqli_stmt_bind_param($stmt, "sss", $fname, $email, $hashPwd);

    // Execute The SQL Statement And Pass The Parameters
    // We Do Not Want To Sign Up The User If There Are Errors
    mysqli_stmt_execute($stmt);

    //Close the connection
    mysqli_stmt_close($stmt);
}



//Login function to deal with empty fields
//Recieves 2 parameters
function EmptyInputLogin($username, $pwd)
{
    //checks if fields are empty
    if (empty($username) || empty($pwd)) {
        //Go ahead and login
        $result = true;
        return $result;
    }
}
function emptyInputBooking($firstname, $lastname, $email, $mobileno, $bookingdate, $bookingtime, $nopeople, $occasion)
{
    // Declare Boolean Variable
    $result = false;

    // Check Fields Are Empty Using Built-In Function
    if (empty($firstname) || empty($lastname) || empty($email) || empty($mobileno) || empty($bookingdate) || empty($bookingtime) || empty($nopeople)  || empty($occasion)) {
        // Sets To True, Sends Error Message
        $result = true;

        // If the Fields Are Filled, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

// Short Password
function shortPhone($mobileno)
{
    // Declare Boolean Variable
    $result = false;

    // Set The Minimum Length Of The Password To 8
    $min = 8;

    // Stores The Number Of Characters In A Variable
    $len = strlen($mobileno);


    // Check If The Number Of Characters Is Less Than The Minimum
    if ($len < $min) {
        // Sets To True, If Length Of Characters Is Less Than 8 & Sends Error Message
        $result = true;

        // If Password Length Is Greater Than 7, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

function longPhone($mobileno)
{
    // Declare Boolean Variable
    $result = false;

    // Set The Maximum Length Of The Password To 9
    $max = 9;

    // Stores The Number Of Characters In A Variable
    $len = strlen($mobileno);


    // Check If The Number Of Characters Is Greater Than The Maximum
    if ($len > $max) {
        // Sets To True, If Length Of Characters Is Longer Than 9 & Sends Error Message
        $result = true;

        // If Password Length Is Less Than 10, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

// Function For Checking If Email Exists In The Database
// Recieves 2 Parameters
function customeremailExists($conn, $email)
{
    // Basic SQL Statement & Stores The Result In A Variable
    //? Is Place Holder For Email Address
    $sql = "SELECT * FROM booking_tbl WHERE Email = ?; ";

    // Initialise Prepared Statement
    $stmt = mysqli_stmt_init($conn);

    // Check If There Are Any Errors, And Return Error Message
    // To The SignUp Page.
    // Using Built-In PHP Function
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../signup.php?error=fail");
    }

    // If There Are No Errors, Pass The Data From User
    // By Usisng A Built-In PHP Function
    mysqli_stmt_bind_param($stmt, "s", $email);

    /*
        Execute It & Pass In The $stmt Parameter
        We Do Not Want To Sign Up The User If Email Exists Already
        In The Database Using The Built-In PHP Function
        */
    mysqli_stmt_execute($stmt);

    // Grab The Data From The Database & Store It In A Variable
    // And Pass In The $stmt Parameter

    $resultData = mysqli_stmt_get_result($stmt);

    // Check If There Is Any Result Data/Email Using The Built-In PHP Function
    // If There Is Data/Email, It Will True
    // & Stores The Result In A Variable Called $row

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        // If There Is No Result/Email, Returns False
        $result = false;
        return $result;
    }
    // Close The Prepared Statement
    mysqli_stmt_close($stmt);
}

function customerinvalidEmail($email)
{
    // Declare Boolean Variable
    $result = false;

    // Check Fields Are Empty Using Built-In Function
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Sets To True, If Email Is Invalid Sends Error Message
        $result = true;

        // If the Email Address Is Valid, Sets The Variable To False
    } else {
        $result = false;
    }
    // Accepts & Submits The Data To The Database
    return $result;
}

// Function To Create A New User
// Recieves 3 Parameters
function createCustomer($conn, $firstname, $lastname, $email, $mobileno, $bookingdate, $bookingtime, $nopeople, $occasion)
{
    // Create Basic SQL Statment & Stores The Result In A Variable
    $sql = "INSERT INTO booking_tbl (Firstname, Lastname, Email, MobileNo, Bookingdate, Bookingtime, nopeople, occasion) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Initialise Prepared Statement
    $stmt = mysqli_stmt_init($conn);

    // Check If There Are Any Errors & Return Error Message
    // On The SignUp Page
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../signup.php?error=stmt_failed");
        exit();
    }

    // If There Are No Errors, Pass The Data From The User
    // By Using The Built-In PHP Function
    mysqli_stmt_bind_param($stmt, "ssssssss", $firstname, $lastname, $email, $mobileno, $bookingdate, $bookingtime, $nopeople, $occasion);

    // Execute The SQL Statement And Pass The Parameters
    // We Do Not Want To Sign Up The User If There Are Errors
    mysqli_stmt_execute($stmt);

    //Close the connection
    mysqli_stmt_close($stmt);
}


//login function
function loginUser($conn, $username, $pwd)
{
    $emailExists = emailExists($conn, $username);

    //check if email does not exist in database
    if ($emailExists === false) {
        Header('Location:../login.php?error=wrong_username');
        exit();
    }
    //Verifies the password the user has submitted with the
    //hashed password. Grabs the column of fieldname from the database
    $pwdHashed = $emailExists["Password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        Header('Location:../login.php?error=wrong_password');
        exit();
    } else if ($checkPwd === true) {
        //Start session
        session_start();
        $_SESSION['AdminID'] = $emailExists['AdminID'];
        $_SESSION['Fullname'] = $emailExists['Fullname'];
        $_SESSION['Email'] = $emailExists['Email'];
        $_SESSION['Password'] = $emailExists['Password'];
        $_SESSION['Datereg'] = $emailExists['Datereg'];
        Header('Location:../control_panel.php');
        exit();
    }
}
