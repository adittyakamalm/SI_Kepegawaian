<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {		
		parent::__construct();

		$this->load->model('Model_personil');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "UniHealth | Tabel Catering",
			'personil' => $this->Model_personil->get_data()
		];

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/navbar');
		$this->load->view('admin/home',$data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_data(){
		$nama			=	$this->input->post('nama');
		$pangkat		=	$this->input->post('pangkat');
		$jeniskelamin	=	$this->input->post('jenis_kelamin');
		$nrpnip			=	$this->input->post('nrpnip');
		$tglLahir		=	$this->input->post('tglLahir');
		$jabatan		=	$this->input->post('jabatan');

		$data = array(	
			'NAMA'				=> $nama,
			'NRP_NIP'			=> $nrpnip,
			'PANGKAT'			=> $pangkat,
			'Jenis_Kelamin'		=> $jeniskelamin,
			'TGL_LAHIR'			=> $tglLahir,
			'JABATAN'			=> $jabatan
		);

		$this->Model_personil->tambah_personel($data, 'data_personel');
		redirect('admin/home');
	}

	public function edit($id){
		// $data['personil'] = $this->Model_personil->detail_personil($id);
		// $this->load->view('template_admin/header');
		// $this->load->view('template_admin/navbar');
		// $this->load->view('admin/edit',$data);
		// $this->load->view('template_admin/footer');

		$where = array('id' => $id);
		$data['personil'] = $this->Model_personil->edit_personil($where, 'data_personel')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/navbar');
		$this->load->view('admin/edit',$data);
		$this->load->view('template_admin/footer');
	}

	public function update(){
		$id			= $this->input->post('id');
		$nama		= $this->input->post('nama');
		$nip		= $this->input->post('nip');
		$pangkat	= $this->input->post('pangkat');
		$jabatan	= $this->input->post('jabatan');
		$riwayat	= $this->input->post('riwayat');

		$data = array(
			'NAMA'				=> $nama,
			'NRP_NIP'			=> $nip,
			'PANGKAT'			=> $pangkat,
			'JABATAN'			=> $jabatan,
			'Riwayat_Jabatan'	=> $riwayat
		);

		$where = array(
			'id'	=> $id
		);

		$this->Model_personil->update_data($where, $data, 'data_personel');
		redirect('admin/home');
	}

	public function hapus($id){
		$where 	= array('id' => $id);
		$this->Model_personil->hapus_data($where, 'data_personel');
		redirect('admin/home');
	}
}
