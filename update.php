<?php

include "./conn.php";
//getting id to be deleted

$fn = $_POST['f_name'];
$ln = $_POST['l_name'];
$un = $_POST['username'];
$ea = $_POST['email'];
$tn = $_POST['telephone'];


$id = $_POST['id'];


$sql = "UPDATE devto.users SET f_name='$fn', l_name='$ln', username='$un', email='$ea', telephone=$tn WHERE id = '$id';";

$update = mysqli_query($con, $sql);

if ($update) {
    echo "Updated";
} else {
    echo "Failed to update" . mysqli_error($con);
}
?>