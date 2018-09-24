<?php
//ini_set("session.use_only_cookies","1");
//ini_set("session.use_trans_sid","0");
  session_start();
  include "dbcon.php";

  $password = $_POST["password"];
  $sso = $_POST["sso"];
  $name = $_POST["name"];


  $logsso = " SELECT * FROM users WHERE sso = '$sso' AND password='$password'";
//  $logadmin = " SELECT * FROM users WHERE sso = '$sso' AND type = 1";
  $result = $conn->query($logsso);
//  $res = $conn->query($logadmin);

/*  if ($result->num_rows > 0 && $res->num_rows > 0) {

        $_SESSION['admin'] = $admin;

        header("Location: ../vistas/dashboard/users.php");

     } else */

     if($result->num_rows > 0) {

       $_SESSION['sso'] = $sso;
       $_SESSION['name'] = $name;
       header("Location: ../vistas/dashboard/home.php");

     }else{
       echo "Username o Password estan incorrectos.";

       echo "<br><a href='../login.php'>Volver a Intentarlo</a>";
     }
   //}
     mysqli_close($conn);
     ?>
