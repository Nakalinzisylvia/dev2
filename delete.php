<?php

include "./conn.php";
//getting id to be deleted

$myvalue = $_GET['id'];

$sql = "DELETE from users where id = '$myvalue'";

$del = mysqli_query($con,$sql); 

if($del){
    echo "Deleted successfully";
    
}
else{
    echo "Failed to delete".mysqli_error($con); 
}
?>