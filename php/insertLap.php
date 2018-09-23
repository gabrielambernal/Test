<!DOCTYPE html>
<html lang="en" >
<?php include "dbcon.php"


 ?>
<head>
  <meta charset="UTF-8">
  <title>Asignaciones</title>
      <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  	<header>ADD LAPTOP</header>

      <?php
        $serialNum = $_POST["serialNum"];
        $brand = $_POST["brand"];
        $color = $_POST["color"];
        $model = $_POST["model"];
        $description = $_POST["description"];

        $insLap = "INSERT INTO laptops (serialNumber, brand, model, color, description)
        VALUES ('$serialNum','$brand','$model', '$color', '$description');";
        $res = $conn->query($insLap);
      mysqli_close($conn);

      echo "$insLap";
       ?>

<form id="form" method="post" class="topBefore">
		  <input type="text" placeholder="SERIAL NUMBER" name="serialNum">
		  <input type="text" placeholder="BRAND" name="brand">
		  <input type="text" placeholder="MODEL" name="model">
      <input type="text" placeholder="COLOR" name="color">
      <textarea name="description" placeholder="DESCRIPTION" rows="8" cols="80"></textarea>
      <input id="submit" type="submit" value="GO!" name="sendLap">
</form>


    <script  src="js/index.js"></script>

</body>
</html>
