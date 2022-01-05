<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	public function __construct() {		
		parent::__construct();

		$this->load->model('Model_personil');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "SPN | Struktur Organisasi",
			'struktur' => $this->Model_personil->get_struktur()
		];
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('struktur', $data);
		$this->load->view('template/footer');
	}
}
