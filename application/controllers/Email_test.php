<?php

class Email_test extends CI_Controller {

    //put your code here
    public function index() {
        $uid = 1;
        $rand = 222;
        $data = array();
        $from_email = 'loveheart.lk';
        $company_name = 'Love Heart';
        $site = base_url();
        $subject = 'Please validate your Marriage Proposal Sri Lanka';


        $data["company_name"] = $company_name;
        $data["site"] = $site;
        $data["title"] = "title";
        $data["action"] = "Activate your account";
        $data["message"] = "Hi Jayantha,
Please validate your registration by clicking on the following link: <link>
Thank you!<br>
Regards , 
loveheart.lk
";
        $data["from_email"] = $from_email;
        $data["subject"] = $subject;
        $data["activate_url"] = base_url() . 'activate/' . $uid . '_' . $rand;

        $message = $this->load->view("email_templates/reg", $data, TRUE);
        //mad
        echo $message;
    }

}
