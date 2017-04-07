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

    public function index() {

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="help-danger help">', '</p>');

        $this->form_validation->set_rules('email', 'Email', 'required|callback_email_check');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("reset");
        } else {
            echo 'correct';
            $rand = substr(md5(rand()), 0, 7);
            $status = $this->user_model->insert_reset($this->input->post("email"), $rand);
            if ($status === FALSE) {
                echo 'failed';
            } else {
                $this->sendResetEmail($this->input->post("email"), $rand, $status->id, $status->name);
            }
        }
    }

    public function email_check($str) {
        if ($this->user_model->is_user_exist($str)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('email_check', 'cannot find a account associated with this email please check again');
            return FALSE;
        }
    }

    public function pass($reset_code) {
        $pieces = explode("_", $reset_code);
        if (sizeof($pieces) != 2) {
            return false;
        } else {
            $uid = $pieces[1];
            $key = $pieces[0];
            //echo ($uid . ' x ' . $key);
            $status = $this->user_model->verify_reset($uid, $key);
            if ($status !== FALSE) {
                echo 'you can reset now';
            } else {
                echo 'sorry!. either reset lnik expired or invalid';
            }
        }
    }

    function sendResetEmail($to_email, $rand, $uid, $name) {
        $data = array();
        $subject = 'Reset Your Password';
        $data["title"] = "title";
        $data["action"] = "Account Recovery Wizard";
        $message = "Hi $name,<br>
Please click the following link and Proceed to Recover your password 
Thank you!<br>
Regards , 
loveheart.lk
";

        $data["reset_url"] = base_url() . 'reset/pass/' . $rand . '_' . $uid;
        $this->send_email($data, $subject, "email_templates/reset", $to_email, $message);
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
