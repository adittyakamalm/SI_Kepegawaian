<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Controller {

	public function __construct() {		
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->model('Struktur_model');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "Admin | Uploads",
			'struktur' => $this->Struktur_model->get_struktur(),
			'carousel' => $this->Home_model->get_data()
		];

		$this->load->view('template_admin/navbar');
		$this->load->view('template_admin/header');
		$this->load->view('admin/uploads', $data);
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

		$this->Struktur_model->upload_gambar($data, 'struktur');
		redirect('admin/uploads');
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

	public function hapus($id){
		$data['struktur'] = $this->Struktur_model->get_struktur();
		$where 	= array('id' => $id);
		
		$gambar = './uploads/struktur' . $data['struktur']['gambar_struktur'];
		unlink($gambar);
		$this->Struktur_model->hapus_data($where, 'struktur');
		redirect('admin/uploads');
	}

	public function hapusCarousel($id){
		$where 	= array('id' => $id);
		$this->Struktur_model->hapus_data($where, 'carousel');
		redirect('admin/uploads');
	}
		
		
}
