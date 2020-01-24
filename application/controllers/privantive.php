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
		// $pop = $this->uri->segment('3');
		$data['name'] = $this->privantive_m->get_name_pop_by_id($pop);
		$data['id'] = $pop;
		if ($pop == "pilih") {
			redirect(base_url("Privantive"));
		}
		else{
			$this->load->view('templates/header');
			$this->load->view('Privantive/pop', $data);
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
			$this->load->view('Privantive/pilih_asset', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function building()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/building', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function kwh_meter()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
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
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
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
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/dcpdb', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function RECTIFIER()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/rectifier', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function Baterai()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/baterai', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function genset()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/genset', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function ATS()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/ats',$data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}
	
	public function Inverter()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/inverter', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function UPS()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/ups', $data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function ENVIROMMENT()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/enviromment',$data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}

	public function ODF()
	{
		if($this->session->userdata('username')!=""){
			$data['id_pop'] = $this->uri->segment('4');
			$data['sub_kategori'] = $this->uri->segment('3');
      		$this->load->view('templates/header');
			$this->load->view('privantive/odf',$data);
			$this->load->view('templates/footer');
    	} else {
      		$this->load->view('pesan_error');
    	}
	}


	private function _do_upload_add_foto_o_1(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_o_sisi_1')) //upload and validate
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

	private function _do_upload_add_foto_o_2(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_o_sisi_2')) //upload and validate
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

	private function _do_upload_add_foto_o_3(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_o_sisi_3')) //upload and validate
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
	private function _do_upload_add_foto_o_4(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_o_sisi_4')) //upload and validate
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

	private function _do_upload_add_foto_i_1(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_i_sisi_1')) //upload and validate
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

	private function _do_upload_add_foto_i_2(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_i_sisi_2')) //upload and validate
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

	private function _do_upload_add_foto_i_3(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_i_sisi_3')) //upload and validate
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

	private function _do_upload_add_foto_i_4(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_i_sisi_4')) //upload and validate
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

	private function _do_upload_add_foto_atap(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_atap')) //upload and validate
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

	private function _do_upload_add_foto_lantai(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_lantai')) //upload and validate
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
			'lain_lain' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    if(!empty($_FILES['f_o_sisi_1']['name'])){
	    	$upload = $this->_do_upload_add_foto_o_1();
	    	$data['f_o_sisi_1'] = $upload;
	    }

	    if(!empty($_FILES['f_o_sisi_2']['name'])){
	    	$upload = $this->_do_upload_add_foto_o_2();
	    	$data['f_o_sisi_2'] = $upload;
	    }

	    if(!empty($_FILES['f_o_sisi_3']['name'])){
	    	$upload = $this->_do_upload_add_foto_o_3();
	    	$data['f_o_sisi_3'] = $upload;
	    }
	     if(!empty($_FILES['f_o_sisi_4']['name'])){
	    	$upload = $this->_do_upload_add_foto_o_4();
	    	$data['f_o_sisi_4'] = $upload;
	    }

	    if(!empty($_FILES['f_i_sisi_1']['name'])){
	    	$upload = $this->_do_upload_add_foto_i_1();
	    	$data['f_i_sisi_1'] = $upload;
	    }

	    if(!empty($_FILES['f_i_sisi_2']['name'])){
	    	$upload = $this->_do_upload_add_foto_i_2();
	    	$data['f_i_sisi_2'] = $upload;
	    }

	    if(!empty($_FILES['f_i_sisi_3']['name'])){
	    	$upload = $this->_do_upload_add_foto_i_3();
	    	$data['f_i_sisi_3'] = $upload;
	    }
	     if(!empty($_FILES['f_i_sisi_4']['name'])){
	    	$upload = $this->_do_upload_add_foto_i_4();
	    	$data['f_i_sisi_4'] = $upload;
	    }


	    if(!empty($_FILES['foto_atap']['name'])){
	    	$upload = $this->_do_upload_add_foto_atap();
	    	$data['foto_atap'] = $upload;
	    }
	     if(!empty($_FILES['foto_lantai']['name'])){
	    	$upload = $this->_do_upload_add_foto_lantai();
	    	$data['foto_lantai'] = $upload;
	    }

	    $this->privantive_m->tambah_building($data);
		echo json_encode(array("status" => true));
	}


	private function _do_upload_add_f_rack_1(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_rack_1')) //upload and validate
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

	private function _do_upload_add_f_rack_2(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_rack_2')) //upload and validate
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
	private function _do_upload_add_f_rack_3(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_rack_3')) //upload and validate
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
	private function _do_upload_add_f_rack_4(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_rack_4')) //upload and validate
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
	private function _do_upload_add_foto_rack_4(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_rack_4')) //upload and validate
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
	private function _do_upload_add_f_rack_5(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('f_rack_5')) //upload and validate
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

	public function tambah_rack(){
		$data = array(
			'lain_lain' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    if(!empty($_FILES['f_rack_1']['name'])){
	    	$upload = $this->_do_upload_add_f_rack_1();
	    	$data['f_rack_1'] = $upload;
	    }

	    if(!empty($_FILES['f_rack_2']['name'])){
	    	$upload = $this->_do_upload_add_f_rack_2();
	    	$data['f_rack_2'] = $upload;
	    }

	    if(!empty($_FILES['f_rack_3']['name'])){
	    	$upload = $this->_do_upload_add_f_rack_3();
	    	$data['f_rack_3'] = $upload;
	    }
	     if(!empty($_FILES['f_rack_4']['name'])){
	    	$upload = $this->_do_upload_add_foto_rack_4();
	    	$data['f_rack_4'] = $upload;
	    }

	    if(!empty($_FILES['f_rack_5']['name'])){
	    	$upload = $this->_do_upload_add_f_rack_5();
	    	$data['f_rack_5'] = $upload;
	    }

	    $this->privantive_m->tambah_rack($data);
		echo json_encode(array("status" => true));
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

	private function _do_upload_add_foto_satu(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_satu')) //upload and validate
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

	private function _do_upload_add_foto_single(){
	        $config['upload_path']          = 'assets/dokumen/';
	        $config['allowed_types']        = 'jpg|png|jpeg';
	        // $config['max_size']             = 10000; //set max size allowed in Kilobyte
	        // $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
	        $config['file_name']            = date("dmY_His"); //just milisecond timestamp fot unique name
	 
	        $this->load->library('upload', $config);
	 
	        if(!$this->upload->do_upload('foto_single')) //upload and validate
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

	    if(!empty($_FILES['foto_single']['name'])){
	    	$upload = $this->_do_upload_add_foto_single();
	    	$data['foto'] = $upload;
	    }

	    $this->privantive_m->tambah_foto_single_acpdb($data);
		echo json_encode(array("status" => true));
	}


	public function tambah_data_dcpbd(){
			$data = array(

			'kondisi_box' => $this->input->post('selectKondisiBox'),
			'kondsisi_terminal' => $this->input->post('koneksi_terminal_mcb'),
	    	'no_amarta' => $this->input->post('txtAmarta'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_data_dcpbd($data);
		echo json_encode(array("status" => true));
	}


	public function tambah_lain_lain_dc(){
			$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_lain_lain_dc($data);
		echo json_encode(array("status" => true));
	}



	public function tambah_temuan_dcpdb(){
			$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_temuan_dcpdb($data);
		echo json_encode(array("status" => true));

	}

	public function tambah_foto_single_dcpdb(){
		$data = array(
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    if(!empty($_FILES['foto_1']['name'])){
	    	$upload = $this->_do_upload_add_foto_1();
	    	$data['foto'] = $upload;
	    }

	    $this->privantive_m->tambah_foto_single_dcpdb($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_dcpdb_dokumentasi(){
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
	  

	    $this->privantive_m->tambah_dokumentasi_dcpdb($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_data_rectifier(){
		$data = array(
	    	'merk_tipe' => $this->input->post('txtMerk'),
	    	'sn' => $this->input->post('txtSN'),
	    	'no_amarta' => $this->input->post('txtAmarta'),
	    	'jumlah_slot' => $this->input->post('txtJumlahSlot'),
	    	'kondisi_fuse' => $this->input->post('txtKondisiFuse'),
	    	'tegangan' => $this->input->post('txtTegangan'),
	    	'beban' => $this->input->post('txtBeban'),
	    	'alarm' => $this->input->post('txtAlarm'),
	    	'kondisi_mcb_1' => $this->input->post('selectMCB1'),
	    	'kondisi_mcb_2' => $this->input->post('selectMCB2'),
	    	'm1_kapasitas' => $this->input->post('txtKapasitasM1'),
	    	'm1_ampere' => $this->input->post('txtAmpereM1'),
	    	'm1_sn' => $this->input->post('txtSN_M1'),
	    	'm2_kapasitas' => $this->input->post('txtKapasitasM2'),
	    	'm2_ampere' => $this->input->post('txtAmpereM2'),
	    	'm2_sn' => $this->input->post('txtSN_M2'),
	    	'm3_kapasitas' => $this->input->post('txtKapasitasM3'),
	    	'm3_ampere' => $this->input->post('txtAmpereM3'),
	    	'm3_sn' => $this->input->post('txtSN_M3'),
	    	'm4_kapasitas' => $this->input->post('txtKapasitasM4'),
	    	'm4_ampere' => $this->input->post('txtAmpereM4'),
	    	'm4_sn' => $this->input->post('txtSN_M4'),
	    	'm5_kapasitas' => $this->input->post('txtKapasitasM5'),
	    	'm5_ampere' => $this->input->post('txtAmpereM5'),
	    	'm5_sn' => $this->input->post('txtSN_M5'),
	    	'm6_kapasitas' => $this->input->post('txtKapasitasM6'),
	    	'm6_ampere' => $this->input->post('txtAmpereM6'),
	    	'm6_sn' => $this->input->post('txtSN_M6'),
	    	'm7_kapasitas' => $this->input->post('txtKapasitasM7'),
	    	'm7_ampere' => $this->input->post('txtAmpereM7'),
	    	'm7_sn' => $this->input->post('txtSN_M7'),
	    	'm8_kapasitas' => $this->input->post('txtKapasitasM8'),
	    	'm8_ampere' => $this->input->post('txtAmpereM8'),
	    	'm8_sn'=> $this->input->post('txtSN_M8'),
	    	'm9_kapasitas' => $this->input->post('txtKapasitasM9'),
	    	'm9_ampere' => $this->input->post('txtAmpereM9'),
	    	'm9_sn' => $this->input->post('txtSN_M9'),
	    	'kapasitas_1' => $this->input->post('txtKapasitasKap'),
	    	'kapasitas_2' => $this->input->post('txtKapasitasAmpere'),
	    	'beban_1' => $this->input->post('txtBebanKapasitas'),
	    	'beban_2' => $this->input->post('txtBebanAmpere'),
	    	'selisih_1' => $this->input->post('txtSelisihKapasitas'),
	    	'selisih_2' => $this->input->post('txtSelisihAmpere'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

		 $this->privantive_m->tambah_data_rectifier($data);
		echo json_encode(array("status" => true));

	}

	public function tambah_rectifier_lain_lain(){
		$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_rectifier_lain_lain($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_rectifier_temuan(){
		$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_rectifier_temuan($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_rectifier_foto_single(){
			$data = array(
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    if(!empty($_FILES['foto_1']['name'])){
	    	$upload = $this->_do_upload_add_foto_1();
	    	$data['foto'] = $upload;
	    }

	    $this->privantive_m->tambah_rectifier_foto_single($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_rectifier_dokumentasi(){
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

	    $this->privantive_m->tambah_rectifier_dokumentasi($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_data_battery(){
		$data = array(   	
	    	'diameter_kabel' => $this->input->post('selectDiameterKabel'),
	    	'kondisi_terminal'=> $this->input->post('selectKoneksiTerminal'),
	    	'kondisi_fisik'=> $this->input->post('selectKondisiFisik'),
	    	'no_amarta' => $this->input->post('txtAmarta'),
	    	'merk'=> $this->input->post('txtMerk'),
	    	'tipe'=> $this->input->post('txtTipe'),
	    	'kapasitas'=> $this->input->post('txtKapasitas'),
	    	'unit'=> $this->input->post('txtUnit'),
	    	'sn'=> $this->input->post('txtSN'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	     $this->privantive_m->tambah_data_battery($data);
		echo json_encode(array("status" => true));
	}


	public function tambah_battery_lain_lain(){
			$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_data_battery_lain($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_battery_temuan(){
				$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_data_battery_temuan($data);
		echo json_encode(array("status" => true));
	}


	public function tambah_battery_dokumentasi(){
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

	    $this->privantive_m->tambah_data_battery_dokumentasi($data);
		echo json_encode(array("status" => true));
	}



	public function tambah_data_fisik_genset(){
		$data = array(
			'merk_generator' => $this->input->post('txtGen'),
			'kapasitas' => $this->input->post('txtKapasitas'),
			'tipe' => $this->input->post('txtTipe'),
			'fasa' => $this->input->post('txtFasa'),
			's_n' => $this->input->post('txtSN'),
			'tahun_aset' => $this->input->post('txtTahunAset'),
			'kebersihan' => $this->input->post('txtKebgenset'),
			'merk_engine' => $this->input->post('txtMerkengine'),
			'tipe_engine' => $this->input->post('txTipeEngine'),
			's_n_engine' => $this->input->post('txtSNengine'),
			'rpm' => $this->input->post('txtRPM'),
			'no_amarta' => $this->input->post('txtAmarta'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );


	     $this->privantive_m->tambah_data_fisik_genset($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_data_genset_inspeksi(){
		$data = array(
			'fuel_level' => $this->input->post('txtFlevel'),
			'h_meter' => $this->input->post('txtHourMeter'),
			't_aki' => $this->input->post('txtTeganganAki'),
			'air_radiator' => $this->input->post('selectAirRadiator'),
			'kapasitas_tangki' => $this->input->post('txtKapTangki'),
			'id_pop' => $this->input->post('txtIdPOP'),
		);

		$this->privantive_m->tambah_data_genset_inspeksi($data);
		echo json_encode(array("status" => true ));
	}


	public function tambah_data_beban_nol(){
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

	    $this->privantive_m->tambah_data_beban_nol($data);
		echo json_encode(array("status" => true));
	}
	
	public function tambah_data_beban_penuh(){
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

	    $this->privantive_m->tambah_data_beban_penuh($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_genset_lain_lain(){
			$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_genset_lain_lain($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_genset_temuan(){
			$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_genset_temuan($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_genset_dokumentasi(){
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

	    $this->privantive_m->tambah_genset_dokumentasi($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_foto_single_ats(){
		$data = array(
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    if(!empty($_FILES['foto_1']['name'])){
	    	$upload = $this->_do_upload_add_foto_1();
	    	$data['foto'] = $upload;
	    }

	    $this->privantive_m->tambah_ats_foto_single($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_data_ats_ats(){
		$data = array(
			'merk' => $this->input->post('txtMerkATS'),
			'seri' => $this->input->post('txtSeri'),
			'sn' => $this->input->post('txtSN'),
			'tahun_aset' => $this->input->post('txtTahunAset'),
			'no_amarta' => $this->input->post('txtAmarta'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_data_ats_ats($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_data_ats_inspeksi(){
		$data = array(
			'failover_test' => $this->input->post('selectFailOver'),
			'mode_ats' => $this->input->post('txtModeATS'),
			'alarm_panel' => $this->input->post('txtAlarm'),
			'catatan' => $this->input->post('txtCatatanFail'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_data_ats_inspeksi($data);
		echo json_encode(array("status" => true));
	}


	public function tambah_ats_panel_sebelum_pm(){
		$data = array(
			'pln' => $this->input->post('txtPLN'),
			'input_pln' => $this->input->post('txtInputPLN'),
			'input_genset' => $this->input->post('txtInputGenset'),
			'genset' => $this->input->post('txtGenset'),
			'genset_off' => $this->input->post('txtGensetOFF'),
			'manual' => $this->input->post('txtManual'),
			'tanpa_pln' => $this->input->post('txtTanpaPLN'),
			'otomatis' => $this->input->post('txtOtomatis'),
			'alarm_off' => $this->input->post('txtAlarmOFF'),
			'genset_on' => $this->input->post('txtGensetON'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );


	     $this->privantive_m->tambah_ats_panel_sebelum_pm($data);
		echo json_encode(array("status" => true));

	}	


	public function tambah_ats_panel_sesudah_pm(){
		$data = array(
			'pln' => $this->input->post('txtPLN'),
			'input_pln' => $this->input->post('txtInputPLN'),
			'input_genset' => $this->input->post('txtInputGenset'),
			'genset' => $this->input->post('txtGenset'),
			'genset_off' => $this->input->post('txtGensetOFF'),
			'manual' => $this->input->post('txtManual'),
			'tanpa_pln' => $this->input->post('txtTanpaPLN'),
			'otomatis' => $this->input->post('txtOtomatis'),
			'alarm_off' => $this->input->post('txtAlarmOFF'),
			'genset_on' => $this->input->post('txtGensetON'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );


	     $this->privantive_m->tambah_ats_panel_sesudah_pm($data);
		echo json_encode(array("status" => true));	
	}

	public function tambah_ats_kontrol_before(){
			$data = array(
			'switch_c_1' => $this->input->post('txtSwict1'),
			'switch_c_2' => $this->input->post('txtSwict2'),
			'switch_c_3' => $this->input->post('txtSwict3'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

		$this->privantive_m->tambah_ats_kontrol_before($data);
		echo json_encode(array("status" => true));

	}


	public function tambah_ats_kontrol_after(){
				$data = array(
			'switch_c_1' => $this->input->post('txtSwict1'),
			'switch_c_2' => $this->input->post('txtSwict2'),
			'switch_c_3' => $this->input->post('txtSwict3'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

		$this->privantive_m->tambah_ats_kontrol_after($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_ats_lain_lain(){
			$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_ats_lain_lain($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_ats_temuan(){
		$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_ats_temuan($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_ats_dokumentasi(){
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

	    $this->privantive_m->tambah_ats_dokumentasi($data);
		echo json_encode(array("status" => true));
	}	


	public function tambah_data_inverter(){
		$data = array(
			'merk_tipe' => $this->input->post('txtMerknTipe'),
			's_n' => $this->input->post('txtSN'),
			'no_amarta' => $this->input->post('txtAmarta'),
			't_output' => $this->input->post('txtTeganganOutput'),
			'kapasitas' => $this->input->post('txtKapasitas'),
			'beban' => $this->input->post('txtBeban'),
			'utilisasi' => $this->input->post('txtUtilisasi'),
			'indikasi_alarm' => $this->input->post('txtIndikasiAlarm'),		
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );
		$this->privantive_m->tambah_data_inverter($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_inverter_lain_lain(){
			$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_inverter_lain_lain($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_inverter_temuan(){
			$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_inverter_temuan($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_inverter_dokumentasi(){
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

	    $this->privantive_m->tambah_inverter_dokumentasi($data);
		echo json_encode(array("status" => true));
	}



	public function tambah_data_ups(){
		$data = array(
			'merk_tipe' => $this->input->post('txtMerknTipe'),
			's_n' => $this->input->post('txtSN'),
			'no_amarta' => $this->input->post('txtAmarta'),
			't_output' => $this->input->post('txtTeganganOutput'),
			'kapasitas' => $this->input->post('txtKapasitas'),
			'beban' => $this->input->post('txtBeban'),
			'utilisasi' => $this->input->post('txtUtilisasi'),
			'lain_lain' => $this->input->post('txtLainlain'),
			'temuan' => $this->input->post('txtTemuan'),		
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );
		$this->privantive_m->tambah_data_ups($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_ups_lain_lain(){
				$data = array(
	    	'keterangan' => $this->input->post('txtLainlain'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_ups_lain_lain($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_ups_temuan(){
		$data = array(
	    	'keterangan' => $this->input->post('txtTemuan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_ups_temuan($data);
		echo json_encode(array("status" => true));
	}


	public function tambah_ups_dokumentasi(){
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

	    $this->privantive_m->tambah_ups_dokumentasi($data);
		echo json_encode(array("status" => true));
	}


	public function tambah_data_environment(){
		$data = array(
	    	'merk_ac1' => $this->input->post('txtMerk_ac1'),
	    	'merk_ac2' => $this->input->post('txtMerk_ac2'),
	    	'merk_ac3' => $this->input->post('txtMerk_ac3'),
	    	'tipe_ac1' => $this->input->post('txtTipe_ac1'),
	    	'tipe_ac2' => $this->input->post('txtTipe_ac2'),
	    	'tipe_ac3' => $this->input->post('txtTipe_ac3'),
	    	'kap_ac1' => $this->input->post('txtKap_ac1'),
	    	'kap_ac2' => $this->input->post('txtKap_ac2'),
	    	'kap_ac3' => $this->input->post('txtKap_ac3'),
	    	'sn_o_ac1' => $this->input->post('txtSN_o_ac1'),
	    	'sn_o_ac2' => $this->input->post('txtSN_o_ac2'),
	    	'sn_o_ac3' => $this->input->post('txtSN_o_ac3'),
	    	'no_amarta_ac1' => $this->input->post('txtAmarta_ac1'),
	    	'no_amarta_ac2' => $this->input->post('txtAmarta_ac2'),
	    	'no_amarta_ac3' => $this->input->post('txtAmarta_ac3'),
	    	'sn_i_ac1' => $this->input->post('txtSN_i_ac1'),
	    	'sn_i_ac2' => $this->input->post('txtSN_i_ac2'),
	    	'sn_i_ac3' => $this->input->post('txtSN_i_ac3'),
	    	'no_amarta2_ac1' => $this->input->post('txtAmarta2_ac1'),
	    	'no_amarta2_ac2' => $this->input->post('txtAmarta2_ac2'),
	    	'no_amarta2_ac3' => $this->input->post('txtAmarta2_ac3'),
	    	'suhu_ac_ac1' => $this->input->post('txtSuhu_ac_ac1'),
	    	'suhu_ac_ac2' => $this->input->post('txtSuhu_ac_ac2'),
	    	'suhu_ac_ac3' => $this->input->post('txtSuhu_ac_ac3'),
	    	'fungsi_ac1' => $this->input->post('selectFungsi_ac1'),
	    	'fungsi_ac2' => $this->input->post('selectFungsi_ac2'),
	    	'fungsi_ac3' => $this->input->post('selectFungsi_ac3'),
	    	'suhu_ruang' => $this->input->post('txtSuhuRuangan'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    $this->privantive_m->tambah_data_environment($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_data_eksternal_alarm(){
		$data= array(
			'merk' => $this->input->post('txtMerk'),
			'tipe' => $this->input->post('txtTipe'),
			'sn' => $this->input->post('txtSN'),
			'no_amarta' => $this->input->post('txtAmarta'),
			'door_fungsi' => $this->input->post('selectDoorSensor'),
			'door_catatan' => $this->input->post('txtCatatan_door'),
			'main_fungsi' => $this->input->post('selectFail'),
			'main_catatan' => $this->input->post('txtCatatan_fail'),
			'temp_fungsi' => $this->input->post('selectTemp'),
			'temp_catatan' => $this->input->post('txtCatatan_temp'),
			'smoke_fungsi' => $this->input->post('selectSmoke'),
			'smoke_catatan' => $this->input->post('txtCatatan_smoke'),
			'rectifier_fungsi' => $this->input->post('selectRectifier'),
			'rectifier_catatan' => $this->input->post('txtCatatan_rectifier'),
			'genset_fungsi' => $this->input->post('selectGenset'),
			'genset_catatan' => $this->input->post('txtCatatan_genset'),
			'fuel_fungsi' => $this->input->post('selectFuel'),
			'fuel_catatan' => $this->input->post('txtCatatan_fuel'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
		);
		 $this->privantive_m->tambah_data_eksternal_alarm($data);
		echo json_encode(array("status" => true));
	}

	public function tambah_env_dokumentasi(){
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

	    $this->privantive_m->tambah_env_dokumentasi($data);
		echo json_encode(array("status" => true));
	}


	public function tambah_data_odf(){
		$data = array(
	    	'no_amarta' => $this->input->post('txtAmarta'),
	    	'label_kabel' => $this->input->post('txtLabelKabel'),
	    	'kap_core' => $this->input->post('selectKapasitasCore'),
	    	'tipe_konektor' => $this->input->post('selectTipeKonektor'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	   		$this->privantive_m->tambah_data_odf($data);
			echo json_encode(array("status" => true));

	}

	public function tambah_inputan_lain(){
		$data = array(
	    	'core' => $this->input->post('txtCore'),
	    	'jarak_otdr' => $this->input->post('txtOTDR'),
	    	'label_pelanggan' => $this->input->post('txtLPelanggan'),
	    	'koneksi' => $this->input->post('txtKoneksi'),
	    	'id_pop' => $this->input->post('txtIdPOP'),
	    );

	    	$this->privantive_m->tambah_inputan_lain($data);
			echo json_encode(array("status" => true));

	}

	public function pop1($id_pop)
	{
		$data['name'] = $this->privantive_m->get_name_pop_by_id1($id_pop);
		$data['id'] = $id_pop;
		if ($id_pop == "pilih") {
			redirect(base_url("Privantive"));
		}
		else{
			$this->load->view('templates/header');
			$this->load->view('Privantive/pop', $data);
			$this->load->view('templates/footer');
		}
	}
}
