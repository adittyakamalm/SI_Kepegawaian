<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_Misi extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('visi_misi');
	}
}