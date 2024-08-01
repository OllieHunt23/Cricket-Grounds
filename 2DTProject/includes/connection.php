<?php

//Declare connection variables
$serverName = "localhost";
$userName = "root";
$pwd = "";
$db = "1dt";

//Recieves 4 parameters through built-in php function
//& stores it in a variable
$conn = mysqli_connect($serverName, $userName, $pwd, $db);

if (!$conn) {
    die("could not connect to server" . mysqli_connect_error());
}
