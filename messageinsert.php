<?php
include "./conn.php";

// Safely get POST data
$rd = $_POST['receiver_id'] ;
$sb = $_POST['subject'] ;
$ms = $_POST['messsage'] ;
$cr = $_POST['created_at'] ?? date('d-m-Y H:i:s'); // Use current time if not provided
// Check for required fields
if (!$rd || !$sb || !$ms ) {
    die("Required fields missing.");
}



// Prepare SQL statement
$stmt = $con->prepare("INSERT INTO devto.messages (receiver_id, subject, message, created_at) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $rd, $sb, $ms, $cr );

// Execute and check for success
if ($stmt->execute()) {
    echo "Message sent successfully.";
} else {
    echo "Failed to send message: " . $stmt->error;
}

$stmt->close();
$con->close();
?>