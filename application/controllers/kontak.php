<?php 

/**
* 
*/
class Kontak extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
        $this->load->model('m_kontak');
	}

	function index(){
        $data['view'] = 'data';
		$this->load->view('v-kontak',$data);
    }
    function input(){
		if($this->input->post('input')){
			$this->m_kontak->insert();
		}
		$data['view'] = 'form';
		$this->load->view('v-kontak',$data);
	}

}


 ?>