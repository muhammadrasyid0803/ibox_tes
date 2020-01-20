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
			$data['id_pop'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/acpdb', $data);
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

	public function tambah_pengukuran_tegangan(){
		$data = array(
	    	'r_s_tegangan' => $this->input->post('txtR_S_tegangan'),
	    	'r_t_tegangan' => $this->input->post('txtR_T_tegangan'),
	    	's_t_tegangan' => $this->input->post('txtS_T_tegangan'),
	    	'n_g_tegangan' => $this->input->post('txtN_G_tegangan'),
	    	'r_n_tegangan' => $this->input->post('txtR_N_tegangan'),
	    	's_n_tegangan' => $this->input->post('txtS_N_tegangan'),
	    	't_n_tegangan' => $this->input->post('txtT_N_tegangan'),
	    	'r_g_tegangan' => $this->input->post('txtR_G_tegangan'),
	    	's_g_tegangan' => $this->input->post('txtS_G_tegangan'),
	    	't_g_tegangan' => $this->input->post('txtT_G_tegangan'),
	    	'fasa_r_beban' => $this->input->post('txt_fasa_r_beban'),
	    	'fasa_s_beban' => $this->input->post('txt_fasa_s_beban'),
	    	'fasa_t_beban' => $this->input->post('txt_fasa_t_beban'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_pengukuran_tegangan($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_lain_lain(){
		$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_lain_lain($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_temuan(){
		$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_temuan($data);
		echo json_encode(array("status" => true));
	}

	private function _do_upload_add_foto_1(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_1')) //upload and validate
	        {
	            $data['inputerror'][] = 'file';
	            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
	            $data['status'] = FALSE;
	            echo json_encode($data);
	            alert('error');
	            exit();
	        }
	        else
	        {
	        	$data = array('upload_data' => $this->upload->data());
	        }
	        return $this->upload->data('file_name');
	}

	private function _do_upload_add_foto_2(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_2')) //upload and validate
	        {
	            $data['inputerror'][] = 'file';
	            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
	            $data['status'] = FALSE;
	            echo json_encode($data);
	            alert('error');
	            exit();
	        }
	        else
	        {
	        	$data = array('upload_data' => $this->upload->data());
	        }
	        return $this->upload->data('file_name');
	}

	private function _do_upload_add_foto_3(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_3')) //upload and validate
	        {
	            $data['inputerror'][] = 'file';
	            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
	            $data['status'] = FALSE;
	            echo json_encode($data);
	            alert('error');
	            exit();
	        }
	        else
	        {
	        	$data = array('upload_data' => $this->upload->data());
	        }
	        return $this->upload->data('file_name');
	}

	private function _do_upload_add_foto_4(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_4')) //upload and validate
	        {
	            $data['inputerror'][] = 'file';
	            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
	            $data['status'] = FALSE;
	            echo json_encode($data);
	            alert('error');
	            exit();
	        }
	        else
	        {
	        	$data = array('upload_data' => $this->upload->data());
	        }
	        return $this->upload->data('file_name');
	}

	private function _do_upload_add_foto_5(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_5')) //upload and validate
	        {
	            $data['inputerror'][] = 'file';
	            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
	            $data['status'] = FALSE;
	            echo json_encode($data);
	            alert('error');
	            exit();
	        }
	        else
	        {
	        	$data = array('upload_data' => $this->upload->data());
	        }
	        return $this->upload->data('file_name');
	}

	private function _do_upload_add_foto_6(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_6')) //upload and validate
	        {
	            $data['inputerror'][] = 'file';
	            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
	            $data['status'] = FALSE;
	            echo json_encode($data);
	            alert('error');
	            exit();
	        }
	        else
	        {
	        	$data = array('upload_data' => $this->upload->data());
	        }
	        return $this->upload->data('file_name');
	}

	public function tambah_dokumentasi(){
		$data = array(
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    if(!empty($_FILES['foto_1']['name'])){
	    	$upload = $this->_do_upload_add_foto_1();
	    	$data['foto_1'] = $upload;
	    }

	    if(!empty($_FILES['foto_2']['name'])){
	    	$upload = $this->_do_upload_add_foto_2();
	    	$data['foto_2'] = $upload;
	    }

	    if(!empty($_FILES['foto_3']['name'])){
	    	$upload = $this->_do_upload_add_foto_3();
	    	$data['foto_3'] = $upload;
	    }

	    if(!empty($_FILES['foto_4']['name'])){
	    	$upload = $this->_do_upload_add_foto_4();
	    	$data['foto_4'] = $upload;
	    }

	    if(!empty($_FILES['foto_5']['name'])){
	    	$upload = $this->_do_upload_add_foto_5();
	    	$data['foto_5'] = $upload;
	    }

	    if(!empty($_FILES['foto_6']['name'])){
	    	$upload = $this->_do_upload_add_foto_6();
	    	$data['foto_6'] = $upload;
	    }

	    $this->privantive_m->tambah_dokumentasi($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_data_acpdb(){
		$data = array(
	    	'kondisi_box' => $this->input->post('selectKondisiAcpdb'),
	    	'aset_amarta' => $this->input->post('txtAmarta'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_data_acpdb($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_inspeksi_acpdb(){
		$data = array(
	    	'k_terminal_mcb' => $this->input->post('selectKondisiTerminalMCB'),
	    	'indikator_r' => $this->input->post('rd_frasa_r'),
	    	'indikator_s' => $this->input->post('rd_frasa_s'),
	    	'indikator_t' => $this->input->post('rd_frasa_t'),
	    	'timer_theben_ac' => $this->input->post('selectUjiTimerAC'),
	    	'thermostat_honeywell_k' => $this->input->post('selectUjiThermostatKontraktor'),
	    	'thermostat_dc_fan' => $this->input->post('selectUjiThermostatDcFan'),
	    	'fail_over' => $this->input->post('selectFailMcbAcpdb'),
	    	'merek_tipe' => $this->input->post('txtMerekNTipe'),
	    	'perangkat_off' => $this->input->post('txtPerangkatOFF'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_inspeksi_acpdb($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_pengukuran_tegangan_acpdb(){
		$data = array(
	    	'r_s_tegangan' => $this->input->post('txtR_S_tegangan'),
	    	'r_t_tegangan' => $this->input->post('txtR_T_tegangan'),
	    	's_t_tegangan' => $this->input->post('txtS_T_tegangan'),
	    	'n_g_tegangan' => $this->input->post('txtN_G_tegangan'),
	    	'r_n_tegangan' => $this->input->post('txtR_N_tegangan'),
	    	's_n_tegangan' => $this->input->post('txtS_N_tegangan'),
	    	't_n_tegangan' => $this->input->post('txtT_N_tegangan'),
	    	'r_g_tegangan' => $this->input->post('txtR_G_tegangan'),
	    	's_g_tegangan' => $this->input->post('txtS_G_tegangan'),
	    	't_g_tegangan' => $this->input->post('txtT_G_tegangan'),
	    	'fasa_r_beban' => $this->input->post('txt_fasa_r_beban'),
	    	'fasa_s_beban' => $this->input->post('txt_fasa_s_beban'),
	    	'fasa_t_beban' => $this->input->post('txt_fasa_t_beban'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_pengukuran_tegangan_acpdb($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_lain_lain_acpdb(){
		$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_lain_lain_acpdb($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_temuan_acpdb(){
		$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_temuan_acpdb($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_dokumentasi_acpdb(){
		$data = array(
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    if(!empty($_FILES['foto_1']['name'])){
	    	$upload = $this->_do_upload_add_foto_1();
	    	$data['foto_1'] = $upload;
	    }

	    if(!empty($_FILES['foto_2']['name'])){
	    	$upload = $this->_do_upload_add_foto_2();
	    	$data['foto_2'] = $upload;
	    }

	    if(!empty($_FILES['foto_3']['name'])){
	    	$upload = $this->_do_upload_add_foto_3();
	    	$data['foto_3'] = $upload;
	    }

	    if(!empty($_FILES['foto_4']['name'])){
	    	$upload = $this->_do_upload_add_foto_4();
	    	$data['foto_4'] = $upload;
	    }

	    if(!empty($_FILES['foto_5']['name'])){
	    	$upload = $this->_do_upload_add_foto_5();
	    	$data['foto_5'] = $upload;
	    }

	    if(!empty($_FILES['foto_6']['name'])){
	    	$upload = $this->_do_upload_add_foto_6();
	    	$data['foto_6'] = $upload;
	    }

	    $this->privantive_m->tambah_dokumentasi_acpdb($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_foto_single_acpdb(){
		$data = array(
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    if(!empty($_FILES['foto_1']['name'])){
	    	$upload = $this->_do_upload_add_foto_1();
	    	$data['foto'] = $upload;
	    }

	    $this->privantive_m->tambah_foto_single_acpdb($data);
		echo json_encode(array("status" => true));
	}
}
