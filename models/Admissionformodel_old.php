<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class admissionforModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function insert_data($data, $user_id) {
        $query = "INSERT INTO `personal_info`(`register_id`,`reserved_seat`,`name`, `dob`, `gender`, `cnic`, `father_name`, `father_cnic`, `guardian_name`, `guardian_cnic`,`father_income`, `phone_no`, `mobile_no`, `email`, `address`,`image`) VALUES (" . $user_id . ",'" . $data['reserve'] . "','" . $data['name'] . "','" . $data['dob'] . "','" . $data['gender'] . "','" . $data['cnic'] . "','" . $data['fname'] . "','" . $data['fcnic'] . "','" . $data['gname'] . "','" . $data['gcnic'] . "','" . $data['fincome'] . "','" . $data['phone_no'] . "','" . $data['mobile_no'] . "','" . $data['email'] . "','" . $data['address'] . "','" . $data['pic'] . "')";
        $this->db->query($query);
        $query = "UPDATE regsiter set pinfo_status = '1' where register_id = " . $user_id . "";
        $this->db->query($query);
        return 'inserted';
    }

}

?>