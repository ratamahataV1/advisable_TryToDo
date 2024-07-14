<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url', 'security'));
        $this->load->library(array('form_validation', 'session', 'email')); // Load email library
        // $this->load->database();
    }

    // Ensure that the current session is not an user session
    // private function check_admin_session() {
    //     if (!$this->session->userdata('admin_id')) {
    //         redirect('auth/admin_login');
    //     }
    // }

    public function admin_profile() {
        // $this->check_admin_session();
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }
    
        $this->User_model->update_user($this->session->userdata('admin_id'), ['last_interaction' => date('Y-m-d H:i:s')]);
    
        $data['admin'] = $this->User_model->get_user($this->session->userdata('admin_id'));
        if (!$data['admin']) {
            $this->session->set_flashdata('error', 'Admin not found.');
            redirect('auth/admin_login');
        }
        $this->load->view('admin/profile', $data);
    }
    

    public function customers() {
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }
        $data['customers'] = $this->User_model->get_all_customers();
        $this->load->view('admin/customers', $data);
    }

    public function customer_detail($id) {
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }
        $data['customer'] = $this->User_model->get_user($id);
        if (!$data['customer']) {
            $this->session->set_flashdata('error', 'Customer not found.');
            redirect('admin/customers');
        }
        $this->load->view('admin/customer_detail', $data);
    }

    public function edit_customer($id) {
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }
        $data['customer'] = $this->User_model->get_user($id);
        if (!$data['customer']) {
            $this->session->set_flashdata('error', 'Customer not found.');
            redirect('admin/customers');
        }
        $this->load->view('admin/edit_customer', $data);
    }

    public function update_customer($id) {
        // $this->check_admin_session();
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $this->edit_customer($id);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
            );

            if ($this->input->post('password')) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            if ($this->User_model->update_user($id, $data)) {
                $this->session->set_flashdata('success', 'The info has been updated!');
            } else {
                $this->session->set_flashdata('error', 'Failed to update info.');
            }
            redirect('admin/customer_detail/' . $id);
        }
    }

    public function delete_customer($id) {
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }
        $data['customer_id'] = $id;
        $this->load->view('admin/confirm_delete', $data);
    }

    public function confirm_delete($id) {
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }

        if ($this->User_model->delete_user($id)) {
            $this->session->set_flashdata('success', 'Customer deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete customer.');
        }
        redirect('admin/customers');
    }

    public function customer_messages($user_id) {
        $this->load->model('Message_model');
        $data['messages'] = $this->Message_model->get_messages_by_user($user_id);
        $data['title'] = "Customer Messages";

        $this->load->view('admin/messages', $data);
    }

    public function all_message_history() {
        $this->load->model('Message_model');
        $data['messages'] = $this->Message_model->get_all_messages();
        $data['title'] = "All Message History";

        $this->load->view('admin/messages', $data);
    }

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->sess_destroy();
        redirect('auth/admin_login');
    }
    
}
?>
