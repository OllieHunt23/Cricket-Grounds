<?php
//Start session
session_start();

//Delete session
session_unset();
session_destroy();

//Redirect user to home page
header('Location:index.php');

//stop script from running
exit();
