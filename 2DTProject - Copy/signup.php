<?php
// Declaring Variable
$page_title = "Sign Up";

// Calling Header & Nav Page
include 'includes/header.php';
include 'includes/nav.php';

//Call protect admin page
include_once 'includes/protect_admin_pages.php';

// Calling Connection Page
include_once('includes/connection.php')
?>

<!-- Start of Content 1 -->
<div class="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6 pt-5 pb-5">
            <?php
            if (isset($_GET['error'])) {
                // Empty Fields Message
                if ($_GET['error'] == "empty_fields") {
                    echo '<div class="alert alert-danger" role="alert">
                    Fill in all fields!
                    </div>';
                }
                // Invalid Email Message
                if ($_GET['error'] == "invalid_email") {
                    echo '<div class="alert alert-danger" role="alert">
                    Invalid email!
                    </div>';
                }
                // Password Doesn't Match Message
                if ($_GET['error'] == "password_does_not_match") {
                    echo '<div class="alert alert-danger" role="alert">
                    Passwords do not match!
                    </div>';
                }
                // Password Is Too Long Message
                if ($_GET['error'] == "password_is_too_long") {
                    echo '<div class="alert alert-danger" role="alert">
                    Password is too long! Maximum of 10!
                    </div>';
                }
                // Password Is Too Short Message
                if ($_GET['error'] == "password_is_too_short") {
                    echo '<div class="alert alert-danger" role="alert">
                    Password is too short! Minimum of 8!
                    </div>';
                }
                // Username/Email Already Exists Message
                if ($_GET['error'] == "email_already_exists") {
                    echo '<div class="alert alert-danger" role="alert">
                    Email is already taken!
                    </div>';
                }
            }
            ?>
            <form class="form-control-lg shadow-lg p-3 mb-5 bg-colour  rounded" action="includes/signup_inc.php" method="POST">
                <div class="form-group row pt-4">
                    <h2 class="text-colour">Sign Up</h2>
                    <label for="name" class="col-sm-2 col-form-label text-colour">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="fname" class="form-control" placeholder="Full name">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="email" class="col-sm-2 col-form-label text-colour">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="pwd" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="repeat_password" class="col-sm-2 col-form-label text-colour">Repeat Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="repeat_pwd" class="form-control" placeholder="Repeat Password">
                    </div>
                </div>
                <div class="form-group row pt-5">
                    <div class="col-sm-10">
                        <button class="button" type="submit" name="signup_btn">Sign up</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
</div>
<!-- End of Content 1 -->

<!-- Start of Content 2 -->
<div class="container">
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-10">

        </div>
        <div class="col-sm-1">

        </div>
    </div>
</div>
<!-- End of Content 2 -->

<!-- Calling Footer Page -->
<?php
include 'includes/footer.php';
?>