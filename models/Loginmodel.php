<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class loginModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function verify_login($username, $password) {
        $query = "SELECT * FROM regsiter where username = '" . $username . "' && password='" . $password . "'";
        $result = $this->db->query($query);
        return $result->result();
    }

}

?>