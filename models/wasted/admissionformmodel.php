<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class admissionformModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function insert_data($data, $user_id) {
        $query = "INSERT INTO `student_record`(`register_id`,`full_name`, `dob`, `gender`, `cnic`, `fname`, `fcnic`, `gname`, `gcnic`, `phone_no`, `mobile_no`, `email`, `address`, `year_matric`, `rollno_matric`, `grade_matric`, `marks_matric`, `total_matric`, `major_matric`, `board_matric`, `year_inter1`, `rollno_inter1`, `grade_inter1`, `marks_inter1`, `total_inter1`, `major_inter1`, `board_inter1`, `year_inter2`, `rollno_inter2`, `grade_inter2`, `marks_inter2`, `total_inter2`, `major_inter2`, `board_inter2`,`picture`) VALUES (" . $user_id . ",'" . $data['name'] . "','" . $data['dob'] . "','" . $data['gender'] . "','" . $data['cnic'] . "','" . $data['fname'] . "','" . $data['fcnic'] . "','" . $data['gname'] . "','" . $data['gcnic'] . "','" . $data['phone_no'] . "','" . $data['mobile_no'] . "','" . $data['email'] . "','" . $data['address'] . "'," . $data['myear'] . "," . $data['mroll'] . ",'" . $data['mgrade'] . "'," . $data['mmarks'] . "," . $data['mtotal'] . ",'" . $data['mmajor'] . "','" . $data['mboard'] . "'," . $data['iyear1'] . "," . $data['iroll1'] . ",'" . $data['igrade1'] . "'," . $data['imarks1'] . "," . $data['itotal1'] . ",'" . $data['imajor1'] . "','" . $data['iboard1'] . "'," . $data['iyear2'] . "," . $data['iroll2'] . ",'" . $data['igrade2'] . "'," . $data['imarks2'] . "," . $data['itotal2'] . ",'" . $data['imajor2'] . "','" . $data['iboard2'] . "','" . $data['pic'] . "')";
        $this->db->query($query);
        $query = "UPDATE regsiter set form_status = '1' where register_id = " . $user_id . "";
        $this->db->query($query);
        return 'inserted';
    }

}

?>