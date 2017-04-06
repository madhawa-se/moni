<?php

class Reg_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_contry_list() {
        $list = $this->db->get("country")->result();
        return $list;
    }

    function get_religion_list() {
        $list = $this->db->get("religion")->result();
        return $list;
    }

    function get_Lan_list() {
        $list = $this->db->get("lan")->result();
        return $list;
    }

    function get_profile_for_list() {
        $list = $this->db->get("profilefor")->result();
        return $list;
    }

}
