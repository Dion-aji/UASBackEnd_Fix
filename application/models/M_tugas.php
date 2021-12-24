<?php
class M_tugas extends CI_model{
  public function semuadata(){
  return  $this->db -> get('tb_tugas')->result_array();
  }
  public function proses_tambah_tugas(){
    $data = [
      "nama_tugas" => $this->input->post('nama_tugas'),
      "sifat" => $this->input->post('sifat'),
      "deskripsi" => $this->input->post('deskripsi'),
    ];
    $this->db->insert('tb_tugas',$data);
  }
  public function hapus_data($id_tugas){
    $this->db->where ('id_tugas',$id_tugas);
    $this->db->delete('tb_tugas');
  }
  public function ambil_id_tugas($id_tugas){
    return $this->db->get_where('tb_tugas',['id_tugas'=>$id_tugas])->row_array();
  }
  public function proses_edit_tugas(){
    $data = [
      "nama_tugas" => $this->input->post('nama_tugas'),
      "sifat" => $this->input->post('sifat'),
      "deskripsi" => $this->input->post('deskripsi'),
    ];
    $this->db->where ('id_tugas',$this->input->post('id_tugas'));
    $this->db->update('tb_tugas',$data);
  }
}

 ?>
