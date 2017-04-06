<?php

class Db_ajax extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->database();

    }
   
    function index(){
        
    }
    
    function get_country_list(){
        $this->load->model('Reg_model');
        $list=$this->Reg_model->get_contry_list();
        $json_list= json_encode($list);
        $this->json_out($json_list);
    }
    function get_religion_list(){
        $this->load->model('Reg_model');
        $list=$this->Reg_model->get_religion_list();
        $json_list= json_encode($list);
        $this->json_out($json_list);
    }
    function get_lan_list(){
        $this->load->model('Reg_model');
        $list=$this->Reg_model->get_lan_list();
        $json_list= json_encode($list);
        $this->json_out($json_list);
    }
    function get_profile_for_list(){
        $this->load->model('Reg_model');
        $list=$this->Reg_model->get_profile_for_list();
        $json_list= json_encode($list);
        $this->json_out($json_list);
    }
    
    function json_out($content){
        header('Content-Type: application/json');
        echo($content);
    }
}
