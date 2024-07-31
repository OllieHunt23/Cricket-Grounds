<!-- Calling header page-->
<?php
$page_title = "Booking Update";

//Call protect admin page
include_once 'includes/protect_admin_pages.php';

// calling header and nav pages
include 'includes/admin_nav.php';
include 'includes/header.php';


// Calling Connection page
include_once('includes/connection.php');

//Gets the CustiD from the Booking list page, which was passed the url parameter
//in a variable called $Custid. This will be unwrapped to access the corresponding
//Custid from the database. Global $_GET variable is used to access the Custid

$Custid = mysqli_real_escape_string($conn, $_GET['Custid']);
//Check if the user got here legitimately when update_btn is clicked
//the data will be stored in variables

if (isset($_POST['update_btn'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['Firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['Lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $mobileno = mysqli_real_escape_string($conn, $_POST['MobileNo']);
    $bookingdate = mysqli_real_escape_string($conn, $_POST['Bookingdate']);
    $bookingtime = mysqli_real_escape_string($conn, $_POST['Bookingtime']);
    $nopeople = mysqli_real_escape_string($conn, $_POST['nopeople']);
    $occasion = mysqli_real_escape_string($conn, $_POST['occasion']);

    //Query the database and store the result in a variable
    $sql_query = "UPDATE booking_tbl SET
                    Custid = $Custid,
                    Firstname = '$firstname',
                    Lastname = '$lastname',
                    Email = '$email',
                    Mobileno = '$mobileno',
                    Bookingdate = '$bookingdate',
                    Bookingtime = '$bookingtime',
                    nopeople = '$nopeople',
                    occasion = '$occasion'
                    WHERE Custid = $Custid";
    //Execute the SQL query
    if (mysqli_query($conn, $sql_query)) {
        //Redirect to the booking_list page if no errors
        header('Location:booking_list.php?');
        //Error Message is returned if there is an error
    } else {
        //if there are errors, spit out error message
        echo 'Error: ' . mysqli_error($conn);
    }
};
//Create new query
$query = "SELECT * FROM booking_tbl WHERE Custid = $Custid";


//Get the result from the database using the built in function
//Pass in 2 parameters
$result = mysqli_query($conn, $query);

//Fetch data from database using built in function
//Pass in 1 parameter
$booking = mysqli_fetch_assoc($result);

//Free the result using the mysqli_free_result object
//Pass in one parameter
mysqli_free_result($result);
//Close the connection
mysqli_close($conn);

?>

<!-- Start of content-->
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h2 class="text-colour">Booking Update</h2>
            <form class="form-control-lg" action="" method="POST">
                <div class="form-group row pt-4">
                    <label for="email" class="col-sm-2 col-form-label text-colour">Firstname</label>
                    <div class="col-sm-10">
                        <input type="text" name="Firstname" class="form-control" placeholder="Firstname" value=<?php echo $booking['Firstname']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">Lastname</label>
                    <div class="col-sm-10">
                        <input type="text" name="Lastname" class="form-control" placeholder="Lastname" value=<?php echo $booking['Lastname']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="Email" class="form-control" placeholder="Email" value=<?php echo $booking['Email']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">MobileNo</label>
                    <div class="col-sm-10">
                        <input type="text" name="MobileNo" class="form-control" placeholder="MobileNo" value=<?php echo $booking['MobileNo']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">Booking date</label>
                    <div class="col-sm-10">
                        <input type="text" name="Bookingdate" class="form-control" placeholder="Booking date" value=<?php echo $booking['Bookingdate']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">Booking time</label>
                    <div class="col-sm-10">
                        <input type="text" name="Bookingtime" class="form-control" placeholder="Booking time" value=<?php echo $booking['Bookingtime']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">People</label>
                    <div class="col-sm-10">
                        <input type="text" name="nopeople" class="form-control" placeholder="nopeople" value=<?php echo $booking['nopeople']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">Occasion</label>
                    <div class="col-sm-10">
                        <input type="text" name="occasion" class="form-control" placeholder="occasion" value=<?php echo $booking['occasion']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-5">
                    <div class="col-sm-10">
                        <button class="button" type="submit" name="update_btn">Update</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
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