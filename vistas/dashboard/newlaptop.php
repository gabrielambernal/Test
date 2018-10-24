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
                            <h2 class="tm-block-title d-inline-block">Add Laptop</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="" method="post" class="tm-edit-product-form">
                                <div class="input-group mb-3">
                                    <label for="serialNumber" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Serial Number
                                    </label>
                                    <input id="serialNumber" name="serialNumber" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>

                                <div class="input-group mb-3">
                                    <label for="model" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Model
                                    </label>
                                    <input id="model" name="model" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>

                                <div class="input-group mb-3">
                                    <label for="color" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Color</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="color" name="color">
                                        <option selected>Select one</option>
                                        <option value="Rojo">Rojo</option>
                                        <option value="Negro">Negro</option>
                                        <option value="Azul">Azul</option>
                                        <option value="Blanco">Blanco</option>
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="brand" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Brand
                                    </label>
                                    <input id="brand" name="brand" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>

                                <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <textarea name="description" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" required> </textarea>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Add
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <!--    <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                                <i class="fas fa-5x fa-cloud-upload-alt" onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Upload ..." onclick="document.getElementById('fileInput').click();"
                                />
                            </div>
                        </div>-->
                    </div>

                    <div class="">
                      <form class="form-horizontal" action="../../php/functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                                          <fieldset>

                                              <!-- Form Name -->
                                              <legend>Or upload a CSV</legend>

                                              <!-- File Button -->
                                              <div class="form-group">
                                                  <label class="col-md-4 control-label" for="filebutton">Select File</label>
                                                  <div class="col-md-4">
                                                      <input type="file" name="file" id="file" class="input-large">
                                                  </div>
                                              </div>

                                              <!-- Button -->
                                              <div class="form-group">
                                                  <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                                                  <div class="col-md-4">
                                                      <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                                                  </div>
                                              </div>

                                          </fieldset>
                                      </form>
                    </div>

                </div>
            </div>
        </div>
        <?php

        include "../../php/dbcon.php";

          $serialNum = $_POST["serialNumber"];
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
