<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class AdminsheetsModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function users_detail($from, $to) {
        $query = "SELECT p.image,r.roll_no,p.name,p.father_name FROM regsiter r INNER JOIN personal_info p ON p.register_id=r.register_id where r.roll_no >= " . $from . " AND r.roll_no<=" . $to . " order by roll_no asc ";
        $result = $this->db->query($query);
        return $result->result();
    }

}

?>