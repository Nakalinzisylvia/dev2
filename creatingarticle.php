
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <form method="Post" action="insert.php">
           
        <div class="mb-3">
                <label for="exampleInputuser_id" class="form-label">user_id</label>
                <input type="int" class="form-control" id="exampleInputuser_id" aria-describedby="user_idHelp" name="user_id">

            </div>
        
        
        <div class="mb-3">
                <label for="exampleInputtitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputtitle" aria-describedby="titleHelp" name="title">

            </div>
            <div class="mb-3">
                <label for="exampleInputcontent" class="form-label">Content</label>
                <input type="text" class="form-control" id="exampleInputcontent" name="content">
            </div>

            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>