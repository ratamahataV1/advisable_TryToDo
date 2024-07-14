<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {
    public function get_messages_by_user($user_id) {
        $this->db->select('messages.*, ci_user.name as user_name, ci_user.last_name as user_last_name, ci_user.email as user_email');
        $this->db->from('messages');
        $this->db->join('ci_user', 'ci_user.id = messages.user_id');
        $this->db->where('messages.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_messages() {
        $this->db->select('messages.*, ci_user.name as user_name, ci_user.last_name as user_last_name, ci_user.email as user_email');
        $this->db->from('messages');
        $this->db->join('ci_user', 'ci_user.id = messages.user_id');
        $query = $this->db->get();
        return $query->result();
    }
}
