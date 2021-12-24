<?php 

/**
* 
*/
class Kontak_Adm extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_kontak_adm');
	}

	function index(){
		$data['kontak'] = $this->m_kontak_adm->tampil_data()->result();
		$this->load->view('v-kontak-adm',$data);
	}

	function hapus($id){
		$where = array('kode_kontak' => $id);
		$this->m_kontak_adm->hapus_data($where,'kontak');
		
		redirect('kontak_adm');
	}
}

 ?>