<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		$datat['title']='Halaman Absensi';
		$data['list']=$this->M_absensi->semuadata();
    $this->load->view('V_home/header',$datat);
    $this->load->view('V_home/sidebar');
    $this->load->view('V_home/topbar');
		$this->load->view('V_home/absensi',$data);
    $this->load->view('V_home/footer');
	}
	public function tambah_data(){
		$data['list']=$this->M_absensi->semuadata();
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_absensi/tambah_absen',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_tambah_absen(){
		$this->M_absensi->proses_tambah_absen();
		$this->session->set_flashdata('notifikasi','<div class="alert alert-success" role="alert">
                                             Data berhasil di tambah </div>');
		redirect('C_absensi/home');
	}
	public function hapus_data($id_absen){
		$this->M_absensi->hapus_data($id_absen);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-danger" role="alert">
                                             Data berhasil di hapus </div>');
		redirect ('C_absensi/home');
	}
	public function edit_data($id_absen){
		$data['list']=$this->M_absensi->ambil_id_absen($id_absen);
		$this->load->view('V_home/header');
		$this->load->view('V_home/sidebar');
		$this->load->view('V_home/topbar');
		$this->load->view('V_absensi/edit_absen',$data);
		$this->load->view('V_home/footer');
	}
	public function proses_edit_absen(){
		$this-> M_absensi -> proses_edit_absen($id_absen);
		$this->session->set_flashdata('notifikasi','<div class="alert alert-primary" role="alert">
                                             Data berhasil di Update </div>');
		redirect ('C_absensi/home');
	}

}
