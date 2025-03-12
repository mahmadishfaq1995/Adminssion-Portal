<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class etresultModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function fetch_result($data) {
        $query = "SELECT roll_no,cnic,full_name,testmarks FROM regsiter where roll_no = " . $data . " OR cnic = '" . $data . "' LIMIT 1";
        $result = $this->db->query($query);
        return $result->result();
    }

    public function fscresult($cnic, $roll_no) {
        $query = "SELECT r.testmarks,r.full_name,a.marks_matric,a.board_inter1,a.major_inter1,a.rollno_inter2 from `regsiter` r INNER join acadamic_info a on a.register_id = r.register_id where r.cnic='" . $cnic . "' AND r.roll_no = " . $roll_no;
        $result = $this->db->query($query);

        return $result->result();
    }

    public function save_fscresult($data) {
        if ($data['intermarks'] > 1100 || $data['intermarks'] < 549) {
            return "invalid";
        } else {
            $query = "UPDATE acadamic_info SET total_inter2=1100, major_inter2='" . $data['interboard'] . "',year_inter2='" . $data['interyear'] . "',rollno_inter2='" . $data['interroll'] . "',marks_inter2='" . $data['intermarks'] . "' where register_id= (SELECT register_id from regsiter where CNIC = '" . $data['cnic'] . "')";
            $this->db->query($query);
            $agg = round((intval($data['testmarks']) / 50), 3) * 40;
            $agg1 = round((intval($data['intermarks']) / 1100), 3) * 60;
            $agg = $agg + $agg1;
            $query = "UPDATE regsiter SET aggregate=" . $agg . " where cnic = '" . $data['cnic'] . "'";

            $this->db->query($query);
            return $agg;
        }
    }

}

?>