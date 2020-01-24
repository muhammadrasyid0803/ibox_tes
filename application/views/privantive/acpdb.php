<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    ACPDB
                </h4>
              <div align="left">
                  <button type="button" class="btn btn-info btn-sm" onclick="Kembali()">Kembali</button>
              </div>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <a data-target="#modal_data_acpdb" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_data_acpdb">Data ACPDB</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_inspeksi" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_inspeksi">Inpeksi</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_pengukur_tegangan" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_pengukur_tegangan">Pengukuran Tegangan</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_lain_lain" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_lain_lain">Lain - Lain</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_temuan" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_temuan">Temuan Untuk Ditindaklanjuti</a> 
                  </h5>
                   <h5 class="gen-case">
                     <a data-target="#modal_foto_single" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_foto_single">Foto single line ACPDB (1 FOTO)</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_dokumentasi" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_dokumentasi">Dokumentasi</a> 
                  </h5>
                </div>
              </div>
          </div>
            </section>
          </div>
        </div>

        <!-- Modal modal_data_acpdb -->
              <div class="modal fade" id="modal_data_acpdb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Data ACPDB</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_data_acpdb" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Kondisi Box ACPDB</label>
                          <div class="col-lg-8">
                            <select class="form-control" name="selectKondisiAcpdb" id="selectKondisiAcpdb">
                                <option value="">Pilih Kondisi</option>
                                <option value="Bersih">Bersih</option>
                                <option value="Kering">Kering</option>
                                <option value="Instalasi Rapi">Instalasi Rapi</option>
                                <option value="Kotor">Kotor</option>
                                <option value="Basah/Lembab">Basah/Lembab</option>
                                <option value="Kurang Rapi">Kurang Rapi</option>
                            </select>
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
                      <button type="button" class="btn btn-primary" onclick="simpan_data_acpdb()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

        <!-- Modal modal_inspeksi -->
              <div class="modal fade" id="modal_inspeksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Inspeksi</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_inspeksi" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Koneksi Terminal dan MCB dengan Kabel</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectKondisiTerminalMCB" value="Kencang"> Kencang
                            <input type="radio" name="selectKondisiTerminalMCB" value="Kendor"> Kendor<br>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Lightning Arrester</label><br>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Indikator Frasa R : </label>
                            <input type="radio" name="rd_frasa_r" value="Hijau"> Hijau
                            <input type="radio" name="rd_frasa_r" value="Merah"> Merah
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Indikator Frasa S : </label>
                            <input type="radio" name="rd_frasa_s" value="Hijau"> Hijau
                            <input type="radio" name="rd_frasa_s" value="Merah"> Merah
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Indikator Frasa T : </label>
                            <input type="radio" name="rd_frasa_t" value="Hijau"> Hijau
                            <input type="radio" name="rd_frasa_t" value="Merah"> Merah
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Uji Fungsi Timer Theben dan Kontaktor AC</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectUjiTimerAC" value="Berfungsi"> Berfungsi
                            <input type="radio" name="selectUjiTimerAC" value="Tidak Berfungsi">Tidak Berfungsi<br>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Uji Fungsi Thermostat Honeywell dan Kontaktor</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectUjiThermostatKontraktor" value="Berfungsi"> Berfungsi
                            <input type="radio" name="selectUjiThermostatKontraktor" value="Tidak Berfungsi">Tidak Berfungsi<br>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Uji Fungsi Thermostat DC Fan</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectUjiThermostatDcFan" value="Berfungsi"> Berfungsi
                            <input type="radio" name="selectUjiThermostatDcFan" value="Tidak Berfungsi">Tidak Berfungsi<br>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Fail Over MCB Input ACPDB</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectFailMcbAcpdb" value="Berhasil"> Berhasil (tidak ada satupun perangkat yang OFF)<br>
                            <input type="radio" name="selectFailMcbAcpdb" value="Tidak Berhasil">Tidak Berhasil (ada perangkat yang OFF)<br>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Merek & Tipe</label>
                          <div class="col-lg-8">
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtMerekNTipe" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Perangkat yang OFF saat fallover</label>
                          <div class="col-lg-8">
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtPerangkatOFF" required />
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

        <!-- Modal modal_pengukur_tegangan -->
              <div class="modal fade" id="modal_pengukur_tegangan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Pengukuran Tegangan</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_pengukur_tegangan" action="#" class="cmxform form-horizontal style-form">
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
                      <button type="button" class="btn btn-primary" onclick="simpan_pengukuran_tegangan()">Save changes</button>
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

        <!-- Modal modal_foto_single -->
              <div class="modal fade" id="modal_foto_single" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Foto single line ACPDB (1 FOTO)</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_foto_single" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cemail" class="control-label col-lg-2">Foto 1</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_1" id="foto_1" capture="camera">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_foto_single()">Save changes</button>
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
          function simpan_data_acpdb() {
              var url;

              var selectKondisiAcpdb = $('select[name=selectKondisiAcpdb]').val().length;
              var txtAmarta = $('input[name=txtAmarta]').val().length;
              
              if (selectKondisiAcpdb == 0 || txtAmarta == 0) {
                  alert('Silahkan Isi Data Dengan Benar');
                      return false;
              }
              url = '<?php echo site_url('Privantive/tambah_data_acpdb') ;?>';

              var formData = new FormData($('#form_data_acpdb')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_data_acpdb')[0].reset();
                      $('#modal_data_acpdb').modal('hide');                
                      toastr.success('Tambah Data ACPDB Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_inspeksi() {
              var url;

              var selectKondisiTerminalMCB = $(':radio[name=selectKondisiTerminalMCB]:checked').length;
              var rd_frasa_r = $(':radio[name=rd_frasa_r]:checked').length;
              var rd_frasa_s = $(':radio[name=rd_frasa_s]:checked').length;
              var rd_frasa_t = $(':radio[name=rd_frasa_t]:checked').length;
              var selectUjiTimerAC = $(':radio[name=selectUjiTimerAC]:checked').length;
              var selectUjiThermostatKontraktor = $(':radio[name=selectUjiThermostatKontraktor]:checked').length;
              var selectUjiThermostatDcFan = $(':radio[name=selectUjiThermostatDcFan]:checked').length;
              var selectFailMcbAcpdb = $(':radio[name=selectFailMcbAcpdb]:checked').length;
              var txtMerekNTipe = $('input[name=txtMerekNTipe]').val().length
              var txtPerangkatOFF = $('input[name=txtPerangkatOFF]').val().length
              
              if (selectKondisiTerminalMCB == 0 || rd_frasa_r == 0 || rd_frasa_s == 0 || rd_frasa_t == 0 || selectUjiTimerAC == 0 || selectUjiThermostatKontraktor == 0 || selectUjiThermostatDcFan == 0 || selectFailMcbAcpdb == 0 || txtMerekNTipe == 0 || txtPerangkatOFF == 0) {
                  alert('Silahkan Isi Data Dengan Benar');
                      return false;
              }

              url = '<?php echo site_url('Privantive/tambah_inspeksi_acpdb') ;?>';

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
                      toastr.success('Tambah Data ACPDB Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_pengukuran_tegangan() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_pengukuran_tegangan_acpdb') ;?>';

              var formData = new FormData($('#form_pengukur_tegangan')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_pengukur_tegangan')[0].reset();
                      $('#modal_pengukur_tegangan').modal('hide');                
                      toastr.success('Tambah Pengukuran Tegangan ACPDB Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_lain_lain() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_lain_lain_acpdb') ;?>';

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
                      toastr.success('Tambah Lain-Lain ACPDB Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_temuan() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_temuan_acpdb') ;?>';

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
                      toastr.success('Tambah Temuan Untuk Ditindaklanjuti ACPDB Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_foto_single() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_foto_single_acpdb') ;?>';

              var formData = new FormData($('#form_foto_single')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_foto_single')[0].reset();
                      $('#modal_foto_single').modal('hide');                
                      toastr.success('Tambah Foto single line ACPDB Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_dokumentasi() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_dokumentasi_acpdb') ;?>';

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
                      toastr.success('Tambah Dokumentasi ACPDB Berhasil!', 'Success', {timeOut: 5000})
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