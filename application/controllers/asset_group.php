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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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

	public function tambah_dc(){
	    $data = array(
	    	'desc_rectifier' => $this->input->post('txtDescRectifier'),
	    	'desc_dcpdb' => $this->input->post('txtDescDcpdb'),
	    	'kondisi_rectifier' => $this->input->post('selectKondisiRectifier'),
	    	'kondisi_dcpdb' => $this->input->post('selectKondisiDcpdb'),
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

	    $this->asset_m->tambah_dc_db($data);
		echo json_encode(array("status" => true));
	}

	private function _do_upload_add_foto_genset(){
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
	        $config['upload_path']          = 'dokumen/upload/';
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
}
