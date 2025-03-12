<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adminresult extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('adminresultmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {

                $content['view'] = 'admin_result_view';
                $this->load->view('templates/admintemplate', $content);
            } else {
                redirect('admissionform', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    public function ajax_list() {
        $list = $this->adminresultmodel->get_datatables();
        //var_dump($list);
        //exit;
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->register_id;
            $row[] = $customers->name;
            $row[] = $customers->cnic;
            $row[] = $customers->marks_obtained;
            $row[] = $customers->matric_marks;
            $row[] = $customers->inter1_marks + $customers->inter2_marks;
            $row[] = $customers->result_percentage . '%';

            if ($customers->result_status == 'none')
                $row[] = 'N/A';
            else
                $row[] = $customers->result_status;

            $row[] = '<a class="btn btn-md btn-primary" href="javascript:void(0)" title="Print" onclick="enter_result(' . $customers->register_id . ')"> <span class="fa fa-edit"></span></a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->adminresultmodel->count_all(),
            "recordsFiltered" => $this->adminresultmodel->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    function fetch_result() {
        $id = $this->input->post('id');
        $list = $this->adminresultmodel->fetch_result($id);
        $output = "";

        $output .= '<div class = "form_main">';
        $output .= '<h4 class = "heading"><strong>Enter </strong> Result <span></span></h4>';
        $output .= '<div class = "form">';
        $output .= '<form action = "contact_send_mail.php" method = "post" id = "contactFrm" name = "contactFrm">';
        $output .= '<h4 class = "heading">Marks Obtained</h4><input type = "text" required = "" placeholder = "" value = "' . $list[0]->marks_obtained . '" id="marks_obtained" onKeyPress="update_percent();"  class = "txt">';
        $output .= '<h4 class = "heading">Total Marks</h4><input type = "text" required = "" placeholder = "" value = "' . $list[0]->total_marks . '" id="total_marks" class = "txt" disabled>';
        $output .= '<h4 class = "heading">Percentage (%)</h4><input type = "text" required = "" placeholder = "" value = "' . $list[0]->result_percentage . '" id="result_percentage" class = "txt" disabled>';

        if ($list[0]->result_status == 'none')
            $output .= '<h4 class = "heading">Status</h4><select class="txts" id="result_status"><option value="none">N/A</option><option value="pass">Pass</option><option value="fail">Fail</option></select>';
        else if ($list[0]->result_status == 'fail')
            $output .= '<h4 class = "heading">Status</h4><select class="txts" id="result_status"><option value="fail">Fail</option><option value="pass">Pass</option><option value="none">N/A</option></select>';
        else
            $output .= '<h4 class = "heading">Status</h4><select class="txts" id="result_status"><option value="pass">Pass</option><option value="none">N/A</option><option value="fail">Fail</option></select>';

        $output .= '<input type = "button" value = "Save" name = "submit" id="submitbtn" onclick="save_results(' . $list[0]->result_id . ');" class = "txt2">';
        $output .= '</form>';
        $output .= '</div>';
        $output .= '</div>';
        echo $output;
        exit;
    }

    function save_result() {
        $result_id = $this->input->post('id');
        $obtained = $this->input->post('marks_obtained');
        $total = $this->input->post('total_marks');
        $status = $this->input->post('result_status');
        $percentage = $this->input->post('percentage');
        $result_set = $this->adminresultmodel->save_results($result_id, $obtained, $total, $status, $percentage);
        echo 'done';
        exit;
    }

}
