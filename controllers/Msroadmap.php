<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class msroadmap extends CI_Controller {

    public function index() {
        $content['view'] = 'msroadmap_view';
        $this->load->view('templates/template', $content);
    }

}
