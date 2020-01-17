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
			$data['no'] = $this->asset_m->get_no_rack();
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
		$data['id'] = $pop;
		$data['no'] = $this->asset_m->get_no_rack();
		// var_dump($data['id']);
		// die();
		
		if ($pop == "pilih") {
			redirect(base_url("Asset_group"));
		}
		else{
			$this->load->view('templates/header');
			$this->load->view('assetgroup/pop', $data);
			$this->load->view('templates/footer');
		}
	}

	private function _do_upload_add_foto_rack(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_rack')) //upload and validate
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

	private function _do_upload_add_foto_building(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_building')) //upload and validate
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

	public function tambah_building(){
	    $data = array(
	    	'desc_rack' => $this->input->post('txtDescRack'),
	    	'desc_building' => $this->input->post('txtDescBuilding'),
	    	'kondisi_rack' => $this->input->post('selectKondisiRack'),
	    	'kondisi_building' => $this->input->post('selectKondisiBuilding'),
	    	'no_rack' => $this->input->post('selectNoRack'),
	    	'id_pop' => $this->input->post('txtIdFkRack')
	    );

	    if(!empty($_FILES['foto_rack']['name'])){
	    	$upload = $this->_do_upload_add_foto_rack();
	    	$data['file_rack'] = $upload;
	    }

	    if(!empty($_FILES['foto_building']['name'])){
	    	$upload = $this->_do_upload_add_foto_building();
	    	$data['file_building'] = $upload;
	    }

	    $this->asset_m->tambah_a_build_infs_db($data);
		echo json_encode(array("status" => true));
	}

	private function _do_upload_add_foto_kwh(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_Kwh')) //upload and validate
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

	private function _do_upload_add_foto_acpdb(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_acpdb')) //upload and validate
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
	
	public function tambah_ac(){
	    $data = array(
	    	'desc_kwh' => $this->input->post('txtDescKwh'),
	    	'desc_acpdb' => $this->input->post('txtDescAcpdb'),
	    	'kondisi_kwh' => $this->input->post('selectKondisiKwh'),
	    	'kondisi_acpdb' => $this->input->post('selectKondisiAcpdb'),
	    	'id_pop' => $this->input->post('txtIdFkRack')
	    );

	    if(!empty($_FILES['foto_Kwh']['name'])){
	    	$upload = $this->_do_upload_add_foto_kwh();
	    	$data['file_kwh'] = $upload;
	    }

	    if(!empty($_FILES['foto_acpdb']['name'])){
	    	$upload = $this->_do_upload_add_foto_acpdb();
	    	$data['file_acpdb'] = $upload;
	    }

	    $this->asset_m->tambah_ac_db($data);
		echo json_encode(array("status" => true));
	}

	private function _do_upload_add_foto_rectifier(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_rectifier')) //upload and validate
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

	private function _do_upload_add_foto_dcpdb(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_dcpdb')) //upload and validate
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

	private function _do_upload_add_foto_baterai(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_baterai')) //upload and validate
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

	public function tambah_dc(){
	    $data = array(
	    	'desc_rectifier' => $this->input->post('txtDescRectifier'),
	    	'desc_dcpdb' => $this->input->post('txtDescDcpdb'),
	    	'kondisi_rectifier' => $this->input->post('selectKondisiRectifier'),
	    	'kondisi_dcpdb' => $this->input->post('selectKondisiDcpdb'),
	    	'desc_baterai' => $this->input->post('txtDescBaterai'),
	    	'kondisi_baterai' => $this->input->post('selectKondisiBaterai'),
	    	'id_pop' => $this->input->post('txtIdFkRack')
	    );

	    if(!empty($_FILES['foto_rectifier']['name'])){
	    	$upload = $this->_do_upload_add_foto_rectifier();
	    	$data['file_rectifier'] = $upload;
	    }

	    if(!empty($_FILES['foto_dcpdb']['name'])){
	    	$upload = $this->_do_upload_add_foto_dcpdb();
	    	$data['file_dcpdb'] = $upload;
	    }

	    if(!empty($_FILES['foto_baterai']['name'])){
	    	$upload = $this->_do_upload_add_foto_baterai();
	    	$data['file_baterai'] = $upload;
	    }

	    $this->asset_m->tambah_dc_db($data);
		echo json_encode(array("status" => true));
	}

	private function _do_upload_add_foto_genset(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_genset')) //upload and validate
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

	private function _do_upload_add_foto_ats(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_Ats')) //upload and validate
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

	private function _do_upload_add_foto_inverter(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_Inverter')) //upload and validate
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

	private function _do_upload_add_foto_ups(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_Ups')) //upload and validate
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

	public function tambah_power(){
	    $data = array(
	    	'desc_genset' => $this->input->post('txtDescGenset'),
	    	'kondisi_genset' => $this->input->post('selectKondisiGenset'),
	    	'desc_ats' => $this->input->post('txtDescAts'),
	    	'kondisi_ats' => $this->input->post('selectKondisiAts'),
	    	'desc_inverter' => $this->input->post('txtDescInverter'),
	    	'kondisi_inverter' => $this->input->post('selectKondisiInverter'),
	    	'desc_ups' => $this->input->post('txtDescUps'),
	    	'kondisi_ups' => $this->input->post('selectKondisiUps'),
	    	'id_pop' => $this->input->post('txtIdFkRack')
	    );

	    if(!empty($_FILES['foto_genset']['name'])){
	    	$upload = $this->_do_upload_add_foto_genset();
	    	$data['file_genset'] = $upload;
	    }

	    if(!empty($_FILES['foto_Ats']['name'])){
	    	$upload = $this->_do_upload_add_foto_ats();
	    	$data['file_ats'] = $upload;
	    }

	    if(!empty($_FILES['foto_Inverter']['name'])){
	    	$upload = $this->_do_upload_add_foto_inverter();
	    	$data['file_inverter'] = $upload;
	    }

	    if(!empty($_FILES['foto_Ups']['name'])){
	    	$upload = $this->_do_upload_add_foto_ups();
	    	$data['file_ups'] = $upload;
	    }

	    $this->asset_m->tambah_power_db($data);
		echo json_encode(array("status" => true));
	}

	private function _do_upload_add_foto_ac(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_Ac')) //upload and validate
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

	private function _do_upload_add_foto_alarm(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_Alarm')) //upload and validate
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

	public function tambah_alarm(){
	    $data = array(
	    	'desc_ac' => $this->input->post('txtDescAc'),
	    	'kondisi_ac' => $this->input->post('selectKondisiAc'),
	    	'desc_alarm' => $this->input->post('txtDescAlarm'),
	    	'kondisi_alarm' => $this->input->post('selectKondisiAlarm'),
	    	'id_pop' => $this->input->post('txtIdFkRack')
	    );

	    if(!empty($_FILES['foto_Ac']['name'])){
	    	$upload = $this->_do_upload_add_foto_ac();
	    	$data['file_ac'] = $upload;
	    }

	    if(!empty($_FILES['foto_Alarm']['name'])){
	    	$upload = $this->_do_upload_add_foto_alarm();
	    	$data['file_alarm'] = $upload;
	    }

	    $this->asset_m->tambah_alarm_db($data);
		echo json_encode(array("status" => true));
	}

	private function _do_upload_add_foto_odf(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_Odf')) //upload and validate
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

	public function tambah_odf(){
	    $data = array(
	    	'desc_odf' => $this->input->post('txtDescOdf'),
	    	'kondisi_odf' => $this->input->post('selectKondisiOdf'),
	    	'id_pop' => $this->input->post('txtIdFkRack')
	    );

	    if(!empty($_FILES['foto_Odf']['name'])){
	    	$upload = $this->_do_upload_add_foto_odf();
	    	$data['file_odf'] = $upload;
	    }

	    $this->asset_m->tambah_odf_db($data);
		echo json_encode(array("status" => true));
	}

	public function tampil_data_building(){
		$data = $this->asset_m->tampil_data_building();
		echo json_encode($data);
	}

	public function tampil_data_ac(){
		$data = $this->asset_m->tampil_data_ac();
		echo json_encode($data);
	}

	public function tampil_data_dc(){
		$data = $this->asset_m->tampil_data_dc();
		echo json_encode($data);
	}

	public function tampil_data_power(){
		$data = $this->asset_m->tampil_data_power();
		echo json_encode($data);
	}

	public function tampil_data_alarm(){
		$data = $this->asset_m->tampil_data_alarm();
		echo json_encode($data);
	}

	public function tampil_data_odf(){
		$data = $this->asset_m->tampil_data_odf();
		echo json_encode($data);
	}

	public function detail_building(){
		$result = $this->asset_m->tampil_detail_building();
		echo json_encode($result);
	}

	public function detail_ac(){
		$result = $this->asset_m->tampil_detail_ac();
		echo json_encode($result);
	}

	public function detail_dc(){
		$result = $this->asset_m->tampil_detail_dc();
		echo json_encode($result);
	}

	public function detail_power(){
		$result = $this->asset_m->tampil_detail_power();
		echo json_encode($result);
	}

	public function detail_alarm(){
		$result = $this->asset_m->tampil_detail_alarm();
		echo json_encode($result);
	}

	public function detail_odf(){
		$result = $this->asset_m->tampil_detail_odf();
		echo json_encode($result);
	}

	public function hapus_data_building(){
		$id = $this->input->post('TxtId');
		$data = $this->asset_m->hapus_data_building($id);
		echo json_encode($data);
	}

	public function hapus_data_ac(){
		$id = $this->input->post('TxtId');
		$data = $this->asset_m->hapus_data_ac($id);
		echo json_encode($data);
	}

	public function hapus_data_dc(){
		$id = $this->input->post('TxtId');
		$data = $this->asset_m->hapus_data_dc($id);
		echo json_encode($data);
	}

	public function hapus_data_power(){
		$id = $this->input->post('TxtId');
		$data = $this->asset_m->hapus_data_power($id);
		echo json_encode($data);
	}

	public function hapus_data_alarm(){
		$id = $this->input->post('TxtId');
		$data = $this->asset_m->hapus_data_alarm($id);
		echo json_encode($data);
	}

	public function hapus_data_odf(){
		$id = $this->input->post('TxtId');
		$data = $this->asset_m->hapus_data_odf($id);
		echo json_encode($data);
	}

	public function edit_building(){
		$id = $this->input->get('id');
		$data = $this->asset_m->get_building_by_id($id);
		echo json_encode($data);
	}

	public function update_building(){
		$data = array(
			'desc_rack' => $this->input->post('txtDescRack'),
			'kondisi_rack' => $this->input->post('selectKondisiRack'),
			'no_rack' => $this->input->post('selectNoRack'),
			'desc_building' => $this->input->post('txtDescBuilding'),
			'kondisi_building' => $this->input->post('selectKondisiBuilding'),
		);

		if(!empty($_FILES['foto_rack']['name'])){
	    	$upload = $this->_do_upload_add_foto_rack();
	    	$data['file_rack'] = $upload;
	    }

	    if(!empty($_FILES['foto_building']['name'])){
	    	$upload = $this->_do_upload_add_foto_building();
	    	$data['file_building'] = $upload;
	    }

	    $hasil = $this->asset_m->update_building(array('id' => $this->input->post('txtIdBuilding')), $data);
		echo json_encode($hasil);
	}

	public function edit_ac(){
		$id = $this->input->get('id');
		$data = $this->asset_m->get_ac_by_id($id);
		echo json_encode($data);
	}

	public function update_ac(){
		$data = array(
			'desc_kwh' => $this->input->post('txtDescKwh'),
			'kondisi_kwh' => $this->input->post('selectKondisiKwh'),
			'desc_acpdb' => $this->input->post('txtDescAcpdb'),
			'kondisi_acpdb' => $this->input->post('selectKondisiAcpdb'),
		);

		if(!empty($_FILES['foto_Kwh']['name'])){
	    	$upload = $this->_do_upload_add_foto_kwh();
	    	$data['file_kwh'] = $upload;
	    }

	    if(!empty($_FILES['foto_acpdb']['name'])){
	    	$upload = $this->_do_upload_add_foto_acpdb();
	    	$data['file_acpdb'] = $upload;
	    }

	    $hasil = $this->asset_m->update_ac(array('id' => $this->input->post('txtIdAC')), $data);
		echo json_encode($hasil);
	}

	public function edit_dc(){
		$id = $this->input->get('id');
		$data = $this->asset_m->get_dc_by_id($id);
		echo json_encode($data);
	}

	public function update_dc(){
		$data = array(
			'desc_rectifier' => $this->input->post('txtDescRectifier'),
			'kondisi_rectifier' => $this->input->post('selectKondisiRectifier'),
			'desc_dcpdb' => $this->input->post('txtDescDcpdb'),
			'kondisi_dcpdb' => $this->input->post('selectKondisiDcpdb'),
			'desc_baterai' => $this->input->post('txtDescBaterai'),
			'kondisi_baterai' => $this->input->post('selectKondisiBaterai'),
		);

		if(!empty($_FILES['foto_rectifier']['name'])){
	    	$upload = $this->_do_upload_add_foto_rectifier();
	    	$data['file_rectifier'] = $upload;
	    }

	    if(!empty($_FILES['foto_dcpdb']['name'])){
	    	$upload = $this->_do_upload_add_foto_dcpdb();
	    	$data['file_dcpdb'] = $upload;
	    }

	    if(!empty($_FILES['foto_baterai']['name'])){
	    	$upload = $this->_do_upload_add_foto_baterai();
	    	$data['file_baterai'] = $upload;
	    }

	    // var_dump($data);
	    // die();

	    $hasil = $this->asset_m->update_dc(array('id' => $this->input->post('txtIdDc')), $data);
		echo json_encode($hasil);
	}

	public function edit_power(){
		$id = $this->input->get('id');
		$data = $this->asset_m->get_power_by_id($id);
		echo json_encode($data);
	}

	public function update_power(){
		$data = array(
			'desc_genset' => $this->input->post('txtDescGenset'),
			'kondisi_genset' => $this->input->post('selectKondisiGenset'),
			'desc_ats' => $this->input->post('txtDescAts'),
			'kondisi_ats' => $this->input->post('selectKondisiAts'),
			'desc_inverter' => $this->input->post('txtDescInverter'),
			'kondisi_inverter' => $this->input->post('selectKondisiInverter'),
			'desc_ups' => $this->input->post('txtDescUps'),
			'kondisi_ups' => $this->input->post('selectKondisiUps'),
		);

		if(!empty($_FILES['foto_genset']['name'])){
	    	$upload = $this->_do_upload_add_foto_genset();
	    	$data['file_genset'] = $upload;
	    }

	    if(!empty($_FILES['foto_Ats']['name'])){
	    	$upload = $this->_do_upload_add_foto_ats();
	    	$data['file_ats'] = $upload;
	    }

	    if(!empty($_FILES['foto_Inverter']['name'])){
	    	$upload = $this->_do_upload_add_foto_inverter();
	    	$data['file_inverter'] = $upload;
	    }

	    if(!empty($_FILES['foto_Ups']['name'])){
	    	$upload = $this->_do_upload_add_foto_ups();
	    	$data['file_ups'] = $upload;
	    }

	    $hasil = $this->asset_m->update_power(array('id' => $this->input->post('txtIdPower')), $data);
		echo json_encode($hasil);
	}

	public function edit_alarm(){
		$id = $this->input->get('id');
		$data = $this->asset_m->get_alarm_by_id($id);
		echo json_encode($data);
	}

	public function update_alarm(){
		$data = array(
			'desc_ac' => $this->input->post('txtDescAc'),
			'kondisi_ac' => $this->input->post('selectKondisiAc'),
			'desc_alarm' => $this->input->post('txtDescAlarm'),
			'kondisi_alarm' => $this->input->post('selectKondisiAlarm'),
		);

		if(!empty($_FILES['foto_Ac']['name'])){
	    	$upload = $this->_do_upload_add_foto_ac();
	    	$data['file_ac'] = $upload;
	    }

	    if(!empty($_FILES['foto_Alarm']['name'])){
	    	$upload = $this->_do_upload_add_foto_alarm();
	    	$data['file_alarm'] = $upload;
	    }

	    $hasil = $this->asset_m->update_alarm(array('id' => $this->input->post('txtIdAlarm')), $data);
		echo json_encode($hasil);
	}

	public function edit_odf(){
		$id = $this->input->get('id');
		$data = $this->asset_m->get_odf_by_id($id);
		echo json_encode($data);
	}

	public function update_odf(){
		$data = array(
			'desc_odf' => $this->input->post('txtDescOdf'),
			'kondisi_odf' => $this->input->post('selectKondisiOdf'),
		);

		if(!empty($_FILES['foto_Odf']['name'])){
	    	$upload = $this->_do_upload_add_foto_odf();
	    	$data['file_odf'] = $upload;
	    }

	    $hasil = $this->asset_m->update_odf(array('id' => $this->input->post('txtIdOdf')), $data);
		echo json_encode($hasil);
	}
}
