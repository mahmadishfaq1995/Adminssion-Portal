<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class settingModel extends CI_Model {

    function __construct() {

        parent::__construct();
        $CI = &get_instance();
        $this->db = $CI->load->database('default', TRUE);
    }

    function admin_users() {
        $query = "SELECT * FROM regsiter where access_right='admin' && register_id != " . $this->session->userdata('id') . "";
        $result = $this->db->query($query);
        return $result->result();
    }

    function setting_profile() {
        $query = "SELECT * FROM regsiter where access_right='admin' && register_id = " . $this->session->userdata('id') . "";
        $result = $this->db->query($query);
        return $result->result();
    }

    function edit_admin($id) {
        $query = "SELECT * FROM regsiter where register_id=" . $id . "";
        $result = $this->db->query($query);
        return $result->result();
    }

    function delete_admin($id) {
        $query = "delete FROM regsiter where register_id=" . $id . "";
        $result = $this->db->query($query);
        return 'done';
    }

    function save_new_admin($username, $password, $my_name, $address, $email, $gender) {
        $query = "INSERT INTO regsiter (full_name,password,username,cnic,email,gender,access_right) values ('" . $my_name . "','" . $password . "','" . $username . "','" . $address . "','" . $email . "','" . $gender . "','admin')";
        $result = $this->db->query($query);
        return 'done';
    }

    function save_edit_admin($username, $password, $my_name, $email, $id) {
        $query = "UPDATE regsiter set username = '" . $username . "',password = '" . $password . "',full_name = '" . $my_name . "',email = '" . $email . "' where register_id = " . $id . "";
        $result = $this->db->query($query);
        return 'done';
    }

}

?>