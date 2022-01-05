<?php

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_personil');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "SPN | Profil",
			'personil'	=>  $this->Model_personil->get_data()
		];

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('profil');
		$this->load->view('template/footer');
		
	}
}

?>
