<?php
include "dbcon.php";
if(isset($_GET['idReq'])) {
    $sql = "DELETE FROM assignation WHERE idRequest='".($_GET['idReq']). "'";
    $conn->query($sql) or die ("ERROR AL BORRAR LOS DATOS ".mysqli_error($conn));
    header("Location: http://localhost/Test/vistas/dashboard/assignations.php");
}
 ?>
