<div class="deposite-content">
    <div class="diposite-box">
        <h4>Data Pengaduan</h4>
        <span><i class="flaticon-042-wallet"></i></span>
        <div class="deposite-table">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Pelapor</th>
                    <th>Nik</th>
                    <th>Alamat Pelapor</th>
                    <th>Isi Pengaduan</th>
                    <th>Tanggal</th>
                </tr>
                <?php 
                    $no = 1;
                    foreach($pengaduan as $p){ 
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->nama_pengadu ?></td>
                    <td><?php echo $p->nomor_identitas ?></td>
                    <td><?php echo $p->alamat_pengadu ?></td>
                    <td><?php echo $p->isi_pengaduan ?></td>
                    <td><?php echo $p->tanggal ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>