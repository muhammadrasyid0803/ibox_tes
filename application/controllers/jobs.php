<?php
class Jobs extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->model('jobs_m');
    $this->load->helper('menu');
  }

  public function index(){
    if($this->session->userdata('username')!=""){
        $this->load->view('templates/header');
        $this->load->view('jobs/index');
        $this->load->view('templates/footer');
    } else {
        $this->load->view('pesan_error');
    }
  }

  public function tampil_job(){
    $result = $this->jobs_m->list_job();
    echo json_encode($result);
  }

  public function detail_job(){
      $result = $this->jobs_m->detail_job();
      echo json_encode($result);
  }

  public function ambil_job($id){
    $this->jobs_m->update_status($id);
    echo json_encode(array("status" => true));
  }
}