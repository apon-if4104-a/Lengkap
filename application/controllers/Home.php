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
		$this->form_validation->set_rules('nama2', 'ID', 'required');
		$this->form_validation->set_rules('nama3', 'Nama', 'required');
		$this->form_validation->set_rules('nama4', 'Keterangan', 'required');
		$this->form_validation->set_rules('nama5', 'Harga', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Home/Home');
		} else {
			$this->Obat_Model->Input_Obat();
			$this->load->view('Home/Home');
		}
	}
}
