<?php

class Profile extends My_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form'));
        $this->load->library('email');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model("reg_model");
    }

    public function index() {
        $this->load->view('profile', $this->view_data);
    }

}
