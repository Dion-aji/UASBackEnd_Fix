<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Web Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert
            alert-success" role="alert">Selamat! akun anda berhasil didaftar</div>');
            redirect('auth');
        }
    }
    public function logincek (){
       $this-> load -> model ('M_login');
       $data['title'] = 'Login Page';
       $this->load->view('templates/auth_header', $data);
       $this->load->view('auth/login',$data);
       $this->load->view('templates/auth_footer');
       if ($_POST){
         $email = $this-> input ->post ('email');
         $password = $this-> input -> post ('password');
         $pengguna = $this-> M_login -> cek_login (['email'=> $email]);
       if ($pengguna){
          if ($pengguna ->password == md5($password)){
         $sessi =
         ['name'=> $pengguna -> name,
         'role_id'=> $pengguna -> role_id,
         'id'=> $pengguna -> id];
         $this-> session ->set_userdata($sessi);
         redirect(base_url().'C_first/home');
       }else {
       echo "<script>alert('pass Tidak ada')</script>";
       }
       }else {
         echo "<script>alert('Tidak ada')</script>";
       }
     }
   }
}
