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
              <li><a data-toggle="tab" href="#Alarm">External Alarm And Monitoring System</a></li>
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

          <!-- Modal detail_ac -->
          <div class="modal fade" id="detail_ac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body" id="detail_jobs">
                      <label>Deskripsi KWH :</label> <label class="desc_kwh"></label>
                      <br/>
                      <label>Kondisi KWH :</label> <label class="kondisi_kwh"></label>
                      <br/>
                      <label>Foto KWH :</label><img src="" id="foto_kwh" class="img" width="240">
                      <br/>
                      <label>Deskripsi ACPDB :</label> <label class="desc_acpdb"></label>
                      <br/>
                      <label>Kondisi ACPDB :</label> <label class="kondisi_acpdb"></label>
                      <br/>
                      <label>Foto ACPDB :</label> <img src="" id="foto_acpdb" class="img" width="240">
                      <br/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal detail_dc -->
          <div class="modal fade" id="detail_dc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body" id="detail_jobs">
                      <label>Deskripsi Rectifier :</label> <label class="desc_rectifier"></label>
                      <br/>
                      <label>Kondisi Rectifier :</label> <label class="kondisi_rectifier"></label>
                      <br/>
                      <label>Foto Rectifier :</label><img src="" id="foto_rectifier" class="img" width="240">
                      <br/>
                      <label>Deskripsi DCPDB :</label> <label class="desc_dcpdb"></label>
                      <br/>
                      <label>Kondisi DCPDB :</label> <label class="kondisi_dcpdb"></label>
                      <br/>
                      <label>Foto DCPDB :</label> <img src="" id="foto_dcpdb" class="img" width="240">
                      <br/>
                      <label>Deskripsi Baterai :</label> <label class="desc_baterai"></label>
                      <br/>
                      <label>Kondisi Baterai :</label> <label class="kondisi_baterai"></label>
                      <br/>
                      <label>Foto Baterai :</label> <img src="" id="foto_baterai" class="img" width="240">
                      <br/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal detail_power -->
          <div class="modal fade" id="detail_power" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body" id="detail_jobs">
                      <label>Deskripsi Genset :</label> <label class="desc_genset"></label>
                      <br/>
                      <label>Kondisi Genset :</label> <label class="kondisi_genset"></label>
                      <br/>
                      <label>Foto Genset :</label><img src="" id="file_genset" class="img" width="240">
                      <br/>
                      <label>Deskripsi ATS :</label> <label class="desc_ats"></label>
                      <br/>
                      <label>Kondisi ATS :</label> <label class="kondisi_ats"></label>
                      <br/>
                      <label>Foto ATS :</label> <img src="" id="file_ats" class="img" width="240">
                      <br/>
                      <label>Deskripsi Inverter :</label> <label class="desc_inverter"></label>
                      <br/>
                      <label>Kondisi Inverter :</label> <label class="kondisi_inverter"></label>
                      <br/>
                      <label>Foto Inverter :</label> <img src="" id="file_inverter" class="img" width="240">
                      <br/>
                      <label>Deskripsi UPS :</label> <label class="desc_ups"></label>
                      <br/>
                      <label>Kondisi UPS :</label> <label class="kondisi_ups"></label>
                      <br/>
                      <label>Foto UPS :</label> <img src="" id="file_ups" class="img" width="240">
                      <br/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal detail_alarm -->
          <div class="modal fade" id="detail_alarm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body" id="detail_jobs">
                      <label>Deskripsi AC :</label> <label class="desc_ac"></label>
                      <br/>
                      <label>Kondisi AC :</label> <label class="kondisi_ac"></label>
                      <br/>
                      <label>Foto AC :</label><img src="" id="file_ac" class="img" width="240">
                      <br/>
                      <label>Deskripsi Alarm :</label> <label class="desc_alarm"></label>
                      <br/>
                      <label>Kondisi Alarm :</label> <label class="kondisi_alarm"></label>
                      <br/>
                      <label>Foto Alarm :</label> <img src="" id="file_alarm" class="img" width="240">
                      <br/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal detail_odf -->
          <div class="modal fade" id="detail_odf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body" id="detail_jobs">
                      <label>Deskripsi ODF :</label> <label class="desc_odf"></label>
                      <br/>
                      <label>Kondisi ODF :</label> <label class="kondisi_odf"></label>
                      <br/>
                      <label>Foto ODF :</label><img src="" id="file_odf" class="img" width="240">
                      <br/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
          </div>

           <!-- Modal Hapus Building -->
          <div class="modal fade" id="modal_hapus_building" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                      <div class="modal-body">
                        <input type="hidden" name="TxtId" id="id_building" value="">
                        <div class="alert alert-warning">
                          <p>Apakah Anda yakin ingin menghapus data ini?</p></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button class="btn_hapus btn btn-danger" id="btn_hapus_building">Hapus</button>
                        </div>
                    </form>
                  </div>
                </div>
          </div>

          <!-- Modal Hapus Ac -->
          <div class="modal fade" id="modal_hapus_ac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                      <div class="modal-body">
                        <input type="hidden" name="TxtId" id="id_building" value="">
                        <div class="alert alert-warning">
                          <p>Apakah Anda yakin ingin menghapus data ini?</p></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button class="btn_hapus btn btn-danger" id="btn_hapus_ac">Hapus</button>
                        </div>
                    </form>
                  </div>
                </div>
          </div>

          <!-- Modal Hapus Dc -->
          <div class="modal fade" id="modal_hapus_dc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                      <div class="modal-body">
                        <input type="hidden" name="TxtId" id="id_building" value="">
                        <div class="alert alert-warning">
                          <p>Apakah Anda yakin ingin menghapus data ini?</p></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button class="btn_hapus btn btn-danger" id="btn_hapus_dc">Hapus</button>
                        </div>
                    </form>
                  </div>
                </div>
          </div>

          <!-- Modal Hapus Power -->
          <div class="modal fade" id="modal_hapus_power" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                      <div class="modal-body">
                        <input type="hidden" name="TxtId" id="id_building" value="">
                        <div class="alert alert-warning">
                          <p>Apakah Anda yakin ingin menghapus data ini?</p></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button class="btn_hapus btn btn-danger" id="btn_hapus_power">Hapus</button>
                        </div>
                    </form>
                  </div>
                </div>
          </div>

          <!-- Modal Hapus Alarm -->
          <div class="modal fade" id="modal_hapus_alarm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                      <div class="modal-body">
                        <input type="hidden" name="TxtId" id="id_building" value="">
                        <div class="alert alert-warning">
                          <p>Apakah Anda yakin ingin menghapus data ini?</p></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button class="btn_hapus btn btn-danger" id="btn_hapus_alarm">Hapus</button>
                        </div>
                    </form>
                  </div>
                </div>
          </div>

          <!-- Modal Hapus ODF -->
          <div class="modal fade" id="modal_hapus_odf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                      <div class="modal-body">
                        <input type="hidden" name="TxtId" id="id_building" value="">
                        <div class="alert alert-warning">
                          <p>Apakah Anda yakin ingin menghapus data ini?</p></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button class="btn_hapus btn btn-danger" id="btn_hapus_odf">Hapus</button>
                        </div>
                    </form>
                  </div>
                </div>
          </div>

          <!-- Modal Edit Building -->
          <div class="modal fade" id="modal_edit_building" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Data Building</h4>
                    </div>
                    <div class="modal-body">
                        <form id="form" action="#" class="form-horizontal">
                          <div class="form-group ">
                            <input type="hidden" name="txtIdBuilding" id="txtIdBuilding" value="" />
                            <label for="cname" class="control-label col-lg-2">Input Rack</label>
                            <div class="col-lg-3">
                              <input class=" form-control" placeholder="Description" type="text" name="txtDescRack" id="txtDescRack" required />
                            </div>
                            <div class="col-lg-2">
                              <select class="form-control" name="selectKondisiRack" id="selectKondisiRack">
                                <option value="">Pilih Kondisi</option>
                                <option value="Baik">Baik</option>
                                <option value="Kurang">Kurang</option>
                                <option value="Rusak">Rusak</option>
                              </select>
                            </div>
                            <div class="col-lg-2">
                              <select class="form-control" name="selectNoRack" id="selectNoRack">
                                <option value="">Pilih No. Rack</option>
                                  <?php foreach ($no as $n ): ?>
                                      <option value="<?php echo $n->id;?>"><?php echo $n->aset_id;?></option>
                                  <?php endforeach;?>
                              </select>
                            </div>
                            <div class="col-lg-2">
                              <input type="file" accept="image/*" name="foto_rack" id="foto_rack" capture="camera">
                            </div>
                          </div>
                          <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">Input Building</label>
                            <div class="col-lg-3">
                              <input class=" form-control" placeholder="Description" type="text" name="txtDescBuilding" id="txtDescBuilding" required />
                            </div>
                            <div class="col-lg-3">
                              <select class="form-control" name="selectKondisiBuilding" id="selectKondisiBuilding">
                                <option value="">Pilih Kondisi</option>
                                <option value="Baik">Baik</option>
                                <option value="Kurang">Kurang</option>
                                <option value="Rusak">Rusak</option>
                              </select>
                            </div>
                            <div class="col-lg-2">
                              <input type="file" accept="image/*" name="foto_building" id="foto_building" capture="camera">
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="button" onclick="simpan_edit_building()" class="btn btn-primary" id="btn_edit_building">Simpan</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal Edit AC -->
          <div class="modal fade" id="modal_edit_ac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Data AC</h4>
                    </div>
                    <div class="modal-body">
                        <form id="form_ac" action="#" class="form-horizontal">
                          <div class="form-group ">
                            <input type="hidden" name="txtIdAC" value="" />
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="button" onclick="simpan_edit_ac()" class="btn btn-primary" id="btn_edit_building">Simpan</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal Edit DC -->
          <div class="modal fade" id="modal_edit_dc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Data DC</h4>
                    </div>
                    <div class="modal-body">
                        <form id="form_dc" action="#" class="form-horizontal">
                          <div class="form-group ">
                            <input type="hidden" name="txtIdDc" value="" />
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="button" onclick="simpan_edit_dc()" class="btn btn-primary" id="btn_edit_building">Simpan</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal Edit Power -->
          <div class="modal fade" id="modal_edit_power" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Data DC</h4>
                    </div>
                    <div class="modal-body">
                        <form id="form_power" action="#" class="form-horizontal">
                          <div class="form-group ">
                            <input type="hidden" name="txtIdPower" value="" />
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="button" onclick="simpan_edit_power()" class="btn btn-primary" id="btn_edit_building">Simpan</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal Edit Alarm -->
          <div class="modal fade" id="modal_edit_alarm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Data DC</h4>
                    </div>
                    <div class="modal-body">
                        <form id="form_alarm" action="#" class="form-horizontal">
                          <div class="form-group ">
                            <input type="hidden" name="txtIdAlarm" value="" />
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="button" onclick="simpan_edit_alarm()" class="btn btn-primary" id="btn_edit_building">Simpan</button>
                    </div>
                  </div>
                </div>
          </div>

          <!-- Modal Edit ODF -->
          <div class="modal fade" id="modal_edit_odf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Data ODF</h4>
                    </div>
                    <div class="modal-body">
                        <form id="form_odf" action="#" class="form-horizontal">
                          <div class="form-group ">
                            <input type="hidden" name="txtIdOdf" value="" />
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="button" onclick="simpan_edit_odf()" class="btn btn-primary" id="btn_edit_building">Simpan</button>
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
                                '<a href="javascript:;" class="btn btn-success btn-xs item_detail" data="'+data[i].id+'">Detail</a>'+' '+
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
                                '<a href="javascript:;" class="btn btn-success btn-xs item_detail" data="'+data[i].id+'">Detail</a>'+' '+
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
                                '<a href="javascript:;" class="btn btn-success btn-xs item_detail" data="'+data[i].id+'">Detail</a>'+' '+
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
                                '<a href="javascript:;" class="btn btn-success btn-xs item_detail" data="'+data[i].id+'">Detail</a>'+' '+
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
                                '<a href="javascript:;" class="btn btn-success btn-xs item_detail" data="'+data[i].id+'">Detail</a>'+' '+
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

    //Tampil Detail show_data_ac
    $('#show_data_ac').on('click', '.item_detail', function(){
      var id = $(this).attr('data');
      $('#detail_ac').modal('show');
      $('#detail_ac').find('.modal-title').text('AC Electricity');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>asset_group/detail_ac',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#detail_ac').find('.desc_kwh').text(data.desc_kwh);
          $('#detail_ac').find('.kondisi_kwh').text(data.kondisi_kwh);
          $('#detail_ac').find('#foto_kwh').attr('src', base_url + "assets/dokumen/" + data.file_kwh);
          $('#detail_ac').find('.desc_acpdb').text(data.desc_acpdb);
          $('#detail_ac').find('.kondisi_acpdb').text(data.kondisi_acpdb);
          $('#detail_ac').find('#foto_acpdb').attr('src', base_url + "assets/dokumen/" + data.file_acpdb);
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    })

    //Tampil Detail show_data_dc
    $('#show_data_dc').on('click', '.item_detail', function(){
      var id = $(this).attr('data');
      $('#detail_dc').modal('show');
      $('#detail_dc').find('.modal-title').text('DC Electricity');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>asset_group/detail_dc',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#detail_dc').find('.desc_rectifier').text(data.desc_rectifier);
          $('#detail_dc').find('.kondisi_rectifier').text(data.kondisi_rectifier);
          $('#detail_dc').find('#foto_rectifier').attr('src', base_url + "assets/dokumen/" + data.file_rectifier);
          $('#detail_dc').find('.desc_dcpdb').text(data.desc_dcpdb);
          $('#detail_dc').find('.kondisi_dcpdb').text(data.kondisi_dcpdb);
          $('#detail_dc').find('#foto_dcpdb').attr('src', base_url + "assets/dokumen/" + data.file_dcpdb);
          $('#detail_dc').find('.desc_baterai').text(data.desc_baterai);
          $('#detail_dc').find('.kondisi_baterai').text(data.kondisi_baterai);
          $('#detail_dc').find('#foto_baterai').attr('src', base_url + "assets/dokumen/" + data.file_baterai);
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    })

    //Tampil Detail show_data_power
    $('#show_data_power').on('click', '.item_detail', function(){
      var id = $(this).attr('data');
      $('#detail_power').modal('show');
      $('#detail_power').find('.modal-title').text('Power Supply Back Up System');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>asset_group/detail_power',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#detail_power').find('.desc_genset').text(data.desc_genset);
          $('#detail_power').find('.kondisi_genset').text(data.kondisi_genset);
          $('#detail_power').find('#file_genset').attr('src', base_url + "assets/dokumen/" + data.file_genset);
          $('#detail_power').find('.desc_ats').text(data.desc_ats);
          $('#detail_power').find('.kondisi_ats').text(data.kondisi_ats);
          $('#detail_power').find('#file_ats').attr('src', base_url + "assets/dokumen/" + data.file_ats);
          $('#detail_power').find('.desc_inverter').text(data.desc_inverter);
          $('#detail_power').find('.kondisi_inverter').text(data.kondisi_inverter);
          $('#detail_power').find('#file_inverter').attr('src', base_url + "assets/dokumen/" + data.file_inverter);
          $('#detail_power').find('.desc_ups').text(data.desc_ups);
          $('#detail_power').find('.kondisi_ups').text(data.kondisi_ups);
          $('#detail_power').find('#file_ups').attr('src', base_url + "assets/dokumen/" + data.file_ups);
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    })

    //Tampil Detail show_data_alarm
    $('#show_data_alarm').on('click', '.item_detail', function(){
      var id = $(this).attr('data');
      $('#detail_alarm').modal('show');
      $('#detail_alarm').find('.modal-title').text('External Alarm And Monitoring System');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>asset_group/detail_alarm',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#detail_alarm').find('.desc_ac').text(data.desc_ac);
          $('#detail_alarm').find('.kondisi_ac').text(data.kondisi_ac);
          $('#detail_alarm').find('#file_ac').attr('src', base_url + "assets/dokumen/" + data.file_ac);
          $('#detail_alarm').find('.desc_alarm').text(data.desc_alarm);
          $('#detail_alarm').find('.kondisi_alarm').text(data.kondisi_alarm);
          $('#detail_alarm').find('#file_alarm').attr('src', base_url + "assets/dokumen/" + data.file_alarm);
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    })

    //Tampil Detail show_data_odf
    $('#show_data_odf').on('click', '.item_detail', function(){
      var id = $(this).attr('data');
      $('#detail_odf').modal('show');
      $('#detail_odf').find('.modal-title').text('Passive Device (ODF)');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>asset_group/detail_odf',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('#detail_odf').find('.desc_odf').text(data.desc_odf);
          $('#detail_odf').find('.kondisi_odf').text(data.kondisi_odf);
          $('#detail_odf').find('#file_odf').attr('src', base_url + "assets/dokumen/" + data.file_odf);
        },
        error: function(){
          alert('Could not Edit Data');
        }
      });
    })

    // Tampil Modal Hapus data Building
    $('#show_data_building').on('click','.item_hapus',function(){
      var id=$(this).attr('data');
      $('#modal_hapus_building').modal('show');
      $('[name="TxtId"]').val(id);
    });

    // Hapus data Building
    $('#btn_hapus_building').on('click',function(){
      var TxtId=$('#id_building').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url() ?>asset_group/hapus_data_building",
        dataType : "JSON",
        data : {TxtId: TxtId},
        success: function(data){
          $('#modal_hapus_building').modal('hide');
          tampil_data_building();
          toastr.success('Hapus Data Building and Infrastructure!', 'Success', {timeOut: 5000})
        }
      });
      return false;
    });

    // Tampil Modal Hapus data AC
    $('#show_data_ac').on('click','.item_hapus',function(){
      var id=$(this).attr('data');
      $('#modal_hapus_ac').modal('show');
      $('[name="TxtId"]').val(id);
    });

    // Hapus data AC
    $('#btn_hapus_ac').on('click',function(){
      var TxtId=$('#id_building').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url() ?>asset_group/hapus_data_ac",
        dataType : "JSON",
        data : {TxtId: TxtId},
        success: function(data){
          $('#modal_hapus_ac').modal('hide');
          tampil_data_ac();
          toastr.success('Hapus Data AC Electricity !', 'Success', {timeOut: 5000})
        }
      });
      return false;
    });

    // Tampil Modal Hapus data DC
    $('#show_data_dc').on('click','.item_hapus',function(){
      var id=$(this).attr('data');
      $('#modal_hapus_dc').modal('show');
      $('[name="TxtId"]').val(id);
    });

    // Hapus data DC
    $('#btn_hapus_dc').on('click',function(){
      var TxtId=$('#id_building').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url() ?>asset_group/hapus_data_dc",
        dataType : "JSON",
        data : {TxtId: TxtId},
        success: function(data){
          $('#modal_hapus_dc').modal('hide');
          tampil_data_dc();
          toastr.success('Hapus Data DC Electricity !', 'Success', {timeOut: 5000})
        }
      });
      return false;
    });

    // Tampil Modal Hapus data Power
    $('#show_data_power').on('click','.item_hapus',function(){
      var id=$(this).attr('data');
      $('#modal_hapus_power').modal('show');
      $('[name="TxtId"]').val(id);
    });

    // Hapus data Power
    $('#btn_hapus_power').on('click',function(){
      var TxtId=$('#id_building').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url() ?>asset_group/hapus_data_power",
        dataType : "JSON",
        data : {TxtId: TxtId},
        success: function(data){
          $('#modal_hapus_power').modal('hide');
          tampil_data_power();
          toastr.success('Hapus Data Power Supply Back Up System!', 'Success', {timeOut: 5000})
        }
      });
      return false;
    });

    // Tampil Modal Hapus data Alarm
    $('#show_data_alarm').on('click','.item_hapus',function(){
      var id=$(this).attr('data');
      $('#modal_hapus_alarm').modal('show');
      $('[name="TxtId"]').val(id);
    });

    // Hapus data Alarm
    $('#btn_hapus_alarm').on('click',function(){
      var TxtId=$('#id_building').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url() ?>asset_group/hapus_data_alarm",
        dataType : "JSON",
        data : {TxtId: TxtId},
        success: function(data){
          $('#modal_hapus_alarm').modal('hide');
          tampil_data_alarm();
          toastr.success('Hapus Data External Alarm And Monitoring System!', 'Success', {timeOut: 5000})
        }
      });
      return false;
    });

    // Tampil Modal Hapus data ODF
    $('#show_data_odf').on('click','.item_hapus',function(){
      var id=$(this).attr('data');
      $('#modal_hapus_odf').modal('show');
      $('[name="TxtId"]').val(id);
    });

    // Hapus data ODF
    $('#btn_hapus_odf').on('click',function(){
      var TxtId=$('#id_building').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url() ?>asset_group/hapus_data_odf",
        dataType : "JSON",
        data : {TxtId: TxtId},
        success: function(data){
          $('#modal_hapus_odf').modal('hide');
          tampil_data_odf();
          toastr.success('Hapus Data Passive Device (ODF)!', 'Success', {timeOut: 5000})
        }
      });
      return false;
    });

    // Tampil Modal Edit data Building
    $('#show_data_building').on('click','.item_edit',function(){
      var id=$(this).attr('data');

      //load data dari AJAX
        $.ajax({
            url: "<?php echo base_url() ?>asset_group/edit_building",
            type: "GET",
            dataType: "JSON",
            data : {id:id},
            success: function(data) {
                $('[name="txtIdBuilding"]').val(data.id);
                $('[name="txtDescRack"]').val(data.desc_rack);
                $('[name="selectKondisiRack"]').val(data.kondisi_rack);
                $('[name="selectNoRack"]').val(data.no_rack);
                $('[name="txtDescBuilding"]').val(data.desc_building);
                $('[name="selectKondisiBuilding"]').val(data.kondisi_building);
                $('#modal_edit_building').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From AJAX');
            }
        });
    });

    // Tampil Modal Edit data AC
    $('#show_data_ac').on('click','.item_edit',function(){
      var id=$(this).attr('data');

      //load data dari AJAX
        $.ajax({
            url: "<?php echo base_url() ?>asset_group/edit_ac",
            type: "GET",
            dataType: "JSON",
            data : {id:id},
            success: function(data) {
                $('[name="txtIdAC"]').val(data.id);
                $('[name="txtDescKwh"]').val(data.desc_kwh);
                $('[name="selectKondisiKwh"]').val(data.kondisi_kwh);
                $('[name="txtDescAcpdb"]').val(data.desc_acpdb);
                $('[name="selectKondisiAcpdb"]').val(data.kondisi_acpdb);
                $('#modal_edit_ac').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From AJAX');
            }
        });
    });

    // Tampil Modal Edit data DC
    $('#show_data_dc').on('click','.item_edit',function(){
      var id=$(this).attr('data');

      //load data dari AJAX
        $.ajax({
            url: "<?php echo base_url() ?>asset_group/edit_dc",
            type: "GET",
            dataType: "JSON",
            data : {id:id},
            success: function(data) {
                $('[name="txtIdDc"]').val(data.id);
                $('[name="txtDescRectifier"]').val(data.desc_rectifier);
                $('[name="selectKondisiRectifier"]').val(data.kondisi_rectifier);
                $('[name="txtDescDcpdb"]').val(data.desc_dcpdb);
                $('[name="selectKondisiDcpdb"]').val(data.kondisi_dcpdb);
                $('[name="txtDescBaterai"]').val(data.desc_baterai);
                $('[name="selectKondisiBaterai"]').val(data.kondisi_baterai);
                $('#modal_edit_dc').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From AJAX');
            }
        });
    });    

    // Tampil Modal Edit data Power
    $('#show_data_power').on('click','.item_edit',function(){
      var id=$(this).attr('data');

      //load data dari AJAX
        $.ajax({
            url: "<?php echo base_url() ?>asset_group/edit_power",
            type: "GET",
            dataType: "JSON",
            data : {id:id},
            success: function(data) {
                $('[name="txtIdPower"]').val(data.id);
                $('[name="txtDescGenset"]').val(data.desc_genset);
                $('[name="selectKondisiGenset"]').val(data.kondisi_genset);
                $('[name="txtDescAts"]').val(data.desc_ats);
                $('[name="selectKondisiAts"]').val(data.kondisi_ats);
                $('[name="txtDescInverter"]').val(data.desc_inverter);
                $('[name="selectKondisiInverter"]').val(data.kondisi_inverter);
                $('[name="txtDescUps"]').val(data.desc_ups);
                $('[name="selectKondisiUps"]').val(data.kondisi_ups);
                $('#modal_edit_power').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From AJAX');
            }
        });
    });

    // Tampil Modal Edit data Alarm
    $('#show_data_alarm').on('click','.item_edit',function(){
      var id=$(this).attr('data');

      //load data dari AJAX
        $.ajax({
            url: "<?php echo base_url() ?>asset_group/edit_alarm",
            type: "GET",
            dataType: "JSON",
            data : {id:id},
            success: function(data) {
                $('[name="txtIdAlarm"]').val(data.id);
                $('[name="txtDescAc"]').val(data.desc_ac);
                $('[name="selectKondisiAc"]').val(data.kondisi_ac);
                $('[name="txtDescAlarm"]').val(data.desc_alarm);
                $('[name="selectKondisiAlarm"]').val(data.kondisi_alarm);
                $('#modal_edit_alarm').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From AJAX');
            }
        });
    });

    // Tampil Modal Edit data ODF
    $('#show_data_odf').on('click','.item_edit',function(){
      var id=$(this).attr('data');

      //load data dari AJAX
        $.ajax({
            url: "<?php echo base_url() ?>asset_group/edit_odf",
            type: "GET",
            dataType: "JSON",
            data : {id:id},
            success: function(data) {
                $('[name="txtIdOdf"]').val(data.id);
                $('[name="txtDescOdf"]').val(data.desc_odf);
                $('[name="selectKondisiOdf"]').val(data.kondisi_odf);
                $('#modal_edit_odf').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From AJAX');
            }
        });
    });
  });

  function simpan_edit_building() {
    var formData = new FormData($('#form')[0]);
        $.ajax({
            url : "<?php echo base_url() ?>asset_group/update_building",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                $('#modal_edit_building').modal('hide');
                toastr.success('Ubah Data Building and Infrastructure!', 'Success', {timeOut: 5000})
                tampil_data_building();                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / upader data');
            }
        });
  }

  function simpan_edit_ac() {
    var formData = new FormData($('#form_ac')[0]);
        $.ajax({
            url : "<?php echo base_url() ?>asset_group/update_ac",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                $('#form_ac')[0].reset();
                $('#modal_edit_ac').modal('hide');
                toastr.success('Ubah Data AC Electricity Berhasil!', 'Success', {timeOut: 5000})
                tampil_data_ac();                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / upader data');
            }
        });
  }

  function simpan_edit_dc() {
    var formData = new FormData($('#form_dc')[0]);
        $.ajax({
            url : "<?php echo base_url() ?>asset_group/update_dc",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                $('#form_dc')[0].reset();
                $('#modal_edit_dc').modal('hide');
                toastr.success('Ubah Data DC Electricity Berhasil!', 'Success', {timeOut: 5000})
                tampil_data_dc();                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / upader data');
            }
        });
  }
  
  function simpan_edit_power() {
    var formData = new FormData($('#form_power')[0]);
        $.ajax({
            url : "<?php echo base_url() ?>asset_group/update_power",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                $('#form_power')[0].reset();
                $('#modal_edit_power').modal('hide');
                toastr.success('Ubah Data Power Supply Back Up System Berhasil!', 'Success', {timeOut: 5000})
                tampil_data_power();                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / upader data');
            }
        });
  }

  function simpan_edit_alarm() {
    var formData = new FormData($('#form_alarm')[0]);
        $.ajax({
            url : "<?php echo base_url() ?>asset_group/update_alarm",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                $('#form_alarm')[0].reset();
                $('#modal_edit_alarm').modal('hide');
                toastr.success('Ubah Data External Alarm And Monitoring System Berhasil!', 'Success', {timeOut: 5000})
                tampil_data_alarm();                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / upader data');
            }
        });
  }

  function simpan_edit_odf() {
    var formData = new FormData($('#form_odf')[0]);
        $.ajax({
            url : "<?php echo base_url() ?>asset_group/update_odf",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                $('#form_odf')[0].reset();
                $('#modal_edit_odf').modal('hide');
                toastr.success('Ubah Data Passive Device (ODF) Berhasil!', 'Success', {timeOut: 5000})
                tampil_data_odf();                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / upader data');
            }
        });
  }
</script>