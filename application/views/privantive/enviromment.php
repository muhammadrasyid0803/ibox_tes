<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    ENVIRONMENT & AC & EKSTERNAL ALARM
                  </h4>
              <div align="left">
                  <button type="button" class="btn btn-info btn-sm" onclick="Kembali()">Kembali</button>
              </div>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <a data-target="#modal_environment" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Data ENVIRONMENT & Air Conditional (AC) Lain-lain</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_eksternal_alarm" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Eksternal Alarm</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_dokumentasi" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Dokumentasi</a> 
                  </h5>
                </div>
              </div>
          </div>
            </section>
          </div>
        </div>

        <!-- Modal data enviromment -->

          <div class="modal fade" id="modal_environment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Environment & Air Conditioning (AC)</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_environment" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">

                         <div class="form-group">

                          <label for="cname" class="control-label col-lg-3">Merk</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtMerk_ac1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtMerk_ac2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtMerk_ac3" required />
                          </div>
                        </div>
                           <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Tipe</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtTipe_ac1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtTipe_ac2" re2uired />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtTipe_ac3" required />
                          </div>
                        </div>
                           <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Kapasitas (PK)</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKap_ac1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKap_ac2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKap_ac3" required />
                          </div>
                        </div>
                           <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">S/N (outdoor)</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_o_ac1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_o_ac2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_o_ac3" required />
                          </div>
                        </div>
                           <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">NO. Aset Amarta</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmarta_ac1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmarta_ac2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmarta_ac3" required />
                          </div>
                        </div>
                           <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">S/N (indoor)</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_i_ac1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_i_ac2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_i_ac3" required />
                          </div>
                        </div>
                          <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">NO. Aset Amarta</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmarta2_ac1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmarta2_ac2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmarta2_ac3" required />
                          </div>
                        </div>
                           <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Suhu Keluaran AC</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSuhu_ac_ac1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSuhu_ac_ac2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSuhu_ac_ac3" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Fungsi</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 1 </label> <br>
                             <input type="radio" name="selectFungsi_ac1" value="Normal"> Normal <br>
                            <input type="radio" name="selectFungsi_ac1" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 2 </label><br>
                             <input type="radio" name="selectFungsi_ac2" value="Normal"> Normal <br>
                            <input type="radio" name="selectFungsi_ac2" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">AC 3 </label> <br>
                             <input type="radio" name="selectFungsi_ac3" value="Normal"> Normal <br>
                            <input type="radio" name="selectFungsi_ac3" value="Tidak Normal">Tidak Normal
                          </div>
                        </div>
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Suhu Ruangan (C)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSuhuRuangan" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>                          
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_env()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Ekternal alarm -->
               <div class="modal fade" id="modal_eksternal_alarm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Eksternal Alarm</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_eksternal_alarm" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Merk</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtMerk" placeholder="Description" minlength="2" type="text" required />
                          </div>
                       
                          <label for="cname" class="control-label col-lg-3">Tipe / Seri</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTipe" placeholder="Description" minlength="2" type="text" required />
                          </div>
                     
                          <label for="cemail" class="control-label col-lg-3">S/N</label>
                          <div class="col-lg-8">
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN" required />
                          </div>
  
                      
                          <label for="cemail" class="control-label col-lg-3">Nomor/Label Aset Amarta</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtAmarta" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Door Sensor</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Fungsi </label> <br>
                             <input type="radio" name="selectDoorSensor" value="Normal"> Normal 
                            <input type="radio" name="selectDoorSensor" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-5">
                            <label for="cname" class="control-label">Catatan </label>
                            <input class=" form-control" name="txtCatatan_door" placeholder="Description" minlength="2" type="text" required />
                          </div>
                           <label for="cname" class="control-label col-lg-3">Main Fail Sensor</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Fungsi </label> <br>
                             <input type="radio" name="selectFail" value="Normal"> Normal 
                            <input type="radio" name="selectFail" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-5">
                            <label for="cname" class="control-label">Catatan </label>
                            <input class=" form-control" name="txtCatatan_fail" placeholder="Description" minlength="2" type="text" required />
                          </div>
                           <label for="cname" class="control-label col-lg-3">Temp & Humidity  Sensor</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Fungsi </label> <br>
                             <input type="radio" name="selectTemp" value="Normal"> Normal 
                            <input type="radio" name="selectTemp" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-5">
                            <label for="cname" class="control-label">Catatan </label>
                            <input class=" form-control" name="txtCatatan_temp" placeholder="Description" minlength="2" type="text" required />
                          </div>
                           <label for="cname" class="control-label col-lg-3">Smoke & Fire Sensor</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Fungsi </label> <br>
                             <input type="radio" name="selectSmoke" value="Normal"> Normal 
                            <input type="radio" name="selectSmoke" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-5">
                            <label for="cname" class="control-label">Catatan </label>
                            <input class=" form-control" name="txtCatatan_smoke" placeholder="Description" minlength="2" type="text" required />
                          </div>
                           <label for="cname" class="control-label col-lg-3">Rectifier & Batt Sensor</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Fungsi </label> <br>
                             <input type="radio" name="selectRectifier" value="Normal"> Normal 
                            <input type="radio" name="selectRectifier" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-5">
                            <label for="cname" class="control-label">Catatan </label>
                            <input class=" form-control" name="txtCatatan_rectifier" placeholder="Description" minlength="2" type="text" required />
                          </div>
                           <label for="cname" class="control-label col-lg-3">Genset Sensor</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Fungsi </label> <br>
                             <input type="radio" name="selectGenset" value="Normal"> Normal 
                            <input type="radio" name="selectGenset" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-5">
                            <label for="cname" class="control-label">Catatan </label>
                            <input class=" form-control" name="txtCatatan_genset" placeholder="Description" minlength="2" type="text" required />
                          </div>
                           <label for="cname" class="control-label col-lg-3">Fuel Sensor</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Fungsi </label> <br>
                             <input type="radio" name="selectFuel" value="Normal"> Normal 
                            <input type="radio" name="selectFuel" value="Tidak Normal">Tidak Normal
                          </div>
                          <div class="col-lg-5">
                            <label for="cname" class="control-label">Catatan </label>
                            <input class=" form-control" name="txtCatatan_fuel" placeholder="Description" minlength="2" type="text" required />
                          </div>
                      
                        </div>
                      
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_eksternal_alarm()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

             <!-- Modal modal_dokumentasi -->
              <div class="modal fade" id="modal_dokumentasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Dokumentasi</h4>
                    </div>
                    <div class="modal-body">
                       <form id="form_dokumentasi" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cemail" class="control-label col-lg-2">Foto 1</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_1"  capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 2</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_2"  capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 3</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_3"  capture="camera">
                          </div>
                             <label for="cemail" class="control-label col-lg-2">Foto 4</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_4"  capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 5</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_5"  capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 6</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_6" capture="camera">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_dokumentasi()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <script type="text/javascript">
              function simpan_env() {
              var url;
              
              
               var txtSuhuRuangan = $("input[name=txtSuhuRuangan]").val().length;
               if (txtSuhuRuangan == 0) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }
              url = '<?php echo site_url('Privantive/tambah_data_environment') ;?>';

              var formData = new FormData($('#form_environment')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_environment')[0].reset();
                      $('#modal_environment').modal('hide');                
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                      },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                      }
                    });
              }

              function simpan_eksternal_alarm() {
              var url;
              var foto_1 = $("input[name=txtMerk]").val().length;
              var foto_1 = $("input[name=txtTipe]").val().length;
              var foto_1 = $("input[name=txtSN]").val().length;
              var foto_1 = $("input[name=txtAmarta]").val().length;
              var foto_1 = $("input[name=selectDoorSensor]").val().length;
              var foto_1 = $("input[name=txtCatatan_door]").val().length;
              var foto_1 = $("input[name=selectFail]").val().length;
              var foto_1 = $("input[name=txtCatatan_fail]").val().length;
              var foto_1 = $("input[name=selectTemp]").val().length;
              var foto_1 = $("input[name=txtCatatan_temp]").val().length;
              var foto_1 = $("input[name=selectSmoke]").val().length;
              var foto_1 = $("input[name=txtCatatan_smoke]").val().length;
              var foto_1 = $("input[name=selectRectifier]").val().length;
              var foto_1 = $("input[name=txtCatatan_rectifier]").val().length;
              var foto_1 = $("input[name=selectGenset]").val().length;
              var foto_1 = $("input[name=txtCatatan_genset]").val().length;
              var foto_1 = $("input[name=selectFuel]").val().length;
              var foto_1 = $("input[name=txtCatatan_fuel]").val().length;

               if (foto_1 == 0) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }
              url = '<?php echo site_url('Privantive/tambah_data_eksternal_alarm') ;?>';

              var formData = new FormData($('#form_eksternal_alarm')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_eksternal_alarm')[0].reset();
                      $('#modal_eksternal_alarm').modal('hide');                
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                      },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                      }
                    });
              }
               function simpan_dokumentasi() {
              var url;

              var foto_1 = $("input[name=foto_1]").val().length;
               var foto_2 = $("input[name=foto_2]").val().length;
               var foto_3 = $("input[name=foto_3]").val().length;
               var foto_4 = $("input[name=foto_4]").val().length;
               var foto_5 = $("input[name=foto_5]").val().length;
               var foto_6 = $("input[name=foto_6]").val().length;
                     
                  if (foto_1 == 0 || foto_2 == 0 || foto_3== 0 || foto_4 ==0 || foto_5==0 || foto_6 ==0 ) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }

              url = '<?php echo site_url('Privantive/') ;?>';

              var formData = new FormData($('#form_dokumentasi')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_dokumentasi')[0].reset();
                      $('#modal_dokumentasi').modal('hide');                
                      toastr.success('Tambah Dokumentasi Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

              function Kembali(){
            window.location.href = "<?php echo base_url('Privantive/pilih_asset/').$sub_kategori.'/'.$id_pop; ?>";
          }
                </script>

        <!-- Modal modal_building -->
              <div class="modal fade" id="modal_building" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Building and Infrastructure</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-3">Input Rack</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-3">Input Building</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
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
                      <form class="cmxform form-horizontal style-form" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-3">Input KWh Meter</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-3">Input ACPDB</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
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
                      <form class="cmxform form-horizontal style-form" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-3">Rectifier</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-3">DCPDB</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
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
                      <form class="cmxform form-horizontal style-form" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-3">GENSET</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-3">ATS</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-3">INVERTER</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-3">UPS</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
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
                      <form class="cmxform form-horizontal style-form" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-3">AC</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-3">ALARM</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <!-- Modal modal_cooling -->
              <div class="modal fade" id="modal_cooling" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Cooling System</h4>
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

        <!-- Modal modal_network -->
              <div class="modal fade" id="modal_network" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Network Device</h4>
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

        <!-- Modal modal_device -->
        <div class="modal fade" id="modal_device" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Passive Device (ODF)</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-3">ODF</label>
                    <div class="col-lg-3">
                      <input class=" form-control" placeholder="Description" minlength="2" type="text" required />
                    </div>
                    <div class="col-lg-3">
                      <select class="form-control">
                        <option value="">Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Rusak">Rusak</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <input type="file" accept="image/*" capture="camera">
                    </div>
                  </div>
                </form>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>     