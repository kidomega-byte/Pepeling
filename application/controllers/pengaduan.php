<?php
/**
* 
*/
class Pengaduan extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('m_pengaduan');
	}

	function index(){
        $data['view'] = 'data';
		$this->load->view('v-pengaduan',$data);
    }
    function input(){
		if($this->input->post('input')){
			$this->m_pengaduan->insert();
		}
		$data['view'] = 'form';
		$this->load->view('v-pengaduan',$data);
	}

}
?>