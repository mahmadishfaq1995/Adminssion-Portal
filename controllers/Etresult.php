<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Etresult extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('etresultmodel');
        $this->load->library('session');
    }

    public function index() {
        $data = $this->input->post('data');
        if ($data != NULL) {
            $result_set = $this->etresultmodel->fetch_result($data);
            if (count($result_set)) {
                $content['name'] = $result_set[0]->full_name;
                $content['roll_no'] = $result_set[0]->roll_no;
                $content['cnic'] = $result_set[0]->cnic;
                $content['marks'] = $result_set[0]->testmarks;
            }
        }

        $content['view'] = 'etresult_view';

        $this->load->view('templates/template', $content);
    }

    public function fscresult() {
        $cnic = $this->input->post('data');
        $roll_no = $this->input->post('data1');
        $data['cnic'] = $this->input->post('cnic');
        $data['testmarks'] = $this->input->post('testmarks');
        $data['interroll'] = $this->input->post('interroll');
        $data['intermarks'] = $this->input->post('intermarks');
        $data['interyear'] = $this->input->post('interyear');
        $data['interboard'] = $this->input->post('interboard');
        //$data['hafiz'] = $this->input->post('hafiz');
        $data['matric'] = $this->input->post('matric');

        if ($data['interroll'] != NULL && $data['intermarks'] != NULL) {

            $agg = $this->etresultmodel->save_fscresult($data);
            if ($agg == "invalid")
                $content['notdone'] = $agg;
            else
                $content['done'] = $agg;
        } else if ($cnic != NULL && $roll_no != NULL) {
            $result_set = $this->etresultmodel->fscresult($cnic, $roll_no);
            if (count($result_set)) {
                $content['name'] = $result_set[0]->full_name;
                $content['roll_no'] = $roll_no;
                $content['cnic'] = $cnic;
                $content['marks'] = $result_set[0]->testmarks;
                $content['major'] = $result_set[0]->major_inter1;
                $content['board'] = $result_set[0]->board_inter1;
                $content['matric'] = $result_set[0]->marks_matric;
                $content['rollinter'] = $result_set[0]->rollno_inter2;
                $content['hide'] = "true";
            }
        }
        $content['view'] = 'fscresult_view';

        $this->load->view('templates/template', $content);
    }

}
