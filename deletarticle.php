<?php

include "./conn.php";
//getting id to be deleted

$myvalue = $_GET['id'];

$sql = "DELETE from article where id = '$myvalue'";

$del = mysqli_query($con,$sql); 

if($del){
    header("Location: dashboard.php");
    exit;
    
}
else{
    echo "Failed to delete".mysqli_error($con); 
}
?>