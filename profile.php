<?php
session_start();
include 'conn.php'; // database connection

// Redirect to login if not logged in
if (isset($_SESSION['user_id'])) {
    header("Location: loginform.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);
} else {
    echo "User not found.";
    exit;
}
?>

<h2>Welcome, <?php echo htmlspecialchars($user['username']); ?></h2>
<p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
<p><strong>Bio:</strong> <?php echo htmlspecialchars($user['bio']); ?></p>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow p-4 mx-auto" style="max-width: 600px;">
    <div class="text-center mb-4">
      <img src="<?php echo $user['profile_pic'] ? $user['profile_pic'] : 'default.jpg'; ?>" class="rounded-circle" width="150" height="150" alt="Profile Picture">
    </div>
    <h4 class="text-center"><?php echo htmlspecialchars($user['username']); ?></h4>
    <p class="text-center text-muted"><?php echo htmlspecialchars($user['email']); ?></p>
    <p><strong>Bio:</strong> <?php echo nl2br(htmlspecialchars($user['bio'])); ?></p>

    <!-- Upload Form -->
    <form action="upload_profile_pic.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="profile_pic" class="form-label">Upload New Profile Picture</label>
        <input class="form-control" type="file" name="profile_pic" id="profile_pic" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Upload</button>
    </form>
  </div>
</div>

</body>
</html>
