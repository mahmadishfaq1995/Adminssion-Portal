<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class openpdf extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index($name) {
        $content['pdf_name'] = $name;
        $content['view'] = 'openpdf_view';
        $this->load->view('templates/template', $content);
    }

}
