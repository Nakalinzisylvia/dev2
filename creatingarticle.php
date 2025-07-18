<?php
session_start();

include 'conn.php'; // database connection

if (isset($_POST['title']) && isset($_POST['content'])) {
    $user_id = $_SESSION['user_id']; // Get logged-in user ID
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);

    $sql = "INSERT INTO articles (user_id, title, content) VALUES ('$user_id', '$title', '$content')";

    if (mysqli_query($con, $sql)) {
        echo "Article posted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>create article</title>
</head>

<body style="background-image: url('./site.jpg');">
    <div class="container mt-5">
        <h4>CREATE YOUR ARTICLE</h4>

        <form method="Post" action="insertarticle.php" enctype="multipart/form-data">

             <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="title"></textarea>
                <label for="floatingTextarea2">Title</label>
            </div><br>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px" name="content"></textarea>
                <label for="floatingTextarea2">Content</label>
            </div>

            <div class="mb-3">
                <label for="exampleInputcontent" class="form-label">Picture</label>
                <input type="file" class="form-control" id="exampleInputcontent" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>