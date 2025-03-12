<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class roadmap extends CI_Controller {

    public function index() {
        $content['view'] = 'roadmap_view';
        $this->load->view('templates/template', $content);
    }

}
