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
        show_404();
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

  // public function tampil_detail($id_job){
  //   $data = $this->documents_model->get_file_by_id_history($id_job);
  //   die();
  //   echo json_encode($data);
  // }

  // function get_jobs(){
  //         $list = $this->jobs_m->get_datatables();
  //         $data = array();
  //         $no = $_POST['start'];
  //         foreach ($list as $field) {
  //             $no++;
  //             $row = array();
  //             $row[] = $field->description;
  //             // $row[] = "<a href='javascript:void(0);' class='btn btn-warning btn-xs' onclick='ubah_agama(".$field->kd_agama.")' title='Ubah Agama' data-toggle='tooltip' data-placement='bottom'><i class='glyphicon glyphicon-pencil'></i></a>  <a href='javascript:void(0);' class='btn btn-danger btn-xs' onclick='hapus_modal(".$field->kd_agama.")' title='Hapus Agama' data-toggle='tooltip' data-placement='bottom'><i class='glyphicon glyphicon-trash'></i></a>";
  //             $data[] = $row;
  //         }
   
  //         $output = array(
  //             "draw" => $_POST['draw'],
  //             "recordsTotal" => $this->jobs_m->count_all(),
  //             "recordsFiltered" => $this->jobs_m->count_filtered(),
  //             "data" => $data,
  //         );
  //         //output dalam format JSON
  //         echo json_encode($output);
  // }

}