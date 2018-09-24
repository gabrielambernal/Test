<?php

  session_start();
  include "dbcon.php";

  $password = $_POST["password"];
  $sso = $_POST["sso"];
  $name = $_POST["name"];

  $logsso = " SELECT * FROM users WHERE sso = '$sso' AND password='$password'";
  $result = $conn->query($logsso);

  if ($result->num_rows > 0) {

        $_SESSION['sso'] = $sso;
          $_SESSION['name'] = $username;


        
        header("Location: ../vistas/dashboard/users.php");

     } else {
       echo "Username o Password estan incorrectos.";

       echo "<br><a href='../login.php'>Volver a Intentarlo</a>";
     }
   //}
     mysqli_close($conn);
     ?>
