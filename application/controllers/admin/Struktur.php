<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	public function __construct() {		
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->model('Struktur_model');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "Admin | Struktur",
			'struktur' => $this->Struktur_model->get_struktur()
		];

		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/header');
		$this->load->view('admin/struktur', $data);
		$this->load->view('template_admin/footer');
	}
}
