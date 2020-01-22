
        <!-- <h3><i class="fa fa-angle-right"></i></h3> -->
        <!-- page start-->
        <div class="row mt">
          <aside class="col-lg-6 mt">
            <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i>Diagram Pie Job</h4>
                <!-- <div class="panel-body text-center">
                </div> -->
                <div id="piechart" width="1000" height="280"></div>
                <!-- <canvas id="canvas" width="1000" height="280"></canvas> -->
            </div>
          </aside>
          <aside class="col-lg-6 mt">
            <section class="panel">
              <div class="panel-body">
                <div id="calendar" class="has-toolbar"></div>
              </div>
            </section>
          </aside>
        </div>
        <!-- <canvas id="canvas" width="1000" height="280"></canvas> -->
       <!--Load chart js-->

    <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/dashio/chart-js/dist/Chart.min.js"></script>
    <script type="text/javascript">
 
            var lineChartData = {
                labels : <?php echo json_encode($status);?>,
                datasets : [
                     
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($job_number);?> 
                    }
 
                ]
                 
            }
 
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
    </script> -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Job', 'Hours per Day'],
          ['Selesai', <?php echo $selesai; ?>],
          ['Belum', <?php echo $belum; ?>],
          ['On Progress', <?php echo $on_progress; ?>]
        ]);

        // var options = {
        //   title: 'My Daily Activities'
        // };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data);
      }
    </script>
   