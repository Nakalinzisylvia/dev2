<?php

include "./conn.php";
// getting data from the form

// super globals ($_POST,$_GET)

$fn = $_POST['f_name'];
$ln = $_POST['l_name'];
$un = $_POST['username'];
$ea = $_POST['email'];
$tn = $_POST['telephone'];
$pw =$_POST['password'];


//password hashing

$passHash = md5($pw);


// inserting to the database

$sql = "INSERT INTO users(f_name,l_name,username,email,telephone,password) 
values('$fn','$ln','$un','$ea','$tn','$passHash') ";

$insert = mysqli_query($con,$sql); //point of execution

if($insert){
   echo 'data inserted';
}
else{
    echo "Failed to insert data".mysqli_error($con); 
}
?>