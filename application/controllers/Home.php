<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form'));
        $this->load->library('email');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model("reg_model");
    }

    function index() {
        if ($this->loggedin) {
            $this->log_check();
        } else {
            $this->register();
        }
    }

    function log_check() {
        $login_data = $this->session->userdata('loggedin');
        $uname = $login_data["username"];
        ///echo ("hello $uname ! welcome back");
        //$this->load->view('home', $this->view_data);
        redirect('/profile');
    }

    function register() {

        $data = array();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="help-danger help">', '</p>');

        if ($this->input->post('register')) {
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');

            $this->form_validation->set_rules('profilefor', 'profile for', 'required');
            $this->form_validation->set_rules('gender', 'gender', 'required');
            $this->form_validation->set_rules('mothertongue', 'mother tongue', 'required');
            $this->form_validation->set_rules('religion', 'religion', 'required');
            $this->form_validation->set_rules('terms', 'terms', 'required');
            $this->form_validation->set_rules('livein', 'livein', 'required');


            if ($this->form_validation->run()) {
                $this->reg_submit();
            } else {
                $this->view_data['reg_errors'] = validation_errors();
            }
        } else if ($this->input->post('login')) {
            $this->form_validation->set_rules('user', 'user name', 'required');
            $this->form_validation->set_rules('pass', 'password', 'required');


            if ($this->form_validation->run()) {
                $this->login_submit();
            } else {
                $this->view_data['login_errors'] = validation_errors();
            }
        }
        $this->view_data['countries'] = $this->reg_model->get_contry_list();

        $timestamp = strtotime('-18 years');
        $date = date('Y', $timestamp);
        $date = intval($date);
        $this->view_data['year_offset'] = $date;
        
        $this->load->view('home', $this->view_data);
    }

    function login_submit() {
        $username = $this->input->post('user');
        $password = md5($this->input->post('pass'));
        $status = $this->user_model->checkAuth($username, $password);
        if ($status == true) {
            $logindata = array(
                'username' => $username,
                'logged_in' => TRUE
            );
            //$this->session->sess_expiration = '14400';
            $this->session->set_userdata('loggedin', $logindata);
            //logged in success
            $this->log_check();
        } else {
            echo 'login fail';
        }
    }

    function reg_submit() {
        $random = substr(md5(rand()), 0, 7);
        $date = new DateTime();
        $date->setDate($this->input->post('year'), $this->input->post('month'), $this->input->post('day'));
        $date = $date->format('Y-m-d');
        $today = date('Y-m-d');
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'rand' => $random,
            'activation' => '0',
            'religion' => $this->input->post('religion'),
            'profilefor' => $this->input->post('profilefor'),
            'lan' => $this->input->post('mothertongue'),
            'country' => $this->input->post('livein'),
            'birthday' => $date,
            'reg_date' => $today,
            'gender' => $this->input->post('gender')
        );

        // insert form data into database
        $status = $this->user_model->insertUser($data);
        if ($status === FALSE) {
            echo 'form submit error';
        } else {
            $insert_id = $status;
            // send email
            if ($this->user_model->sendEmail($this->input->post('email'), $insert_id, $random)) {
                echo 'email sent please check your email address';
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

    public function email_check($str) {
        if ($this->user_model->is_user_exist($str)) {
            $this->form_validation->set_message('email_check', 'already a memmber try login');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
