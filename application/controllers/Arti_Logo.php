<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arti_Logo extends CI_Controller {

	public function index()
	{
		$data = [
			'pageTitle' => "SPN | Arti Logo"
		];
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('arti_logo', $data);
		$this->load->view('template/footer');
	}
}