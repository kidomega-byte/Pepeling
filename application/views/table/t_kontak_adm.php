
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Tabel Contacts</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <!-- <thead> -->
                  <tr>
                    <th>No</th>
                    <th>Kode Pengaduan</th>
                    <th>Nama</th>
                    <th class="hidden-phone">Nik</th>
                    <th class="hidden-phone">Alamat</th>
                    <th class="hidden-phone">Nomor Handphone</th>
                    <th class="hidden-phone">Email</th>
                    <th class="hidden-phone">Kritik dan Saran</th>
                    <th></th>
                    <th></th>
                  </tr>
                <!-- </thead> -->
                <?php 
                    $no = 1;
                    foreach($kontak as $k){ 
                ?>
                <tbody>
                  <tr class="gradeX">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $k->kode_kontak ?></td>
                    <td><?php echo $k->nama ?></td>
                    <td class="hidden-phone"><?php echo $k->nik ?></td>
                    <td class="center hidden-phone"><?php echo $k->alamat ?></td>
                    <td class="center hidden-phone"><?php echo $k->hp ?></td>
                    <td class="center hidden-phone"><?php echo $k->email ?></td>
                    <td class="center hidden-phone"><?php echo $k->kritik_saran ?></td>
                    <td><button type="button" class="btn btn-round btn-primary">Edit</button></td>
                    <td><?php echo anchor('kontak_adm/hapus/'.$k->kode_kontak,'Hapus'); ?></td>
                  </tr>
                </tbody>
                <?php } ?>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->