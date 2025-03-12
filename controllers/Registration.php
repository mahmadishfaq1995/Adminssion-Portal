<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('registrationmodel');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin')
                redirect('admin', 'refresh');
            else
                redirect('admissionfor', 'refresh');
        }
        $content['view'] = 'registration_view';
        $this->load->view('templates/template', $content);
    }

    function register_user() {
        $username = $this->input->get('user');
        $password = $this->input->get('pass');
        $my_name = $this->input->get('my_name');
        $address = $this->input->get('address');
        $email = $this->input->get('email');
        $gender = $this->input->get('gender');
        
        $result_set = $this->registrationmodel->register_user($username, $password, $my_name, $address, $email, $gender);

        echo $result_set;
        exit;
    }

}
