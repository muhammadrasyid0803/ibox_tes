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
}
