<!-- Calling header page-->
<?php
// Calling Connection page
include_once('includes/connection.php');

if (isset($_GET['Custid'])) {
    //Access the Custid from the database and set the variable to the $Custid = $_GET['Custid'];
    //Using the built in function
    $Custid = mysqli_real_escape_string($conn, $_GET['Custid']);

    //Query the database
    $query = "DELETE FROM booking_tbl WHERE Custid = $Custid";

    $result = mysqli_query($conn, $query);

    if ($query) {
        header("Location:booking_list.php");
    }
}
