<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMail extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('adminmailmodel');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin') {
                $content['view'] = 'admin_mail_view';
                $this->load->view('templates/admintemplate', $content);
            } else
                redirect('admissionform', 'refresh');
        }
        else {
            redirect('login', 'refresh');
        }
    }

    function get_messages() {
        $list = $this->adminmailmodel->get_messages();
        $data = "";
        $no = 0;
        if (!empty($list)) {
            foreach ($list as $val) {
                $data .= "<tr>";
                $data .= "<td >" . $val->mail_id . "</td>";
                $data .= "<td>" . $val->sender . "</td>";
                $data .= "<td>" . $val->subject . "</td>";
                $data .= "<td>" . $val->message . "</td>";
                $data .= "<td>" . $val->status . "</td>";
                $data .= "<td>" . $val->reply . "</td>";
                $data .= '<td><p data-placement="top" data-toggle="tooltip" title="Reply"><button class="btn btn-primary btn-md" data-title="Edit" onclick="read_mail(' . $val->mail_id . ');" ><span class="fa fa-reply"></span></button></p></td>';
                $data .= '<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-md" data-title="Delete" onclick="delete_mail(' . $val->mail_id . ');" ><span class="fa fa-trash-o"></span></button></p></td>';

                $data .= "</tr>";

                $no++;
            }
        } else {
            $data = "<tr><td colspan='8' style='text-align:center;'>No mail in mail box!! </td></tr>";
        }
        echo $data;
        exit;
    }

    function read_mail() {
        $id = $this->input->post('id');
        $val = $this->adminmailmodel->read_mail($id);
        $res = $val[0]->sender . ':' . $val[0]->subject;
        /* $res = "<table class='table table-bordered'>";
          $res .="<tr>";
          $res .= "<th> Mail ID </th>";
          $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->mail_id . '" id="mail_id" disabled></td>';
          $res .="</tr>";
          $res .="<tr>";
          $res .= "<th> Sender Name </th>";
          $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->sender_name . '" id="sender_name"></td>';
          $res .="</tr>";
          $res .="<tr>";
          $res .= "<th> Sender Email</th>";
          $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->sender . '" id="sender" ></td>';
          $res .="</tr>";
          $res .="<tr>";
          $res .= "<th> Subject </th>";
          $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->subject . '" id="subject"></td>';
          $res .="</tr>";
          $res .="<tr>";
          $res .= "<th> Message </th>";
          $res .= ' <td ><textarea name="message" rows="10" cols="30" class="form-cont" id="message">' . $val[0]->message . '</textarea></td>';
          $res .="</tr>";
          $res .="<tr>";
          $res .= "<th> Status </th>";
          $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->status . '" id="status"></td>';
          $res .="</tr>";
          $res .="<tr>";
          $res .= "<th> Reply </th>";
          $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->reply . '" id="reply_message"></td>';
          $res .="</tr>";
          $res .="<tr>";
          $res .= "<th> Replied By </th>";
          $res .= ' <td><input type="text" class="form-cont" value = "' . $val[0]->replied_by . '" id="replied_by"></td>';
          $res .="</tr>";
          $res .="</table>"; */
        echo $res;
        exit;
    }

    function delete_mail() {
        $id = $this->input->post('id');
        $val = $this->adminmailmodel->delete_mail($id);
    }

    function send_mail() {
        $data = array();
        $data['name'] = $this->input->get('name');
        $data['email'] = $this->input->get('email');
        $data['subject'] = $this->input->get('subject');
        $data['message'] = $this->input->get('message');

        $val = $this->adminmailmodel->save_mail($data);
        echo 'saved';
        exit;
    }

}
