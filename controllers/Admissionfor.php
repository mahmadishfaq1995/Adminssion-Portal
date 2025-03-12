<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admissionfor extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admissionformodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('form_status') == '1')
                redirect('printchallan', 'refresh');
            else if ($this->session->userdata('pinfo_status') == '1')
                redirect('admissionacadamic', 'refresh');
        }
        else {
            redirect('Login', 'refresh');
        }
        $content['view'] = 'admission_for_view';

        $this->load->view('templates/template', $content);
    }

    function store_data() {
        $user_id = $this->session->userdata('id');
		$phone = $this->input->get('phoneno');
        $data = array(
            'name' => $this->input->get('name'),
            'dob' => date('Y-m-d', strtotime(str_replace('-', '/', $this->input->get('dob')))),
            'gender' => $this->input->get('gender'),
            'cnic' => $this->input->get('cnic'),
            'fname' => $this->input->get('fname'),
            'fcnic' => $this->input->get('fcnic'),
            'fincome' => $this->input->get('fincome'),
            'mobile_no' => $this->input->get('mobileno'),
            'email' => $this->input->get('email'),
            'address' => $this->input->get('address'),
            'relation' => $this->input->get('relation'),
            'district' => $this->input->get('district'),
            'pic' => $this->session->userdata('id') . '.jpg'
        );
       
        if (array_search("", $data) == false) {
			//echo 'test';exit;
			$data['phone_no'] = $phone;
            $result_set = $this->admissionformodel->insert_data($data, $user_id);
            $this->session->set_userdata('pinfo_status', '1');
            echo 'done';
            exit;
        } else
            echo 'Not done';

        exit;
    }

    function store_acadamic_data() {
        $user_id = $this->session->userdata('id');
        $data = array(
            'myear' => $this->input->get('myear'),
            'mroll' => $this->input->get('mroll'),
            'mgrade' => $this->input->get('mgrade'),
            'mtotal' => $this->input->get('mtotal'),
            'mmarks' => $this->input->get('mmarks'),
            'mmajor' => $this->input->get('mmajor'),
            'mboard' => $this->input->get('mboard'),
            'iyear1' => $this->input->get('iyear1'),
            'iroll1' => $this->input->get('iroll1'),
            'itotal1' => $this->input->get('itotal1'),
            'imarks1' => $this->input->get('imarks1'),
            'imajor1' => $this->input->get('imajor1'),
            'igrade1' => $this->input->get('igrade1'),
            'iboard1' => $this->input->get('iboard1'),
            'iyear2' => $this->input->get('iyear2'),
            'iroll2' => $this->input->get('iroll2'),
            'itotal2' => $this->input->get('itotal2'),
            'imarks2' => $this->input->get('imarks2'),
            'igrade2' => $this->input->get('igrade2'),
            'imajor2' => $this->input->get('imajor2'),
            'iboard2' => $this->input->get('iboard2')
        );
        if (array_search("", $data) == false) {
            $result_set = $this->admissionformodel->insert_acadamic_data($data, $user_id);
            echo 'done';
            exit;
        } else
            echo 'Not done';

        exit;
    }

    function store_pic() {
        if (0 < $_FILES['file']['error']) {
            echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        } else {
            move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/DCS/img/user_images/' . $this->session->userdata('id') . '.jpg');
        }
    }

}