</section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="inbox.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url();?>assets/dashio/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/dashio/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo base_url();?>assets/dashio/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/dashio/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url();?>assets/dashio/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url();?>assets/dashio/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- Datatable -->
  <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/dashio/lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/dashio/lib/advanced-datatable/js/DT_bootstrap.js"></script>

  <!--common script for all pages-->
  <script src="<?php echo base_url();?>assets/dashio/lib/common-scripts.js"></script>
  <!-- Toastr Js -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url();?>assets/dashio/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo base_url();?>assets/dashio/lib/fullcalendar/fullcalendar.min.js"></script>
  <!--common script for all pages-->
  
  <!--script for this page-->
  <script src="<?php echo base_url();?>assets/dashio/lib/calendar-conf-events.js"></script>
  <!--script for this page-->
  <script src="<?php echo base_url();?>assets/dashio/lib/chart-master/Chart.js"></script>
  <script src="<?php echo base_url();?>assets/dashio/lib/chartjs-conf.js"></script>

  <!-- Builidng -->
  <script type="text/javascript">
    $(document).ready(function() {
      var oTable = $('#table_id_building').dataTable({
        // "autoWidth": true,
        
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ],

        // "scrollY":        '300px',
        // "scrollX":        true,
        // "scrollCollapse": true,
        // "paging":         false,
        // "columnDefs": [
        //     { "width": '20%', "targets": 0 }
        // ],
        // "fixedColumns": true
      });
    });
  </script>

  <!-- ac -->
  <script type="text/javascript">
    $(document).ready(function() {
      var oTable = $('#table_id_ac').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });
    });
  </script>

  <!-- dc -->
  <script type="text/javascript">
    $(document).ready(function() {
      var oTable = $('#table_id_dc').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });
    });
  </script>

  <!-- power -->
  <script type="text/javascript">
    $(document).ready(function() {
      var oTable = $('#table_id_power').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });
    });
  </script>

  <!-- alarm -->
  <script type="text/javascript">
    $(document).ready(function() {
      var oTable = $('#table_id_alarm').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });
    });
  </script>
</body>

</html>