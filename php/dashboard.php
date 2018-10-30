<?php
include "dbcon.php";

$sql = "SELECT brand, COUNT(brand) AS numBrand FROM laptops GROUP By brand;";
$result = $conn->query($sql);

?>
