<?php

class Reset extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->library('email');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model("reg_model");
    }

    public function reset_password($reset_code) {
        
    }

}
