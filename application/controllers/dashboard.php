<?php
class Dashboard extends CI_Controller {
	
	public function __construct(){
	    parent::__construct();
	    $this->load->model('dashboard_m');
	    $this->load->helper('menu');
	  }
	
	public function index(){
		if($this->session->userdata('username')!=""){
			$x['selesai']=$this->dashboard_m->get_job_stts_selesai();
			$x['belum']=$this->dashboard_m->get_job_stts_belum();
			$x['on_progress']=$this->dashboard_m->get_job_stts_on_progress();
      		$this->load->view('templates/header');
			$this->load->view('dashboard/index', $x);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function tampil_job(){
	    $event_data = $this->dashboard_m->list_schedule();
	    
		foreach($event_data->result_array() as $row)
		{
			$data[] = array(
				'id'	=>	$row['id'],
				'title'	=>	$row['title'],
				'start'	=>	$row['start'],
				'end'	=>	$row['end'],
			);
		}
		
		echo json_encode($data);
	}
}
