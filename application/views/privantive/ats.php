<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    ATS
                  </h4>
              <div align="left">
                  <button type="button" class="btn btn-info btn-sm" onclick="Kembali()">Kembali</button>
              </div>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <a data-target="#modal_foto_single" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_foto_single">Foto Single line ATS (masukkan 1 foto)</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_ats" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_ats">ATS</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_inspeksi" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Inspeksi dan tes fungsi</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_panel_sebelum_pm" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Status Lampu Panel Sebelum PM</a> 
                  </h5>
                    <h5 class="gen-case">
                    <a data-target="#modal_panel_sesudah_pm" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Status Lampu Panel Sesudah PM</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_kontrol_before" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Panel Kontrol Before</a> 
                  </h5>
                   <h5 class="gen-case">
                     <a data-target="#modal_kontrol_after" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Panel Kontrol After</a> 
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
                          <label for="cemail" class="control-label col-lg-2">Foto Single</label>
                          <div class="col-lg-12">
                            <input type="file" accept="image/*" name="foto_single" id="foto_single" capture="camera">
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

              <!-- Modal ATS -->

              <div class="modal fade" id="modal_ats" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">ATS</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_ats" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                      
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Merk ATS</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtMerkATS" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Seri</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSeri" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Serial Number</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSN" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Tahun Aset</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTahunAset" placeholder="Description" minlength="2" type="number" required />
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
                      <button type="button" class="btn btn-primary" onclick="simpan_ats()">Save changes</button>
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
                       <div class="form-group">
                          <label for="cname" class="control-label col-lg-3">Fail Over Test</label>
                          <div class="col-lg-8">
                            <input type="radio" name="selectFailOver" value="Penuh"> Pass
                            <input type="radio" name="selectFailOver" value="Setengah"> Fail
                            
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Mode ATS</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtModeATS" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Alarm Panel</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtAlarm" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                       
                          <div class="form-group">
                          <label for="cemail" class="control-label col-lg-3">Catatan Fail Over Test</label>
                          <div class="col-lg-8">
                            <textarea class="form-control" placeholder="Description" minlength="2" type="text" name="txtCatatanFail" required/></textarea>
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

              <!-- Modal Status Lampu panel sebelum PM -->
               <div class="modal fade" id="modal_panel_sebelum_pm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Status Lampu Panel Sebelum PM</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_panel_sebelum_pm" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                      
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">PLN</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtPLN" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Input PLN</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtInputPLN" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Input Genset</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtInputGenset" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Genset</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtGenset" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                          <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Genset OFF</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtGensetOFF" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Manual</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtManual" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div> <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Tanpa PLN</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTanpaPLN" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                       
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Otomatis</label>
                          <div class="col-lg-8">
                             <input class=" form-control" name="txtOtomatis" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Alarm OFF</label>
                          <div class="col-lg-8">
                             <input class=" form-control" name="txtAlarmOFF" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Genset ON</label>
                          <div class="col-lg-8">
                             <input class=" form-control" name="txtGensetON" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_panel_sebelum_pm()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Modal Status Lampu panel sesudah PM -->
               <div class="modal fade" id="modal_panel_sesudah_pm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Status Lampu Panel Sesudah PM</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_panel_sesudah_pm" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                      
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">PLN</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtPLN2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Input PLN</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtInputPLN2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Input Genset</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtInputGenset2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Genset</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtGenset2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                          <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Genset OFF</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtGensetOFF2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Manual</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtManual2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div> <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Tanpa PLN</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtTanpaPLN2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                       
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Otomatis</label>
                          <div class="col-lg-8">
                             <input class=" form-control" name="txtOtomatis2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Alarm OFF</label>
                          <div class="col-lg-8">
                             <input class=" form-control" name="txtAlarmOFF2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                         <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Genset ON</label>
                          <div class="col-lg-8">
                             <input class=" form-control" name="txtGensetON2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_panel_sesudah_pm()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Modal Panel kontrol before -->
               <div class="modal fade" id="modal_kontrol_before" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Panel Kontrol Before</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_kontrol_before" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                      
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Swict Controller 1</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSwict1" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Swict Controller 2</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSwict2" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Swict Controller 3</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSwict3" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_kontrol_before()">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>




              <!-- Modal Panel kontrol after -->
                <div class="modal fade" id="modal_kontrol_after" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Panel Kontrol After</h4>
                    </div>
                    <div class="modal-body">
                      <form id="form_kontrol_after" action="#" class="cmxform form-horizontal style-form">
                        <input type="hidden" name="txtIdPOP" value="<?php echo $id_pop; ?>">
                      
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Swict Controller 1</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSwict12" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Swict Controller 2</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSwict22" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Swict Controller 3</label>
                          <div class="col-lg-8">
                            <input class=" form-control" name="txtSwict32" placeholder="Description" minlength="2" type="text" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="simpan_kontrol_after()">Save changes</button>
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
                function simpan_foto_single() {
              var url;
                var foto_single = $("input[name=foto_single]").val().length;
              
                    if (foto_single == 0) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }

              url = '<?php echo site_url('Privantive/tambah_foto_single_ats') ;?>';

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
                      toastr.success('Tambah Foto single line ATS Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });


            }

               function simpan_ats() {
              var url;
              var txtMerkATS = $("input[name=txtMerkATS]").val().length;
              var txtSeri = $("input[name=txtSeri]").val().length;
              var txtSN = $("input[name=txtSN]").val().length;
              var txtTahunAset = $("input[name=txtTahunAset]").val().length;
              var txtAmarta = $("input[name=txtAmarta]").val().length;
              
             

                  if (txtMerkATS == 0 || txtSeri==0 || txtSN==0 || txtTahunAset==0 || txtAmarta==0  ) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }
              url = '<?php echo site_url('Privantive/tambah_data_ats_ats') ;?>';

              var formData = new FormData($('#form_ats')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_ats')[0].reset();
                      $('#modal_ats').modal('hide');                
                      toastr.success('Tambah Data ATS Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

            function simpan_inspeksi() {
              var url;
              var selectFailOver = $(':radio[name=selectFailOver]:checked').length;
              var txtModeATS = $("input[name=txtModeATS]").val().length;
              var txtAlarm = $("input[name=txtAlarm]").val().length;
              var txtCatatanFail = $("textarea[name=txtCatatanFail]").val().length;
    
              if (selectFailOver == 0 || txtModeATS==0 || txtAlarm==0 || txtCatatanFail==0  ) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }
              url = '<?php echo site_url('Privantive/tambah_data_ats_inspeksi') ;?>';

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
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

           function simpan_panel_sebelum_pm() {
              var url;
              var txtPLN = $("input[name=txtPLN]").val().length;
              var txtInputPLN = $("input[name=txtInputPLN]").val().length;
              var txtInputGenset = $("input[name=txtInputGenset]").val().length;
              var txtGenset = $("input[name=txtGenset]").val().length;
              var txtGensetOFF = $("input[name=txtGensetOFF]").val().length;
              var txtManual = $("input[name=txtManual]").val().length;
              var txtTanpaPLN = $("input[name=txtTanpaPLN]").val().length;
              var txtOtomatis = $("input[name=txtOtomatis]").val().length;
              var txtAlarmOFF = $("input[name=txtAlarmOFF]").val().length;
              var txtGensetON = $("input[name=txtGensetON]").val().length;

                  if (txtPLN == 0 || txtInputPLN==0 || txtGenset==0 || txtGensetOFF==0 || txtManual==0 || txtTanpaPLN==0 || txtOtomatis==0 || txtAlarmOFF==0 || txtGensetON==0   ) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }
              url = '<?php echo site_url('Privantive/tambah_ats_panel_sebelum_pm') ;?>';

              var formData = new FormData($('#form_panel_sebelum_pm')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_panel_sebelum_pm')[0].reset();
                      $('#modal_panel_sebelum_pm').modal('hide');                
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

           function simpan_panel_sesudah_pm() {
              var url;
              var txtPLN2 = $("input[name=txtPLN2]").val().length;
              var txtInputPLN2 = $("input[name=txtInputPLN2]").val().length;
              var txtInputGenset2 = $("input[name=txtInputGenset2]").val().length;
              var txtGenset2 = $("input[name=txtGenset2]").val().length;
              var txtGensetOFF2 = $("input[name=txtGensetOFF2]").val().length;
              var txtManual2 = $("input[name=txtManual2]").val().length;
              var txtTanpaPLN2 = $("input[name=txtTanpaPLN2]").val().length;
              var txtOtomatis2 = $("input[name=txtOtomatis2]").val().length;
              var txtAlarmOFF2 = $("input[name=txtAlarmOFF2]").val().length;
              var txtGensetON2 = $("input[name=txtGensetON2]").val().length;

                  if (txtPLN2 == 0 || txtInputPLN2==0 || txtGenset2==0 || txtGensetOFF2==0 || txtManual2==0 || txtTanpaPLN2==0 || txtOtomatis2==0 || txtAlarmOFF2==0 || txtGensetON2==0   ) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }
              url = '<?php echo site_url('Privantive/tambah_ats_panel_sesudah_pm') ;?>';

              var formData = new FormData($('#form_panel_sesudah_pm')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_panel_sesudah_pm')[0].reset();
                      $('#modal_panel_sesudah_pm').modal('hide');                
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

           function simpan_kontrol_before() {
              var url;
              var txtSwict1 = $("input[name=txtSwict1]").val().length;
              var txtSwict2 = $("input[name=txtSwict2]").val().length;
              var txtSwict3 = $("input[name=txtSwict3]").val().length;
              

                  if ( txtSwict1==0 || txtSwict2==0 || txtSwict3==0) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }

              url = '<?php echo site_url('Privantive/tambah_ats_kontrol_before') ;?>';

              var formData = new FormData($('#form_kontrol_before')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_kontrol_before')[0].reset();
                      $('#modal_kontrol_before').modal('hide');                
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }


          function simpan_kontrol_after() {
              var url;
              var txtSwict12 = $("input[name=txtSwict12]").val().length;
              var txtSwict22 = $("input[name=txtSwict22]").val().length;
              var txtSwict32 = $("input[name=txtSwict32]").val().length;
              

                  if (txtSwict12==0 ||  txtSwict22==0 || txtSwict32==0   ) {              
                      alert('Silahkan Isi Data Dengan Benar');
                      return false;
                  }
              url = '<?php echo site_url('Privantive/tambah_ats_kontrol_after') ;?>';

              var formData = new FormData($('#form_kontrol_after')[0]);
              $.ajax({
                  url : url,
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  success: function(data) {
                      $('#form_kontrol_after')[0].reset();
                      $('#modal_kontrol_after').modal('hide');                
                      toastr.success('Tambah Data Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }


           function simpan_lain_lain() {
              var url;
              var txtLainlain = $("textarea[name=txtLainlain]").val().length;

              if (txtLainlain == 0) {              
                  alert('Silahkan Isi Data Dengan Benar');
                  return false;
              }

              url = '<?php echo site_url('Privantive/tambah_ats_lain_lain') ;?>';

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
                      toastr.success('Tambah Lain-Lain ATS Berhasil!', 'Success', {timeOut: 5000})
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      alert('Error adding / upader data');
                  }
              });
          }

          function simpan_temuan() {
              var url;
              var txtTemuan = $("textarea[name=txtTemuan]").val().length;

              if (txtTemuan == 0) {              
                  alert('Silahkan Isi Data Dengan Benar');
                  return false;
              }
              url = '<?php echo site_url('Privantive/tambah_ats_temuan') ;?>';

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
                      toastr.success('Tambah Temuan Untuk Ditindaklanjuti ATS Berhasil!', 'Success', {timeOut: 5000})
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

              url = '<?php echo site_url('Privantive/tambah_ats_dokumentasi') ;?>';

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
                      toastr.success('Tambah Dokumentasi ATS Berhasil!', 'Success', {timeOut: 5000})
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