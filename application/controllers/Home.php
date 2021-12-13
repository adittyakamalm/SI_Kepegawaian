<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = [
			'pageTitle' => "UniHealth | Tabel Catering",
			'carousel' => $this->Home_model->get_data()
		];

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}


}
