<?php include "../../php/seguridad.php"; ?>
<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                <h1 class="tm-site-title mb-0">WELCOME
                <?php echo $_SESSION["name"]; ?> !</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">HOME
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="laptops.php">Laptops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="assignations.php">Assignations</a>
                    </li>
                  <!--  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Users
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Create</a>
                            <a class="dropdown-item" href="#">Report</a>
                            <a class="dropdown-item" href="#">Update</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </li> -->

                </ul>
                <ul class="navbar-nav">
                    <a class="nav-link d-flex" href="../../php/logout.php">
                      <li class="nav-item">

                            <i class="far fa-user mr-2 tm-logout-icon"></i>
                            <span>Logout</span></a>

                          </li>
                    </a>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- row -->
