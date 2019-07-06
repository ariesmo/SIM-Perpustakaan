<?php
class Coba extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library(array('template', 'form_validation', 'pagination', 'upload'));
		$this->load->model('m_anggota');
		if(!$this->session->userdata('username')){
			redirect('web');
		}
	}

	function index(){
		// $this->template->display('coba/index');
		$this->template->load('template', 'coba/index');
	}

	function tampilDate(){
		$data['anggota']	= $this->m_anggota->semua()->result();
		$this->load->view('coba/tampil', $data);
	}

}