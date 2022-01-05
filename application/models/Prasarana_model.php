<?php
class Prasarana_model extends CI_Model {
    public function get_data(){
        return $this->db->get('prasarana')->result_array();
    }

    public function upload_gambar($data, $table){
        $this->db->insert($table, $data);
    }

    public function edit($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
?>