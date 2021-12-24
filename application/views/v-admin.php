<!-- <!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<?php echo anchor('login/logout','Logout'); ?>
</body>
</html> -->
<?php
$this->load->view('parts/header-adm');
$this->load->view('parts/nav-adm');
?>
	<?php $this->load->view("table/t_tampil_adm"); ?>
<?php 
$this->load->view('parts/footer-adm');
 ?>
