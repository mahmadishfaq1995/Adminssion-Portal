<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class fprint extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('fprintmodel');
        $this->load->library('session');
    }

    public function index($id) {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('pinfo_status') == '1') {
                if ($this->session->userdata('form_status') == '1') {
                    $result = $this->fprintmodel->getformdata($id);

                    $data = array();
                    foreach ($result as $key => $val) {
                        $data[$key] = $val;
                    }
                    $content['data'] = $data;

                    $this->load->view('fprint_view', $content);
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

    public function index1($id) {
        if ($this->session->userdata('logged_in')) {

            $result = $this->fprintmodel->getformdata($id);

            $data = array();
            foreach ($result as $key => $val) {
                $data[$key] = $val;
            }
            $content['data'] = $data;

            $this->load->view('fprint_view', $content);
        } else {
            redirect('login', 'refresh');
        }
    }

}
