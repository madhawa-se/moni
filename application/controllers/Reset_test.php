<?php

class Reset_test extends CI_Controller{

    public function index() {
        $this->load->helper(array('form'));
        $this->load->library('email');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model("reg_model");
        $this->load->view("reset");
    }

}
