<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Genset
                  </h4>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <a data-target="#modal_fisik" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Data FISIK</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_inspeksi" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Inpeksi dan Tes Fungsi</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_kondisi_nol" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Kondisi Beban Nol</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_kondisi_penuh" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Kondisi Beban Penuh</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_lain_lain" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Lain - lain</a> 
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


        <!-- Modal data fisik -->
             <div class="modal fade" id="modal_fisik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Data Fisik</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_genset" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Merk Generator</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtGen" placeholder="Description" minlength="2" type="text" required />
                          </div>
                     
                          <label for="cemail" class="control-label col-lg-3">Kapasitas (KVA)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtKapasitas" placeholder="Description" minlength="2" type="text" required />
                          </div>
                       
                          <label for="cemail" class="control-label col-lg-3">Tipe</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTipe" placeholder="Description" minlength="2" type="text" required />
                          </div>
                    
                          <label for="cemail" class="control-label col-lg-3">Fasa</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtFasa" placeholder="Description" minlength="2" type="text" required />
                          </div>
                      
                          <label for="cemail" class="control-label col-lg-3">Serial Number</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSN" placeholder="Description" minlength="2" type="text" required />
                          </div>
                     
                          <label for="cemail" class="control-label col-lg-3">Tahun Aset</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTahunAset" placeholder="Description" minlength="2" type="text" required />
                          </div>
                      
                          <label for="cemail" class="control-label col-lg-3">Kebersihan Genset</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtKebgenset" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Merk Engine</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtMerkengine" placeholder="Description" minlength="2" type="text" required />
                          </div>
                      
                          <label for="cemail" class="control-label col-lg-3">Tipe</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txTipeEngine" placeholder="Description" minlength="2" type="text" required />
                          </div>
                       
                          <label for="cemail" class="control-label col-lg-3">Serial Number</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSNengine" placeholder="Description" minlength="2" type="text" required />
                          </div>
                     
                          <label for="cemail" class="control-label col-lg-3">RPM</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtRPM" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Nomor/Label Aset Amarta</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtAmarta" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_genset()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

          <!-- Modal Inspeksi dan tes fungsi -->
            <div class="modal fade" id="modal_inspeksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Inspeksi dan Tes Fungsi</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_inspeksi" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                      
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Fuel Level (liter)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtFlevel" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Hour Meter (hour jam)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtHourMeter" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Tegangan Aki (Volt)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTeganganAki" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                       
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Air Radiator</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectAirRadiator" value="Penuh"> Penuh
                            <input type="radio" name="selectAirRadiator" value="Setengah"> Setengah
                             <input type="radio" name="selectAirRadiator" value="Kosong"> Kosong<br>
                          </div>
                        </div>
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Kapasitas Tangki Bahan Bakar (liter)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtKapTangki" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_inspeksi()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal kondisi beban penuh -->
                  <div class="modal fade" id="modal_kondisi_penuh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Kondisi Beban Penuh</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_kondisi_penuh" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Tegangan</label><br>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">R-S (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtR_S_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">R-T (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtR_T_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S-T (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtS_T_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">N-G (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtN_G_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">R-N (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtR_N_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S-N (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtS_N_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">T-N (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtT_N_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">R-G (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtR_G_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S-G (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtS_G_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">T-G (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtT_G_tegangan" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Beban</label><br>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">fasa R (Ampere): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txt_fasa_r_beban" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">fasa S (Ampere): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txt_fasa_s_beban" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">fasa T (Ampere): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txt_fasa_t_beban" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_kondisi_penuh()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal kondisi beban nol -->
              <div class="modal fade" id="modal_kondisi_nol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Kondisi Beban Nol</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_beban_nol" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Tegangan</label><br>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">R-S (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtR_S_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">R-T (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtR_T_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S-T (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtS_T_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">N-G (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtN_G_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">R-N (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtR_N_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S-N (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtS_N_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">T-N (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtT_N_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">R-G (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtR_G_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S-G (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtS_G_tegangan" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">T-G (Volt): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtT_G_tegangan" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Beban</label><br>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">fasa R (Ampere): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txt_fasa_r_beban" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">fasa S (Ampere): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txt_fasa_s_beban" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">fasa T (Ampere): </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txt_fasa_t_beban" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_kondisi_nol()">Save changes</button>
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
                
              function simpan_genset() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_data_fisik_genset') ;?>';

              var formData = new FormData($('#form_genset')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_genset')[0].reset();
                      $('#modal_fisik').modal('hide');                
                      toastr.success('Tambah Data Genset Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }


           function simpan_inspeksi() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_data_genset_inspeksi') ;?>';

              var formData = new FormData($('#form_inspeksi')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_inspeksi')[0].reset();
                      $('#modal_inspeksi').modal('hide');                
                      toastr.success('Tambah Data Inspeksi dan tes fungsi Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

           function simpan_kondisi_nol() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_data_beban_nol') ;?>';

              var formData = new FormData($('#form_beban_nol')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_beban_nol')[0].reset();
                      $('#modal_kondisi_nol').modal('hide');                
                      toastr.success('Tambah Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_kondisi_penuh() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_data_beban_penuh') ;?>';

              var formData = new FormData($('#form_kondisi_penuh')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_kondisi_penuh')[0].reset();
                      $('#modal_kondisi_penuh').modal('hide');                
                      toastr.success('Tambah Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

           function simpan_lain_lain() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_genset_lain_lain') ;?>';

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
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_temuan() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_genset_temuan') ;?>';

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
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_dokumentasi() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_genset_dokumentasi') ;?>';

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
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
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