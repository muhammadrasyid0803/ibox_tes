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
                     <a data-target="#modal_building" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Building and Infrastructure</a>
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
                  <h5 class="gen-case">
                     <a data-target="#modal_cooling" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_cooling">Cooling System</a>
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_alarm" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_alarm">External Alarm And Monitoring System</a>
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_network" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_network">Network Device</a>
                  </h5>
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
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Building and Infrastructure</h4>
                    </div>
                    <div class="modal-body">
                      <form class="cmxform form-horizontal style-form" action="#" id="form">
                        <div class="form-group ">
                          <input type="hidden" name="txtIdFkRack" value="<?php echo $id; ?>" />
                          <label for="cname" class="control-label col-lg-3">Input Rack</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescRack" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiRack">
                              <option value="">Pilih</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_rack" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Input Building</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescBuilding" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiBuilding">
                              <option value="">Pilih</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_building" capture="camera">
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
                              <option value="">Pilih</option>
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
                              <option value="">Pilih</option>
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
                      <form  class="cmxform form-horizontal style-form" action="#" id="form3">
                        <div class="form-group ">
                          <input type="hidden" name="txtIdFkRack" value="<?php echo $id; ?>" />
                          <label for="cname" class="control-label col-lg-3">Rectifier</label>
                          <div class="col-lg-3">
                           <input class=" form-control" placeholder="Description" type="text" name="txtDescRectifier" required />
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiRectifier">
                              <option value="">Pilih</option>
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
                              <option value="">Pilih</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_dcpdb" capture="camera">
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

    <script type="text/javascript">
    
      function simpan_building_infa() {
          var url;
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
    </script>   