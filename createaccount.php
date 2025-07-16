<?php
session_start();

$_SESSION['user_id'] = $user['id'];
// Block access if not logged in
if ($_SESSION['loggedin'] === true) {
    header("Location:dashboard.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>registration form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action="insert2.php" method="POST">
                    <span class="login100-form-title p-b-49">
                        Registration Form
                    </span>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="firstname is reauired">
                        <span class="label-input100">F_Name</span>
                        <input class="input100" type="text" name="f_name" placeholder="Firstname">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="lastname is reauired">
                        <span class="label-input100">L_Name</span>
                        <input class="input100" type="text" name="l_name" placeholder="Lastname">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="uername is reauired">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                   
                    <div class="wrap-input100 validate-input m-b-23" data-validate="email is reauired">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                     <div class="wrap-input100 validate-input m-b-23" data-validate="Telephone is reauired">
                        <span class="label-input100">Telephone No</span>
                        <input class="input100" type="text" name="telephone" placeholder="Tel__">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div><br>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Submit
                            </button>
                        </div>
                    </div>

                    <div class="flex-col-c p-t-155">
                        <span class="txt1 p-b-1">
                            Or Arleady Have An Account
                        </span>

                        <a href="loginform.php" class="txt2">
                            CLICK HERE TO LOGIN
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>