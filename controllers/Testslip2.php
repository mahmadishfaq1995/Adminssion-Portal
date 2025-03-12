<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testslip2 extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('testslipmodel');
        $this->load->library('session');
    }

    public function index() {
        $result_set = $this->testslipmodel2->information($cnic));

        $content = array();
        $content = array();
        $content['name'] = $result_set[0]->name;
		$content['email'] = $result_set[0]->email;
		$content['cnic'] = $result_set[0]->cnic;
		$content['father_name'] = $result_set[0]->father_name;
        $content['district'] = $result_set[0]->district;
        $content['image'] = $result_set[0]->image;
        $content['address'] = $result_set[0]->address;
        $content['roll_no'] = $result_set[0]->roll_no;
        $content['gender'] = $result_set[0]->gender;
       
	   $result = $this->testslipmodel->informatio_seating($result_set[0]->roll_no);
	    $content['testcenter'] = $result[0]->room;
		$content['block'] = $result[0]->block;
		$content['building'] = $result[0]->building;
		$content['entrance'] = $result[0]->entry;
		$content['batch'] = $result[0]->batch;
		$content['starttime'] = $result[0]->starttime;
		$content['reportingtime'] = $result[0]->reportingtime;
        
        $this->load->view('testslip_view', $content);
    }

}
