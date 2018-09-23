<!DOCTYPE html>
<html lang="en" >
<?php
// Turn off error reporting
  error_reporting(0);
  include "dbcon.php"
 ?>
<head>
  <meta charset="UTF-8">
  <title>Asignaciones</title>
      <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  	<header>ADD USER</header>

      <?php
        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $sso = $_POST["sso"];

        $insUs = "INSERT INTO users (sso, name, email, password)
        VALUES ('$sso','$name', '$email', '$password');";
        $res = $conn->query($insUs);

      //  echo "$insUs";

      mysqli_close($conn);
       ?>

<form id="form" method="post" class="topBefore">
		  <input id="sso" type="text" placeholder="SSO" name="sso" required>
		  <input id="name" type="text" placeholder="NAME" name="name" required>
      <input id="email" type="email" placeholder="EMAIL" name="email" required>
      <input id="password" type="password" placeholder="PASSWORD" name="password" required>
      <input id="submit" type="submit" value="GO!" name="sendUser">
</form>


    <script  src="js/index.js"></script>

</body>
</html>
