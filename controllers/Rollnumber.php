<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rollnumber extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Rollnumbermodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {
                $result_set = $this->Rollnumbermodel->rooms_detail();
                $rooms = "";
                $counter = 1;
                foreach ($result_set as $val) {
                    $rooms .= "<tr>";
                    $rooms .= "<td >" . $counter++ . "</td>";
                    $rooms .= "<td >" . $val->room . "</td>";
                    $rooms .= "<td>" . $val->block . "</td>";
                    $rooms .= "<td>" . $val->building . "</td>";
                    $rooms .= '<td><p data-placement="top" data-toggle="tooltip" title="Sheets"><a href="' . base_url("adminsheets/index/" . $val->rollnumberfrom . '/' . $val->rollnumberto . '/' . $val->room . '/' . $val->building) . '" class="btn btn-primary btn-md" data-title="Edit" ><span class="fa fa-file-o"></span> Generate Sheet</a></p></td>';

                    $rooms .= "</tr>";
                }
                $content['rooms'] = $rooms;
                $content['view'] = 'rollnumber_view';
                $this->load->view('templates/admintemplate', $content);
            } else {

                redirect('admissionform', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

}
