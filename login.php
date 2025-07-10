<!doctype html>
<html lang="en">

<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">

            <!-- start of alert  -->
            <?php if ($_GET['msg']) { ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        <?php
                        $msg = $_GET['msg'];
                        echo $msg;
                        ?>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php } ?>
            <!-- end of alert  -->

            <form action="./login2.php" method="POST">
                <div class="mb-3"><br><br>
                    <b><label for="exampleInputEmail1" class="form-label">Email</label></b>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <b><label for="exampleInputPassword1" class="form-label">Password</label></b>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>