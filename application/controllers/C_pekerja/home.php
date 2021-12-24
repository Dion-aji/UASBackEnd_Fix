<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		$datat['title']='Halaman Pekerja';
		$data['list']=$this->M_pekerja->semuadata();
    $this->load->view('V_home/header',$datat);
    $this->load->view('V_home/sidebar');
    $this->load->view('V_home/topbar');
		$this->load->view('V_home/pekerja',$data);
    $this->load->view('V_home/footer');
	}
	public function tambah_data(){
		$data['list']=$this->M_pekerja->semuadata();
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_pekerja/tambah_pekerja',$data);
		$this->load->view('V_home/footer');
	}
	public function hapus_data($id_pekerja){
		$this->M_pekerja->hapus_data($id_pekerja);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-danger" role="alert">
                                             Data berhasil di hapus </div>');
		redirect ('C_pekerja/home');
	}
	public function edit_data($id_pekerja){
		$data['listdata']   = $this->M_pekerja->get_edit_data($id_pekerja);
		$data['list']    = $this->M_pekerja->get_brg();
		$data['c_barang']  = $this->M_pekerja->count_barang();
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_pekerja/edit_pekerja',$data);
		$this->load->view('V_home/footer');

}
	public function proses_edit_pekerja(){
		$this-> M_pekerja -> proses_edit_pekerja($id_pekerja);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-primary" role="alert">
                                             Data berhasil di Update </div>');
		redirect ('C_pekerja/home');
	}
	public function simpan_data()
	{
		$this->M_pekerja->simpan_data();
		$data['list'] = $this->M_pekerja->get_brg();
		$data['c_barang']  = $this->M_pekerja->count_barang();
		$this->session->set_flashdata('notifikasi','<div class="alert alert-success" role="alert">
																						 Data berhasil di tambah </div>');
	 redirect('C_pekerja/home');
	}
	public function eksekusi_edit()
	{
		$this->M_pekerja->eksekusi_edit($id_pekerja);
	}

}
?>
