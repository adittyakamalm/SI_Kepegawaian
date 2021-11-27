<?php

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_personil');
	}

	public function index()
	{
		$data = [
			'personil'	=>  $this->Model_personil->get_data()
		];

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('kontak');
		$this->load->view('template/footer');
		
	}
}

?>
