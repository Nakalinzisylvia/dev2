<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = '127.0.0.1';
$user = 'root';
$database =  'devto';
$password  = '12345';

$con = mysqli_connect('127.0.0.1','root','12345','devto');{

}

if(!$con){
   echo"Failed".mysqli_connect_error();
}


?>