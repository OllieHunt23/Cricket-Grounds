<!-- Calling header page-->
<?php
// Calling Connection page
include_once('includes/connection.php');

if (isset($_GET['AdminID'])) {
    //Access the Admin ID from the database and set the variable to the $AdminID = $_GET['AdminID'];
    //Using the built in function
    $AdminID = mysqli_real_escape_string($conn, $_GET['AdminID']);

    //Query the database
    $query = "DELETE FROM admin_tbl WHERE AdminID = $AdminID";

    $result = mysqli_query($conn, $query);

    if ($query) {
        header("Location:admin_list.php");
    }
}
