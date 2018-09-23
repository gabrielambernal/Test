<?php

session_start();

if ( isset( $_SESSION['sso'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: http://localhost/Test/index.php");
}

	//Inicio la sesion
	//session_start();
	//para no tener problemas con cookies deshabilitadas has esto
	//con esto desactivamos las cookies y activamos el metodo get para la sesion
/*	ini_set("session.use_cookies","1");
	ini_set("session.use_only_cookies","1");
	ini_set("session.use_trans_sid","0");
	session_start();
	header("Cache-control:private");
	if(!isset($_SESSION["sso"]))
	{
	//	header ("Location: ../index.php");
  echo "Bienv!";
		exit;
	} */
?>
