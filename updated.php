<?php
include "./conn.php";

$myvalue = $_GET['id'] ?? null;

$sql = "select * from users where id='$myvalue'";

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

    <title>Updated form</title>
</head>
<strong>

    <body>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2>Updated Form </h2>

                <form method="Post" action="update.php">

                    <input type="hidden" ... name="id" value="<?= $data['id'] ?>">
                    <div class="mb-3">
                        <label for="First Name" class="form-label">F_Name</label>
                        <input type="text" class="form-control" id="exampleInputFirst Name" aria-describedby="F_Name" name="f_name" value="<?= $data['f_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="Last Name" class="form-label">L_Name</label>
                        <input type="text" class="form-control" id="exampleInputLast Name" aria-describedby="L_Name" name="l_name" value="<?= $data['l_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="User Name" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="user_name" aria-describedby="emailHelp" name="username" value="<?= $data['username'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id=" email" aria-describedby="emailHelp" name="email" value="<?= $data['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telephone</label>
                        <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telephone" value="<?= $data['telephone'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?= $data['password'] ?>">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</strong>

</html>