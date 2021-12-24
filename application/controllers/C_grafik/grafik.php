<?php
class grafik extends CI_Controller{
	function __construct(){
		parent::__construct();
    $datat['title']='Halaman Grafik';
    $this->load->view('V_home/header',$datat);
    $this->load->view('V_home/sidebar');
    $this->load->view('V_home/topbar');

		$this->load->model('M_grafik');

	}
	function index(){
		$data['data']=$this->M_grafik->get_data_popular();
		$this->load->view('V_home/grafik',$data);
	}
}
