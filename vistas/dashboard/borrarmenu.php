<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="../../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../../css/tooplate.css">
</head>

<body id="reportsPage" class="bg02">
    <div class="" id="home">
        <div class="container">

<?php include "../header.php"; ?>

            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-auto">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">USERS</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="add-product.html" class="btn btn-small btn-primary">Add New User</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col" class="text-center">Units Sold</th>
                                        <th scope="col" class="text-center">In Stock</th>
                                        <th scope="col">Expire Date</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">1. In malesuada placerat (hover)</td>
                                        <td class="text-center">145</td>
                                        <td class="text-center">255</td>
                                        <td>2018-10-28</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">2. Aenean eget urna enim. Sed enim</td>
                                        <td class="text-center">240</td>
                                        <td class="text-center">260</td>
                                        <td>2018-10-24</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">3. Vivamus convallis tincidunt nisi</td>
                                        <td class="text-center">360</td>
                                        <td class="text-center">440</td>
                                        <td>2019-02-14</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">4. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">5. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">6. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">7. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">8. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-left">
                                <button class="btn btn-danger">Delete Selected Items</button>
                            </div>
                            <div class="tm-table-actions-col-right">
                                <span class="tm-pagination-label">Page</span>
                                <nav aria-label="Page navigation" class="d-inline-block">
                                    <ul class="pagination tm-pagination">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <span class="tm-dots d-block">...</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php include "../footer.php" ?>
        </div>
    </div>
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>
