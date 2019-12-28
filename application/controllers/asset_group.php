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
}
