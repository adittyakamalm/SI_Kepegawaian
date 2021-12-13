<?php
class Struktur_model extends CI_Model {

    public function get_struktur(){
        return $this->db->get('struktur')->result_array();
    }

    public function upload_gambar($data, $table){
        $this->db->insert($table, $data);
    }

    public function edit_personil($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function update_gambar($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
?>