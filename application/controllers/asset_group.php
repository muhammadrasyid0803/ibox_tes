<?php
class Asset_group extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model('jobs_m');
	 	$this->load->helper('menu');
	  }

	public function index()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('assetgroup/index');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function pop()
	{
		$pop = $this->input->post('pilih_pop');
		
		if ($pop == "") {
			redirect(base_url("Asset_group"));
		}
		else{
			$data['pop']=$pop;
			$this->load->view('templates/header');
			$this->load->view('assetgroup/pop', $data);
			$this->load->view('templates/footer');
		}
	}

	// public function pop()
	// {
	// 	if($this->session->userdata('username')!=""){
 //      		$this->load->view('templates/header');
	// 		$this->load->view('assetgroup/pop');
	// 		$this->load->view('templates/footer');
 //    	} else {
 //      		$this->load->view('pesan_error');
 //    	}
	// }
}
