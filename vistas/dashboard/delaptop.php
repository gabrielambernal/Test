<!DOCTYPE html>
<html lang="en">

<?php include "../head.php";
error_reporting(0);  ?>

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <h2 class="tm-block-title mt-3">Delete Laptop</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form action="../../php/deletelaptop.php" method="get" class="tm-login-form">
                                <div class="input-group">
                                    <label for="idReq" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Serial Number</label>
                                    <input name="idReq" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="idReq" placeholder="Serial Number" required>
                                </div>

                                <div class="input-group mt-3">
                                    <button type="submit" class="btn btn-primary d-inline-block mx-auto">Delete</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include "../vistas/footer.php" ?>
    </div>
</body>

</html>
