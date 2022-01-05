<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function index()
	{
		$data = [
			'pageTitle' => "SPN | Sejarah"
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('sejarah', $data);
		$this->load->view('template/footer');
	}
}

