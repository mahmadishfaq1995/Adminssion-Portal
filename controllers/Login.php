<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('loginmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin')
                redirect('Verifychallan', 'refresh');
            else
                redirect('admissionfor', 'refresh');
        }
        $content['view'] = 'login_view';

        $this->load->view('templates/template', $content);
    }

    function verify_login() {
        $username = $this->input->get('user');
        $password = $this->input->get('pass');
        $result_set = $this->loginmodel->verify_login($username, $password);
        //print_r( $result_set[0]->register_id);exit;
        if (!empty($result_set)) {
            $arr = array(
                'logged_in' => 'yes',
                'id' => $result_set[0]->register_id,
				'roll_no' => $result_set[0]->roll_no,
                'name' => $result_set[0]->full_name,
                'email' => $result_set[0]->email,
                'gender' => $result_set[0]->gender,
                'cnic' => $result_set[0]->cnic,
                'access_rights' => $result_set[0]->access_right,
                'username' => $result_set[0]->username,
                'pinfo_status' => $result_set[0]->pinfo_status,
                'challan_verify' => $result_set[0]->challan_verify_status,
                'form_status' => $result_set[0]->form_status,
				'testmarks' => $result_set[0]->testmarks
            );

            $this->session->set_userdata($arr);
            if ($this->session->userdata('access_rights') == 'admin') {
                echo 'Verifychallan';
                exit;
            }
            echo 'admissionfor';
            exit;
        } else {
            echo 'no match';
            exit;
        }
    }

}
