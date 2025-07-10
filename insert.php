<?php
include "./conn.php";

// Safely get POST data
$fn = $_POST['user_id'] ;
$ln = $_POST['title'] ;
$ca = $_POST['content'] ;
$cr = $_POST['created_at'] ?? date('d-m-Y H:i:s'); // Use current time if not provided

// Check for required fields
if (!$fn || !$ln || !$ca) {
    die("Required fields missing.");
}

// Prepare SQL statement
$stmt = $con->prepare("INSERT INTO devto.article (user_id, title, content, created_at) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $fn, $ln, $ca, $cr);

// Execute and check for success
if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Failed to insert data: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
