<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mscriteria extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $content['view'] = 'mscriteria_view';
        $this->load->view('templates/template', $content);
    }

}
