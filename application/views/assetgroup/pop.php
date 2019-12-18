<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    <?php echo $name; ?>
                  </h4>
              </header>
              <div class="panel-body minimal">
                <form action="<?php echo base_url('asset_group/pilih_pop'); ?>" method="post" >
                  <div class="mail-option">
                </div>
                <div class="col-md-4">
                  <h5 class="gen-case">
                     <input type="checkbox" value="">
                     <a href="#" data-toggle="modal" data-target="modal_building">Building and Infrastructure</a>
                  </h5>
                  <h5 class="gen-case">
                     <input type="checkbox" value="">
                     <a href="">AC Electricity</a>
                  </h5>
                  <h5 class="gen-case">
                     <input type="checkbox" value="">
                     <a href="">DC Electricity</a>
                  </h5>
                  <h5 class="gen-case">
                     <input type="checkbox" value="">
                     <a href="">Power Supply Back Up System</a>
                  </h5>
                  <h5 class="gen-case">
                     <input type="checkbox" value="">
                     <a href="">Cooling System</a>
                  </h5>
                  <h5 class="gen-case">
                     <input type="checkbox" value="">
                     <a href="">External Alarm And Monitoring System</a>
                  </h5>
                  <h5 class="gen-case">
                     <input type="checkbox" value="">
                     <a href="">Network Device</a>
                  </h5>
                  <h5 class="gen-case">
                     <input type="checkbox" value="">
                     <a href="">Passive Device (ODF)</a>
                  </h5>
                </div>

                <!-- <div class="col-xs-6">
                  <select class="form-control" name="pilih_pop">
                    <option value="">-- Pilih --</option>
                    <option value="POP PLH">POP PLH</option>
                    <option value="POP BJB">POP BJB</option>
                    <option value="POP ULIN">POP ULIN</option>
                    <option value="POP CEMPAKA">POP CEMPAKA</option>
                  </select>
                </div> -->
              
                <!-- <div class="col-xs-2">
                  <button type="submit" class="btn btn-theme03">Pilih</button>
                </div> -->
                </form>
              </div>
          </div>
            </section>
          </div>
        </div>

        <!-- Modal -->
              <div class="modal fade" id="modal_building" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
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