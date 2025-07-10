<?php

include "./conn.php";


$sql = "select * from article";


$res = mysqli_query($con, $sql);

if ($res) {

    $data  = mysqli_fetch_all($res, MYSQLI_ASSOC);
} else {
    echo "Failed" . mysqli_error($con);
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Articles</title>
</head>

<body style="background-color: #fff;">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="./dev.png" alt="" height="50px" width="50px"></a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row ">
            <h4 class="mb-5 mt-5"> <span><a href="./createaccount.php"></a></span>My Articles</h4>
            <?php foreach ($data as $value) { ?>
                <div class="col-lg-4">
                    <div class="card">
                        <h5 class="card-header"> <?php echo $value['user_id'] ?></h5>
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $value['title'] ?> </h5>
                            <p class="card-text"><?php echo $value['content'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>