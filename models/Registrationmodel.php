<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class registrationModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function register_user($username, $password, $my_name, $address, $email, $gender) {
        $query = "SELECT * from regsiter where username = '" . $username . "' OR cnic= '".$address ."' OR email='".$email."'";
        $result = $this->db->query($query);
        $a = $result->result_array();
        if (!empty($a)) {
            return 'Not Done';
        } else {
            $query = "INSERT INTO regsiter (full_name,password,username,cnic,email,gender,access_right) values ('" . $my_name . "','" . $password . "','" . $username . "','" . $address . "','" . $email . "','" . $gender . "','user')";
            $result = $this->db->query($query);
			$this->session->set_userdata('Newacc', 'created');
            return "Done";
        }
    }

}

?>