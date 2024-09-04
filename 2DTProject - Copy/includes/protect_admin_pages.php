<?php
//Protect admin pages from unauthorized access
//check if session is not set before redirect to index page
if ($_SESSION['AdminID']) {
    header('Location:index.php');
}
