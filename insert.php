<?php

include "./conn.php";

// Getting data from the form using POST
$fn = $_POST['user_id'];
$ln = $_POST['title'];
$ca = $_POST['content'];
$cr = $_POST['created_at'];

// Inserting to the database
$sql = "INSERT INTO devto.article (user_id, title, content, created_at) 
    VALUES ('$fn','$ln', '$ca', '$cr')";

$insert = mysqli_query($con, $sql); // Point of execution

if ($insert) {
    echo "Data inserted successfully.";
} else {
    echo "Failed to insert data: " . mysqli_error($con);
}
?>
