<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->database();
        $this->load->model('user_model');
    }

    function index() {

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        //$this->form_validation->set_rules('name', 'name', 'required');
        //$this->form_validation->set_rules('name', 'name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home');
        } else {
            $random = substr(md5(rand()), 0, 7);
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'rand' => $random,
                'activation' => '0'
            );

            // insert form data into database
            if ($this->user_model->insertUser($data)) {
                $insert_id = $this->db->insert_id();
                // send email
                if ($this->user_model->sendEmail($this->input->post('email'), $insert_id, $random)) {
                    echo 'email sent please check your email address';
                }
            } else {
                echo 'form submit error';
            }

            //$this->load->view('formsuccess');
        }
    }

    function login() {
        $this->form_validation->set_rules('user', 'user name', 'required');
        $this->form_validation->set_rules('pass', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home');
        } else {
            $username = $this->input->post('user');
            $password = $this->input->post('pass');
            $status = $this->user_model->checkAuth($username, $password);
            if ($status == true) {
                echo 'you are logged in';
            } else {
                echo 'login fail';
            }
        }
    }

    function activate($token) {
        $pieces = explode("_", $token);
        if (sizeof($pieces) != 2) {
            return false;
        } else {
            $uid = $pieces[1];
            $key = $pieces[0];
            //echo ($uid . ' x ' . $key);
            $status = $this->user_model->verifyEmailID($uid, $key);
            if ($status == true) {
                echo 'account activated succefully<br>.login here';
            } else {
                echo 'sorry!. account activation failed';
            }
        }
    }

}
