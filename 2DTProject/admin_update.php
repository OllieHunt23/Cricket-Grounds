<!-- Calling header page-->
<?php
$page_title = "Admin Update";

//Call protect admin page
// include_once 'includes/protect_admin_pages.php';

// calling header and nav pages
include 'includes/admin_nav.php';
include 'includes/header.php';


// Calling Connection page
include_once('includes/connection.php');

//Gets the AdminID from the Admin list page, which was passed the url parameter
//in a variable called $AdminID. This will be unwrapped to access the corresponding
//AdminID from the database. Global $_GET variable is used to access the AdminID

$AdminID = mysqli_real_escape_string($conn, $_GET['AdminID']);
//Check if the user got here legitimately when update_btn is clicked
//the data will be stored in variables

if (isset($_POST['update_btn'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Query the database and store the result in a variable
    $sql_query = "UPDATE admin_tbl SET
                    AdminID = $AdminID,
                    Fullname = '$fname',
                    Email = '$email',
                    Password = '$pwd'
                    WHERE AdminID = $AdminID";
    //Execute the SQL query
    if (mysqli_query($conn, $sql_query)) {
        //Redirect to the admin_list page if no errors
        header('Location:admin_list.php?');
        //Error Message is returned if there is an error
    } else {
        //if there are errors, spit out error message
        echo 'Error: ' . mysqli_error($conn);
    }
}
//Create new query
$query = "SELECT * FROM admin_tbl WHERE AdminID = $AdminID";


//Get the result from the database using the built in function
//Pass in 2 parameters
$result = mysqli_query($conn, $query);

//Fetch data from database using built in function
//Pass in 1 parameter
$admin = mysqli_fetch_assoc($result);

//Free the result using themysqli_free_result object
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
            <h2 class="text-colour">Admin Update</h2>
            <form class="form-control-lg" action="" method="POST">
                <div class="form-group row pt-4">
                    <label for="fullname" class="col-sm-2 col-form-label text-colour">Fullname</label>
                    <div class="col-sm-10">
                        <input type="text" name="fullname" class="form-control" placeholder="Fullname" value=<?php echo $admin['Fullname']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="email" class="col-sm-2 col-form-label text-colour">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" placeholder="Email" value=<?php echo $admin['Email']; ?>>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label text-colour">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="pwd" class="form-control" placeholder="Password" value=<?php echo $admin['Password']; ?>>
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