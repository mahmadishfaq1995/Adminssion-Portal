<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class RollnumberModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function rooms_detail() {
        $query = "SELECT room,block,building,rollnumberfrom,rollnumberto FROM seatingplan";
        $result = $this->db->query($query);
        return $result->result();
    }

}

?>