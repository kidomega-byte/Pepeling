<?php 

/**
* 
*/
class M_Kontak_Adm extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function tampil_data(){
		return $this->db->get('kontak');
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}

 ?>