<?php
class M_gaji extends CI_model{
  public function semuadata(){
  return  $this->db -> get('tb_gaji')->result_array();
  }
  public function proses_tambah_gaji(){
    $data = [
      "jabatan" => $this->input->post('jabatan'),
      "gaji" => $this->input->post('gaji'),
      "tanggal" => $this->input->post('tanggal'),
    ];
    $this->db->insert('tb_gaji',$data);
  }
  public function hapus_data($id_gaji){
    $this->db->where ('id_gaji',$id_gaji);
    $this->db->delete('tb_gaji');
  }
  public function ambil_id_gaji($id_gaji){
    return $this->db->get_where('tb_gaji',['id_gaji'=>$id_gaji])->row_array();
  }
  public function proses_edit_gaji(){
    $data = [
      "jabatan" => $this->input->post('jabatan'),
      "gaji" => $this->input->post('gaji'),
      "tanggal" => $this->input->post('tanggal'),
    ];
    $this->db->where ('id_gaji',$this->input->post('id_gaji'));
    $this->db->update('tb_gaji',$data);
  }
}

 ?>
