<?php
session_start();              // Start the session
// session_unset();              // Unset all session variables
// session_destroy();            // Destroy the session

// Redirect to login page or home


// var_dump($_SESSION['loggedin']);return;
unset($_SESSION['loggedin']);

$_SESSION['loggedin'] = false;

header("Location:loginform.php"); 

exit();
?>