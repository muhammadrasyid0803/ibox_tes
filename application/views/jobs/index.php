<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    List Joblist
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body minimal">
                <div class="mail-option">
                  <ul class="unstyled inbox-pagination">
                    <li><span>1-50 of 99</span></li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="table-inbox-wrap ">
                  <table class="table table-inbox table-hover">
                    <tbody id="showdata">
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
          </div>
        </div>

   
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body" id="detail_jobs">
                      <label>Job Number :</label> <label class="job_number"></label>
                      <br/>
                      <label>Job Kategori :</label> <label class="job_kategori"></label>
                      <br/>
                      <label>Job SubKategori :</label> <label class="job_subkategori"></label>
                      <br/>
                      <label>Job Description :</label> <label class="job_desc"></label>
                      <br/>
                      <label>Lattitude :</label> <label class="lat"></label>
                      <br/>
                      <label>Longitude :</label> <label class="long"></label>
                      <br/>
                      <label>Saverity :</label> <label class="saverity"></label>
                      <br/>
                      <label>Priority :</label> <label class="priority"></label>
                      <br/>
                      <label>Date :</label> <label class="date_job"></label>
                      <br/>
                      <label>Impact (Berdampak) :</label> <label class="impact"></label>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
<script>
  $(function(){
    TampilJob();
    
    //Tampil Job
    function TampilJob(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>Jobs/tampil_job',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
             if (data[i].status == 'belum') {
                    html +='<tr>'+
                      '<td>'+data[i].description+'</td>'+
                       '<td>'+'<span class="label label-danger">Belum Selesai</span>'+'</td>'+
                      '<td>'+
                        '<button class="btn btn-theme03 btn-xs item-tampil" data="'+data[i].id+'" style="background: #3f60f3;">Detail</button>'+
                        '<button class="btn btn-theme03 btn-xs item-ambil" data="'+data[i].id+'" style="background: #cc3300;">Ambil</button>'+
                      '</td>'+
                      '</tr>';
              }
              else if (data[i].status == 'selesai') {
                    html +='<tr>'+
                      '<td>'+data[i].description+'</td>'+
                       '<td>'+'<span class="label label-success">Selesai</span>'+'</td>'+
                      '<td>'+
                        '<button class="btn btn-theme03 btn-xs item-tampil" data="'+data[i].id+'" style="background: #3f60f3;">Detail</button>'+
                        '<button class="btn btn-theme03 btn-xs item-cetak" data="'+data[i].id+'" style="background: #cc0099;">Cetak</button>'+
                      '</td>'+
                      '</tr>';  
              }
              else if (data[i].status == 'on progress') {
                    html +='<tr>'+
                      '<td>'+data[i].description+'</td>'+
                       '<td>'+'<span class="label label-warning">On Progress</span>'+'</td>'+
                      '<td>'+
                        '<button class="btn btn-theme03 btn-xs item-tampil" data="'+data[i].id+'" style="background: #3f60f3;">Detail</button>'+
                        '<button class="btn btn-theme03 btn-xs item-cetak" data="'+data[i].id+'" style="background: #cc0099;">Cetak</button>'+
                      '</td>'+
                      '</tr>';  
              }
          }
          $('#showdata').html(html);
          // $("#myModal").modal('show');
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }

    //Tampil Detail
    $('#showdata').on('click', '.item-tampil', function(){
      var id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Detail Job');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>Jobs/detail_job',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#myModal').find('.job_number').text(data.job_number);
          $('#myModal').find('.job_kategori').text(data.category);
          $('#myModal').find('.job_subkategori').text(data.subcategory);
          $('#myModal').find('.job_desc').text(data.description);
          $('#myModal').find('.lat').text(data.lat);
          $('#myModal').find('.long').text(data.lng);
          $('#myModal').find('.saverity').text(data.severity);
          $('#myModal').find('.priority').text(data.priority);
          $('#myModal').find('.date_job').text(data.date);
          $('#myModal').find('.impact').text(data.impact);
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    })

    // Ubah status ambil
    $('#showdata').on('click', '.item-ambil', function(){
      var id = $(this).attr('data');
      $.ajax({
        url: "<?php echo site_url('Jobs/ambil_job/') ;?>/"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data) {
          TampilJob();
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error Deleting Data');
        }
      });
    })

    // ubah status on progress
    $('#showdata').on('click', '.item-cetak', function(){
      var id = $(this).attr('data');
      $.ajax({
        url: "<?php echo site_url('Jobs/cetak_status/') ;?>/"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data) {
          TampilJob();
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error Deleting Data');
        }
      });
    })

  });
</script>