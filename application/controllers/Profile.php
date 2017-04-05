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
        $this->base_profile();
    }

    public function edit() {
        $login_data = $this->session->userdata('loggedin');
        $email = $login_data["username"];
        $this->view_data["menu"] = "edit";
        $this->view_data["jsondata"] = $this->user_model->get_user_data($email);
        $this->base_profile();
    }

    function base_profile() {
        $login_data = $this->session->userdata('loggedin');
        $email = $login_data["username"];
        if ($this->user_model->get_user($email) !== FALSE) {
            $this->view_data["uname"] = $this->user_model->get_user($email)->name;
            $this->load->view('profile', $this->view_data);
        } else {
            redirect('/home');
        }
    }

    //check auth in mycontroller
}
