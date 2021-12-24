<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
	public function index()
	{
		$datat['title']='Halaman Tugas';
		$data['barang']=$this->M_tugas->semuadata();
    $this->load->view('V_home/header',$datat);
    $this->load->view('V_home/sidebar');
    $this->load->view('V_home/topbar');
		$this->load->view('V_home/Welcome',$data);
    $this->load->view('V_home/footer');
	}
}
