<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prasarana extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Prasarana_model');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "SPN | Prasarana",
			'prasarana' => $this->Prasarana_model->get_data()
		];
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('prasarana', $data);
		$this->load->view('template/footer');
	}
}