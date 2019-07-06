<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library(array('template', 'form_validation'));
		$this->load->model('m_petugas');
		if(!$this->session->userdata('username')){
			redirect('web');
		}
	}

	function index(){
		$data['title']		= "Home";
		$this->template->load('template','dashboard/index', $data);
	}

	function petugas(){
		$data['title']		= "Data Petugas";
		$data['petugas']	= $this->m_petugas->semua()->result();
		if($this->uri->segment(3) == "delete success")
			$data['message']	= "<div class='alert alert-success'>Data berhasil dihapus</div>";
		else if($this->uri->segment(3) == "add_success")
			$data['message']	= "<div class='alert alert-success'>Data berhasil disimpan</div>";
		else 
			$data['message']	= '';
		// $this->template->display('dashboard/petugas', $data);
		$this->template->load('template', 'dashboard/petugas', $data);
	}

	function tambahpetugas(){
		$data['petugas']	= "Taambah Petugas";
		$this->set_rules();
		if($this->form_validation->run() == true){
			$user 	= $this->input->post('user');
			$cek	= $this->m_petugas->cekKode($user);
			if($cek->num_rows()>0){
				$data['message']	= "<div class='alert alert-danger'>Username sudah digunakan</div>";
				// $this->template->display('dashboard/tambahpetugas', $data);
				$this->template->load('template', 'dashboard/tambahpetugas', $data);
			} else {
				$info				= array(
					'user'			=> $this->input->post('user'),
					'password'		=> md5($this->input->post('password'))
				);
				$this->m_petugas->simpan($info);
				redirect('dashboard/petugas/add_success');
			}
		} else {
			$data['message']		= "";
			// $this->template->display('dashboard/tambahpetugas', $data);
			$this->template->load('template', 'dashboard/tambahpetugas', $data);
		}
	}

	function edit($id){
		$data['title']		= "Update Data Petugas";
		$this->set_rules();
		if($this->form_validation->run() == true){
			$id 			= $this->input->post('id');
			$info			= array(
				'user'		=> $this->input->post('user'),
				'password'	=> md5($this->input->post('password'))
			);
			$this->m_petugas->update($id, $info);
			$data['petugas']	= $this->m_petugas->cekId($id)->row_array();
			$data['message']	= "<div class='alert alert-success'>Data berhasil diupdate</div>";
			// $this->template->display('dashboard/editpetugas', $data);
			$this->template->load('template', 'dashboard/editpetugas', $data);
		} else {
			$data['message']	= "";
			$data['petugas']	= $this->m_petugas->cekId($id)->row_array();
			// $this->template->display('dashboard/editpetugas', $data);
			$this->template->load('template', 'dashboard/editpetugas', $data);
		}
	}

	function hapus(){
		$kode 			= $this->input->post('kode');
		$this->m_petugas->hapus($kode);
	}

	function _set_rules(){
		$this->form_validation->set_rules('user','username', 'required|trim');
		$this->form_validation->set_rules('password','password', 'required|trim');
		$this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
	}

	function logout(){
		$this->session->unset_userdata('username');
		redirect('web');
	}
}