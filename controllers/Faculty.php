<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {

    public function index() {
        $content['view'] = 'faculty_view';
        $this->load->view('templates/template', $content);
    }

}
