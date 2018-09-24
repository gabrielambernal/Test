<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg03">

    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <h2 class="tm-block-title mt-3">Create Account</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form  method="post" class="tm-login-form">
                                <div class="input-group">
                                    <label for="sso" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">SSO</label>
                                    <input name="sso" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="sso" placeholder="sso" required>
                                </div>
                                <div class="input-group">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Name</label>
                                    <input name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="name" placeholder="Firstname" required>
                                </div>
                                <div class="input-group">
                                    <label for="email" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Email</label>
                                    <input name="email" type="email" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="email" placeholder="user@domain.com" required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="password" type="password" class="form-control validate" id="password" placeholder="****" required>
                                </div>
                                <div class="input-group mt-3">
                                    <button type="submit" class="btn btn-primary d-inline-block mx-auto">Sign Me up!</button>
                                </div>
                                <div class="input-group mt-3">
                                    <p><em>Back to <a href="login.php">LOGIN</a> .</em></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
          include "php/dbcon.php";
          $name = $_POST["name"];
          $password = $_POST["password"];
          $email = $_POST["email"];
          $sso = $_POST["sso"];

          $insUs = "INSERT INTO users (sso, name, email, password)
          VALUES ('$sso','$name', '$email', '$password');";
          $res = $conn->query($insUs);

          echo $name;

        mysqli_close($conn);
         ?>

<?php include "vistas/footer.php" ?>
    </div>
</body>

</html>
