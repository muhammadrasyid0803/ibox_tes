<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    KWH Meter
                    <!-- <?php echo $sub_kategori; ?> -->
                </h4>
              <div align="left">
                  <button type="button" class="btn btn-info btn-sm" onclick="Kembali()">Kembali</button>
              </div>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <a data-target="#modal_data_kwh" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_data_kwh">Data KWH Meter</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_inpeksi" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_inpeksi">Inspeksi</a> 
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
                    <a data-target="#modal_dokumentasi" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_dokumentasi">Dokumentasi</a> 
                  </h5>
                </div>
              </div>
          </div>
            </section>
          </div>
        </div>

        <!-- Modal modal_data_kwh -->
              <div class="modal fade" id="modal_data_kwh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Data KWH Meter</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_data_kwh" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">ID Pelanggan</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtIdPelanggan" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">ID KWH Meter</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtIdKwh" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Daya Terpasang (VA)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtDaya" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">MCB Terpasang (A)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtMcb" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Fasa</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtFasa" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Nomor/Label Aset Amarta</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtAmarta" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Gembok Box KWH Meter</label>
                          <div class="col-lg-8">
                            <input type="radio" name="rd_gembok" value="Ada"> Ada
                            <input type="radio" name="rd_gembok" value="Tidak Ada"> Tidak Ada<br>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_data_kwh()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

        <!-- Modal modal_inpeksi -->
              <div class="modal fade" id="modal_inpeksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                          <label for="cname" class="control-label col-lg-3">Kondisi Box KWH Meter</label>
                          <div class="col-lg-8">
                            <select class="form-control" name="selectKondisiKwh" id="selectKondisiKwh">
                                <option value="">Pilih Kondisi</option>
                                <option value="Bersih">Bersih</option>
                                <option value="Kering">Kering</option>
                                <option value="Berkarat">Berkarat</option>
                                <option value="Kotor">Kotor</option>
                                <option value="Basah/Lembab">Basah/Lembab</option>
                                <option value="Tidak Berkarat">Tidak Berkarat</option>
                            </select>
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
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Merek & Tipe</label>
                          <div class="col-lg-8">
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtMerekNTipe" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Koneksi Terminal dan MCB dengan Kabel</label>
                          <div class="col-lg-8">
                            <input type="radio" name="rd_terminal_mcb" value="Kencang"> Kencang
                            <input type="radio" name="rd_terminal_mcb" value="Kendor"> Kendor
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
                            <input type="file" accept="image/*" name="foto_1" id="foto_1" capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 2</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_2" id="foto_2" capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 3</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_3" id="foto_3" capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 4</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_4" id="foto_4" capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 5</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_5" id="foto_5" capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 6</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_6" id="foto_6" capture="camera">
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
          function simpan_data_kwh() {
              var url;
              
              var txtIdPelanggan = $("input[name=txtIdPelanggan]").val().length;
              var txtIdKwh = $("input[name=txtIdKwh]").val().length;
              var txtDaya = $("input[name=txtDaya]").val().length;
              var txtMcb = $("input[name=txtMcb]").val().length;
              var txtFasa = $("input[name=txtFasa]").val().length;
              var txtAmarta = $("input[name=txtAmarta]").val().length;
              var rd_gembok = $(':radio[name=rd_gembok]:checked').length;

                  if (txtIdPelanggan == 0 || txtIdKwh == 0 || txtDaya == 0 || txtMcb == 0 || txtFasa == 0 || txtAmarta == 0 || rd_gembok == 0) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }

              url = '<?php echo site_url('Privantive/tambah_data_kwh') ;?>';

              var formData = new FormData($('#form_data_kwh')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_data_kwh')[0].reset();
                      $('#modal_data_kwh').modal('hide');                
                      toastr.success('Tambah Data Data KWH Meter!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_inspeksi() {
              var url;

              var selectKondisiKwh = $("input[name=selectKondisiKwh]").val();
              var rd_frasa_r = $(':radio[name=rd_frasa_r]:checked').length;
              var rd_frasa_s = $(':radio[name=rd_frasa_s]:checked').length;
              var rd_frasa_t = $(':radio[name=rd_frasa_t]:checked').length;
              var txtMerekNTipe = $("input[name=txtMerekNTipe]").val().length;
              var rd_terminal_mcb = $(':radio[name=rd_terminal_mcb]:checked').length;

                  if (selectKondisiKwh == 0 || rd_frasa_r == 0 || rd_frasa_s == 0 || rd_frasa_t == 0 || txtMerekNTipe == 0 || rd_terminal_mcb == 0) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }

              url = '<?php echo site_url('Privantive/tambah_inspeksi') ;?>';

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
                      $('#modal_inpeksi').modal('hide');                
                      toastr.success('Tambah Inspeksi Sukses!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_pengukuran_tegangan() {
              var url;

              var txtR_S_tegangan = $("input[name=txtR_S_tegangan]").val().length;
              var txtR_T_tegangan = $("input[name=txtR_T_tegangan]").val().length;
              var txtS_T_tegangan = $("input[name=txtS_T_tegangan]").val().length;
              var txtN_G_tegangan = $("input[name=txtN_G_tegangan]").val().length;
              var txtR_N_tegangan = $("input[name=txtR_N_tegangan]").val().length;
              var txtS_N_tegangan = $("input[name=txtS_N_tegangan]").val().length;
              var txtT_N_tegangan = $("input[name=txtT_N_tegangan]").val().length;
              var txtR_G_tegangan = $("input[name=txtR_G_tegangan]").val().length;
              var txtS_G_tegangan = $("input[name=txtS_G_tegangan]").val().length;
              var txtT_G_tegangan = $("input[name=txtT_G_tegangan]").val().length;
              var txt_fasa_r_beban = $("input[name=txt_fasa_r_beban]").val().length;
              var txt_fasa_s_beban = $("input[name=txt_fasa_s_beban]").val().length;
              var txt_fasa_t_beban = $("input[name=txt_fasa_t_beban]").val().length;

                  if (txtR_S_tegangan == 0 || txtR_T_tegangan == 0 || txtS_T_tegangan == 0 || txtN_G_tegangan == 0 || txtR_N_tegangan == 0 || txtS_N_tegangan == 0 || txtT_N_tegangan == 0 || txtR_G_tegangan == 0 || txtS_G_tegangan == 0 || txtT_G_tegangan == 0 || txt_fasa_r_beban == 0 || txt_fasa_s_beban == 0 || txt_fasa_t_beban == 0) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }

              url = '<?php echo site_url('Privantive/tambah_pengukuran_tegangan') ;?>';

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
                      toastr.success('Tambah Pengukuran Tegangan Sukses!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_lain_lain() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_lain_lain') ;?>';

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
                      toastr.success('Tambah Lain-lain Sukses!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_temuan() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_temuan') ;?>';

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
                      toastr.success('Tambah Temuan Untuk Ditindaklanjuti Sukses!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_dokumentasi() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_dokumentasi') ;?>';

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
                      toastr.success('Tambah Dokumentasi Sukses!', 'Success', {timeOut: 5000})
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