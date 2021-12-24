<?php
/**
* 
*/
class m_pengaduan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function insert(){
		$data = array(
			'id_pengaduan' => '',
			'nama_pengadu'=> $this->input->post('nama_pengadu'),
			'nomor_identitas'=> $this->input->post('nomor_id'),
			'alamat_pengadu'=> $this->input->post('alamat_pengadu'),
			'no_hp'=> $this->input->post('no_hp'),
			'isi_pengaduan'=> $this->input->post('isi_pengaduan')
			);

		$this->db->insert('pengaduan',$data);
	}
}
?>