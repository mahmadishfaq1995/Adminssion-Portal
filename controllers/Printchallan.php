<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class printchallan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('printchallanmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('pinfo_status') == '1') {
                if ($this->session->userdata('form_status') == '1') {
                    if ($this->input->post_get('rollnumber2') != NULL && $this->input->post_get('marks2') != NULL) {
                        $content['marks2'] = trim($this->input->post_get('marks2'));
                        $content['roll2'] = trim($this->input->post_get('rollnumber2'));
                        $content['year2'] = trim($this->input->post_get('year2'));
                        $content['board2'] = trim($this->input->post_get('board2'));
                        $response = $this->printchallanmodel->update_result($this->session->userdata('id'), $content);
                    }
                    $result = $this->printchallanmodel->check_challan($this->session->userdata('id'));
                    $result1 = $this->printchallanmodel->test_marks($this->session->userdata('id'));
                    $content['testmarks'] = $result1[0]->testmarks;
                    $content['marks2'] = trim($result1[0]->marks_inter2);
                    $content['roll2'] = trim($result1[0]->rollno_inter2);
                    $content['year2'] = trim($result1[0]->year_inter2);
                    $content['board2'] = trim($result1[0]->board_inter1);
                    if ($result->num_rows() != 0)
                        $content['challan'] = 'Your Challan has been submitted...';
                    else {
                        $content['challan'] = 'no';
                    }
                    $content['view'] = 'printchallan_view';
                    $this->load->view('templates/template', $content);
                } else {
                    redirect('admissionacadamic', 'refresh');
                }
            } else {
                redirect('admissionfor', 'refresh');
            }
            if ($this->session->userdata('access_rights') == 'admin')
                redirect('admin', 'refresh');
        }
        else {
            redirect('login', 'refresh');
        }
    }

    function edit_personal() {
        $id = $this->input->get_post('id');
        $result = $this->printchallanmodel->edit_personal($id);
        $output = "";
        foreach ($result as $val) {

            $output .= '<form class = "form-adm fadeInUp" method = "POST">';
            $output .= '<div class = "form-group">';
            $output .= '<label for = "inputEmail3" class = " control-label">Full Name :</label>';
            $output .= '<div>';
            $output .= '<input type = "text" class = "form-control" name = "fullname" id = "fullname" placeholder = "abc xyz" onKeyPress = "Names();" value="' . $val->name . '" required>';
            $output .= '<div id = "error_fullname" style = "color:red; display:none;"> * Enter a valid Name *</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '<div class = "form-group">';
            $output .= '<label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Date of Borth :</label>';
            $output .= '<div  style = "margin-top:5px;">';
            $output .= '<input type = "date" class = "form-control" name = "dob" id = "dob" placeholder = "Birth Date"  value="' . $val->dob . '" required>';
            $output .= '<div id = "error_dob" style = "color:red; display:none;"> * Enter a valid Date *</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '<div class = "form-group">';
            $output .= '<label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Gender</label>';
            $output .= '<div >';
            $output .= '<div class = "radio" style = "margin-top:5px;">';
            $output .= '<label>';
            if ($val->gender == "male")
                $output .= '<input type = "radio" name = "gendere" id = "gendere" value = "male" checked> Male';
            else
                $output .= '<input type = "radio" name = "gendere" id = "gendere" value = "male"> Male';

            $output .= '</label>';
            $output .= '</div>';
            $output .= '<div class = "radio">';
            $output .= '<label>';
            if ($val->gender == "female")
                $output .= ' <input type = "radio" name = "gendere" id = "gendere" value = "female" checked> Female';
            else
                $output .= ' <input type = "radio" name = "gendere" id = "gendere" value = "female" > Female';

            $output .= ' </label>';
            $output .= '</div>';
            $output .= ' </div>';
            $output .= ' </div>';
            $output .= '<div class = "form-group">';
            $output .= '<label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Applicant CNIC :</label>';
            $output .= '<div  style = "margin-top:5px;">';
            $output .= '<input type = "text" class = "form-control" name = "cnic" maxlength = "" id = "cnic1" placeholder = "XXXXX" onKeyPress = "Numeric();"  value="' . $val->cnic . '" required>';
            $output .= '<div id = "error_cnic" style = "color:red; display:none;"> * Enter a valid CNIC *</div>';
            $output .= ' </div>';
            $output .= ' </div>';
            $output .= ' <div class = "form-group">';
            $output .= ' <label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Father/Guardian Name :</label>';
            $output .= ' <div  style = "margin-top:5px;">';
            $output .= '<input type = "text" class = "form-control" name = "fname" id = "fname" placeholder = "abc xyz"  value="' . $val->father_name . '" onKeyPress = "Names();" required>';
            $output .= '<div id = "error_fname" style = "color:red; display:none;"> * Enter a valid Name *</div>';
            $output .= '</div>';
            $output .= ' </div>';
            $output .= ' <div class = "form-group">';
            $output .= ' <label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Father/Guardian CNIC :</label>';
            $output .= ' <div  style = "margin-top:5px;">';
            $output .= ' <input type = "text" class = "form-control" name = "fcnic" maxlength = "" id = "fcnic1" placeholder = "XXXXX" onKeyPress = "Numeric();"  value="' . $val->father_cnic . '" required> ';
            $output .= ' <div id = "error_fcnic" style = "color:red; display:none;"> * Enter a valid CNIC *</div >';
            $output .= ' </div>';
            $output .= ' </div>';
            $output .= ' <div class = "form-group">';
            $output .= ' <label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Relation:</label>';
            $output .= ' <div  style = "margin-top:5px;">';
            $output .= ' <input type = "text" class = "form-control" name = "relation" id = "relation" placeholder = "abc xyz"  value="' . $val->relation . '" onKeyPress = "Names();" required >';
            $output .= ' <div id = "error_gname" style = "color:red; display:none;"> * Enter a valid relation *</div>';
            $output .= ' </div >';
            $output .= ' </div>';

            $output .= '<div class = "form-group">';
            $output .= '<label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Phone No:</label>';
            $output .= '<div  style = "margin-top:5px;">';
            $output .= '<input type = "text" class = "form-control" maxlength = "15" name = "phone_no" id = "phone_no"  value="' . $val->phone_no . '" placeholder = "042XXXXXXX" onKeyPress = "Numeric();">';
            $output .= '<div id = "error_phone_no" style = "color:red; display:none;"> * Enter valid Phone Number *</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '<div class = "form-group">';
            $output .= '<label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Mobile No :</label>';
            $output .= '<div  style = "margin-top:5px;">';
            $output .= '<input type = "text" class = "form-control" maxlength = "15" placeholder = "03XXXXXXXXX" name = "mobile_no"  value="' . $val->mobile_no . '" id = "mobile_no" onKeyPress = "Numeric();" required>';
            $output .= '<div id = "error_mobile_no" style = "color:red; display:none;"> * Enter valid Mobile Number *</div>';
            $output .= '</div>';
            $output .= ' </div>';
            $output .= ' <div class = "form-group">';
            $output .= ' <label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Email Address:</label>';
            $output .= ' <div  style = "margin-top:5px;">';
            $output .= ' <input type = "email" class = "form-control" placeholder = "Someone@example.com" name = "email"  value="' . $val->email . '" id = "email" placeholder = "Email" autofocus = "" required >';
            $output .= '<div id = "error_email" style = "color:red; display:none;"> * Enter a valid email *</div>';
            $output .= '</div >';
            $output .='</div>';
            $output .= '<div class = "form-group">';
            $output .= '<label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">Residential Address:</label>';
            $output .= '<div  style = "margin-top:5px;">';
            $output .= '<input type = "text" class = "form-control" id = "address" name = "address"  value="' . $val->address . '" placeholder = "Address" required>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= ' <div class = "form-group" >';
            $output .= ' <label for = "inputPassword3" class = " control-label" style = "margin-top:5px;">District:</label>';
            $output .= ' <div  style = "margin-top:5px;">';
            $output .= ' <input type = "text" class = "form-control"  name = "district" id = "district"  value="' . $val->district . '" placeholder = "XXXXXYYYY"  required>';
            $output .= ' <div id = "error_gcnic" style = "color:red; display:none;"> * Enter a valid CNIC *</div>';
            $output .= '</div>';
            $output .= '</div>';


            $output .= '<div class = "form-group">';
            $output .= '<div class = "col-sm-offset-1 col-sm-10">';
            $output .= '<br>';
            $output .= '<input type = "button" onclick="save_edit_pinfo();" class = "btn btn-default btn-block" value = "Save Information" >';
            $output .= '</div>';
            $output .= '</div>';
            $output .='</form>';
        }
        echo $output;
    }

    function edit_academic() {
        $id = $this->input->get_post('id');
        $result = $this->printchallanmodel->edit_academic($id);
        $output = "";
        foreach ($result as $val) {
            $output .=' <div class = "login-bg" style="margin-top:0px !important;">';

            $output .=' <form class = "form-adm wow fadeInUp" method = "POST">';
            $output .='  <div class = "form-group">';
            $output .=' <label for = "inputPassword3" class = "col-sm-2 control-label" style = "background-color:#F0F0F0; padding: 6px 12px;">Matric/O-level</label>';
            $output .='  <div class = "col-sm-10">';
            $output .=' <input type = "text" class = "form-cont" maxlength = "4" id = "year_matric" name = "year_matric" value=' . $val->year_matric . ' placeholder = "Passing year" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_year_matric" style = "color:red; display:none;"> * Enter a valid year *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "rollno_matric" name = "rollno_matric" placeholder = "Roll No" value="' . $val->rollno_matric . '" onKeyPress = "Numeric();" required>';
            $output .='   <div id = "error_rollno_matric" style = "color:red; display:none;"> * Enter a valid roll no *</div>';


            $output .='    <input type = "text" class = "form-cont" id = "marks_matric" maxlength = "4" name = "marks_matric" value="' . $val->marks_matric . '" placeholder = "Marks/GPA" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_marks_matric" style = "color:red; display:none;"> * Enter a valid marks *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "total_matric" maxlength = "4" name = "total_matric" value="' . $val->total_matric . '" placeholder = "Total Marks" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_total_matric" style = "color:red; display:none;"> * Enter valid total marks *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "board_matric" name = "board_matric" value="' . $val->board_matric . '" placeholder = "Board/University" required>';
            $output .=' </div>';
            $output .=' </div> <br /><br />';
            $output .=' <div class = "form-group">';
            $output .=' <br /> <br />';
            $output .=' <label for = "inputPassword3" class = "col-sm-2 control-label" style = "background-color:#F0F0F0; padding: 6px 12px;">Inter-Part 1</label>';
            $output .=' <div class = "col-sm-10">';
            $output .=' <input type = "text" class = "form-cont" id = "year_inter1" value="' . $val->year_inter1 . '" maxlength = "4" name = "year_inter1" placeholder = "Passing year" onKeyPress = "Numeric();" required >';
            $output .=' <div id = "error_year_inter1" style = "color:red; display:none;"> * Enter a valid year *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "rollno_inter1" value="' . $val->rollno_inter1 . '" name = "rollno_inter1" placeholder = "Roll No" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_rollno_inter1" style = "color:red; display:none;"> * Enter a valid roll no *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "marks_inter1" maxlength = "4" value="' . $val->marks_inter1 . '" name = "marks_inter1" placeholder = "Marks/GPA" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_marks_inter1" style = "color:red; display:none;"> * Enter a valid marks *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "total_inter1" value="' . $val->total_inter1 . '" maxlength = "4" name = "total_inter1" placeholder = "Total Marks" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_total_inter1" style = "color:red; display:none;"> * Enter valid total marks *</div >';

            $output .=' </div>';
            $output .=' </div><br /><br />';
            $output .=' <div class = "form-group">';
            $output .=' <br /> <br />';
            $output .=' <label for = "inputPassword3" class = "col-sm-2 control-label" style = "background-color:#F0F0F0; padding: 6px 12px;">Inter-Part 2</label>';
            $output .=' <div class = "col-sm-10">';
            $output .=' <input type = "text" class = "form-cont" id = "year_inter2" value="' . $val->year_inter2 . '" maxlength = "4" name = "year_inter2" placeholder = "Passing year" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_year_inter2" style = "color:red; display:none;"> * Enter a valid year *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "rollno_inter2" value="' . $val->rollno_inter2 . '" name = "rollno_inter2" placeholder = "Roll No" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_rollno_inter2" style = "color:red; display:none;"> * Enter a valid roll no *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "marks_inter2" value="' . $val->marks_inter2 . '" maxlength = "4" name = "marks_inter2" placeholder = "Marks/GPA" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_marks_inter2" style = "color:red; display:none;"> * Enter a valid marks *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "total_inter2" value="' . $val->total_inter2 . '" maxlength = "4" name = "total_inter2" placeholder = "Total Marks" onKeyPress = "Numeric();" required>';
            $output .=' <div id = "error_total_inter2" style = "color:red; display:none;"> * Enter valid total marks *</div>';


            $output .=' <input type = "text" class = "form-cont" id = "major_inter2" value="' . $val->major_inter2 . '" name = "major_inter2" placeholder = "Major" onKeyPress = "Alpha();" required>';
            $output .=' <div id = "error_major_inter2" style = "color:red; display:none;"> * Enter a valid Major *</div>';

            $output .=' <input type = "text" class = "form-cont" id = "board_inter2" value="' . $val->board_inter2 . '" name = "board_inter2" placeholder = "Board/University" required>';
            $output .=' </div>';
            $output .=' </div><br />';
            $output .=' <div class = "form-group">';
            $output .=' <div class = "col-sm-offset-2 col-sm-10">';
            $output .=' <br /> <br />';
            $output .=' <input type = "button" id = "" class = "btn btn-default btn-block" onclick="save_academic_edit();" value = "Save Information" >';
            $output .=' </div></div></form></div>';
        }
        echo $output;
    }

    function save_edit_pinfo() {
        $data = array(
            'id' => $this->session->userdata('id'),
            'name' => $this->input->get_post('name'),
            'dob' => $this->input->get_post('dob'),
            'gender' => $this->input->get_post('gender'),
            'cnic' => $this->input->get_post('cnic'),
            'fname' => $this->input->get_post('fname'),
            'fcnic' => $this->input->get_post('fcnic'),
            'district' => $this->input->get_post('district'),
            'phone_no' => $this->input->get_post('phoneno'),
            'mobile_no' => $this->input->get_post('mobileno'),
            'email' => $this->input->get_post('email'),
            'address' => $this->input->get_post('address')
        );
        $this->printchallanmodel->save_edit_data($data);
        echo 'done';
    }

    function save_edit_ainfo() {
        $data = array(
            'id' => $this->session->userdata('id'),
            'myear' => $this->input->get_post('myear'),
            'mroll' => $this->input->get_post('mroll'),
            'mtotal' => $this->input->get_post('mtotal'),
            'mmarks' => $this->input->get_post('mmarks'),
            'mboard' => $this->input->get_post('mboard'),
            'iyear1' => $this->input->get_post('iyear1'),
            'iroll1' => $this->input->get_post('iroll1'),
            'itotal1' => $this->input->get_post('itotal1'),
            'imarks1' => $this->input->get_post('imarks1'),
            'imajor1' => $this->input->get_post('imajor1'),
            'iboard1' => $this->input->get_post('iboard1'),
            'iyear2' => $this->input->get_post('iyear2'),
            'imarks2' => $this->input->get_post('imarks2'),
            'itotal2' => $this->input->get_post('itotal2'),
            'iroll2' => $this->input->get_post('iroll2'),
            'imajor2' => $this->input->get_post('imajor2'),
            'iboard2' => $this->input->get_post('iboard2')
        );
        $this->printchallanmodel->save_edit_adata($data);
        echo 'done';
    }

    function store_challan() {
        if (0 < $_FILES['file']['error']) {
            echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        } else {
            move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/DCS/img/challan_images/' . $this->session->userdata('id') . '.jpg');
            if ($_FILES['file']['tmp_name']) {
                $this->printchallanmodel->save_challan($this->session->userdata('id'));
                echo 'done';
            }
        }
    }

    function store_picture() {
        if (0 < $_FILES['file']['error']) {
            echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        } else {
            if ($_FILES['file']['tmp_name']) {
                move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/DCS/img/user_images/' . $this->session->userdata('id') . '.jpg');
            }
        }
    }

    function issue_slip() {
        if ($this->session->userdata('challan_verify') == '0') {
            echo 'not_issued';
            exit;
        } else {
            echo 'done';
            exit;
        }
    }

}
