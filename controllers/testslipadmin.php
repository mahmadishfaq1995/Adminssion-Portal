<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verifychallan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('verifychallanmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {

                $content['view'] = 'verifychallan_view';
                $this->load->view('templates/admintemplate', $content);
            } else {
                redirect('admissionform', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    function testslip() {
        $cnic = $this->input->post('cnic');
       // $verify_type = $this->input->post('verify_type');
        //$result = $this->verifychallanmodel->verify_chalan($cnic, $verify_type);
         $result = $this->Testslipmodel2->Testslip2($cnic);
		echo $result;
        exit;
    }

}
