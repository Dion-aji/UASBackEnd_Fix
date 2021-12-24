<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
	public function index()
	{
		$datat['title']='Halaman Pembaruan WEB';
		$data['list']=$this->M_pembaruan->semuadata();
    $this->load->view('V_home/header',$datat);
    $this->load->view('V_home/sidebar');
    $this->load->view('V_home/topbar');
		$this->load->view('V_home/pembaruan',$data);
    $this->load->view('V_home/footer');
	}
	public function tambah_data(){
		$data['list']=$this->M_pembaruan->semuadata();
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_pembaruan/tambah_pembaruan',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_tambah_pembaruan(){
		$this->M_pembaruan->proses_tambah_pembaruan();
		$this->session->set_flashdata('notifikasi','<div class="alert alert-success" role="alert">
                                             Data berhasil di tambah </div>');
		redirect('C_pembaruan/home');
	}
	public function hapus_data($id_pembaruan){
		$this->M_pembaruan->hapus_data($id_pembaruan);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-danger" role="alert">
                                             Data berhasil di hapus </div>');
		redirect ('C_pembaruan/home');
	}
	public function edit_data($id_pembaruan){
		$data['list']=$this->M_pembaruan->ambil_id_pembaruan($id_pembaruan);
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_pembaruan/edit_pembaruan',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_edit_pembaruan(){
		$this-> M_pembaruan -> proses_edit_pembaruan($id_pembaruan);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-primary" role="alert">
                                             Data berhasil di Update </div>');
		redirect ('C_pembaruan/home');
	}

}
