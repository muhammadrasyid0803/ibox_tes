<div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Privantive Maintenance
                  </h4>
              </header>
              <div class="panel-body minimal">
                <form action="<?php echo base_url('Privantive/pop'); ?>" method="post" >
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
          </div>
            </section>
          </div>
        </div>