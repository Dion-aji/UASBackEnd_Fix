<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
	public function index()
	{
		$datat['title']='Halaman Gaji';
		$data['list']=$this->M_gaji->semuadata();
    $this->load->view('V_home/header',$datat);
    $this->load->view('V_home/sidebar');
    $this->load->view('V_home/topbar');
		$this->load->view('V_home/gaji',$data);
    $this->load->view('V_home/footer');
	}
	public function tambah_data(){
		$data['list']=$this->M_gaji->semuadata();
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_gaji/tambah_gaji',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_tambah_gaji(){
		$this->M_gaji->proses_tambah_gaji();
		$this->session->set_flashdata('notifikasi','<div class="alert alert-success" role="alert">
                                             Data berhasil di tambah </div>');
		redirect('C_gaji/home');
	}
	public function hapus_data($id_gaji){
		$this->M_gaji->hapus_data($id_gaji);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-danger" role="alert">
                                             Data berhasil di hapus </div>');
		redirect ('C_gaji/home');
	}
	public function edit_data($id_gaji){
		$data['list']=$this->M_gaji->ambil_id_gaji($id_gaji);
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_gaji/edit_gaji',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_edit_gaji(){
		$this-> M_gaji -> proses_edit_gaji($id_gaji);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-primary" role="alert">
                                             Data berhasil di Update </div>');
		redirect ('C_gaji/home');
	}

}
