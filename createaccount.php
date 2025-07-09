<!doctype html>
<html lang="en">

<head>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Createaccount</title>
</head>

<body>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><br>

      <h4>Create your Account <span><a href="./login.php">LOGIN</a></span></h4>
      <form method="POST" action="./insert2.php">
        <div class="mb-3">
          <label class="form-label"><b>Profile Image</b></label>
          <input type="file" class="form-control">
        </div>

        <div class="mb-3">
          <label for="nameInput" class="form-label"><b>F_name</b></label>
          <input type="text" class="form-control" id="nameInput" name="f_name">
        </div>

        <div class="mb-3">
          <label for="nameInput" class="form-label"><b>L_name</b></label>
          <input type="text" class="form-control" id="nameInput" name="l_name">
        </div>

        <div class="mb-3">
          <label for="usernameInput" class="form-label"><b>Username</b></label>
          <input type="text" class="form-control" id="usernameInput" name="username">
        </div>

        <div class="mb-3">
          <label for="emailInput" class="form-label"><b>Email</b></label>
          <input type="email" class="form-control" id="emailInput" name="email">
        </div>

        <div class="mb-3">
          <label for="telephoneInput" class="form-label"><b>Telephone</b></label>
          <input type="tel" class="form-control" id="telephoneInput" name="telephone">
        </div>

        <div class="mb-3">
          <label for="passwordInput" class="form-label"><b>Password</b></label>
          <input type="password" class="form-control" id="passwordInput" name="password">
        </div>
        <div>
          <button type="submit" class="btn btn-primary"><b>Sign up</b></button>
        </div>

      </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>