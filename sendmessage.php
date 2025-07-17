
<?php

include "./conn.php";


$sql = "select * from messages";


$res = mysqli_query($con, $sql);

if ($res) {

    $data  = mysqli_fetch_all($res, MYSQLI_ASSOC);
} else {
    echo "Failed" . mysqli_error($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Send Message</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .message-form {
      width: 100%;
      max-width: 500px;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <div class="message-form">
    <h4 class="mb-4 text-center">Send a Message</h4>
    <form action="sendmessage.php" method="POST">
      <!-- Hidden field for sender_id (assumes session) -->
      <input type="hidden" name="sender_id" value="<?php echo $_SESSION['user_id']; ?>">
      
      <!-- Receiver Email or ID -->
      <div class="mb-3">
        <label for="receiver" class="form-label">To (User Email)</label>
        <input type="email" class="form-control" id="receiver" name="receiver_email" required>
      </div>

      <!-- Message Subject -->
      <div class="mb-3">
        <label for="subject" class="form-label">subject </label>
        <input type="text" class="form-control" id="subject" name="subject" required>
      </div>

      <!-- Message Body -->
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
  </div>

</body>
</html>
