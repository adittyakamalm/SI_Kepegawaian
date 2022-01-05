<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpHome extends CI_Controller {

	public function __construct() {		
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->model('Struktur_model');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "Admin | Upload Carousel",
			'struktur' => $this->Struktur_model->get_struktur(),
			'carousel' => $this->Home_model->get_data()
		];

		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/header');
		$this->load->view('admin/upHome', $data);
		$this->load->view('template_admin/footer');
	}

	public function uploadCarousel(){
		$judul			=	$this->input->post('judul');
		$keterangan		=	$this->input->post('keterangan');
		$gambar			=	$_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path'] 		= './uploads/carousel';
			$config ['allowed_types'] 		= 'jpg|jpeg|png|svg';
			$config['overwrite'] 			= TRUE;
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload !";
			}else{
				$gambar	=	$this->upload->data('file_name');
			}
		}

		$data = array(
			'judul' 		=> $judul,
			'keterangan' 	=> $keterangan,
			'gambar' 		=> $gambar
		);

		$this->Struktur_model->upload_gambar($data, 'carousel');
		redirect('admin/uploads');
	}

	public function hapusCarousel($id){
		$where 	= array('id' => $id);
		$this->Struktur_model->hapus_data($where, 'carousel');
		redirect('admin/uploads');
	}
		
		
}
