<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Baterai
                  </h4>
              <div align="left">
                  <button type="button" class="btn btn-info btn-sm" onclick="Kembali()">Kembali</button>
              </div>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <a data-target="#modal_baterai" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Data Baterai</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_lain_lain" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Lain - Lain</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_temuan" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Temuan Untuk Ditindaklanjuti</a> 
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

          <!-- modal data baterai -->
          <div class="modal fade" id="modal_baterai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Data Battery</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_baterai" action="#" class="cmxform form-horizontal style-form">

                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">

                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Diameter Kabel Battery</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectDiameterKabel" value="10mm"> 10 mm
                            <input type="radio" name="selectDiameterKabel" value="16mm"> 16 mm
                            <input type="radio" name="selectDiameterKabel" value="25mm"> 25 mm<br>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Koneksi Terminal Battery dengan kabel</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectKoneksiTerminal" value="Kencang"> Kencang
                            <input type="radio" name="selectKoneksiTerminal" value="Kendor"> Kendor<br>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Kondisi Fisik Battery</label>
                          <div class="col-sm-8">
                            <input type="radio" name="selectKondisiFisik" value="Normal"> Normal
                            <input type="radio" name="selectKondisiFisik" value="Kembung"> Kembung
                            <input type="radio" name="selectKondisiFisik" value="Terdapat/Tidak terdapat korosi pada terminal"> Terdapat/Tidak terdapat korosi pada terminal<br>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Nomor/Label Aset Amarta</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtAmarta" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group">
                        <label for="cemail" class="control-label col-lg-3">Merk</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtMerk" placeholder="Description" minlength="2" type="text" required />
                          </div>
                          <label for="cemail" class="control-label col-lg-3">Tipe</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTipe" placeholder="Description" minlength="2" type="text" required />
                          </div>
                          <label for="cemail" class="control-label col-lg-3">Kapasitas (Ah)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtKapasitas" placeholder="Description" minlength="2" type="text" required />
                          </div>
                          <label for="cemail" class="control-label col-lg-3">Unit #1 (Volt)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtUnit" placeholder="Description" minlength="2" type="text" required />
                          </div>
                          <label for="cemail" class="control-label col-lg-3">S/N</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSN" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_baterai()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>


         <!-- Modal modal_lain_lain -->
         <div class="modal fade" id="modal_lain_lain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Lain-lain</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_lain_lain" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <div class="col-lg-12">
                            <textarea class="form-control" placeholder="Description" minlength="2" type="text" name="txtLainlain" required/></textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_lain_lain()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

        <!-- Modal modal_temuan -->
              <div class="modal fade" id="modal_temuan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Temuan Untuk Ditindaklanjuti</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_temuan" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <div class="col-lg-12">
                            <textarea class="form-control" placeholder="Description" minlength="2" type="text" name="txtTemuan" required/></textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_temuan()">Save changes</button>
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
                 function simpan_baterai() {
              var url;

              var selectDiameterKabel = $(':radio[name=selectDiameterKabel]:checked').length;
              var selectKoneksiTerminal = $(':radio[name=selectKoneksiTerminal]:checked').length;
              var selectKondisiFisik = $(':radio[name=selectKondisiFisik]:checked').length;
              var txtAmarta = $('input[name=txtAmarta]').val().length;
              var txtMerk = $('input[name=txtMerk]').val().length;
              var txtTipe = $('input[name=txtTipe]').val().length;
              var txtKapasitas = $('input[name=txtKapasitas]').val().length;
              var txtUnit = $('input[name=txtUnit]').val().length;
              var txtSN = $('input[name=txtSN]').val().length;
              
              if (selectDiameterKabel == 0 || selectKoneksiTerminal == 0 || selectKondisiFisik == 0 || txtAmarta == 0 || txtMerk == 0 || txtTipe == 0 || txtKapasitas == 0 || txtUnit == 0 || txtSN == 0) {
                  alert('Silahkan Isi Data Dengan Benar');
                      return false;
              }

              url = '<?php echo site_url('Privantive/tambah_data_battery') ;?>';

              var formData = new FormData($('#form_baterai')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_baterai')[0].reset();
                      $('#modal_baterai').modal('hide');                
                      toastr.success('Tambah Data Battery Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }


           function simpan_lain_lain() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_battery_lain_lain') ;?>';

              var formData = new FormData($('#form_lain_lain')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_lain_lain')[0].reset();
                      $('#modal_lain_lain').modal('hide');                
                      toastr.success('Tambah Lain-Lain Battery Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_temuan() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_battery_temuan') ;?>';

              var formData = new FormData($('#form_temuan')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_temuan')[0].reset();
                      $('#modal_temuan').modal('hide');                
                      toastr.success('Tambah Temuan Untuk Ditindaklanjuti Battery Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_dokumentasi() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_battery_dokumentasi') ;?>';

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
                      toastr.success('Tambah Dokumentasi Battery Berhasil!', 'Success', {timeOut: 5000})
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