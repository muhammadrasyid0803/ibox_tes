<?php
class Jobs extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->model('jobs_m');
    $this->load->helper('menu');
    $this->load->model('cetak_m');
    $this->load->library('pdf');
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
    $users_id = $this->session->userdata('id');
    $result = $this->jobs_m->list_job($users_id);
    echo json_encode($result);
  }

  public function detail_job(){
      $result = $this->jobs_m->detail_job();
      echo json_encode($result);
  }

  public function ambil_job($id){
    $this->jobs_m->update_status_belum($id);
    echo json_encode(array("status" => true));
  }

  public function cetak_status($id){
    $this->jobs_m->update_status_on_progress($id);
    echo json_encode(array("status" => true));
  }

  public function cetak_pdf($id)
  {

    $html_content = '<h3 align="center">List Joblist</h3>';
    $html_content .= $this->cetak_m->cetak($id);
    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->loadHtml($html_content);
    $this->pdf->render();
    $this->pdf->stream("JobList".$id.".pdf", array("Attachment"=>FALSE));
  }
}