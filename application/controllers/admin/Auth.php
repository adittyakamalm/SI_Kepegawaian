<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_username');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|');

		if($this->form_validation->run()){
			// Validasi sukses
			$this->_login();
		} else{
			$data['title'] = 'Login Page';
			$this->load->view('template/auth_header', $data);
			$this->load->view('admin/loginv2');
			$this->load->view('template/auth_footer');
		}
	}

	private function _login(){
		$username 	= $this->input->post('username');
		$password	= $this->input->post('password');

		$user = $this->user_model->userLoginCheck($username);

        if($user != null) {
            if ($user['user_is_active'] == 1) {
                    if(password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ]; 

                    $this->session->set_userdata($data);
                        if ($user['user_role'] == 1){
                            redirect('admin/home');
                        } else{
                            redirect('home');
                        }
                    
                    } 
            }
		}
	}
}