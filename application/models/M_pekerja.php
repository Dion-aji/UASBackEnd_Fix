<?php
class M_pekerja extends CI_model{
  public function semuadata(){
  return  $this->db -> get('tb_pekerja')->result_array();
  }
  public function proses_tambah_pekerja(){
    $data = [
      "nama_lengkap" => $this->input->post('nama_lengkap'),
      "umur" => $this->input->post('umur'),
      "gender" => $this->input->post('gender'),
      "jabatan" => $this->input->post('jabatan'),
      "gaji" => $this->input->post('gaji'),
    ];
    $this->db->insert('tb_pekerja',$data);
  }
  public function hapus_data($id_pekerja){
    $this->db->where ('id_pekerja',$id_pekerja);
    $this->db->delete('tb_pekerja');
  }
  public function proses_edit_pekerja(){
    $data = [
      "nama_lengkap" => $this->input->post('nama_lengkap'),
      "umur" => $this->input->post('umur'),
      "gender" => $this->input->post('gender'),
      "jabatan" => $this->input->post('jabatan'),
      "gaji" => $this->input->post('gaji'),
    ];
    $this->db->where ('id_pekerja',$this->input->post('id_pekerja'));
    $this->db->update('tb_pekerja',$data);
  }
  public function simpan_data()
{
  $config['upload_path']   = './uploads/';
  $config['allowed_types'] = 'jpg|png|gif';
  $config['max_size']      = '2048000';
  $config['max_width']     = '1920';
  $config['max_height']    = '1080';
  $config['file_name']     = url_title($this->input->post('photo'));
  $filename = $this->upload->file_name;
  $this->upload->initialize($config);
  $this->upload->do_upload('photo');
  $data = $this->upload->data();

  $data = array(
    'id_pekerja'    => " ",
    "nama_lengkap"    => $this->input->post('nama_lengkap'),
    "umur"            => $this->input->post('umur'),
    "gender"          => $this->input->post('gender'),
    "jabatan"         => $this->input->post('jabatan'),
    "gaji"            => $this->input->post('gaji'),
    'photo'           => $data['file_name']
  );
  $this->db->insert('tb_pekerja',$data);
  }
  public function get_brg()
{
  $data = $this->db->query("SELECT * FROM tb_pekerja");
  return $data->result();
}
public function count_barang()
{
  $data = $this->db->query("SELECT * FROM tb_pekerja");
  return $data->num_rows();
}
  public function get_edit_data($id_pekerja)
  {
    $data = $this->db->query("SELECT * FROM tb_pekerja WHERE id_pekerja='$id_pekerja'");
    return $data->result();
  }
  public function eksekusi_edit()
		{
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048000';
			$config['max_width']     = '1920';
			$config['max_height']    = '1080';
			$config['file_name']     = url_title($this->input->post('photo'));
			$filename = $this->upload->file_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			$data = $this->upload->data();

			$id_pekerja = $this->input->post('id_pekerja');
			$data = array(
        'id_pekerja'      => " ",
        "nama_lengkap"    => $this->input->post('nama_lengkap'),
        "umur"            => $this->input->post('umur'),
        "gender"          => $this->input->post('gender'),
        "jabatan"         => $this->input->post('jabatan'),
        "gaji"            => $this->input->post('gaji'),
        'photo'           => $data['file_name']
			);

			$this->db->where('id_pekerja',$id_pekerja);
			$this->db->update('tb_pekerja',$data);
			redirect('C_pekerja/home',$data);
		}
}

 ?>
