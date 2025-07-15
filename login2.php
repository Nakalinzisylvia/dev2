<?php
session_start(); 

include './conn.php';

$email = $_POST['email'] ?? '';
$pass = $_POST['password'] ?? '';
$passHash = md5($pass);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passHash'";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("SQL error: " . mysqli_error($con));
}

$numRows = mysqli_num_rows($result);
echo "Rows matched: " . $numRows;

// Set session variables

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['logged_in'] = true;

if ($numRows > 0) {
   header("Location: dashboard.php");
    exit;

} else { 
    
    // Optionally unset any session data if login fails
    session_unset();
    session_destroy();


    echo "Login failed.";
    header("Location: login.php?msg=Incorrect credentials");
    exit;
}
?>