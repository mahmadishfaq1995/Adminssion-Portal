<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admissions extends CI_Controller {

    public function index() {
        $content['view'] = 'admission_view';
        $this->load->view('templates/template', $content);
    }

}
