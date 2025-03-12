<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class fprintModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function getformdata($id) {
        $query = "SELECT * FROM personal_info as pinfo inner join acadamic_info as ainfo on pinfo.register_id = ainfo.register_id where pinfo.register_id = " . $id . " LIMIT 1";
        $result = $this->db->query($query);
        return $result->result();
    }

}

?>