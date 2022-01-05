<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_Misi extends CI_Controller {

	public function index()
	{
		$data = [
			'pageTitle' => "SPN | Visi Misi"
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('visi_misi', $data);
		$this->load->view('template/footer');
	}
}