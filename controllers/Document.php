<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class document extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $content['view'] = 'document_view';
        $this->load->view('templates/template', $content);
    }

}
