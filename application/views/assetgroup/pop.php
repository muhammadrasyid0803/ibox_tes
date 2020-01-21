<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    <?php echo $name; ?>
                </h4>
                <div align="right">
                  <button type="button" class="btn btn-success btn-sm" onclick="Kembali()">Kembali</button>
                </div>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <button type="button" class="btn btn-primary btn-sm" onclick="Building()">Building and Infrastructure</button>
                  </h5>
                  <h5 class="gen-case">
                     <button type="button" class="btn btn-primary btn-sm" onclick="ac()">AC Electricity</button>
                  </h5>
                  <h5 class="gen-case">
                    <button type="button" class="btn btn-primary btn-sm" onclick="dc()">DC Electricity</button>
                  </h5>
                  <h5 class="gen-case">
                    <button type="button" class="btn btn-primary btn-sm" onclick="power()">Power Supply Back Up System</button>
                  </h5>
                  <h5 class="gen-case">
                    <button type="button" class="btn btn-primary btn-sm" onclick="Alarm()">External Alarm And Monitoring System</button>
                  </h5>
                  <h5 class="gen-case">
                    <button type="button" class="btn btn-primary btn-sm" onclick="Device()">Passive Device (ODF)</button>
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
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescKwh" id="txtDescKwh" required />
                            <span class="pesan pesan-txtDescKwh">Silahkan Isi Kolom KWh Meter</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiKwh" id="selectKondisiKwh">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiKwh">Silahkan Pilih Kondisi KWh Meter</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Kwh" id="foto_Kwh" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Input ACPDB</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescAcpdb" id="txtDescAcpdb" required />
                            <span class="pesan pesan-txtDescAcpdb">Silahkan Isi Kolom ACPDB</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiAcpdb" id="selectKondisiAcpdb">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiAcpdb">Silahkan Pilih Kondisi ACPDB</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_acpdb" id="foto_acpdb" capture="camera">
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
                           <input class=" form-control" placeholder="Description" type="text" name="txtDescRectifier" id="txtDescRectifier" required />
                           <span class="pesan pesan-txtDescRectifier">Silahkan Isi Kolom Rectifier</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiRectifier" id="selectKondisiRectifier">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiRectifier">Silahkan Pilih Kondisi Rectifier</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_rectifier" id="foto_rectifier" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">DCPDB</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescDcpdb" id="txtDescDcpdb" required />
                            <span class="pesan pesan-txtDescDcpdb">Silahkan Isi Kolom DCPDB</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiDcpdb" id="selectKondisiDcpdb">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiDcpdb">Silahkan Pilih Kondisi Dcpdb</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_dcpdb" id="foto_dcpdb" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">Baterai</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescBaterai" id="txtDescBaterai" required />
                            <span class="pesan pesan-txtDescBaterai">Silahkan Isi Kolom Baterai</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiBaterai" id="selectKondisiBaterai">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiBaterai">Silahkan Pilih Kondisi Baterai</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_baterai" id="foto_baterai" capture="camera">
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
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescGenset" id="txtDescGenset" required />
                            <span class="pesan pesan-txtDescGenset">Silahkan Isi Kolom GENSET</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiGenset" id="selectKondisiGenset">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiGenset">Silahkan Pilih Kondisi Genset</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_genset" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">ATS</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescAts" id="txtDescAts" required />
                            <span class="pesan pesan-txtDescAts">Silahkan Isi Kolom ATS</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiAts" id="selectKondisiAts">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiAts">Silahkan Pilih Kondisi ATS</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Ats" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">INVERTER</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescInverter" id="txtDescInverter" required />
                            <span class="pesan pesan-txtDescInverter">Silahkan Isi Kolom INVERTER</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiInverter" id="selectKondisiInverter">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiInverter">Silahkan Pilih Kondisi INVERTER</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Inverter" capture="camera">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="cemail" class="control-label col-lg-3">UPS</label>
                          <div class="col-lg-3">
                            <input class="form-control" placeholder="Description" type="text" name="txtDescUps" id="txtDescUps" required />
                            <span class="pesan pesan-txtDescUps">Silahkan Isi Kolom UPS</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiUps" id="selectKondisiUps">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiUps">Silahkan Pilih Kondisi UPS</span>
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
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescAc" id="txtDescAc" required />
                            <span class="pesan pesan-txtDescAc">Silahkan Isi Kolom AC</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiAc" id="selectKondisiAc">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiAc">Silahkan Pilih Kondisi AC</span>
                          </div>
                          <div class="col-lg-2">
                            <input type="file" accept="image/*" name="foto_Ac" capture="camera">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-3">ALARM</label>
                          <div class="col-lg-3">
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescAlarm" id="txtDescAlarm" required />
                            <span class="pesan pesan-txtDescAlarm">Silahkan Isi Kolom Alarm</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiAlarm" id="selectKondisiAlarm">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiAlarm">Silahkan Pilih Kondisi Alarm</span>
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
                            <input class=" form-control" placeholder="Description" type="text" name="txtDescOdf" id="txtDescOdf" required />
                            <span class="pesan pesan-txtDescOdf">Silahkan Isi Kolom ODF</span>
                          </div>
                          <div class="col-lg-3">
                            <select class="form-control" name="selectKondisiOdf" id="selectKondisiOdf">
                              <option value="">Pilih Kondisi</option>
                              <option value="Baik">Baik</option>
                              <option value="Kurang">Kurang</option>
                              <option value="Rusak">Rusak</option>
                            </select>
                            <span class="pesan pesan-selectKondisiOdf">Silahkan Pilih Kondisi ODF</span>
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
          // aksi untuk hide span di modal Building
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

          // aksi untuk hide span di modal AC
          $("#txtDescKwh").keyup(function () {
              $(".pesan-txtDescKwh").hide();
          });
          $('#selectKondisiKwh').change(function(){
              $(".pesan-selectKondisiKwh").hide();
          });
          $("#txtDescAcpdb").keyup(function () {
              $(".pesan-txtDescAcpdb").hide();
          });
          $('#selectKondisiAcpdb').change(function(){
              $(".pesan-selectKondisiAcpdb").hide();
          });

          // aksi untuk hide span di modal DC
          $("#txtDescRectifier").keyup(function () {
              $(".pesan-txtDescRectifier").hide();
          });
          $('#selectKondisiRectifier').change(function(){
              $(".pesan-selectKondisiRectifier").hide();
          });
          $("#txtDescDcpdb").keyup(function () {
              $(".pesan-txtDescDcpdb").hide();
          });
          $('#selectKondisiDcpdb').change(function(){
              $(".pesan-selectKondisiDcpdb").hide();
          });
          $("#txtDescBaterai").keyup(function () {
              $(".pesan-txtDescBaterai").hide();
          });
          $('#selectKondisiBaterai').change(function(){
              $(".pesan-selectKondisiBaterai").hide();
          });

          // aksi untuk hide span di modal Power
          $("#txtDescGenset").keyup(function () {
              $(".pesan-txtDescGenset").hide();
          });
          $('#selectKondisiGenset').change(function(){
              $(".pesan-selectKondisiGenset").hide();
          });
          $("#txtDescAts").keyup(function () {
              $(".pesan-txtDescAts").hide();
          });
          $('#selectKondisiAts').change(function(){
              $(".pesan-selectKondisiAts").hide();
          });
          $("#txtDescInverter").keyup(function () {
              $(".pesan-txtDescInverter").hide();
          });
          $('#selectKondisiInverter').change(function(){
              $(".pesan-selectKondisiInverter").hide();
          });
          $("#txtDescUps").keyup(function () {
              $(".pesan-txtDescUps").hide();
          });
          $('#selectKondisiUps').change(function(){
              $(".pesan-selectKondisiUps").hide();
          });

          // aksi untuk hide span di modal Alarm
          $("#txtDescAc").keyup(function () {
              $(".pesan-txtDescAc").hide();
          });
          $('#selectKondisiAc').change(function(){
              $(".pesan-selectKondisiAc").hide();
          });
          $("#txtDescAlarm").keyup(function () {
              $(".pesan-txtDescAlarm").hide();
          });
          $('#selectKondisiAlarm').change(function(){
              $(".pesan-selectKondisiAlarm").hide();
          });

          // aksi untuk hide span di modal ODF
          $("#txtDescOdf").keyup(function () {
              $(".pesan-txtDescOdf").hide();
          });
          $('#selectKondisiOdf').change(function(){
              $(".pesan-selectKondisiOdf").hide();
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

      function ac() {
        $('#form2')[0].reset();
        $(".pesan-txtDescKwh").hide();
        $(".pesan-selectKondisiKwh").hide();
        $(".pesan-txtDescAcpdb").hide();
        $(".pesan-selectKondisiAcpdb").hide();
        $('#modal_ac').modal('show');
      }

      function dc() {
        $('#form3')[0].reset();
        $(".pesan-txtDescRectifier").hide();
        $(".pesan-selectKondisiRectifier").hide();
        $(".pesan-txtDescDcpdb").hide();
        $(".pesan-selectKondisiDcpdb").hide();
        $(".pesan-txtDescBaterai").hide();
        $(".pesan-selectKondisiBaterai").hide();

        $('#modal_dc').modal('show');
      }

      function power() {
        $('#form4')[0].reset();
        $(".pesan-txtDescGenset").hide();
        $(".pesan-selectKondisiGenset").hide();
        $(".pesan-txtDescAts").hide();
        $(".pesan-selectKondisiAts").hide();
        $(".pesan-txtDescInverter").hide();
        $(".pesan-selectKondisiInverter").hide();
        $(".pesan-txtDescUps").hide();
        $(".pesan-selectKondisiUps").hide();
        $('#modal_power').modal('show');
      }

      function Alarm() {
        $('#form6')[0].reset();
        $(".pesan-txtDescAc").hide();
        $(".pesan-selectKondisiAc").hide();
        $(".pesan-txtDescAlarm").hide();
        $(".pesan-selectKondisiAlarm").hide();

        $('#modal_alarm').modal('show');
      }

      function Device() {
        $('#form8')[0].reset();
        $(".pesan-txtDescOdf").hide();
        $(".pesan-selectKondisiOdf").hide();

        $('#modal_device').modal('show');
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

          var txtDescKwh = $('#txtDescKwh').val().length;
          var selectKondisiKwh = $('#selectKondisiKwh').val().length;                    
          var txtDescAcpdb = $('#txtDescAcpdb').val().length;         
          var selectKondisiAcpdb = $('#selectKondisiAcpdb').val().length;

          if (txtDescKwh == 0 || selectKondisiKwh == "" || txtDescAcpdb == 0 || selectKondisiAcpdb == "") {              
                    if (txtDescKwh == 0) {              
                        $(".pesan-txtDescKwh").css('display','block');
                    }
                    if (selectKondisiKwh == "") {                
                        $(".pesan-selectKondisiKwh").css('display','block');
                    }
                    if (txtDescAcpdb == 0) {                
                        $(".pesan-txtDescAcpdb").css('display','block');
                    }
                    if (selectKondisiAcpdb == "") {              
                        $(".pesan-selectKondisiAcpdb").css('display','block');
                    }
                    return false;
          }

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

          var txtDescRectifier = $('#txtDescRectifier').val().length;
          var selectKondisiRectifier = $('#selectKondisiRectifier').val().length;                    
          var txtDescDcpdb = $('#txtDescDcpdb').val().length;         
          var selectKondisiDcpdb = $('#selectKondisiDcpdb').val().length;
          var txtDescBaterai = $('#txtDescBaterai').val().length;
          var selectKondisiBaterai = $('#selectKondisiBaterai').val().length;

          if (txtDescRectifier == 0 || selectKondisiRectifier == "" || txtDescDcpdb == 0 || selectKondisiDcpdb == "" || txtDescBaterai == 0 || selectKondisiBaterai == "") {              
                    if (txtDescRectifier == 0) {              
                        $(".pesan-txtDescRectifier").css('display','block');
                    }
                    if (selectKondisiRectifier == "") {                
                        $(".pesan-selectKondisiRectifier").css('display','block');
                    }
                    if (txtDescDcpdb == 0) {                
                        $(".pesan-txtDescDcpdb").css('display','block');
                    }
                    if (selectKondisiDcpdb == "") {              
                        $(".pesan-selectKondisiDcpdb").css('display','block');
                    }
                    if (txtDescBaterai == "") {              
                        $(".pesan-txtDescBaterai").css('display','block');
                    }
                    if (selectKondisiBaterai == "") {              
                        $(".pesan-selectKondisiBaterai").css('display','block');
                    }
                    return false;
          }

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

          var txtDescGenset = $('#txtDescGenset').val().length;
          var selectKondisiGenset = $('#selectKondisiGenset').val().length;                    
          var txtDescAts = $('#txtDescAts').val().length;         
          var selectKondisiAts = $('#selectKondisiAts').val().length;
          var txtDescInverter = $('#txtDescInverter').val().length;
          var selectKondisiInverter = $('#selectKondisiInverter').val().length;
          var txtDescUps = $('#txtDescUps').val().length;
          var selectKondisiUps = $('#selectKondisiUps').val().length;

          if (txtDescGenset == 0 || selectKondisiGenset == "" || txtDescAts == 0 || selectKondisiAts == "" || txtDescInverter == 0 || selectKondisiInverter == "" || txtDescUps == 0 || selectKondisiUps == "") {              
                    if (txtDescGenset == 0) {              
                        $(".pesan-txtDescGenset").css('display','block');
                    }
                    if (selectKondisiGenset == "") {                
                        $(".pesan-selectKondisiGenset").css('display','block');
                    }
                    if (txtDescAts == 0) {                
                        $(".pesan-txtDescAts").css('display','block');
                    }
                    if (selectKondisiAts == "") {              
                        $(".pesan-selectKondisiAts").css('display','block');
                    }
                    if (txtDescInverter == "") {              
                        $(".pesan-txtDescInverter").css('display','block');
                    }
                    if (selectKondisiInverter == "") {              
                        $(".pesan-selectKondisiInverter").css('display','block');
                    }
                    if (txtDescUps == "") {              
                        $(".pesan-txtDescUps").css('display','block');
                    }
                    if (selectKondisiUps == "") {              
                        $(".pesan-selectKondisiUps").css('display','block');
                    }
                    return false;
          }

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

          var txtDescAc = $('#txtDescAc').val().length;
          var selectKondisiAc = $('#selectKondisiAc').val().length;                    
          var txtDescAlarm = $('#txtDescAlarm').val().length;         
          var selectKondisiAlarm = $('#selectKondisiAlarm').val().length;

          if (txtDescAc == 0 || selectKondisiAc == "" || txtDescAlarm == 0 || selectKondisiAlarm == "") {              
                    if (txtDescAc == 0) {              
                        $(".pesan-txtDescAc").css('display','block');
                    }
                    if (selectKondisiAc == "") {                
                        $(".pesan-selectKondisiAc").css('display','block');
                    }
                    if (txtDescAlarm == 0) {                
                        $(".pesan-txtDescAlarm").css('display','block');
                    }
                    if (selectKondisiAlarm == "") {              
                        $(".pesan-selectKondisiAlarm").css('display','block');
                    }
                    return false;
          }

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

          var txtDescOdf = $('#txtDescOdf').val().length;
          var selectKondisiOdf = $('#selectKondisiOdf').val().length;                    

          if (txtDescOdf == 0 || selectKondisiOdf == "") {              
                    if (txtDescOdf == 0) {              
                        $(".pesan-txtDescOdf").css('display','block');
                    }
                    if (selectKondisiOdf == "") {                
                        $(".pesan-selectKondisiOdf").css('display','block');
                    }
                    return false;
          }

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

      function Kembali(){
        window.location.href = "<?php echo base_url('Asset_group'); ?>";
      }
    </script>   