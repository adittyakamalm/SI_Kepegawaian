<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

    public function userLoginCheck($username) {
        $this->db->where("username = '$username'");
        $query = $this->db->get('user');
        return $query->row_array();
    }

    public function getUserLoginData() {
        return $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function cek_login(){
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
                            ->where('password', $password)
                            ->limit(1)
                            ->get('user');
        if($result->num_rows()> 0){
            return $result->row();
        } else {
            return array();
        }
    }

    public function register() {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
            'role_id' => 1,
            'is_active' => 1,
        ];

        $this->db->insert('user', $data);
    }
}