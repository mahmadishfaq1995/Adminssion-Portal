<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class homeModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function get_notice() {
        $query = "SELECT notice_type,notice_desc,notice_note,notice_link FROM notice_board order by notice_id DESC";
        $result = $this->db->query($query);
        return $result->result();
    }

}

?>