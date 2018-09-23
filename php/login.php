<?php

  session_start();
  include "dbcon.php";

  $password = $_POST["password"];
  $sso = $_POST["sso"];

  $logsso = " SELECT * FROM users WHERE sso = '$sso' AND password='$password'";
  $result = $conn->query($logsso);

  if ($result->num_rows > 0) {

        $_SESSION['sso'] = $sso;


        echo "Bienvenido! " . $_SESSION['sso'];
        header("Location: menu.php");

     } else {
       echo "Username o Password estan incorrectos.";

       echo "<br><a href='../index.php'>Volver a Intentarlo</a>";
     }
   //}
     mysqli_close($conn);
     ?>
