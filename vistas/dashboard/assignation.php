<!DOCTYPE html>
<html lang="en">

<?php include "../head.php"; ?>

<body class="bg02">
    <div class="container">
<?php include "../header.php" ?>
        <div class="row tm-mt-big">
            <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Assignation</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="" method="post" class="tm-edit-product-form">

                                <div class="input-group mb-3">
                                    <label for="sso" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">SSO
                                    </label>
                                    <input id="sso" name="sso" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>

                                <div class="input-group mb-3">
                                    <label for="serialNumber" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Serial Number
                                    </label>
                                    <input id="serialNumber" name="serialNumber" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Add
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        include "../../php/dbcon.php";

          $sso = $_POST["sso"];
          $serialNum = $_POST["serialNumber"];


          $insAsign = "INSERT INTO assignation(`date`,  `sso`, `serialNumber`)
          VALUES (CURDATE(), '$sso','$serialNum')";
          $res = $conn->query($insAsign);
        mysqli_close($conn);

        echo "$insAsign";
         ?>


<?php include "../footer.php"; ?>
    </div>

<!--    <script src="js/jquery-3.3.1.min.js"></script> -->
    <!-- https://jquery.com/download/ -->
<!--    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script> -->
    <!-- https://jqueryui.com/download/ -->
<!--    <script src="js/bootstrap.min.js"></script> -->
    <!-- https://getbootstrap.com/ -->

</body>

</html>
