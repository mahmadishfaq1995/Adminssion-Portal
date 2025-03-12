<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsheets extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Adminsheetsmodel');
        $this->load->library('session');
    }

    public function index($from, $to, $room, $building) {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {
                $result_set = $this->Adminsheetsmodel->users_detail($from, $to);
                $rooms = "";
                $counter = 1;
                foreach ($result_set as $val) {
                    $rooms .= "<tr style='align:center;'>";
                    $rooms .= "<td ><img src=" . base_url('img/user_images/' . $val->image) . " style='width: 35%; height: 25%'></td>";
                    $rooms .= "<td style='font-size:16px;'>" . $val->roll_no . "</td>";
                    $rooms .= "<td style='font-size:16px;'>" . $val->name . "</td>";
                    $rooms .= "<td style='font-size:16px;'>" . $val->father_name . "</td>";
                    $rooms .= "<td style='font-size:16px;'></td>";
                    $rooms .= "</tr>";
                }
                $content['rooms'] = $rooms;
                $content['room'] = $room;
                $content['building'] = $building;
                $content['rollto'] = $to;
                $content['rollfrom'] = $from;
                $this->load->view('adminsheets_view', $content);
            } else {

                redirect('admissionform', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

}
