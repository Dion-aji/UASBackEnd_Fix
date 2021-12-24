<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
	public function index()
	{
		$datat['title']='Halaman Pendapatan WEB';
		$data['list']=$this->M_pendapatan->semuadata();
    $this->load->view('V_home/header',$datat);
    $this->load->view('V_home/sidebar');
    $this->load->view('V_home/topbar');
		$this->load->view('V_home/pendapatan',$data);
    $this->load->view('V_home/footer');
	}
	public function tambah_data(){
		$data['list']=$this->M_pendapatan->semuadata();
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_pendapatan/tambah_pendapatan',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_tambah_pendapatan(){
		$this->M_pendapatan->proses_tambah_pendapatan();
		$this->session->set_flashdata('notifikasi','<div class="alert alert-success" role="alert">
                                             Data berhasil di tambah </div>');
		redirect('C_pendapatan/home');
	}
	public function hapus_data($id_pendapatan){
		$this->M_pendapatan->hapus_data($id_pendapatan);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-danger" role="alert">
                                             Data berhasil di hapus </div>');
		redirect ('C_pendapatan/home');
	}
	public function edit_data($id_pendapatan){
		$data['list']=$this->M_pendapatan->ambil_id_pendapatan($id_pendapatan);
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_pendapatan/edit_pendapatan',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_edit_pendapatan(){
		$this-> M_pendapatan -> proses_edit_pendapatan($id_pendapatan);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-primary" role="alert">
                                             Data berhasil di Update </div>');
		redirect ('C_pendapatan/home');
	}

}
