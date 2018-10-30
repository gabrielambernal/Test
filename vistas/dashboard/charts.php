<?php include "../../php/dashboard.php" ?>



<html lang="en">

<?php include "../head.php"; ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Brand', 'Popularity'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['brand']."', ".$row['numBrand']."],";
          }
      }
      ?>
    ]);

    var options = {
        title: 'Brands Assignated',
        width: 900,
        height: 500,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}
</script>

<body id="reportsPage" class="bg02">
    <div class="" id="home">
        <div class="container">

<?php include "../header.php"; ?>

            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-auto">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="title">METRICS</h2>
                            </div>
                        </div>

                      <div id="piechart"></div>
                        </div>
                    </div>
                </div>

            </div>

            <?php include "../footer.php" ?>
        </div>

</body>

</html>
