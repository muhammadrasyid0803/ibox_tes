<?php
class Login extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->model('Login_m');
    $this->load->helper('menu');
  }

  public function index(){
    $this->load->view('login/index');
  }

  public function masuk(){
     $username = $this->input->post('txtUsername');
     $password = $this->input->post('txtPassword');
     
     $data = array(
      'username' => $username,
      'password' => $password
      // 'password' => md5($password)
     );

     // Validasi Username dan Password
     $cek = $this->Login_m->cek_login($data);

     if ($cek > 0) {
        $data_session = array(
          'username' => $cek['username'],
          'id' => $cek['id'],
          'name' =>$cek['name'],
          'email' => $cek['email'],
          'role' => $cek['role'],
          'status' => $cek['status']
        );
        $this->session->set_userdata($data_session);
        redirect(base_url("Dashboard"));
     }
     else{
        echo "Username dan password salah !";
     }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('Login'));
  }
}