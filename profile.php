<?php
session_start();


?>


<h1 class="text-center">WELCOME, <?php echo htmlspecialchars($user['username']); ?></h1>
       

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
      <p><strong>Username:</strong> <?php echo nl2br(htmlspecialchars($user['username'])); ?></p>
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