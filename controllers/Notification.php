<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('notificationmodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {

                $content['view'] = 'notification_view';
                $this->load->view('templates/admintemplate', $content);
            } else {
                redirect('admissionform', 'refresh');
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    function update_notification() {
        $result_set = $this->notificationmodel->update_notification();
        $res = "";
        foreach ($result_set as $val) {
            $res .= '<tr>';
            $res .= ' <td>' . $val->notice_id . '.</td>';
            $res .= ' <td >' . $val->notice_desc . '.</td>';
            $res .= ' <td>' . $val->notice_note . '.</td>';
            $res .= ' <td >' . $val->notice_link . '.</td>';
            $res .= ' <td>';
            $res .= $val->notice_type;
            $res .= ' </td>';
            $res .= ' <td>' . $val->added_by . '.</td>';
            $res .= ' <td>';
            $res .= $val->added_on;
            $res .= ' </td>';
            $res .= '<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-md" data-title="Edit" onclick="edit_notice(' . $val->notice_id . ');" ><span class="fa fa-pencil"></span></button></p></td>';
            $res .= '<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-md" data-title="Delete" onclick="delete_notice(' . $val->notice_id . ');" ><span class="fa fa-trash-o"></span></button></p></td>';
            $res .= ' </tr> ';
        }
        echo $res;
        exit;
    }

    function edit_notice() {
        $id = $this->input->post('id');
        $val = $this->notificationmodel->edit_notice($id);
        $res = "<table class='table table-bordered'>";
        $res .="<tr>";
        $res .= "<th> Notice ID </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->notice_id . '" id="notice_idd" disabled></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Notice Description </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->notice_desc . '" id="notice_desc"></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Notice Note </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->notice_note . '" id="notice_note"></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Notice link </th>";
        $res .= ' <td ><input type="text" class="form-cont" value = "' . $val[0]->notice_link . '" id="notice_link"></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Notice Type </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "';
        $res .= $val[0]->notice_type;
        $res .= '" id="notice_type"></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Added By </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->added_by . '" id="notice_added"></td>';
        $res .="</tr>";
        $res .="<tr>";
        $res .= "<th> Added on </th>";
        $res .= ' <td><input type="text" class="form-cont" value = "';
        $res .= $val[0]->added_on;
        $res .= '" id="notice_date"></td>';
        $res .="</tr>";
        $res .="</table>";

        echo $res;
    }

    function save_edit_notice() {
        $id = array();
        $id['id'] = $this->input->post('notice_id');
        $id['desc'] = $this->input->post('notice_desc');
        $id['note'] = $this->input->post('notice_note');
        $id['link'] = $this->input->post('notice_link');
        $id['type'] = $this->input->post('notice_type');
        $id['added_by'] = $this->input->post('added_by');
        $id['added_on'] = $this->input->post('added_on');
        $val = $this->notificationmodel->save_edit_notice($id);
        echo 'done';
        exit;
    }

    function save_new_notif() {
        $id = array();
        $id['desc'] = $this->input->post('notice_desc');
        $id['note'] = $this->input->post('notice_note');
        $id['link'] = $this->input->post('notice_link');
        $id['type'] = $this->input->post('notice_type');
        $id['added_by'] = $this->session->userdata('name');
        $id['added_on'] = date("Y-m-d");
        $val = $this->notificationmodel->save_new_notif($id);
        echo 'done';
        exit;
    }

    function delete_notice() {
        $id = $this->input->post('id');
        $val = $this->notificationmodel->delete_notice($id);
    }

    function store_pdf() {
        if (0 < $_FILES['file']['error']) {
            echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        } else {

            move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/DCS/files/' . $_FILES['file']['name'] . '');
        }
    }

}
