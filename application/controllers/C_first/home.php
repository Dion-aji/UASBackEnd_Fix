<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		$datat['title']='Halaman Tugas';
		$data['barang']=$this->M_tugas->semuadata();
    $this->load->view('V_home/header',$datat);
    $this->load->view('V_home/sidebar');
    $this->load->view('V_home/topbar');
		$this->load->view('V_home/index',$data);
    $this->load->view('V_home/footer');
	}
	public function tambah_tugas(){
		$data['barang']=$this->M_tugas->semuadata();
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_tugas/tambah_tugas',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_tambah_tugas(){
		$this->M_tugas->proses_tambah_tugas();
		$this->session->set_flashdata('notifikasi','<div class="alert alert-success" role="alert">
                                             Data berhasil di tambah </div>');
		redirect('C_first/home');
	}
	public function hapus_data($id_tugas){
		$this->M_tugas->hapus_data($id_tugas);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-danger" role="alert">
                                             Data berhasil di hapus </div>');
		redirect ('C_first/home');
	}
	public function edit_data($id_tugas){
		$data['barang']=$this->M_tugas->ambil_id_tugas($id_tugas);
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_tugas/edit_tugas',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_edit_tugas(){
		$this-> M_tugas -> proses_edit_tugas($id_tugas);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-primary" role="alert">
                                             Data berhasil di Update </div>');
		redirect ('C_first/home');
	}

}
