<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class printchallanModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function edit_personal($id) {
        $query = "SELECT * FROM personal_info where register_id =  " . $id . " LIMIT 1";
        $result = $this->db->query($query);
        return $result->result();
    }

    function edit_academic($id) {
        $query = "SELECT * FROM acadamic_info where register_id =  " . $id . " LIMIT 1";
        $result = $this->db->query($query);
        return $result->result();
    }

    public function save_edit_data($data) {
        $query = "UPDATE personal_info SET name='" . $data['name'] . "',dob='" . $data['dob'] . "',gender='" . $data['gender'] . "',cnic='" . $data['cnic'] . "',father_name='" . $data['fname'] . "',father_cnic='" . $data['fcnic'] . "',district='" . $data['district'] . "',phone_no='" . $data['phone_no'] . "',mobile_no='" . $data['mobile_no'] . "',email='" . $data['email'] . "',address='" . $data['address'] . "' where register_id = " . $data['id'];
        $result = $this->db->query($query);
        return "done";
    }

    public function save_edit_adata($data) {
        $query = " UPDATE `acadamic_info` SET `year_matric` = " . $data['myear'] . ", `rollno_matric` =" . $data['mroll'] . " , `marks_matric` = " . $data['mmarks'] . ", `total_matric` = " . $data['mtotal'] . ", `board_matric` = '" . $data['mboard'] . "', `year_inter1` = " . $data['iyear1'] . ", `rollno_inter1` = " . $data['iroll1'] . ", `marks_inter1` = " . $data['imarks1'] . ", `total_inter1` = " . $data['itotal1'] . ", `major_inter1` = '" . $data['imajor1'] . "', `board_inter1` = '" . $data['iboard1'] . "', `year_inter2` =" . $data['iyear2'] . ", `rollno_inter2` = " . $data['iroll2'] . ",`marks_inter2` = " . $data['imarks2'] . ",`total_inter2` = " . $data['itotal2'] . ", `major_inter2` = '" . $data['imajor2'] . "', `board_inter2` = '" . $data['iboard2'] . "' WHERE register_id = " . $data['id'];
        $result = $this->db->query($query);
        return "done";
    }

    public function save_challan($id) {
        $query = "INSERT INTO `tbl_challan_submit`( `register_id`, `challan_img`, `is_verified`, `submitted_on`) VALUES (" . $id . ",'" . $id . ".jpg','0','" . date('Y-m-d') . "')";
        $result = $this->db->query($query);
        return "done";
    }

    public function check_challan($id) {
        $query = "SELECT * from `tbl_challan_submit` where register_id=" . $id;
        $result = $this->db->query($query);
        return $result;
    }

    public function test_marks($id) {
        $query = "SELECT r.testmarks,a.year_inter2,a.marks_inter2,a.rollno_inter2,a.board_inter1 from `regsiter` r INNER join acadamic_info a on a.register_id = r.register_id where r.register_id=" . $id;
        $result = $this->db->query($query);

        return $result->result();
    }

    public function update_result($id, $data) {
        $query = "UPDATE acadamic_info SET board_inter2='" . $data['board2'] . "',year_inter2='" . $data['year2'] . "',rollno_inter2='" . $data['roll2'] . "',marks_inter2='" . $data['marks2'] . "' where register_id=" . $id;
        $this->db->query($query);

        return 'yes';
    }

}

?>