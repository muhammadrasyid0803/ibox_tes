<?php
class Asset_group extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model('jobs_m');
	 	$this->load->helper('menu');
	  }

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('asset/index');
		$this->load->view('templates/footer');
	}
}
