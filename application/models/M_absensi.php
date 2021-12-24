<?php
class M_absensi extends CI_model{
  public function semuadata(){
  return  $this->db -> get('tb_absensi')->result_array();
  }
  public function proses_tambah_absen(){
    $data = [
      "nama_pekerja" => $this->input->post('nama_pekerja'),
      "pekerjaan" => $this->input->post('pekerjaan'),
      "kehadiran" => $this->input->post('kehadiran'),
    ];
    $this->db->insert('tb_absensi',$data);
  }
  public function hapus_data($id_absen){
    $this->db->where ('id_absen',$id_absen);
    $this->db->delete('tb_absensi');
  }
  public function ambil_id_absen($id_absen){
    return $this->db->get_where('tb_absensi',['id_absen'=>$id_absen])->row_array();
  }
  public function proses_edit_absen(){
    $data = [
      "nama_pekerja" => $this->input->post('nama_pekerja'),
      "pekerjaan" => $this->input->post('pekerjaan'),
      "kehadiran" => $this->input->post('kehadiran'),
    ];
    $this->db->where ('id_absen',$this->input->post('id_absen'));
    $this->db->update('tb_absensi',$data);
  }
}

 ?>
