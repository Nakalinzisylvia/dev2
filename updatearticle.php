<?php
include "./conn.php";

$myvalue = $_GET['id'] ?? null;

$sql = "select * from article where id='$myvalue'";

$update = mysqli_query($con, $sql);

if ($update) {

    $data  = mysqli_fetch_assoc($update); // single row mysqli_fetch_assoc

} else {
    echo "Failed" . mysqli_error($con);
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

<body>
    <div class="container mt-5">
        <h4>CREATE YOUR ARTICLE</h4>

        <form method="Post" action="updatearticlelogic.php" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="mb-3">
                <label for="exampleInputtitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputtitle" aria-describedby="titleHelp" name="title" value="<?= $data['title'] ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputcontent" class="form-label">Content</label>
                <input type="text" class="form-control" id="exampleInputcontent" name="content" value="<?= $data['content'] ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputcontent" class="form-label">Picture</label>
                <input type="file" class="form-control" id="exampleInputcontent" name="img" value="<?= $data['img'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>