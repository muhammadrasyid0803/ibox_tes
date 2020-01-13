<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    KWH Meter
                    <!-- <?php echo $id_pop; ?> -->
                  </h4>
              </header>
              <div class="panel-body minimal">
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <a data-target="#modal_data_kwh" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_data_kwh">Data KWH Meter</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_building" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Inpeksi</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_building" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Pengukuran Tegangan</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_building" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Lain - Lain</a> 
                  </h5>
                  <h5 class="gen-case">
                     <a data-target="#modal_building" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Temuan Untuk Ditindaklanjuti</a> 
                  </h5>
                  <h5 class="gen-case">
                    <a data-target="#modal_building" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modal_building">Dokumentasi</a> 
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
            </div>

        <script type="text/javascript">
          function simpan_data_kwh() {
              var url;
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
        </script>