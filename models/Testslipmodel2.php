<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class testslipModel2 extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function verify_chalan2($cnic, $verify_type) {
        $id = $this->session->userdata('id');
        $query = "SELECT gender from regsiter where cnic = '" . $cnic . "'";
        $result = $this->db->query($query);
        $gender = $result->result_array();
        if ($gender[0]['gender'] == "female")
            $query = "UPDATE `regsiter` SET roll_no = (SELECT CASE WHEN MAX(roll_no) = 0 THEN 6001 ELSE MAX(roll_no)+1 END ),`challan_verify_status`='1',`challan_verify_type`='" . $verify_type . "' WHERE cnic='" . $cnic . "'";
        else if ($gender[0]['gender'] == "male")
            $query = "UPDATE `regsiter` SET roll_no = (SELECT MAX(roll_no)+1),`challan_verify_status`='1',`challan_verify_type`='" . $verify_type . "' WHERE cnic='" . $cnic . "'";

        $result = $this->db->query($query);
        return "done";
        exit;
    }

    function information2($cnic) {
        $query = "SELECT p.email,p.name,p.father_name,p.district,p.address,p.image,p.gender,r.roll_no,p.cnic FROM personal_info as p inner join regsiter as r on p.register_id=r.register_id where p.cnic= " . $cnic. "";

        $result = $this->db->query($query);
        return $result->result();
    }
	function informatio_seating2($roll_no){
		$query = "SELECT room,block,building,batch,entry,reportingtime,starttime from seatingplan where rollnumberfrom <=".$roll_no." AND rollnumberto >= ".$roll_no."  ";
		$result = $this->db->query($query);
        return $result->result();
	}

}

?>