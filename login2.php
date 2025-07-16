
<?php
session_start();
include './conn.php';

ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);


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

if ($numRows > 0) {                   //here we know someone is logged in
    $_SESSION['loggedin'] = true;
    // $_SESSION['user_id'] = $user['id']; 
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");

} else {
    echo " Login failed.";
    header("Location: loginform.php?msg=Incorrect credentials");
    exit;
}
