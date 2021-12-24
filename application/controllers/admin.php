<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_admin');
	}
 
	function index(){
		$data['pengaduan'] = $this->m_admin->tampil_data()->result();
		$this->load->view('v-admin',$data);
		
	}
		// function get_json(){
  //       $this->load->library('datatables');
  //       $this->datatables->select('*');
  //       $this->datatables->from('pengaduan');
  //       return print_r($this->datatables->generate());
  //   }

	function hapus($id){
		$where = array('id_pengaduan' => $id);
		$this->m_admin->hapus_data($where,'pengaduan');
		
		redirect('admin');
	}

	function edit($id){
		$where = array('id_pengaduan' => $id);
		$data['pengaduan'] = $this->m_admin->edit_data($where,'pengaduan')->result();
		$this->load->view('v-edit',$data);
	}

	function update(){
		$id   	= $this->input->post('id_pengaduan');
		$nama 	= $this->input->post('nama_pengadu');
		$nik  	= $this->input->post('nomor_identitas');
		$alamat = $this->input->post('alamat_pengadu');
		$hp 	= $this->input->post('no_hp');
		$isi 	= $this->input->post('isi_pengaduan');

		$data = array(
			'nama_pengadu' 	 => $nama,
			'nomor_identitas'=> $nik,
			'alamat_pengadu' => $alamat,
			'no_hp'			 => $hp,
			'isi_pengaduan'	 => $isi
			);
		$where = array(
			'id_pengaduan' => $id
			);

		$this->m_admin->update_data($where,$data,'pengaduan');
		redirect('admin');
	}

}