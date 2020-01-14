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
		$data['id'] = $pop;
		if ($pop == "pilih") {
			redirect(base_url("Privantive"));
		}
		else{
			$this->load->view('templates/header');
			$this->load->view('privantive/pop', $data);
			$this->load->view('templates/footer');
		}
	}

	public function pilih_asset($no)
	{
		if($this->session->userdata('username')!=""){
			// $data['pop'] = $this->privantive_m->get_pop();
			$data['id_pop'] = $this->uri->segment('4');
			$data['nomor'] = $no;
      		$this->load->view('templates/header');
			$this->load->view('privantive/pilih_asset', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function kwh_meter()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/kwh', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function ACPDB()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/acpdb');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function DCPDB()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/dcpdb');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function RECTIFIER()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/rectifier');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function Baterai()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/baterai');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function genset()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/genset');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function ATS()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/ats');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}
	
	public function Inverter()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/inverter');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function UPS()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/ups');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function ENVIROMMENT()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/enviromment');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function ODF()
	{
		if($this->session->userdata('username')!=""){
      		$this->load->view('templates/header');
			$this->load->view('privantive/odf');
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function tambah_data_kwh(){
		$data = array(
	    	'id_pelanggan' => $this->input->post('txtIdPelanggan'),
	    	'id_kwh_meter' => $this->input->post('txtIdKwh'),
	    	'daya_pasang' => $this->input->post('txtDaya'),
	    	'mcb_pasang' => $this->input->post('txtMcb'),
	    	'fasa' => $this->input->post('txtFasa'),
	    	'no_label_amarta' => $this->input->post('txtAmarta'),
	    	'gembok' => $this->input->post('rd_gembok'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_data_kwh($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_inspeksi(){
		$data = array(
	    	'kondisi_box' => $this->input->post('selectKondisiKwh'),
	    	'indikator_r' => $this->input->post('rd_frasa_r'),
	    	'indikator_s' => $this->input->post('rd_frasa_s'),
	    	'indikator_t' => $this->input->post('rd_frasa_t'),
	    	'merek_tipe' => $this->input->post('txtMerekNTipe'),
	    	'k_terminal_mcb' => $this->input->post('rd_terminal_mcb'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_inspeksi($data);
		echo json_encode(array("status" => true));
	}
}
