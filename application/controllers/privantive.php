<?php
class Privantive extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('privantive_m');
	 	$this->load->helper('menu');
	  }

	public function index()
	{
		if($this->session->userdata('username')!=""){
			$data['pop'] = $this->privantive_m->get_pop();
      		$this->load->view('templates/header');
			$this->load->view('privantive/index', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function pop()
	{
		$pop = $this->input->post('pilih_pop');
		$data['name'] = $this->privantive_m->get_name_pop_by_id($pop);
		
		if ($pop == "pilih") {
			redirect(base_url("Privantive"));
		}
		else{
			$this->load->view('templates/header');
			$this->load->view('privantive/pop', $data);
			$this->load->view('templates/footer');
		}
	}
}
