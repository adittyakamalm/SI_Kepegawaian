<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpPrasarana extends CI_Controller {

	public function __construct() {		
		parent::__construct();
		$this->load->model('Prasarana_model');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
			'pageTitle' => "Admin | Upload Prasarana",
			'prasarana' => $this->Prasarana_model->get_data()
		];

		$this->load->view('template_admin/navbar', $data);
		$this->load->view('template_admin/header');
		$this->load->view('admin/upPrasarana', $data);
		$this->load->view('template_admin/footer');
	}

	public function upload(){
		$judul			=	$this->input->post('judul');
		$keterangan		=	$this->input->post('keterangan');
		$gambar			=	$_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path'] 		= './uploads/prasarana';
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

		$this->Prasarana_model->upload_gambar($data, 'prasarana');
		redirect('admin/upPrasarana');
	}

	public function edit($id){
		$where = array('id' => $id);
		$data['prasarana'] = $this->Prasarana_model->edit($where, 'prasarana')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/navbar');
		$this->load->view('admin/editPrasarana',$data);
		$this->load->view('template_admin/footer');
	}

	public function update(){
		$id				= $this->input->post('id');
		$judul			= $this->input->post('judul');
		$keterangan		= $this->input->post('keterangan');
		$gambar			= $_FILES['gambar']['name'];

		if ($gambar =''){
			
		}else{
			$config ['upload_path'] 		= './uploads/profile';
			$config ['allowed_types'] 		= 'jpg|jpeg|png|svg|gif';
			$config ['overwrite'] 			= TRUE;
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload !";
			}else{
				$gambar	=	$this->upload->data('file_name');
			}
		}

		$data = array(
			'judul'				=> $judul,
			'keterangan'		=> $keterangan,
			'gambar'			=> $gambar
		);

		$where = array(
			'id'	=> $id
		);

		$this->Prasarana_model->update_data($where, $data, 'prasarana');
		redirect('admin/upPrasarana');
	}

	public function hapus($id){
		$data['prasarana'] = $this->Prasarana_model->get_struktur();
		$where 	= array('id' => $id);
		
		$gambar = './uploads/prasarana' . $data['prasarana']['gambar'];
		unlink($gambar);
		$this->Prasarana_model->hapus_data($where, 'prasarana');
		redirect('admin/upPrasarana');
	}
		
}
