<?php 

/**
* 
*/
class M_Tampil_Adm extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function tampil_data(){
		return $this->db->get('pengaduan');
	}
}

 ?>