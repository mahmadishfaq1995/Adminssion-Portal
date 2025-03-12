<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adminforms1 extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('adminformmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {

                $content['view'] = 'admin_forms_view1';
                $this->load->view('templates/admintemplate', $content);
            } else {
                redirect('admissionform', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    public function ajax_list() {
        $list = $this->adminformmodel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->register_id;
            $row[] = $customers->name;
            $row[] = $customers->dob;
            $row[] = $customers->gender;
            $row[] = $customers->cnic;
            $row[] = $customers->father_name;
            $row[] = $customers->father_cnic;
            $row[] = '<a class="btn btn-md btn-primary" href="javascript:void(0)" title="Edit" onclick="view_person(' . $customers->register_id . ')"> <span class="fa fa-eye"></span></a>';
            $row[] = '<a class="btn btn-md btn-danger " href="javascript:void(0)" title="Hapus" onclick="edit_person(' . $customers->register_id . ')"> <span class="fa fa-pencil"></span></a>';

            $row[] = '<a class="btn btn-md btn-primary" href="javascript:void(0)" title="Print" onclick="more_options(' . $customers->register_id . ')"> <span class="fa fa-plus-circle"></span></a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->adminformmodel->count_all(),
            "recordsFiltered" => $this->adminformmodel->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    function more_options() {
        $id = $this->input->post('id');
        $list = $this->adminformmodel->verify_challan($id);
        $data = "";
        $data = '<a class="btn btn-md btn-primary" href="javascript:void(0)" title="Print" onclick="print_person(' . $id . ')"> <span class="fa fa-print"></span> Print Form </a> -- Print Form of Student <br><br>';
//        if (!empty($list)) {
//            if ($list[0]->is_verified == "0") {
//                $data .= '<a class="btn btn-md btn-primary" href="javascript:void(0)" title="Print" onclick="verify_challan(' . $id . ')"> <span class="fa fa-file-photo-o"></span> Verify Challan </a> -- Verify Challan Submission verified <br><br>';
//            } else {
//                $data .= '<a class="btn btn-md btn-success" href="javascript:void(0)" title="Print" > <span class="fa fa-check"></span>  Challan Verified </a> -- Challan Submission verified <br><br>';
//            }
//        } else {
//            $data .= '<a class="btn btn-md btn-danger" href="javascript:void(0)" title="Print"> <span class="fa fa-remove"></span> Verifiy Challan </a> -- Challan Not Submitted <br><br>';
//        }
        $list = $this->adminformmodel->verify_marks($id);
        if (!empty($list)) {
            $data .= '<input type="text" class="form-cont" value="' . $list[0]->marks_obtained . '" id="test_marks"> <input type="button" class="btn btn-primary" value="Save Marks" onclick="marks_update(' . $id . ');"> -- Enter Marks in Entry Test';
        } else {
            $data .= '<input type="text" class="form-cont" id="test_marks"> <input type="button" class="btn btn-primary" value="Save Marks" onclick="marks_insert(' . $id . ');"> -- Enter Marks in Entry Test';
        }
        echo $data;
        exit;
    }

    function verify_challan() {
        $id = $this->input->post('id');
        $list = $this->adminformmodel->verify_challan_now($id);
        echo 'done';
    }

    function marks_insert() {
        $id = $this->input->post('id');
        $marks = $this->input->post('marks');
        $list = $this->adminformmodel->marks_insert($id, $marks);
        echo 'done';
    }

    function marks_update() {
        $id = $this->input->post('id');
        $marks = $this->input->post('marks');
        $list = $this->adminformmodel->marks_update($id, $marks);
        echo 'done';
    }

    function view_person() {
        $id = $this->input->post('id');
        $list = $this->adminformmodel->get_user_info($id);
        $output = "";
        if (!empty($list)) {
            $output .= "<table>";
            $output .= "<tr>";
            $output .= "<th colspan='2' style='text-align:center; background-color:#4FC1E9;'>Personal Info </th>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Register ID</th>";
            $output .= "<td>" . $list[0]->register_id . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Name</th>";
            $output .= "<td> " . $list[0]->name . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Date of Birth</th>";
            $output .= "<td> " . $list[0]->dob . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Gender</th>";
            $output .= "<td> " . $list[0]->gender . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>CNIC</th>";
            $output .= "<td> " . $list[0]->cnic . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Father/ Guardian Name</th>";
            $output .= "<td> " . $list[0]->father_name . "</td>";
            $output .= "<tr>";
            $output .= "<tr>";
            $output .= "<th>Father/ Guardian Cnic</th>";
            $output .= "<td> " . $list[0]->father_cnic . "</td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Gurdian Name</th>";
//            $output .= "<td> " . $list[0]->guardian_name . "</td>";
//            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Guardian CNIC</th>";
//            $output .= "<td> " . $list[0]->guardian_cnic . "</td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Phone No</th>";
            $output .= "<td> " . $list[0]->phone_no . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Mobile No</th>";
            $output .= "<td> " . $list[0]->mobile_no . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Email</th>";
            $output .= "<td> " . $list[0]->email . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Address</th>";
            $output .= "<td> " . $list[0]->address . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th colspan='2' style='text-align:center; background-color:#4FC1E9;'>Matric </th>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Matric Year</th>";
            $output .= "<td> " . $list[0]->year_matric . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Matric Roll No</th>";
            $output .= "<td> " . $list[0]->rollno_matric . "</td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Matric Grade</th>";
//            $output .= "<td> " . $list[0]->grade_matric . "</td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Obtained Marks</th>";
            $output .= "<td> " . $list[0]->marks_matric . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Total Marks</th>";
            $output .= "<td> " . $list[0]->total_matric . "</td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Major</th>";
//            $output .= "<td> " . $list[0]->major_matric . "</td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Matric Board</th>";
            $output .= "<td> " . $list[0]->board_matric . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th colspan='2' style='text-align:center; background-color:#4FC1E9;'>Intermediate Part 1 </th>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part1 Year</th>";
            $output .= "<td> " . $list[0]->year_inter1 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part1 Roll No</th>";
            $output .= "<td> " . $list[0]->rollno_inter1 . "</td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Inter Part1 Grade</th>";
//            $output .= "<td> " . $list[0]->grade_inter1 . "</td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Obtained Marks</th>";
            $output .= "<td> " . $list[0]->marks_inter1 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Total Marks</th>";
            $output .= "<td> " . $list[0]->total_inter1 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Major</th>";
            $output .= "<td> " . $list[0]->major_inter1 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part1 Board</th>";
            $output .= "<td> " . $list[0]->board_inter1 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th colspan='2' style='text-align:center; background-color:#4FC1E9;'>Intermediate Part 2 </th>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part2 Year</th>";
            $output .= "<td> " . $list[0]->year_inter2 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part2 Roll No</th>";
            $output .= "<td> " . $list[0]->rollno_inter2 . "</td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Matric Grade</th>";
//            $output .= "<td> " . $list[0]->grade_inter2 . "</td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Obtained Marks</th>";
            $output .= "<td> " . $list[0]->marks_inter2 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Total Marks</th>";
            $output .= "<td> " . $list[0]->total_inter2 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Major</th>";
            $output .= "<td> " . $list[0]->major_inter2 . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part2 Board</th>";
            $output .= "<td> " . $list[0]->board_inter2 . "</td>";
            $output .= "</tr>";
            $output .= "</table>";
        } else
            $output .= "Not Entered Acadamic Information yet.......";

        echo $output;
        exit;
    }

    function edit_person() {
        $id = $this->input->post('id');
        $list = $this->adminformmodel->get_user_info($id);
        $output = "";
        if (!empty($list)) {
            $output .= "<table>";
            $output .= "<tr>";
            $output .= "<th colspan='2' style='text-align:center; background-color:#4FC1E9;'>Personal Info</th>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Register ID</th>";
            $output .= "<td><input type='text' class='form-cont' id='register_id' value='" . $list[0]->register_id . "' disabled></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Name</th>";
            $output .= "<td><input type='text' class='form-cont' id='edit_name' value=' " . $list[0]->name . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Date of Birth</th>";
            $output .= "<td><input type='text' class='form-cont' id='edit_dob' value=' " . $list[0]->dob . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Gender</th>";
            $output .= "<td> <input type='text' class='form-cont' id='edit_gender' value='" . $list[0]->gender . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>CNIC</th>";
            $output .= "<td> <input type='text' class='form-cont' id='edit_cnic' value='" . $list[0]->cnic . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Father/ Guardian Name</th>";
            $output .= "<td> <input type='text' class='form-cont' id='edit_fname' value='" . $list[0]->father_name . "'></td>";
            $output .= "<tr>";
            $output .= "<tr>";
            $output .= "<th>Father/ Guardian CNIC</th>";
            $output .= "<td><input type='text' class='form-cont' id='edit_fcnic' value=' " . $list[0]->father_cnic . "'></td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Gurdian Name</th>";
//            $output .= "<td><input type='text' class='form-cont' id='edit_gname' value=' " . $list[0]->guardian_name . "'></td>";
//            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Guardian CNIC</th>";
//            $output .= "<td><input type='text' class='form-cont' id='edit_gcnic' value=' " . $list[0]->guardian_cnic . "'></td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Phone No</th>";
            $output .= "<td><input type='text' class='form-cont' id='edit_phone' value=' " . $list[0]->phone_no . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Mobile No</th>";
            $output .= "<td><input type='text' class='form-cont' id='edit_mobile' value=' " . $list[0]->mobile_no . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Email</th>";
            $output .= "<td><input type='text' class='form-cont' id='edit_email' value=' " . $list[0]->email . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Address</th>";
            $output .= "<td><input type='text' class='form-cont' id='edit_address' value=' " . $list[0]->address . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th colspan='2' style='text-align:center; background-color:#4FC1E9;'>Matric</th>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Matric Year</th>";
            $output .= "<td><input type='text' class='form-cont' id='year_matric' value=' " . $list[0]->year_matric . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Matric Roll No</th>";
            $output .= "<td><input type='text' class='form-cont' id='rollno_matric' value=' " . $list[0]->rollno_matric . "'></td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Matric Grade</th>";
//            $output .= "<td><input type='text' class='form-cont' id='grade_matric' value=' " . $list[0]->grade_matric . "'></td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Obtained Marks</th>";
            $output .= "<td><input type='text' class='form-cont' id='marks_matric' value=' " . $list[0]->marks_matric . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Total Marks</th>";
            $output .= "<td><input type='text' class='form-cont' id='total_matric' value=' " . $list[0]->total_matric . "'></td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Major</th>";
//            $output .= "<td><input type='text' class='form-cont' id='major_matric' value=' " . $list[0]->major_matric . "'></td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Matric Board</th>";
            $output .= "<td><input type='text' class='form-cont' id='board_matric' value=' " . $list[0]->board_matric . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th colspan='2' style='text-align:center; background-color:#4FC1E9;'>Intermediate Part 1 </th>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part1 Year</th>";
            $output .= "<td><input type='text' class='form-cont' id='year_inter1' value=' " . $list[0]->year_inter1 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part1 Roll No</th>";
            $output .= "<td><input type='text' class='form-cont' id='rollno_inter1' value=' " . $list[0]->rollno_inter1 . "'></td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Inter Part1 Grade</th>";
//            $output .= "<td><input type='text' class='form-cont' id='grade_inter1' value=' " . $list[0]->grade_inter1 . "'></td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Obtained Marks</th>";
            $output .= "<td><input type='text' class='form-cont' id='marks_inter1' value=' " . $list[0]->marks_inter1 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Total Marks</th>";
            $output .= "<td><input type='text' class='form-cont' id='total_inter1' value=' " . $list[0]->total_inter1 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Major</th>";
            $output .= "<td><input type='text' class='form-cont' id='major_inter1' value=' " . $list[0]->major_inter1 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part1 Board</th>";
            $output .= "<td><input type='text' class='form-cont' id='board_inter1' value=' " . $list[0]->board_inter1 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th colspan='2' style='text-align:center; background-color:#4FC1E9;'>Intermediate Part 2 </th>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part2 Year</th>";
            $output .= "<td><input type='text' class='form-cont' id='year_inter2' value=' " . $list[0]->year_inter2 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part2 Roll No</th>";
            $output .= "<td><input type='text' class='form-cont' id='rollno_inter2' value=' " . $list[0]->rollno_inter2 . "'></td>";
            $output .= "</tr>";
//            $output .= "<tr>";
//            $output .= "<th>Matric Grade</th>";
//            $output .= "<td><input type='text' class='form-cont' id='grade_inter2' value=' " . $list[0]->grade_inter2 . "'></td>";
//            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Obtained Marks</th>";
            $output .= "<td><input type='text' class='form-cont' id='marks_inter2' value=' " . $list[0]->marks_inter2 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Total Marks</th>";
            $output .= "<td><input type='text' class='form-cont' id='total_inter2' value=' " . $list[0]->total_inter2 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Major</th>";
            $output .= "<td><input type='text' class='form-cont' id='major_inter2' value=' " . $list[0]->major_inter2 . "'></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<th>Inter Part2 Board</th>";
            $output .= "<td> <input type='text' class='form-cont' id='board_inter2' value='" . $list[0]->board_inter2 . "'></td>";
            $output .= "</tr>";
            $output .= "</table>";
        } else
            $output .= "Not Entered Acadamic Information yet.......";

        echo $output;
        exit;
    }

    function save_edit_froms() {
        $register_id = $this->input->post('register_id');
        $data = array('name' => $this->input->post('name'),
            'dob' => $this->input->post('dob'),
            'gender' => $this->input->post('gender'),
            'cnic' => $this->input->post('cnic'),
            'fname' => $this->input->post('fname'),
            'fcnic' => $this->input->post('fcnic'),
            'phone_no' => $this->input->post('phoneno'),
            'mobile_no' => $this->input->post('mobileno'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'myear' => $this->input->post('myear'),
            'mroll' => $this->input->post('mroll'),
            'mtotal' => $this->input->post('mtotal'),
            'mmarks' => $this->input->post('mmarks'),
            'mboard' => $this->input->post('mboard'),
            'iyear1' => $this->input->post('iyear1'),
            'iroll1' => $this->input->post('iroll1'),
            'itotal1' => $this->input->post('itotal1'),
            'imarks1' => $this->input->post('imarks1'),
            'imajor1' => $this->input->post('imajor1'),
            'iboard1' => $this->input->post('iboard1'),
            'iyear2' => $this->input->post('iyear2'),
            'iroll2' => $this->input->post('iroll2'),
            'itotal2' => $this->input->post('itotal2'),
            'imarks2' => $this->input->post('imarks2'),
            'imajor2' => $this->input->post('imajor2'),
            'iboard2' => $this->input->post('iboard2')
        );

        if (array_search("", $data) == false) {
            $result_set = $this->adminformmodel->update_data($data, $register_id);
            echo 'done';
            exit;
        } else
            echo 'Not done';

        exit;
    }

}
