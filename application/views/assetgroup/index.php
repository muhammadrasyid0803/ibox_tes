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

          <div class="col-sm-12">
            <section class="panel">
              <div class="panel-body minimal">
                <div class="adv-table">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                    <tr>
                      <th>POP</th>
                      <th>Kondisi</th>
                      <th>Deskripsi</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="gradeA">
                      <td>Trident</td>
                      <td>Internet Explorer 4.0</td>
                      <td class="hidden-phone">Win 95+</td>
                      <td class="center hidden-phone">4</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.5</td>
                      <td class="hidden-phone">Win 95+ / OSX.1+</td>
                      <td class="center hidden-phone">1.5</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </section>
          </div>
          </div>