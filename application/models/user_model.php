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

    function insert_reset($email, $rand) {
        //return $this->db->insert('user', $data);
        //var_dump($data);

        $user = $this->get_user($email);
        if ($user === FALSE) {
            return FALSE;
        } else {
            $status = FALSE;
            if ($this->is_reset_exist($user->id)) {

                $data = array("date" => null, "rand" => $rand);
                $this->db->where('user_id', $user->id);
                $status = $this->db->update('reset', $data);
            } else {
                $data = array("date" => null, "rand" => $rand, "user_id" => $user->id);
                $status = $this->db->insert('reset', $data);
            }

            if ($status === FALSE) {
                return FALSE;
            } else {
                return $user;
            }
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
                if ($status === TRUE) {
                    return $result;
                } else {
                    return FALSE;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }

        //$this->db->where('md5(email)', $key);
        //return $this->db->update('user', $data);
    }

    function verify_reset($id, $key) {

        echo $id."<br>";
        echo $key."<br>";
        $this->db->from('reset');
        $this->db->where('user_id', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            echo 'in';
            $result = $query->row();
            if ($result->rand == $key) {

                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
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

    function is_reset_exist($id) {
        $this->db->from('reset');
        $this->db->where('user_id', $id);
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