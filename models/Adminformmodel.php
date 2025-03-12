<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class adminformModel extends CI_Model {

    var $table = 'personal_info';
    var $column_order = array(null, 'register_id', 'name', 'dob', 'gender', 'cnic', 'father_name', 'father_cnic'); //set column field database for datatable orderable
    var $column_search = array('register_id', 'name', 'dob', 'gender', 'cnic', 'father_name', 'father_cnic'); //set column field database for datatable searchable
    var $order = array('pinfo_id' => 'asc'); // default order

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    private function _get_datatables_query() {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) { // loop column
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables() {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_user_info($id) {
        $query = "SELECT * FROM personal_info as pinfo inner join acadamic_info as ainfo on pinfo.register_id = ainfo.register_id where pinfo.register_id = " . $id;
        $result = $this->db->query($query);
        return $result->result();
    }

    public function update_data($data, $register_id) {
        $query = "UPDATE personal_info SET name='" . $data['name'] . "',dob='" . $data['dob'] . "',gender='" . $data['gender'] . "',cnic='" . $data['cnic'] . "',father_name='" . $data['fname'] . "',father_cnic='" . $data['fcnic'] . "',phone_no='" . $data['phone_no'] . "',mobile_no='" . $data['mobile_no'] . "',email='" . $data['email'] . "',address='" . $data['address'] . "' where register_id = " . $register_id;
        $result = $this->db->query($query);
        $query = " UPDATE `acadamic_info` SET `year_matric` = " . $data['myear'] . ", `rollno_matric` =" . $data['mroll'] . " , `marks_matric` = " . $data['mmarks'] . ", `total_matric` = " . $data['mtotal'] . ", `board_matric` = '" . $data['mboard'] . "', `year_inter1` = " . $data['iyear1'] . ", `rollno_inter1` = " . $data['iroll1'] . ", `marks_inter1` = " . $data['imarks1'] . ", `total_inter1` = " . $data['itotal1'] . ", `major_inter1` = '" . $data['imajor1'] . "', `board_inter1` = '" . $data['iboard1'] . "', `year_inter2` =" . $data['iyear2'] . ", `rollno_inter2` = " . $data['iroll2'] . ", `marks_inter2` = " . $data['imarks2'] . ", `total_inter2` = " . $data['itotal2'] . ", `major_inter2` = '" . $data['imajor2'] . "', `board_inter2` = '" . $data['iboard2'] . "' WHERE register_id = " . $register_id;
        $result = $this->db->query($query);
        return "done";
    }

    function verify_challan($id) {
        $query = "SELECT is_verified FROM tbl_challan_submit where register_id = " . $id;
        $result = $this->db->query($query);
        return $result->result();
    }

    function verify_challan_now($id) {
        $query = "UPDATE tbl_challan_submit set is_verified='1' where register_id = " . $id;
        $this->db->query($query);
        return 'done';
    }

    function verify_marks($id) {
        $query = "SELECT * FROM test_result where register_id = " . $id;
        $result = $this->db->query($query);
        return $result->result();
    }

    function marks_insert($id, $marks) {
        $query = "SELECT `marks_matric`,`marks_inter1`,`marks_inter2` FROM `acadamic_info` WHERE register_id =" . $id;
        $result = $this->db->query($query);
        $list = $result->result();
        $query = "INSERT INTO `test_result`(`register_id`, `total_marks`, `marks_obtained`, `matric_marks`, `inter1_marks`, `inter2_marks`, `result_percentage`, `result_status`) VALUES (" . $id . ",50," . $marks . "," . $list[0]->marks_matric . "," . $list[0]->marks_inter1 . "," . $list[0]->marks_inter2 . ",0,'none')";
        $this->db->query($query);
        return 'done';
    }

    function marks_update($id, $marks) {

        $query = "UPDATE test_result SET marks_obtained = " . $marks . " where register_id =" . $id;
        $this->db->query($query);
        return 'done';
    }

}

?>