<?php 

/**
* 
*/
class Tampil_Adm extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tampil_adm');
	}

	function index(){
		$data['pengaduan'] = $this->m_tampil_adm->tampil_data()->result();
		$this->load->view('v-tampil-adm',$data);
	}
}

 ?>