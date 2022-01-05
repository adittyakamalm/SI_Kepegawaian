<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

     public function index() {

        $data = [
            'pageTitle' => 'SPN | Login',
            'user' => $this->user_model->getUserLoginData()
        ];

        $this->form_validation->set_rules('username', 'Username or Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run()) {
            $this->_doLogin();
        } else {
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');           
        } 
    }

    // Login process method
    private function _doLogin() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_model->userLoginCheck($username);

        if($user != null) {
            if($user['is_active'] == 1) {
                if($password == $user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'id' => $user['id']
                    ];

                    $this->session->set_userdata($data);
                        if ($user['role_id'] == 1){
                            redirect('admin/home');
                        } else{
                            redirect('home');
                        }
                } else {
                    $this->session->set_flashdata('failed', 'Password yang dimasukan salah!');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('failed', 'Akun anda sudah tidak aktif!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('failed', 'Username tidak terdaftar!');
            redirect('auth');
        }
    }

    // Register process method
    public function register() {
        $data = [
            'pageTitle' => 'SPN | Register',
            'user' => $this->user_model->getUserLoginData()
        ];

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => "Username sudah terdaftar, coba lagi!"
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [
            'matches' => "Password yang dimasukan tidak cocok, coba lagi!"
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run()) {
            $this->User_model->register();
            $this->session->set_flashdata('success', 'Akun berhasil didaftarkan!');
            redirect('auth');
        } else {

            if($this->session->userdata('user_username')) {
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar-login');
                $this->load->view('auth/register');
                $this->load->view('template/footer');
            } else {
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                $this->load->view('auth/register');
                $this->load->view('template/footer');
            }            
        }
    }

    // Logout method
    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('success', 'Logout berhasil');
        redirect('home');
    }
}
