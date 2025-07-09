<?php

include "./conn.php";


$sql = "select * from users";


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
    <title>Registration</title>
</head>

<body style="background-color: #fff;">

    <div class="container">
        <h3 style="text-align: center;">Registered Users <span class="btn btn-warning"><a href="createaccount.php"> create Account</a></span></h3>

        <table class="table table-striped" border="5">
            <thead>
                <tr>
                    <th>#</th>
                    <th>f_name</th>
                    <th>l_name</th>
                    <th>username</th>
                    <th>email</th>
                    <th>telephone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value) {
                ?>
                    <tr>
                        <td><?php echo $value['id'] ?> </td>
                        <td><?php echo $value['f_name'] ?></td>
                        <td><?php echo $value['l_name'] ?></td>
                        <td><?php echo $value['username'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['telephone'] ?></td>
                        
                        <td>
                            <a href="delete.php?id=<?= $value['id'] ?>" class="btn btn-danger">Delete</a>
                            <a href="updated.php?id=<?= $value['id'] ?>" class="btn btn-primary">Update</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>