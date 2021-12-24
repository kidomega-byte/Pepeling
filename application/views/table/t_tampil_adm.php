
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Data Pengaduan</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <!-- <thead> -->
                  <tr>
                    <th>No</th>
                    <th>Nomor Pengaduan</th>
                    <th>Nama Pelapor</th>
                    <th class="hidden-phone">Nik</th>
                    <th class="hidden-phone">Alamat Pelapor</th>
                    <th class="hidden-phone">Nomor Handphone</th>
                    <th class="hidden-phone">Isi Pengaduan</th>
                    <th class="hidden-phone">Tanggal</th>
                    <th></th>
                    <th></th>
                  </tr>
                <!-- </thead> -->
                <?php 
                    $no = 1;
                    foreach($pengaduan as $p){ 
                ?>
                <tbody>
                  <tr class="gradeX">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_pengaduan ?></td>
                    <td><?php echo $p->nama_pengadu ?></td>
                    <td class="hidden-phone"><?php echo $p->nomor_identitas ?></td>
                    <td class="center hidden-phone"><?php echo $p->alamat_pengadu ?></td>
                    <td class="center hidden-phone"><?php echo $p->no_hp ?></td>
                    <td class="center hidden-phone"><?php echo $p->isi_pengaduan ?></td>
                    <td class="center hidden-phone"><?php echo $p->tanggal ?></td>
                    <td><button type="button" class="btn btn-round btn-success"><?php echo anchor('admin/edit/'.$p->id_pengaduan,'Edit'); ?></button></td>
                    <td><button type="button" class="btn btn-round btn-danger"><?php echo anchor('admin/hapus/'.$p->id_pengaduan,'Hapus'); ?></button></td>
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
            <!-- <script type="text/javascript">

            var save_method; //for save method string
            var table;

            $(document).ready(function() {
                //datatables
                table = $('#table').DataTable({ 
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": '<?php echo site_url('karyawan/json'); ?>',
                        "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                        {"data": "nama_pengadu",width:170},
                        {"data": "nama_lengkap",width:100},
                        {"data": "email",width:100},
                        {"data": "no_hp",width:100}
                    ],

                });

            });
        </script> -->

      

    <!-- /MAIN CONTENT -->
    <!--main content end-->