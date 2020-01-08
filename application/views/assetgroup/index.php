<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Asset Group
                </h4>
              </header>
              <div class="panel-body minimal">
                <form action="<?php echo base_url('asset_group/pop'); ?>" method="post" >
                  <div class="mail-option">
                </div>
                <div class="col-md-2">
                    <h4 class="gen-case">
                    Select POP :
                  </h4>
                </div>
                <div class="col-xs-6">
                  <select class="form-control" name="pilih_pop" id="pilih_pop">
                     <option value="pilih">-- Pilih --</option>
                        <?php foreach ($pop as $p ): ?>
                            <option value="<?php echo $p->id;?>"><?php echo $p->name;?></option>
                        <?php endforeach;?>
                  </select>
                </div>
                <div class="col-xs-2">
                  <button type="submit" class="btn btn-theme03">Pilih</button>
                </div>
                </form>
              </div>
            </section>
          </div>

          <div class="tab-content">
          <div class="col-sm-12">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#building">Building and Infrastructure</a></li>
              <li><a data-toggle="tab" href="#ac">AC Electricity</a></li>
              <li><a data-toggle="tab" href="#DC">DC Electricity</a></li>
              <li><a data-toggle="tab" href="#Power">Power Supply Back Up System</a></li>
              <li><a data-toggle="tab" href="#Cooling">Cooling System</a></li>
              <li><a data-toggle="tab" href="#Alarm">External Alarm And Monitoring System</a></li>
              <li><a data-toggle="tab" href="#Network">Network Device</a></li>
              <li><a data-toggle="tab" href="#ODF">Passive Device (ODF)</a></li>
            </ul>
            
            <div class="tab-content">
              <div id="building" class="tab-pane fade in active">
                <section class="panel">
                  <div class="panel-body minimal">
                    <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-responsive" id="table_id_building">
                      <thead>
                        <tr>
                          <th>POP</th>
                          <th>Tanggal di Buat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody id="show_data_building">
                      
                      </tbody>
                    </table>
                  </div>
                  </div>
                </section>
              </div>
              <div id="ac" class="tab-pane fade">
                <section class="panel">
                  <div class="panel-body minimal">
                      <div class="adv-table">
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="table_id_ac">
                          <thead>
                            <tr>
                              <th>POP</th>
                              <th>Tanggal di Buat</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody id="show_data_ac">
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                </section>
              </div>
              <div id="DC" class="tab-pane fade">
                <section class="panel">
                  <div class="panel-body minimal">
                      <div class="adv-table">
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="table_id_dc">
                          <thead>
                            <tr>
                              <th>POP</th>
                              <th>Tanggal di Buat</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody id="show_data_dc">
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                </section>
              </div>
              <div id="Power" class="tab-pane fade">
                <section class="panel">
                  <div class="panel-body minimal">
                      <div class="adv-table">
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="table_id_power">
                          <thead>
                            <tr>
                              <th>POP</th>
                              <th>Tanggal di Buat</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody id="show_data_power">
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                </section>
              </div>
              <div id="Cooling" class="tab-pane fade">
                <!-- <section class="panel">
                  <div class="panel-body minimal">
                      <div class="adv-table">
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="table_id_cooling">
                          <thead>
                            <tr>
                              <th>POP</th>
                              <th>Tanggal di Buat</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody id="show_data_cooling">
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                </section> -->
              </div>
              <div id="Alarm" class="tab-pane fade">
                <section class="panel">
                  <div class="panel-body minimal">
                      <div class="adv-table">
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="table_id_alarm">
                          <thead>
                            <tr>
                              <th>POP</th>
                              <th>Tanggal di Buat</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody id="show_data_alarm">
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                </section>
              </div>
              <div id="Network" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
              <div id="ODF" class="tab-pane fade">
                 <section class="panel">
                  <div class="panel-body minimal">
                      <div class="adv-table">
                        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="table_id_odf">
                          <thead>
                            <tr>
                              <th>POP</th>
                              <th>Tanggal di Buat</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody id="show_data_odf">
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          </div>

          <!-- Modal Detail Bulding -->
              <div class="modal fade" id="detail_building" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body" id="detail_jobs">
                      <label>Deskripsi Rack :</label> <label class="desc_rack"></label>
                      <br/>
                      <label>Kondisi Rack :</label> <label class="kondisi_rack"></label>
                      <br/>
                      <label>No. Rack :</label> <label class="no_rack"></label>
                      <br/>
                      <label>Foto Rack :</label><img src="" id="foto_rack" class="img" width="240">
                      <br/>
                      <label>Deskripsi Building :</label> <label class="desc_building"></label>
                      <br/>
                      <label>Kondisi Building :</label> <label class="kondisi_building"></label>
                      <br/>
                      <label>Foto Building :</label> <img src="" id="foto_building" class="img" width="240">
                      <br/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

<script type="text/javascript">
  window.base_url = <?php echo json_encode(base_url()); ?>;
  $(document).ready(function(){
    tampil_data_building();
    tampil_data_ac();
    tampil_data_dc();
    tampil_data_power();
    tampil_data_alarm();
    tampil_data_odf();

    //fungsi tampil_data_building
    function tampil_data_building(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo site_url('Asset_group/tampil_data_building') ;?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+data[i].name+'</td>'+
                            // '<td>'+data[i].desc_rack+'</td>'+
                            // '<td>'+data[i].kondisi_rack+'</td>'+
                            // '<td>'+data[i].file_rack+'</td>'+
                            // '<td>'+data[i].desc_building+'</td>'+
                            // '<td>'+data[i].kondisi_building+'</td>'+
                            // '<td>'+data[i].file_building+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td style="text-align:right;">'+
                                '<a href="javascript:;" class="btn btn-success btn-xs item_detail" data="'+data[i].id+'">Detail</a>'+' '+
                                '<a href="javascript:;" class="btn btn-primary btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_data_building').html(html);
            }
        });
    }

    //fungsi tampil_data_ac
    function tampil_data_ac(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo site_url('Asset_group/tampil_data_ac') ;?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+data[i].name+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td style="text-align:right;">'+
                                '<a href="javascript:;" class="btn btn-success btn-xs item_hapus" data="'+data[i].id+'">Detail</a>'+' '+
                                '<a href="javascript:;" class="btn btn-primary btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_data_ac').html(html);
            }
        });
    }

    //fungsi tampil_data_dc
    function tampil_data_dc(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo site_url('Asset_group/tampil_data_dc') ;?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+data[i].name+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td style="text-align:right;">'+
                                '<a href="javascript:;" class="btn btn-success btn-xs item_hapus" data="'+data[i].id+'">Detail</a>'+' '+
                                '<a href="javascript:;" class="btn btn-primary btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_data_dc').html(html);
            }
        });
    }

    //fungsi tampil_data_power
    function tampil_data_power(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo site_url('Asset_group/tampil_data_power') ;?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+data[i].name+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td style="text-align:right;">'+
                                '<a href="javascript:;" class="btn btn-success btn-xs item_hapus" data="'+data[i].id+'">Detail</a>'+' '+
                                '<a href="javascript:;" class="btn btn-primary btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_data_power').html(html);
            }
        });
    }

    //fungsi tampil_data_alarm
    function tampil_data_alarm(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo site_url('Asset_group/tampil_data_alarm') ;?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+data[i].name+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td style="text-align:right;">'+
                                '<a href="javascript:;" class="btn btn-success btn-xs item_hapus" data="'+data[i].id+'">Detail</a>'+' '+
                                '<a href="javascript:;" class="btn btn-primary btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_data_alarm').html(html);
            }
        });
    }

    //fungsi tampil_data_odf
    function tampil_data_odf(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo site_url('Asset_group/tampil_data_odf') ;?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+data[i].name+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td style="text-align:right;">'+
                                '<a href="javascript:;" class="btn btn-success btn-xs item_hapus" data="'+data[i].id+'">Detail</a>'+' '+
                                '<a href="javascript:;" class="btn btn-primary btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_data_odf').html(html);
            }
        });
    }

    //Tampil Detail tampil_data_building
    $('#show_data_building').on('click', '.item_detail', function(){
      var id = $(this).attr('data');
      $('#detail_building').modal('show');
      $('#detail_building').find('.modal-title').text('Building and Infrastructure');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>asset_group/detail_building',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#detail_building').find('.desc_rack').text(data.desc_rack);
          $('#detail_building').find('.kondisi_rack').text(data.kondisi_rack);
          $('#detail_building').find('.no_rack').text(data.aset_id);
          $('#detail_building').find('#foto_rack').attr('src', base_url + "assets/dokumen/" + data.file_rack);
          $('#detail_building').find('.desc_building').text(data.desc_building);
          $('#detail_building').find('.kondisi_building').text(data.kondisi_building);
          $('#detail_building').find('#foto_building').attr('src', base_url + "assets/dokumen/" + data.file_building);
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    })
  });
</script>