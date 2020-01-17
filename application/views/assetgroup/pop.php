<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    <?php echo $name; ?>
                  </h4>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <button type="button" class="btn btn-primary" onclick="Building()">Building and Infrastructure</button>
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_ac" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_ac">AC Electricity</a>
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_dc" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_dc">DC Electricity</a>
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_power" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_power">Power Supply Back Up System</a>
                  </h5>
                  <!-- <h5 class="gen-case">
                     <a data-target="#modal_cooling" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_cooling">Cooling System</a>
                  </h5> -->
                  <h5 class="gen-case">
                     <a data-target="#modal_alarm" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_alarm">External Alarm And Monitoring System</a>
                  </h5>
                  <!-- <h5 class="gen-case">
                     <a data-target="#modal_network" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_network">Network Device</a>
                  </h5> -->
                  <h5 class="gen-case">
                     <a data-target="#modal_device" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_device">Passive Device (ODF)</a>
                  </h5>
                </div>
              </div>
          </div>
            </section>
          </div>
        </div>

        <!-- Modal modal_building -->
              <div class="modal fade" id="modal_building" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content" style="width: 108%;margin: auto;">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Building and Infrastructure</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" action="#" id="form">
                        <div class="form-group ">
                          <input type="hidden" name="txtIdFkRack" value="<?php echo $id; ?>" />
                          <label for="cname" class="control-label col-lg-2">Input Rack</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescRack" id="txtDescRack" required />
                            <span class="pesan pesan-desc_rack">Silahkan Isi Kolom Rack</span>
                          </div>
                          <div class="col-lg-2">
                            <select class="form-control" name="selectKondisiRack" id="selectKondisiRack">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiRack">Silahkan Pilih Kondisi Rack</span>
                          </div>
                          <div class="col-lg-2">
                            <select class="form-control" name="selectNoRack" id="selectNoRack">
                              <option value="">Pilih No. Rack</option>
                                <?php foreach ($no as $n ): ?>
                                    <option value="<?php echo $n->id;?>"><?php echo $n->aset_id;?></option>
                                <?php endforeach;?>
                            </select>
                            <span class="pesan pesan-selectNoRack">Silahkan Pilih No Rack</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_rack" id="foto_rack" capture="camera">
                            <!-- <span class="pesan pesan-foto_rack">Silahkan Isi Kolom Rack</span> -->
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-2">Input Building</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescBuilding" id="txtDescBuilding" required />
                            <span class="pesan pesan-txtDescBuilding">Silahkan Isi Kolom Building</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiBuilding" id="selectKondisiBuilding">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiBuilding">Silahkan Pilih Kondisi Building</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_building" id="foto_building" capture="camera">
                          </div>
                        </div>
                      </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_building_infa()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <!-- Modal modal_ac -->
        <div class="modal fade" id="modal_ac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">AC Electricity</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" action="#" id="form2">
                        <div class="form-group ">
                          <input type="hidden" name="txtIdFkRack" value="<?php echo $id; ?>" />
                          <label for="cname" class="control-label col-lg-3">Input KWh Meter</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescKwh" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiKwh">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Kwh" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Input ACPDB</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescAcpdb" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiAcpdb">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_acpdb" capture="camera">
                          </div>
                        </div>
                      </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary"  onclick="simpan_ac()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div> 
              </div> 

        <!-- Modal modal_dc -->
              <div class="modal fade" id="modal_dc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">DC Electricity</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" action="#" id="form3">
                        <div class="form-group ">
                          <input type="hidden" name="txtIdFkRack" value="<?php echo $id; ?>" />
                          <label for="cname" class="control-label col-lg-3">Rectifier</label>
                          <div class="col-lg-3">
                           <input class=" form-control" placeholder="Description" type="text" name="txtDescRectifier" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiRectifier">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_rectifier" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">DCPDB</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescDcpdb" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiDcpdb">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_dcpdb" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Baterai</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescBaterai" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiBaterai">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_baterai" capture="camera">
                          </div>
                        </div>
                      </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary"  onclick="simpan_dc()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <!-- Modal modal_power -->
              <div class="modal fade" id="modal_power" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Power Supply Back Up System</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" action="#" id="form4">
                        <div class="form-group ">
                          <input type="hidden" name="txtIdFkRack" value="<?php echo $id; ?>" />
                          <label for="cname" class="control-label col-lg-3">GENSET</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescGenset" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiGenset">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_genset" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">ATS</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescAts" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiAts">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Ats" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">INVERTER</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescInverter" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiInverter">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Inverter" capture="camera">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cemail" class="control-label col-lg-3">UPS</label>
                          <div class="col-lg-3">
                            <input class="form-control" placeholder="Description" type="text" name="txtDescUps" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiUps">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Ups" capture="camera">
                          </div>
                        </div>
                      </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_power()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <!-- Modal modal_alarm -->
              <div class="modal fade" id="modal_alarm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">External Alarm And Monitoring System</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" action="#" id="form6">
                        <div class="form-group ">
                          <input type="hidden" name="txtIdFkRack" value="<?php echo $id; ?>" />
                          <label for="cname" class="control-label col-lg-3">AC</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescAc" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiAc">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Ac" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">ALARM</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescAlarm" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiAlarm">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Alarm" capture="camera">
                          </div>
                        </div>
                      </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_alarm()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <!-- Modal modal_device -->
        <div class="modal fade" id="modal_device" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Passive Device (ODF)</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" action="#" id="form8">
                        <div class="form-group ">
                          <input type="hidden" name="txtIdFkRack" value="<?php echo $id; ?>" />
                          <label for="cname" class="control-label col-lg-3">ODF</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescOdf" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiOdf">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Odf" capture="camera">
                          </div>
                        </div>
                      </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_odf()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>  

    <script type="text/javascript">
      $(document).ready(function(){
          $("#txtDescRack").keyup(function () {
              $(".pesan-desc_rack").hide();
          });
          $("#txtDescBuilding").keyup(function () {
              $(".pesan-txtDescBuilding").hide();
          });
          $('#selectKondisiBuilding').change(function(){
              $(".pesan-selectKondisiBuilding").hide();
          });
          $('#selectNoRack').change(function(){
              $(".pesan-selectNoRack").hide();
          });
          $('#selectKondisiRack').change(function(){
              $(".pesan-selectKondisiRack").hide();
          });
      });
      
      function Building() {
        $('#form')[0].reset();
        $(".pesan-desc_rack").hide();
        $(".pesan-txtDescBuilding").hide();
        $(".pesan-selectKondisiBuilding").hide();
        $(".pesan-selectNoRack").hide();
        $(".pesan-selectKondisiRack").hide();
        $('#modal_building').modal('show');
      }

      function simpan_building_infa() {
          var url;

            var desc_rack = $('#txtDescRack').val().length;
            var selectKondisiRack = $('#selectKondisiRack').val().length;                    
            var selectNoRack = $('#selectNoRack').val().length;         
            var txtDescBuilding = $('#txtDescBuilding').val().length;           
            var selectKondisiBuilding = $('#selectKondisiBuilding').val().length; 

                if (desc_rack == 0 || selectKondisiRack == "" || selectNoRack == 0 || txtDescBuilding == 0 || selectKondisiBuilding == "") {              
                    if (desc_rack == 0) {              
                        $(".pesan-desc_rack").css('display','block');
                    }
                    if (selectKondisiRack == 0) {                
                        $(".pesan-selectKondisiRack").css('display','block');
                    }
                    if (selectNoRack == 0) {                
                        $(".pesan-selectNoRack").css('display','block');
                    }
                    if (txtDescBuilding == 0) {              
                        $(".pesan-txtDescBuilding").css('display','block');
                    }
                    if (selectKondisiBuilding == 0) {             
                        $(".pesan-selectKondisiBuilding").css('display','block');
                    }
                    return false;
                }
          url = '<?php echo site_url('Asset_group/tambah_building') ;?>';

          var formData = new FormData($('#form')[0]);
          $.ajax({
              url : url,
              type: "POST",
              data: formData,
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data) {
                  $('#form')[0].reset();
                  $('#modal_building').modal('hide');                
                  toastr.success('Tambah Data Building and Infrastructure!', 'Success', {timeOut: 5000})
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  alert('Error adding / upader data');
              }
          });
      }

      function simpan_ac() {
          var url;
          url = '<?php echo site_url('Asset_group/tambah_ac') ;?>';

          var formData = new FormData($('#form2')[0]);
          $.ajax({
              url : url,
              type: "POST",
              data: formData,
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data) {
                  $('#form2')[0].reset();
                  $('#modal_ac').modal('hide');                
                  toastr.success('Tambah Data AC Electricity!', 'Success', {timeOut: 5000})
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  alert('Error adding / upader data');
              }
          });
      }

      function simpan_dc() {
          var url;
          url = '<?php echo site_url('Asset_group/tambah_dc') ;?>';

          var formData = new FormData($('#form3')[0]);
          $.ajax({
              url : url,
              type: "POST",
              data: formData,
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data) {
                  $('#form3')[0].reset();
                  $('#modal_dc').modal('hide');                
                  toastr.success('Tambah Data DC Electricity!', 'Success', {timeOut: 5000})
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  alert('Error adding / upader data');
              }
          });
      }

      function simpan_power() {
          var url;
          url = '<?php echo site_url('Asset_group/tambah_power') ;?>';

          var formData = new FormData($('#form4')[0]);
          $.ajax({
              url : url,
              type: "POST",
              data: formData,
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data) {
                  $('#form4')[0].reset();
                  $('#modal_power').modal('hide');                
                  toastr.success('Tambah Data Power Supply Back Up System!', 'Success', {timeOut: 5000})
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  alert('Error adding / upader data');
              }
          });
      }

      function simpan_alarm() {
          var url;
          url = '<?php echo site_url('Asset_group/tambah_alarm') ;?>';

          var formData = new FormData($('#form6')[0]);
          $.ajax({
              url : url,
              type: "POST",
              data: formData,
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data) {
                  $('#form6')[0].reset();
                  $('#modal_alarm').modal('hide');                
                  toastr.success('Tambah Data Power Supply Back Up System!', 'Success', {timeOut: 5000})
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  alert('Error adding / upader data');
              }
          });
      }

      function simpan_odf() {
          var url;
          url = '<?php echo site_url('Asset_group/tambah_odf') ;?>';

          var formData = new FormData($('#form8')[0]);
          $.ajax({
              url : url,
              type: "POST",
              data: formData,
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data) {
                  $('#form8')[0].reset();
                  $('#modal_device').modal('hide');                
                  toastr.success('Tambah Data Power Supply Back Up System!', 'Success', {timeOut: 5000})
              },
              error: function(jqXHR, textStatus, errorThrown) {
                  alert('Error adding / upader data');
              }
          });
      }
    </script>   