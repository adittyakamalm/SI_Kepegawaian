<?php

class DataPersonil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_personil');
	}

	public function index()
	{
		// Pagination
		$this->load->library('pagination');

		// Ambil keyword
		if($this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		//config
		$this->db->like('NAMA', $data['keyword']);
		$this->db->from('data_personel');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;
		
		
		//initialize
		$this->pagination->initialize($config);
		
		$data['start'] =$this->uri->segment(3);
		$data['personil'] = $this->Model_personil->get_personel($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('datapersonil', $data);
		$this->load->view('template/footer');

		if($this->input->post('submit')){
			echo $this->input->post('keyword');
		}
		
	}

	public function pencarian()
	{
		$data = [
			'cari' => $this->input->post('cari'),
			'personil'	=>  $this->Model_personil->get_keyword('cari')->result()
		];

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('datapersonil');
		$this->load->view('template/footer');
	}

	public function detail($id)
	{
		$data['personil'] = $this->Model_personil->detail_personil($id);
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('detailpersonil', $data);
		$this->load->view('template/footer');
	}

}

?>
