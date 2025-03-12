<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cprint extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cprintmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('pinfo_status') == '1') {
                if ($this->session->userdata('form_status') == '1') {
                    $result_set = $this->cprintmodel->information($this->session->userdata('id'));

                    $content = array();
                    $content['father_name'] = $result_set[0]->father_name;
                    $content['district'] = $result_set[0]->district;
                    $this->load->view('cprint_view', $content);
                } else {
                    redirect('admissionacadamic', 'refresh');
                }
            } else {
                redirect('admissionfor', 'refresh');
            }
            if ($this->session->userdata('access_rights') == 'admin')
                redirect('admin', 'refresh');
        }
        else {
            redirect('login', 'refresh');
        }
    }

}
