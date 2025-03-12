<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class notificationModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function update_notification() {
        $query = "SELECT * FROM notice_board order by notice_id asc";
        $result = $this->db->query($query);
        return $result->result();
    }

    function edit_notice($id) {
        $query = "SELECT * FROM notice_board where notice_id = " . $id . "";
        $result = $this->db->query($query);
        return $result->result();
    }

    function delete_notice($id) {
        $query = "DELETE  FROM notice_board where notice_id = " . $id . "";
        $result = $this->db->query($query);
        return 'done';
    }

    function save_edit_notice($id) {
        $query = "UPDATE notice_board set notice_desc = '" . $id['desc'] . "',notice_note = '" . $id['note'] . "',notice_type = '" . $id['type'] . "',notice_link = '" . $id['link'] . "',added_by = '" . $id['added_by'] . "',added_on = '" . $id['added_on'] . "' where notice_id = " . $id['id'] . "";
        $result = $this->db->query($query);
        return 'done';
    }

    function save_new_notif($id) {
        $query = "INSERT INTO `notice_board`(`notice_type`, `notice_desc`, `notice_note`, `notice_link`, `added_by`, `added_on`) VALUES ('" . $id['type'] . "','" . $id['desc'] . "','" . $id['note'] . "','" . $id['link'] . "','" . $id['added_by'] . "','" . $id['added_on'] . "')";
        $result = $this->db->query($query);
        return 'done';
    }

}

?>