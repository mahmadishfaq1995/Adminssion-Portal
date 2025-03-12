<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class cprintModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function information($id) {
        $query = "SELECT father_name,district FROM personal_info where register_id =  " . $id . " LIMIT 1";

        $result = $this->db->query($query);
        return $result->result();
    }

}

?>