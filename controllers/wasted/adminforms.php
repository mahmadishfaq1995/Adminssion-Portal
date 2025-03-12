<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adminforms extends CI_Controller {

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {
                $content['view'] = 'admin_forms_view';
                $this->load->view('templates/admintemplate', $content);
            } else {
                redirect('admissionform', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

}
