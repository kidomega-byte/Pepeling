<?php 

/**
* 
*/
class M_Kontak extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function insert(){
		$data = array(
			'kode_kontak' => '',
			'nama'=> $this->input->post('nama'),
			'nik'=> $this->input->post('nik'),
			'alamat'=> $this->input->post('alamat'),
			'hp'=> $this->input->post('hp'),
			'email'=> $this->input->post('email'),
			'kritik_saran'=> $this->input->post('kritik_saran')
			);

		$this->db->insert('kontak',$data);
	}
}

 ?>