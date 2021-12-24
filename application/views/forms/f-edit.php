<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Edit Data </h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <?php foreach($pengaduan as $p){ ?>
              <?php echo form_open('admin/update') ?>
              <table>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Id Pelapor</label>
                  <div class="col-sm-10">
                    <input type="text" id="disabledInput" name="id_pengaduan" class="form-control" value="<?php echo $p->id_pengaduan ?>" disable>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Pelapor</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $p->nama_pengadu ?>" name="nama_pengadu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Identitas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $p->nomor_identitas ?>" name="nomor_identitas">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat Pelapor</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $p->alamat_pengadu ?>" name="alamat_pengadu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nomor Hp</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="<?php echo $p->no_hp ?>" name="no_hp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Isi Pengaduan</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="<?php echo $p->isi_pengaduan ?>" name="isi_pengaduan">
                  </div>
                </div>
                <button type="submit" class="btn btn-theme">Simpan</button>
              </form>
              </table>
              <?php } ?>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
</section>
      <!-- /wrapper -->
    </section>