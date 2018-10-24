<?php
include "dbcon.php";

 if(isset($_POST["Import"])){

		$filename=$_FILES["file"]["tmp_name"];


		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {


	           $sql = "INSERT INTO laptops (serialNumber, brand, model, color, description)
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
                  $res = $conn->query($sql);
				if(!isset($res))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"../vistas/dashboard/home.php\"
						  </script>";
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"../vistas/dashboard/home.php\"
					</script>";
				}
	         }

	         fclose($file);
		 }
	}


 ?>
