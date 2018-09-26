<?php
include "dbcon.php";
if(isset($_GET['idReq'])) {
    $sql = "DELETE FROM users WHERE sso='".($_GET['idReq']). "'";
    $conn->query($sql) or die ("ERROR AL BORRAR LOS DATOS ".mysqli_error($conn));
    header("Location: http://localhost/Test/vistas/dashboard/users.php");
}
 ?>
