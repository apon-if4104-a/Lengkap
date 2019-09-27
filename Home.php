<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->model('Obat_Model');
		$this->form_validation->set_rules('nama2', 'ID', 'integer');
		//$this->form_validation->set_rules('nama3', 'Nama Obat', 'min_length[2]');
		//$this->form_validation->set_rules('nama4', 'nama4', '');
		$this->form_validation->set_rules('nama5', 'Harga Obat', 'min_length[2]');
		$this->form_validation->set_rules('nama5', 'Harga Obat', 'integer');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Home/Home');
		} else {
			$this->Obat_Model->Input_Obat();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			$this->load->view('Home/Home');
		}
	}
	public function Delete_Obat()
	{
		$this->Obat_Model->Delete_Obat();
		$this->session->set_flashdata('flash_hapus', 'Dihapus');
		$this->load->view('Home/Home');
	}
}
