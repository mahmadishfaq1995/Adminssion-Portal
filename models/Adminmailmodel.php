<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class AdminmailModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function get_messages() {
        $query = "SELECT * FROM mail order by mail_id";
        $result = $this->db->query($query);
        return $result->result();
    }

    function read_mail($id) {
        $query = "SELECT * FROM mail where mail_id=" . $id . "";
        $result = $this->db->query($query);
        return $result->result();
    }

    function delete_mail($id) {
        $query = "DELETE  FROM mail where mail_id = " . $id . "";
        $result = $this->db->query($query);
        return 'done';
    }

    function save_mail($data) {
        $dates = date("Y-m-d H:i:s");
        $query = "INSERT INTO mail (sender_name,sender,subject,message,message_date,status,reply,replied_by) VALUES ('" . $data['name'] . "','" . $data['email'] . "','" . $data['subject'] . "','" . $data['message'] . "','" . $dates . "','Not Entertained','N/A','N/A')";
        $result = $this->db->query($query);
        return "done";
    }

}

?>