<?php

class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insertUser($data) {
        //return $this->db->insert('user', $data);
        //var_dump($data);

        $this->db->trans_start();
        $this->db->insert('user', $data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        if (!$this->db->trans_status()) {
            return false;
        } else {
            return $insert_id;
        }
    }

    function updateUser($data) {
        //return $this->db->insert('user', $data);
        //var_dump($data);

        $this->db->trans_start();
        $this->db->update('user', $data);
        $this->db->trans_complete();
        if (!$this->db->trans_status()) {
            return false;
        } else {
            return true;
        }
    }

    function sendEmail($to_email, $rand, $uid) {
        $from_email = 'newleaf.lk';
        $subject = 'Verify Your Email Address';
        $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://localhost/newleaf/activate/' . $uid . '_' . $rand . '<br /><br /><br />Thanks<br />newleaf Team';

        $config['protocol'] = 'sendmail';
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $this->email->initialize($config);

        $this->email->from($from_email, 'test');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        //mad
        echo $message;
        return $this->email->send();
    }

    function verifyEmailID($id, $key) {
        $data = array('activation' => 1);
        $this->db->from('user');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {

            $result = $query->row();
            if ($result->rand == $key) {

                $this->db->set('activation', '1');
                $this->db->where('id', $id);
                $status = $this->db->update('user');
                return $status;
            } else {
                return false;
            }
        } else {
            return false;
        }

        //$this->db->where('md5(email)', $key);
        //return $this->db->update('user', $data);
    }

    function checkAuth($username, $password) {
        $this->db->from('user');
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        $ret = $query->num_rows();
        if ($ret >= 1) {
            //echo 'in';
            $result = $query->row();
            if ($result->activation == 1) {
                return true;
            } else {
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    function is_user_exist($email) {
        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $ret = $query->num_rows();
        if ($ret == 0) {
            return false;
        } else {
            return true;
        }
    }

    function get_user($email) {

        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        }

        return false;
    }

    function get_user_data($email) {
        $user_data = $this->get_user($email); //check null

        $data = $user_data;
        $json_data = json_encode($data);
        return $json_data;
    }
    


}

?>