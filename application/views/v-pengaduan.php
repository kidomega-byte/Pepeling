<?php
$this->load->view('parts/header');
$this->load->view('parts/nav');
?>
	<div class="counter-area fix area-padding-2">
        <div class="container">
			<?php
			// echo anchor('pengaduan/input',"Tambah Pengaduan");
			$this->load->view("forms/f-pengaduan");
			?>
        </div>
    </div>
<?php
$this->load->view('parts/footer');
?>