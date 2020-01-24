<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Rectifier
                  </h4>
              <div align="left">
                  <button type="button" class="btn btn-info btn-sm" onclick="Kembali()">Kembali</button>
              </div>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <a data-target="#modal_rectifier" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Data Rectifier</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_lain_lain" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Lain - Lain</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_temuan" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Temuan Untuk Ditindaklanjuti</a> 
                  </h5>
                   <h5 class="gen-case">
                     <a data-target="#modal_foto_single" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Foto single line DCPDB (1 FOTO)</a> 
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

        <!-- Modal data rectifier -->
        <div class="modal fade" id="modal_rectifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Data Rectifier</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_rectifier" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Merek dan Tipe</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtMerk" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Serial Number (S/N)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSN" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Nomor/Label Aset Amarta</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtAmarta" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Jumlah Slot Modul</label>
                          <div class="col-lg-8">
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtJumlahSlot" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Kondisi Fuse / MCB Battery</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtKondisiFuse" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Tegangan (VDC)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTegangan" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Beban (A)</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtBeban" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Alarm</label>
                          <div class="col-lg-8">
                          <textarea class="form-control" placeholder="Description" minlength="2" type="text" name="txtAlarm" required/></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Fuse /MCB 1</label>
                          <div class="col-lg-6">
                            <input type="radio" name="selectMCB1" value="Berfungsi"> Normal/ON
                            <input type="radio" name="selectMCB1" value="Tidak Berfungsi">Putus/OFF<br>
                          </div>
                        </div>
                        <div class="form-group">
                        <label for="cname" class="control-label col-lg-3">Fuse /MCB 2</label>
                          <div class="col-lg-6">
                            <input type="radio" name="selectMCB2" value="Berfungsi"> Normal/ON
                            <input type="radio" name="selectMCB2" value="Tidak Berfungsi">Putus/OFF<br>
                          </div>
                        </div>

                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 1 </label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM1" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M1" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 2</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM2" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M2" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 3 </label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM3" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM3" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M3" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 4 </label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM4" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM4" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M4" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 5 </label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM5" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM5" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M5" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 6</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM6" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM6" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M6" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 7 </label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM7" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM7" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M7" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 8 </label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM8" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM8" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M8" required />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Modul 9</label>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasM9" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtAmpereM9" required />
                          </div>
                          <div class="col-lg-3">
                            <label for="cname" class="control-label">S/N </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSN_M9" required />
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Kapasitas Total (A)</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasKap" required />
                          </div>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtKapasitasAmpere" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Beban Terpakai (B)</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtBebanKapasitas" required />
                          </div>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtBebanAmpere" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Selisih (C)</label>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Kapasitas </label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSelisihKapasitas" required />
                          </div>
                          <div class="col-lg-4">
                            <label for="cname" class="control-label">Ampere (A)</label>
                            <input class=" form-control" placeholder="Description" minlength="2" type="text" name="txtSelisihAmpere" required />
                          </div>
                        </div>

                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_rectifier()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>





       <!-- Modal modal_lain-lain -->
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

        <!-- Modal modal_temuan ditindaklanjuti -->
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

        <!-- Modal foto single -->
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

        <!-- Modal dokumentasi -->
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
                            <input type="file" accept="image/*" name="foto_2" capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 3</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_3"  capture="camera">
                          </div>
                            <label for="cemail" class="control-label col-lg-2">Foto 4</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_4" capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 5</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_5" capture="camera">
                          </div>
                          <label for="cemail" class="control-label col-lg-2">Foto 6</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_6"  capture="camera">
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
            function simpan_rectifier(){
              var url;

              var txtMerk = $('input[name=txtMerk]').val().length;
              var txtSN = $('input[name=txtSN]').val().length;
              var txtAmarta = $('input[name=txtAmarta]').val().length;
              var txtJumlahSlot = $('input[name=txtJumlahSlot]').val().length;
              var txtKondisiFuse = $('input[name=txtKondisiFuse]').val().length;
              var txtTegangan = $('input[name=txtTegangan]').val().length;
              var txtBeban = $('input[name=txtBeban]').val().length;
              var txtAlarm = $('textarea[name=txtAlarm]').val().length;
              var selectMCB1 = $(':radio[name=selectMCB1]:checked').length;
              var selectMCB2 = $(':radio[name=selectMCB2]:checked').length;
              var txtKapasitasKap = $('input[name=txtKapasitasKap]').val().length;
              var txtKapasitasAmpere = $('input[name=txtKapasitasAmpere]').val().length;
              var txtBebanKapasitas = $('input[name=txtBebanKapasitas]').val().length;
              var txtBebanAmpere = $('input[name=txtBebanAmpere]').val().length;
              var txtSelisihKapasitas = $('input[name=txtSelisihKapasitas]').val().length;
              var txtSelisihAmpere = $('input[name=txtSelisihAmpere]').val().length;

              // alert(txtAlarm);
              // alert(txtMerk+','+txtSN+','+txtAmarta+','+txtJumlahSlot+','+txtKondisiFuse+','+txtTegangan+','+txtBeban+','+txtAlarm+','+selectMCB1+','+selectMCB2+','+txtKapasitasKap+','+txtKapasitasAmpere+','+txtBebanKapasitas+','+txtBebanAmpere+','+txtSelisihKapasitas+','+txtSelisihAmpere);
              // return false;
              
              if (txtMerk == 0 || txtSN == 0 || txtAmarta == 0 || txtJumlahSlot == 0 || txtKondisiFuse == 0 || txtTegangan == 0 || txtBeban == 0 || txtAlarm == 0 || selectMCB1 == 0 || selectMCB2 == 0 || txtKapasitasKap == 0 || txtKapasitasAmpere == 0 || txtBebanKapasitas == 0 || txtBebanAmpere == 0 || txtSelisihKapasitas == 0 || txtSelisihAmpere == 0) {
                  alert('Silahkan Isi Data Dengan Benar');
                      return false;
              }

              url = '<?php echo site_url('Privantive/tambah_data_rectifier') ;?>';

              var formData = new FormData($('#form_rectifier')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_rectifier')[0].reset();
                      $('#modal_rectifier').modal('hide');                
                      toastr.success('Tambah Data Rectifier Sukses!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
            } 


              function simpan_lain_lain() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_rectifier_lain_lain') ;?>';

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
              url = '<?php echo site_url('Privantive/tambah_rectifier_temuan') ;?>';

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

          function simpan_foto_single() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_rectifier_foto_single') ;?>';

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
                      toastr.success('Tambah Foto single line Rectifier Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_dokumentasi() {
              var url;
              url = '<?php echo site_url('Privantive/tambah_rectifier_dokumentasi') ;?>';

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
                      toastr.success('Tambah Dokumentasi Rectifier Sukses!', 'Success', {timeOut: 5000})
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