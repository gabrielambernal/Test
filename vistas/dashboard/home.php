<html lang="en">

<?php include "../head.php"; ?>

<body id="reportsPage" class="bg02">
    <div class="" id="home">
        <div class="container">

<?php include "../header.php"; ?>

            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-auto">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="title">MY ASSIGNATIONS</h2>
                            </div>
                        </div>

                        <?php
                        include "../../php/dbcon.php";

                        $sso = $_SESSION['sso'];

                        $sql = "SELECT * FROM Assignation WHERE sso = $sso";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                            	<thead>
                            		<tr>
                            			<th>idRequest</th>
                            			<th>date</th>
                            			<th>serialNumber</th>
                            		</tr>
                            	</thead>
                            	<tbody>";
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["idRequest"]. "</td><td>" . $row["date"]. "</td><td>" . $row["serialNumber"]. "</td></tr>";
                            }
                            echo "	</tbody>
                            </table>";
                        } else {
                            echo "0 results";
                        }

                        $conn->close();
                         ?>
                        </div>
                    </div>
                </div>

            </div>

            <?php include "../footer.php" ?>
        </div>


    <script src="../../js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
  <script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
  <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
  <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>



      <script  src="../table/js/index.js"></script>
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>
