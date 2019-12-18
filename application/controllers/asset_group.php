<?php
class Asset_group extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('asset_m');
	 	$this->load->helper('menu');
	  }

	public function index()
	{
		if($this->session->userdata('username')!=""){
			$data['pop'] = $this->asset_m->get_pop();
      		$this->load->view('templates/header');
			$this->load->view('assetgroup/index', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function pop()
	{
		$pop = $this->input->post('pilih_pop');
		$data['name'] = $this->asset_m->get_name_pop_by_id($pop);
		
		if ($pop == "") {
			redirect(base_url("Asset_group"));
		}
		else{
			$this->load->view('templates/header');
			$this->load->view('assetgroup/pop', $data);
			$this->load->view('templates/footer');
		}
	}
}
