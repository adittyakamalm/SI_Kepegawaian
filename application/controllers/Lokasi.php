<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	public function index()
	{
		$data = [
			'pageTitle' => "SPN | Lokasi"
		];
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('lokasi', $data);
		$this->load->view('template/footer');
	}
}