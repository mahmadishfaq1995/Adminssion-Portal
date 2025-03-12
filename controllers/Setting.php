<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('settingmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {

                $content['view'] = 'setting_view';
                $this->load->view('templates/admintemplate', $content);
            } else {
                redirect('admissionform', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    function admin_users() {
        $result = $this->settingmodel->admin_users();
        $res = "";
        foreach ($result as $val) {
            $res .= '<tr>';
            $res .= ' <td>' . $val->register_id . '.</td>';
            $res .= ' <td >' . $val->full_name . '.</td>';
            $res .= ' <td>' . $val->username . '.</td>';
            $res .= ' <td >' . $val->email . '.</td>';
            $res .= ' <td >' . $val->cnic . '.</td>';
            $res .= ' </tr> ';
        }
        echo $res;
    }

    function setting_profile() {
        $result = $this->settingmodel->setting_profile();
        $res = "";
        foreach ($result as $val) {
            $res .= '<tr>';
            $res .= ' <td>' . $val->register_id . '.</td>';
            $res .= ' <td >' . $val->full_name . '.</td>';
            $res .= ' <td>' . $val->username . '.</td>';
            $res .= ' <td >' . $val->password . '.</td>';
            $res .= ' <td >' . $val->email . '.</td>';
            $res .= ' <td >' . $val->cnic . '.</td>';
            $res .= '<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-md" data-title="Edit" onclick="edit_admin(' . $val->register_id . ');" ><span class="fa fa-pencil"></span></button></p></td>';
            $res .= ' </tr> ';
        }
        echo $res;
    }

    function edit_admin() {
        $id = $this->input->post('id');
        $val = $this->settingmodel->edit_admin($id);
        $res = "<table class='table table-bordered'>";
        $res .="<tr>";
        $res .= "<th> Register ID </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->register_id . '" id="" disabled></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Name </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->full_name . '" id="admin_name1"></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Email </th>";
        $res .= ' <td><input type="email" class="form-cont" value = "' . $val[0]->email . '" id="admin_email1"></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Username</th>";
        $res .= ' <td ><input type="text" class="form-cont" value = "' . $val[0]->username . '" id="admin_username1"></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Password </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "';
        $res .= $val[0]->password;
        $res .= '" id="admin_pass1"></td>';
        $res .="</tr>";
        $res .="</table>";
        $res .="<br><input type='button' class='btn btn-default btn-block' onclick='save_edit_admin(" . $val[0]->register_id . ");' value='Save'>";

        echo $res;
    }

    function delete_admin() {
        $id = $this->input->post('id');
        $val = $this->settingmodel->delete_admin($id);
        echo 'done';
    }

    function save_new_admin() {
        $username = $this->input->post('admin_username');
        $password = $this->input->post('admin_pass');
        $my_name = $this->input->post('admin_name');
        $address = $this->input->post('admin_address');
        $email = $this->input->post('admin_email');
        $gender = $this->input->post('admin_gender');

        $result_set = $this->settingmodel->save_new_admin($username, $password, $my_name, $address, $email, $gender);
        echo done;
        exit;
    }

    function save_edit_admin() {
        $id = $this->input->post('id1');
        $username = $this->input->post('admin_username1');
        $password = $this->input->post('admin_pass1');
        $my_name = $this->input->post('admin_name1');
        $email = $this->input->post('admin_email1');
        $gender = $this->input->post('admin_gender1');

        $result_set = $this->settingmodel->save_edit_admin($username, $password, $my_name, $email, $id);
        echo done;
        exit;
    }

}
