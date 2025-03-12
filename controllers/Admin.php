<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('adminmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {

                $content['view'] = 'admin_view';
                $this->load->view('templates/admintemplate', $content);
            } else {
                redirect('admissionform', 'refresh');
            }
        } else 
		{
            redirect('login', 'refresh');
        }
    }
public function ajax_list() {
        $list = $this->adminmodel->get_datatables();
        //var_dump($list);
        //exit;
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
           // $row[] = $no;
            $row[] = $customers->register_id;
            
$row[] = $customers->roll_no;
	$row[] = $customers->testmarks;
$row[] = $customers->full_name;
	        $row[] = $customers->email;            
	        $row[] = $customers->cnic;
            $row[] = $customers->username;
            $row[] = $customers->password;
		
	
         
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->adminmodel->count_all(),
            "recordsFiltered" => $this->adminmodel->count_filtered(),
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
    function logout() {
        $user_data = $this->session->all_userdata();

        foreach ($user_data as $key => $value) {
            $this->session->unset_userdata($key);
        }
        echo 'logout';
    }

}
