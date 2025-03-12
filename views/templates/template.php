<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/header');

$this->load->view('templates/navigation');

$this->load->view($view);

//$this->load->view('templates/modals');

$this->load->view('templates/footer');