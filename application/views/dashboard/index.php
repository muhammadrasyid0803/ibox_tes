        <!-- page start-->
       
          
      
        <div class="row mt">
          <aside class="col-lg-6 mt">
            <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Data Job</h4>
                <div id="piechart" width="1000" height="280"></div>
            </div>
          </aside>
          <br>

          
          <aside class="col-lg-6 mt ">       
            <section class="panel"> 
            <div class="panel-body">
                <div id="kalender_job" class="has-toolbar"></div>
                <h4 align="center"> <strong>Jadwal PM</strong> </h4>  
              </div>
            </section>
       
          </aside>
        </div>
        

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
    <script>
    $(document).ready(function(){
        var calendar = $('#kalender_job').fullCalendar({
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>Dashboard/tampil_job",
            eventColor: '#4ECDC4',
            selectable:true,
            selectHelper:true,
        });
    });
             
    </script>
   