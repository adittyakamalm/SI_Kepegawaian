<?php
class Model_personil extends CI_Model {
    public function get_data(){
        return $this->db->get('data_personel')->result_array();
    }

    public function get_struktur(){
        return $this->db->get('struktur')->result_array();
    }

    public function get_keyword($cari){
        $this->db->select('*');
        $this->db->from('data_personel');
        $this->db->like('NAMA', $cari);
        $this->db->or_like('PANGKAT', $cari);
        $this->db->or_like('NRP_NIP', $cari);
        return $this->db->get();
    }

    public function detail_personil($id){
        $result = $this->db->where('id',$id)->get('data_personel');
        if($result->num_rows()>0){
            return $result->result();
        } else {
            return false;
        }
    }

    public function get_personel($limit, $start, $keyword = null){
        if ($keyword){
            $this->db->like('NAMA', $keyword);
        }
        return $this->db->get('data_personel', $limit, $start)->result_array();
    }

    public function countAll(){
        return $this->db->get('data_personel')->num_rows();
    }

    public function tambah_personel($data, $table){
        $this->db->insert($table, $data);
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