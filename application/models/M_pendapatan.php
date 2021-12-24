<?php
class M_pendapatan extends CI_model{
  public function semuadata(){
  return  $this->db -> get('tb_pendapatan')->result_array();
  }
  public function proses_tambah_pendapatan(){
    $data = [
      "bulan" => $this->input->post('bulan'),
      "total_pendapatan" => $this->input->post('total_pendapatan'),
      "iklan_masuk" => $this->input->post('iklan_masuk'),
    ];
    $this->db->insert('tb_pendapatan',$data);
  }
  public function hapus_data($id_pendapatan){
    $this->db->where ('id_pendapatan',$id_pendapatan);
    $this->db->delete('tb_pendapatan');
  }
  public function ambil_id_pendapatan($id_pendapatan){
    return $this->db->get_where('tb_pendapatan',['id_pendapatan'=>$id_pendapatan])->row_array();
  }
  public function proses_edit_pendapatan(){
    $data = [
      "bulan" => $this->input->post('bulan'),
      "total_pendapatan" => $this->input->post('total_pendapatan'),
      "iklan_masuk" => $this->input->post('iklan_masuk'),
    ];
    $this->db->where ('id_pendapatan',$this->input->post('id_pendapatan'));
    $this->db->update('tb_pendapatan',$data);
  }
}

 ?>
