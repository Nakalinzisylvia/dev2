<?php

include "./conn.php";
//getting id to be deleted

$tl = $_POST['title'];
$ct = $_POST['content'];
$imageTmpPath = $_FILES['img']['tmp_name']; // image name
if (!file_exists($imageTmpPath)) {
    die("Image upload failed.");
}

$imageContent = file_get_contents($imageTmpPath); //actual image
$img = base64_encode($imageContent); // image to text

$id = $_POST['id'];


$sql = "UPDATE devto.article SET title='$tl', content='$ct', img='$img' WHERE id = '$id';";

$update = mysqli_query($con, $sql);

if ($update) {
   header("Location: dashboard.php");
    exit;
} else {
    echo "Failed to update" . mysqli_error($con);
}
?>