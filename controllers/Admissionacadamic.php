<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admissionacadamic extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admissionacadamicmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('form_status') == '1')
                redirect('printchallan', 'refresh');
            else if ($this->session->userdata('pinfo_status') == '0')
                redirect('admissionfor', 'refresh');
        }
        else {
            redirect('Login', 'refresh');
        }
        $content['view'] = 'admission_acadamic_view';

        $this->load->view('templates/template', $content);
    }

    function store_acadamic_data() {
        $user_id = $this->session->userdata('id');
		$iyear1 = $this->input->get('iyear1');
            $iroll1 = $this->input->get('iroll1');
            $itotal1 = $this->input->get('itotal1');
            $imarks1 = $this->input->get('imarks1');
            $imajor1 = $this->input->get('imajor1');
            $iboard1 = $this->input->get('iboard1');
			$imarks2 = $this->input->get('imarks2');
			$itotal2 = $this->input->get('itotal2');
        $data = array(
            'myear' => $this->input->get('myear'),
            'mroll' => $this->input->get('mroll'),
            'mtotal' => $this->input->get('mtotal'),
            'mmarks' => $this->input->get('mmarks'),
            'mboard' => $this->input->get('mboard'),
            
            'iyear2' => $this->input->get('iyear2'),
            'iroll2' => $this->input->get('iroll2'),
            'imajor2' => $this->input->get('imajor2'),
            'iboard2' => $this->input->get('iboard2')
        );
        if (array_search("", $data) == false) {
		if($iyear1=="")
				$data['iyear1']='';
		else
			$data['iyear1']=$iyear1;
		if($iroll1 =="")
			$data['iroll1']='';
		else
            $data['iroll1']=$iroll1;
         if($itotal1=="")
			$data['itotal1']='';
		else
            $data['itotal1']=$itotal1;
		if($imarks1=="")
			$data['imarks1']='';
		else
            $data['imarks1']=$imarks1; 
		 if($itotal2=="")
			$data['itotal2']='';
		else
            $data['itotal2']=$itotal2;
		if($imarks2=="")
			$data['imarks2']='';
		else
            $data['imarks2']=$imarks2; 
		if($imajor1=="")
		    $data['imajor1']='';
		else
			$data['imajor1']=$imajor1; 
		if($iboard1=="") 
            $data['iboard1']='';
		else 
            $data['iboard1']=$iboard1;
		//echo $iyear1;
		//exit;
			//echo $data;exit;
            $result_set = $this->admissionacadamicmodel->insert_acadamic_data($data, $user_id);
            $this->session->set_userdata('form_status', '1');
            echo 'done';
            exit;
        } else
            echo 'Not done';

        exit;
    }

}
