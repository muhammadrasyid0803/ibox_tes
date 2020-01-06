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
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
              <div id="Cooling" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
              <div id="Alarm" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
              <div id="Network" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
              <div id="ODF" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            </div>
            
          </div>
          </div>

<script type="text/javascript">
  $(document).ready(function(){
    tampil_data_building();
    tampil_data_ac();
    tampil_data_dc();

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
                                '<a href="javascript:;" class="btn btn-success btn-xs item_hapus" data="'+data[i].id+'">Detail</a>'+
                                '<a href="javascript:;" class="btn btn-primary btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                }
                // $("table").css("z-index", "1500");
                // $("table_id_building").css("overflow-x", "scroll");
                // overflow-x: scroll;
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
                            // '<td>'+data[i].desc_acpdb+'</td>'+
                            // '<td>'+data[i].kondisi_acpdb+'</td>'+
                            // '<td>'+data[i].file_acpdb+'</td>'+
                            // '<td>'+data[i].desc_kwh+'</td>'+
                            // '<td>'+data[i].kondisi_kwh+'</td>'+
                            // '<td>'+data[i].file_kwh+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td style="text-align:right;">'+
                                '<a href="javascript:;" class="btn btn-success btn-xs item_hapus" data="'+data[i].id+'">Detail</a>'+
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
                                '<a href="javascript:;" class="btn btn-success btn-xs item_hapus" data="'+data[i].id+'">Detail</a>'+
                                '<a href="javascript:;" class="btn btn-primary btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_data_dc').html(html);
            }
        });
    }
  });
</script>