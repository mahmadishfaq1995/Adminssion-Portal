<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class admissionacadamicModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function insert_acadamic_data($data, $user_id) {
       $query = "INSERT INTO `acadamic_info`(`register_id`,`year_matric`, `rollno_matric`, `marks_matric`, `total_matric`, `board_matric`, `year_inter1`, `rollno_inter1`, `marks_inter1`, `total_inter1`, `major_inter1`, `board_inter1`, `year_inter2`, `rollno_inter2`,`marks_inter2`, `total_inter2`, `major_inter2`, `board_inter2`) VALUES (" . $user_id . "," . $data['myear'] . "," . $data['mroll'] . "," . $data['mmarks'] . "," . $data['mtotal'] . ",'" . $data['mboard'] . "','" . $data['iyear1'] . "','" . $data['iroll1'] . "','" . $data['imarks1'] . "','" . $data['itotal1'] . "','" . $data['imajor1'] . "','" . $data['iboard1'] . "'," . $data['iyear2'] . "," . $data['iroll2'] . ",'" . $data['imarks2'] . "','" . $data['itotal2'] . "','" . $data['imajor2'] . "','" . $data['iboard2'] . "')";    
 	 $this->db->query($query);
        $query = "UPDATE regsiter set form_status = '1' where register_id = " . $user_id . "";
        $this->db->query($query);
        return 'inserted';
    }

}

?>