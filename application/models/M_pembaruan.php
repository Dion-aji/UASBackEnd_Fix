<?php
class M_pembaruan extends CI_model{
  public function semuadata(){
  return  $this->db -> get('tb_pembaruan')->result_array();
  }
  public function proses_tambah_pembaruan(){
    $data = [
      "nama_bug" => $this->input->post('nama_bug'),
      "tingkat" => $this->input->post('tingkat'),
      "deskripsi" => $this->input->post('deskripsi'),
    ];
    $this->db->insert('tb_pembaruan',$data);
  }
  public function hapus_data($id_pembaruan){
    $this->db->where ('id_pembaruan',$id_pembaruan);
    $this->db->delete('tb_pembaruan');
  }
  public function ambil_id_pembaruan($id_pembaruan){
    return $this->db->get_where('tb_pembaruan',['id_pembaruan'=>$id_pembaruan])->row_array();
  }
  public function proses_edit_pembaruan(){
    $data = [
      "nama_bug" => $this->input->post('nama_bug'),
      "tingkat" => $this->input->post('tingkat'),
      "deskripsi" => $this->input->post('deskripsi'),
    ];
    $this->db->where ('id_pembaruan',$this->input->post('id_pembaruan'));
    $this->db->update('tb_pembaruan',$data);
  }
}

 ?>
