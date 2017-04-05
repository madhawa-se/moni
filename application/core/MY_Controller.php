<?php

class My_Controller extends CI_Controller {

    protected $loggedin = false;
    protected $view_data=array();
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->library('email');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model("reg_model");
        $this->genarate_header();
    }

    public function genarate_header() {
        if ($this->session->has_userdata('loggedin')) {
            $this->loggedin = true;
            $login_data = $this->session->userdata('loggedin');
            $uname = $login_data["username"];
            //echo ("hello $uname ! welcome back");
            $template_header=$this->load->view("headers/header_log",'',TRUE);
        } else {
            $template_header=$this->load->view("headers/header_def",'',TRUE);
        }
        $this->view_data["header"]=$template_header;
    }

}
