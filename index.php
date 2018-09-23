<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2 style="color:blue;">WELCOME!</h2>
<form id="form" action="php/login.php" method="post" class="topBefore">
		  <input id="sso" type="text" placeholder="SSO" name="sso">
      <input id="password" type="password" placeholder="PASSWORD" name="password">
      <input id="submit" type="submit" value="Let me in!" name="sendUser">
      <p align="center">Or <a href="php/insertUser.php">Sign Up</a> </p>
</form>

</body>
</html>
