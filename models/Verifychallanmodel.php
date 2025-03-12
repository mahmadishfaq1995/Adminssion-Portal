<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class verifychallanModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function verify_chalan($cnic, $verify_type) {

        $id = $this->session->userdata('id');
        $query = "SELECT  gender,challan_verify_status,roll_no from regsiter where cnic = '" . $cnic . "'";
        $result = $this->db->query($query);
        $gender = $result->result_array();
        if (!empty($gender)) {
            if ($gender[0]['challan_verify_status'] == '0') {
                if ($gender[0]['gender'] == "male") {
                    $query = "SELECT MAX(roll_no)+1 as id from regsiter WHERE gender='male'";
                    $result = $this->db->query($query);
                    $roll = $result->result_array();
                    if ($roll[0]['id'] == 1)
                        $roll = 5001;
                    else
                        $roll = $roll[0]['id'];

                    $query = "UPDATE `regsiter` SET roll_no = " . $roll . ",`challan_verify_status`='1',`challan_verify_type`='" . $verify_type . "' WHERE cnic='" . $cnic . "'";
                }
                else
                if ($gender[0]['gender'] == "female") {
                    $query = "SELECT MAX(roll_no)+1 as id FROM `regsiter` WHERE gender='female'";
                    $result = $this->db->query($query);
                    $roll = $result->result_array();
                    $roll = $roll[0]['id'];

                    $query = "UPDATE `regsiter` SET roll_no = " . $roll . ",`challan_verify_status`='1',`challan_verify_type`='" . $verify_type . "' WHERE cnic='" . $cnic . "'";
                }
                $result = $this->db->query($query);
                return 'done';
            } else {
                //$gender[0]['roll_no']
                return "Your slip is already in your account. Roll No.: " . $gender[0]['roll_no'];
                //return "Already Verified Challan: ";
                exit;
            }
        } else {
            //alreadyroll=
            echo 'Record Does not exist';
            exit;
        }
        return "Verified." . $roll;
        exit;
    }

}

?>