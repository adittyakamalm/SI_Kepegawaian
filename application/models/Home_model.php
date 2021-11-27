<?php
class Home_model extends CI_Model {
    public function get_data(){
        return $this->db->get('carousel')->result_array();
    }
}
?>