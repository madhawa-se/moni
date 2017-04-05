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

    function register() {

        $data = array();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="help-danger help">', '</p>');


        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        $this->form_validation->set_rules('profilefor', 'profile for', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('mothertongue', 'mother tongue', 'required');
        $this->form_validation->set_rules('religion', 'religion', 'required');
        $this->form_validation->set_rules('livein', 'livein', 'required');


        if ($this->form_validation->run()) {
            $this->reg_submit();
        } else {
            $this->view_data['update_errors'] = validation_errors();
        }

        $this->view_data['countries'] = $this->reg_model->get_contry_list();
        $this->edit();
    }

    function reg_submit() {
        $date = new DateTime();
        $date->setDate($this->input->post('year'), $this->input->post('month'), $this->input->post('day'));
        $date = $date->format('Y-m-d');
        
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'religion' => $this->input->post('religion'),
            'profilefor' => $this->input->post('profilefor'),
            'lan' => $this->input->post('mothertongue'),
            'country' => $this->input->post('livein'),
            'birthday' => $date,
            'gender' => $this->input->post('gender')
        );

        // insert form data into database
        $status = $this->user_model->updateUser($data);
        if ($status === FALSE) {
            echo 'profile update is failed';
        } else {
            echo 'profile updated succefully';
        }
    }

    //check auth in mycontroller
}
