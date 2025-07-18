<?php
include "./conn.php";

// Safely get POST data
// $fn = $_POST['user_id'] ;
$ln = $_POST['title'] ;
$ca = $_POST['content'] ;
$cr = $_POST['created_at'] ?? date('d-m-Y H:i:s'); // Use current time if not provided
// Check for required fields
if ( !$ln || !$ca ) {
    die("Required fields missing.");
}

$imageTmpPath = $_FILES['img']['tmp_name']; // image name
if (!file_exists($imageTmpPath)) {
    die("Image upload failed.");
}

$imageContent = file_get_contents($imageTmpPath); //actual image
$img = base64_encode($imageContent); // image to text

// Prepare SQL statement
$stmt = $con->prepare("INSERT INTO devto.article ( title, content, created_at, img) VALUES ( ?, ?, ?, ?)");
$stmt->bind_param("isss", $ln, $ca, $cr ,$img);

// Execute and check for success
if ($stmt->execute()) {
   header("Location: dashboard.php");
   exit;
} else {
    echo "Failed to insert data: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
