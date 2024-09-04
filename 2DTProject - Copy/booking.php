<!-- Calling header page-->
<?php
$page_title = "Bookings";

// calling header and nav pages
include 'includes/nav.php';
include 'includes/header.php';

// Calling Connection page
include_once('includes/connection.php')

?>

<!-- Start of content-->
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
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
                // Phone number too long message
                if ($_GET['error'] == "phone_number_is_too_long") {
                    echo '<div class="alert alert-danger" role="alert">
                    Phone number is too long! Max of 9
                     </div>';
                }
                // Phone number too short message
                if ($_GET['error'] == "phone_number_is_too_short") {
                    echo '<div class="alert alert-danger" role="alert">
                            Phone number is too short! Max of 8
                                </div>';
                }
            }
            ?>

            <form class="form-control-lg shadow-lg p-3 mb-5 bg-colour  rounded " action="includes/booking_inc.php" method="POST">
                <h2 class="text-colour">Bookings</h2>
                <div class="form-group row pt-4">
                    <label for="first_name" class="col-sm-2 col-form-label text-colour">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="Firstname" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="surname" class="col-sm-2 col-form-label text-colour">Surname</label>
                    <div class="col-sm-10">
                        <input type="text" name="Lastname" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="email" class="col-sm-2 col-form-label text-colour">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" name="Email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="phone_number" class="col-sm-2 col-form-label text-colour">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" name="MobileNo" class="form-control" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="date" class="col-sm-2 col-form-label text-colour">Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="Bookingdate" class="form-control" placeholder="DD/MM/YYYY">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="time" class="col-sm-2 col-form-label text-colour">Time</label>
                    <div class="col-sm-10">
                        <input type="time" name="Bookingtime" class="form-control" placeholder="12:00">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="nopeople" class="col-sm-2 col-form-label text-colour">People</label>
                    <div class="col-sm-10">
                        <input type="number" name="nopeople" class="form-control" placeholder="Number of people">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="occasion" class="col-sm-2 col-form-label text-colour">Occasion</label>
                    <div class="col-sm-10">
                        <input type="text" name="occasion" class="form-control" placeholder="Occasion">
                    </div>
                </div>

                <div class="form-group row pt-5">
                    <div class="col-sm-10">
                        <button class="button" type="submit" name="book_btn">Book</button>
                    </div>
                </div>


            </form>

        </div>
        <div class="col-sm-3">

        </div>
    </div>


</div>

<!-- Start of content 2 -->
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





<!-- Calling footer page-->
<?php
include 'includes/footer.php';
?>