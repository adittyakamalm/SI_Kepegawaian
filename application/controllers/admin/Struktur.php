<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	public function __construct() {		
		parent::__construct();

		$this->load->model('Model_personil');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "UniHealth | Tabel Catering",
			'struktur' => $this->Model_personil->get_struktur()
		];

		$this->load->view('template_admin/navbar');
		$this->load->view('template_admin/header');
		$this->load->view('admin/struktur', $data);
		$this->load->view('template_admin/footer');
	}

	public function upStruktur()
	{
		$data = [
			'pageTitle' => "UniHealth | Tabel Catering",
			'struktur' => $this->Model_personil->get_struktur()
		];

		$this->load->view('template_admin/navbar');
		$this->load->view('template_admin/header');
		$this->load->view('admin/upStruktur', $data);
		$this->load->view('template_admin/footer');
	}

	public function upload(){
		$gambar_struktur	=	$_FILES['gambar_struktur']['name'];
		if ($gambar_struktur =''){}else{
			$config ['upload_path'] 		= './uploads/struktur';
			$config ['allowed_types'] 		= 'jpg|jpeg|png|svg';
			$config['overwrite'] 			= TRUE;
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_struktur')){
				echo "Gambar gagal diupload !";
			}else{
				$gambar_struktur	=	$this->upload->data('file_name');
			}
		}

		$data = array(
			'gambar_struktur' => $gambar_struktur
		);

		$this->Model_personil->upload_gambar($data, 'struktur');
		redirect('admin/struktur');
	}

	public function update(){
		$id					= $this->input->post('id');
		$gambar_struktur	= $this->input->post('gambar_struktur');

		$config ['upload_path'] 		= './uploads/struktur';
		$config ['allowed_types'] 		= 'jpg|jpeg|png|svg';
		$config ['overwrite'] 			= TRUE;

		$data = array(
			'gambar_struktur' => $gambar_struktur
		);

		$where = array(
			'id'	=> $id
		);

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('gambar_struktur')){
			echo "Gambar gagal diupload !";
		}else{
			$gambar_struktur	=	$this->upload->data('file_name');
			$this->Model_personil->update_gambar($where, $data, 'struktur');
			redirect('admin/struktur');
	}
		}

	public function hapus($id){
		$where 	= array('id' => $id);
		$this->Model_personil->hapus_data($where, 'struktur');
		redirect('admin/upStruktur');
	}
		
		
}
