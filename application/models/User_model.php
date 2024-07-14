<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('ci_user');

        return $query->num_rows() == 1;
    }

    // public function insert_user($data) {
    //     $this->db->insert('ci_user', $data);
    //     return $this->db->insert_id();
    // }
    public function insert_user($data) {
        return $this->db->insert('ci_user', $data); 
    }

    // public function get_user_by_email($email) {
    //     $this->db->where('email', $email);
    //     $query = $this->db->get('ci_user');

    //     return $query->row();
    // }
    public function get_user_by_email($email) {
        $query = $this->db->get_where('ci_user', array('email' => $email));
        return $query->row();  // Return as object
    }

    public function get_user($user_id) {
        $query = $this->db->get_where('ci_user', array('id' => $user_id));
        return $query->row();   // Return as object
    }

    public function update_user($user_id, $data) {
        $this->db->where('id', $user_id);
        return $this->db->update('ci_user', $data);
    }

    public function insert_message($data) {
        return $this->db->insert('messages', $data); // messages is the table name
    }

    public function get_user_messages($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('messages');
        return $query->result();
    }

    // public function set_reset_token($user_id, $token) {
    //     $data = array(
    //         'reset_token' => $token,
    //         'token_expiration' => date('Y-m-d H:i:s', strtotime('+1 hour'))
    //     );
    //     $this->db->where('id', $user_id);
    //     return $this->db->update('ci_user', $data);
    // }

    public function set_reset_token($user_id, $token) {
        $data = array(
            'reset_token' => $token,
            'token_expiration' => date('Y-m-d H:i:s', strtotime('+1 hour'))
        );
        $this->db->where('id', $user_id);
        return $this->db->update('ci_user', $data);
    }
    
    public function verify_reset_token($token) {
        $this->db->where('reset_token', $token);
        $this->db->where('token_expiration >', date('Y-m-d H:i:s'));
        $query = $this->db->get('ci_user');
        return $query->row();
    }

    public function get_admin_by_email($email) {
        $query = $this->db->get_where('ci_user', array('email' => $email, 'is_admin' => 1));
        return $query->row();
    }

    public function get_all_customers() {
        $this->db->select('id, name, last_name, email, last_interaction');
        $this->db->where('is_admin', 0);
        $query = $this->db->get('ci_user');
        return $query->result();
    }

    public function delete_user($user_id) {
        return $this->db->delete('ci_user', array('id' => $user_id));
    }
}
