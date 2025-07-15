<?php
session_start(); //starting session on login

ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include './conn.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$passHash = md5($pass);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passHash'";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("SQL error: " . mysqli_error($con));
}

$numRows = mysqli_num_rows($result);
echo "Rows matched: " . $numRows;

if ($numRows > 0) {
    $_SESSION['email'] = $email;
    // var_dump($_SESSION); return;
   header("Location: dashboard.php");
    exit;
} else {
    echo "❌ Login failed.";
    header("Location: loginform.php?msg=Incorrect credentials");
    exit;
}
