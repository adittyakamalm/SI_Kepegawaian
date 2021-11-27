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
}