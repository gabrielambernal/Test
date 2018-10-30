<?php
include "dbcon.php";

$sql = "SELECT brand, COUNT(brand) AS numBrand FROM assignation NATURAL JOIN users NATURAL JOIN laptops GROUP By brand;";
$result = $conn->query($sql);

?>
