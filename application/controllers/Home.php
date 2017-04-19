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
        $this->load->view('home', $this->view_data);
        
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

            $this->form_validation->set_rules('profile', 'profile for', 'required');
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
            'profilefor' => $this->input->post('profile'),
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
            if ($this->sendRegEmail($this->input->post('email'), $insert_id, $random, $this->input->post('name'))) {
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
            if ($status !== FALSE) {
                echo 'account activated succefully<br>.login here';
                $this->sendActivateEmail($status->email, $status->name, $status->email, $this->md5Dey($status->password));
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

    function md5Dey($en_pass) {
        $this->load->library('encrypt');
        $de_pass = $this->encrypt->decode($en_pass, $this->config->item("encryption_key"));
        echo $en_pass."   ".$this->config->item("encryption_key");
        return $de_pass;
    }

    function sendActivateEmail($to_email,$name, $username, $password) {
        $data = array();
        $subject = 'Marriage Proposal Sri Lanka, Lanka Matrimony, Brides Sri Lanka - Registration successful!';
        $data["title"] = "title";
        $data["action"] = "Your Account Activated !";
        $message = "Hi $name,
You've successfully registered with loveheart .lk . Your account details as follows:
<br>
Username: $username<br>
Password: $password<br>
Thank you!

";

        $data["login_url"] = base_url();
        $this->send_email($data, $subject, "email_templates/activated", $to_email, $message);
    }

    function sendRegEmail($to_email, $rand, $uid, $name) {
        $data = array();
        $subject = 'Please validate your Marriage Proposal Sri Lanka';
        $data["title"] = "title";
        $data["action"] = "Account Registration successful!";
        $message = "Hi $name,
Please validate your registration by clicking on the following link: <link>
Thank you!<br>
Regards , 
loveheart.lk
";

        $data["activate_url"] = base_url() . 'activate/' . $uid . '_' . $rand;
        $this->send_email($data, $subject, "email_templates/reg", $to_email, $message);
    }

    function send_email($data, $subject, $view_name, $to_email, $message) {

        $from_email = 'loveheart.lk';
        $company_name = 'Love Heart';
        $site = base_url();

        $data["company_name"] = $company_name;
        $data["site"] = $site;
        $data["from_email"] = $from_email;


        $data["title"] = "title";
        $data["message"] = $message;
        $content = $this->load->view($view_name, $data, TRUE);
        $data["subject"] = $subject;

        $config['protocol'] = 'sendmail';
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $this->email->initialize($config);

        $this->email->from($from_email, "$from_email");
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($content);
        //mad
        echo $content;
        return $this->email->send();
    }

}
