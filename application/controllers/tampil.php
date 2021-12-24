<?php 

/**
 * 
 */
class Tampil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tampil');
	}

	function index(){
		$data['pengaduan'] = $this->m_tampil->tampil_data()->result();
		$this->load->view('v-tampil',$data);
	}
}

 ?>