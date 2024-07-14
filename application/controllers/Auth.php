<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'security'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('User_model');
    }

    // public function register() {
    //     $this->form_validation->set_rules('name', 'Name', 'required');
    //     $this->form_validation->set_rules('last_name', 'Last Name', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[ci_user.email]');
    //     $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    //     $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');
        
    //     if ($this->form_validation->run() === FALSE) {
    //         $this->load->view('auth/register');
    //     } else {
    //         $data = array(
    //             'name' => $this->input->post('name'),
    //             'last_name' => $this->input->post('last_name'),
    //             'email' => $this->input->post('email'),
    //             'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
    //         );

    //         // $user_id = $this->User_model->insert_user($data);
    //         $this->User_model->insert_user($data);

    //         // Send confirmation email
    //         $this->_send_confirmation_email($data['email'], $data['name'], $this->input->post('password'));

    //         // Redirect to user dashboard
    //         $this->session->set_flashdata('success', 'Registration successful! Check your email.');
    //         redirect('auth/profile');
    //     }
    // }

    // private function _send_confirmation_email($email, $name, $password) {
    //     $this->email->from('no-reply@yourdomain.com', 'Your App');
    //     $this->email->to($email);
    //     $this->email->subject('Registration Successful');
    //     $this->email->message("Dear $name,\n\nYour registration was successful. Here are your login details:\n\nEmail: $email\nPassword: $password\n\nThank you.");
    //     // $this->email->send();

    //     if ($this->email->send()) {
    //         log_message('info', 'Email sent to ' . $email);
    //     } else {
    //         log_message('error', 'Failed to send email to ' . $email);
    //     }
    // }

    // // public function profile() {
    // //     if (!$this->session->userdata('logged_in')) {
    // //         redirect('auth/login');
    // //     }

    // //     $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));
    // //     $this->load->view('auth/profile', $data);
    // // }

    // public function profile() {
    //     if (!$this->session->userdata('user_id')) {
    //         redirect('auth/login');
    //     }

    //     // $data['user'] = $this->User_model->get_user_by_email($this->session->userdata('email'));
    //     // $this->load->view('auth/profile', $data);
    //     $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));
    //     if (!$data['user']) {
    //         $this->session->set_flashdata('error', 'User not found.');
    //         redirect('auth/login');
    //     }
    //     $this->load->view('auth/profile', $data);
    // }

    // public function login() {
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //     $this->form_validation->set_rules('password', 'Password', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('auth/login');
    //     } else {
    //         $email = $this->input->post('email');
    //         $password = $this->input->post('password');

    //         $user = $this->User_model->get_user_by_email($email);

    //         if ($user && password_verify($password, $user->password)) {
    //             $this->session->set_userdata('user_id', $user->id);
    //             $this->session->set_userdata('email', $user->email);
    //             redirect('auth/profile');
    //         } else {
    //             $this->session->set_flashdata('error', 'Invalid email or password');
    //             redirect('auth/login');
    //         }
    //     }
    // }

    // public function update_profile() {
    //     if (!$this->session->userdata(/*'logged_in'*/ 'user_id')) {
    //         redirect('auth/login');
    //     }

    //     $this->form_validation->set_rules('name', 'Name', 'required');
    //     $this->form_validation->set_rules('last_name', 'Last Name', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //     if ($this->input->post('password')) {
    //         $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    //     }

    //     if ($this->form_validation->run() === FALSE) {
    //         $this->profile();
    //     } else {
    //         $data = array(
    //             'name' => $this->input->post('name'),
    //             'last_name' => $this->input->post('last_name'),
    //             'email' => $this->input->post('email'),
    //         );

    //         if ($this->input->post('password')) {
    //             $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
    //         }

    //         $this->User_model->update_user($this->session->userdata('user_id'), $data);
    //         $this->session->set_flashdata('success', 'Profile updated successfully');
    //         redirect('auth/profile');
    //     }
    // }


    
    // private function check_user_session() {
    //     if (!$this->session->userdata('user_id')) {
    //         redirect('auth/login');
    //     }
    
    //     // Ensure that the current session is not an admin session
    //     if ($this->session->userdata('admin_id')) {
    //         redirect('auth/admin_login');
    //     }
    // }

    public function register() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[ci_user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('auth/register');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            );

            $this->User_model->insert_user($data);

            // Set session data
            $user = $this->User_model->get_user_by_email($data['email']);
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('email', $user->email);

            $this->_send_confirmation_email($data['email'], $data['name']);

            $this->session->set_flashdata('success', 'Registration successful! Check your email for confirmation.');
            redirect('auth/profile');
        }
    }

    private function _send_confirmation_email($to_email, $name) {
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($to_email);
        $this->email->subject('Registration Successful');
        $this->email->message('Hello ' . $name . ', thank you for registering!');
        // $this->email->message("Dear $name,\n\nYour registration was successful. Here are your login details:\n\nEmail: $email\nPassword: $password\n\nThank you!");

        if ($this->email->send()) {
            log_message('info', 'Email sent to ' . $to_email);
        } else {
            log_message('error', 'Failed to send email to ' . $to_email);
        }
    }

    public function profile() {
        // $this->check_user_session();
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));
        if (!$data['user']) {
            $this->session->set_flashdata('error', 'User not found.');
            redirect('auth/login');
        }
        $this->load->view('auth/profile', $data);
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->get_user_by_email($email);

            if ($user && password_verify($password, $user->password)) {
                $this->session->set_userdata('user_id', $user->id);
                $this->session->set_userdata('email', $user->email);
                // Update last_interaction
                $this->User_model->update_user($user->id, ['last_interaction' => date('Y-m-d H:i:s')]);
                redirect('auth/profile');
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect('auth/login');
            }
        }
    }

    public function submit_form() {
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $this->load->view('auth/submit_form');
    }

    public function submit_message() {
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->submit_form();
        } else {
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'message' => $this->input->post('message'),
                'created_at' => date('Y-m-d H:i:s')
            );

            if ($this->User_model->insert_message($data)) {
                $this->session->set_flashdata('success', 'Message submitted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to submit message.');
            }

            redirect('auth/submit_form');
        }
    }

    public function update_profile() {
        // $this->check_user_session();
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $this->profile();
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
            );

            if ($this->input->post('password')) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            $this->User_model->update_user($this->session->userdata('user_id'), $data);

            $this->session->set_flashdata('success', 'The info has been updated!');
            redirect('auth/profile');
        }
    }

    public function message_history() {
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $data['messages'] = $this->User_model->get_user_messages($this->session->userdata('user_id'));
        $this->load->view('auth/message_history', $data);
    }

    public function forgot_password() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/forgot_password');
        } else {
            $email = $this->input->post('email');
            $user = $this->User_model->get_user_by_email($email);

            if ($user) {
                $this->_send_reset_email($user);
                $this->session->set_flashdata('success', 'A password reset link has been sent to your email.');
                redirect('auth/forgot_password');
            } else {
                $this->session->set_flashdata('error', 'Email not found.');
                redirect('auth/forgot_password');
            }
        }
    }

    // private function _send_reset_email($user) {
    //     $token = bin2hex(random_bytes(50)); // Generate a token
    //     // Save the token in the database with an expiration date
    //     $this->User_model->set_reset_token($user->id, $token);

    //     $reset_link = base_url('auth/reset_password/' . $token);
    //     $message = "Hello " . $user->name . ",\n\n";
    //     $message .= "You have requested a password reset. Please click the link below to reset your password:\n\n";
    //     $message .= $reset_link . "\n\n";
    //     $message .= "If you did not request this, please ignore this email.";

    //     $this->email->from('your@example.com', 'Your Name');
    //     $this->email->to($user->email);
    //     $this->email->subject('Password Reset');
    //     $this->email->message($message);

    //     if ($this->email->send()) {
    //         log_message('info', 'Password reset email sent to ' . $user->email);
    //     } else {
    //         log_message('error', 'Failed to send password reset email to ' . $user->email);
    //     }
    // }

    private function _send_reset_email($user) {
        $token = bin2hex(random_bytes(50)); // Generate a token
        // Save the token in the database with an expiration date
        $this->User_model->set_reset_token($user->id, $token);
    
        $reset_link = base_url('auth/reset_password/' . $token);
        $message = "Hello " . $user->name . ",\n\n";
        $message .= "You have requested a password reset. Please click the link below to reset your password:\n\n";
        $message .= $reset_link . "\n\n";
        $message .= "If you did not request this, please ignore this email.";
    
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($user->email);
        $this->email->subject('Password Reset');
        $this->email->message($message);
    
        if ($this->email->send()) {
            log_message('info', 'Password reset email sent to ' . $user->email);
        } else {
            log_message('error', 'Failed to send password reset email to ' . $user->email);
        }
    }
    

    // public function reset_password($token) {
    //     $user = $this->User_model->verify_reset_token($token);

    //     if (!$user) {
    //         $this->session->set_flashdata('error', 'Invalid or expired token.');
    //         redirect('auth/forgot_password');
    //     }

    //     $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    //     $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

    //     if ($this->form_validation->run() == FALSE) {
    //         $data['token'] = $token;
    //         $this->load->view('auth/reset_password', $data);
    //     } else {
    //         $new_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
    //         $this->User_model->update_user($user->id, array('password' => $new_password, 'reset_token' => NULL, 'token_expiration' => NULL));

    //         $this->session->set_flashdata('success', 'Password has been reset successfully. You can now log in with your new password.');
    //         redirect('auth/login');
    //     }
    // }

    public function reset_password($token) {
        $user = $this->User_model->verify_reset_token($token);
    
        if (!$user) {
            $this->session->set_flashdata('error', 'Invalid or expired token.');
            redirect('auth/forgot_password');
        }
    
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');
    
        if ($this->form_validation->run() == FALSE) {
            $data['token'] = $token;
            $this->load->view('auth/reset_password', $data);
        } else {
            $new_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            $this->User_model->update_user($user->id, array('password' => $new_password, 'reset_token' => NULL, 'token_expiration' => NULL));
    
            $this->session->set_flashdata('success', 'Password has been reset successfully. You can now log in with your new password.');
            redirect('auth/login');
        }
    }
    
    public function admin_login() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/admin_login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $admin = $this->User_model->get_admin_by_email($email);

            if ($admin && password_verify($password, $admin->password)) {
                $this->session->set_userdata('admin_id', $admin->id);
                $this->session->set_userdata('admin_email', $admin->email);
                // Update last_interaction
                $this->User_model->update_user($admin->id, ['last_interaction' => date('Y-m-d H:i:s')]);
                redirect('admin/profile'); 
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect('auth/admin_login');
            }
        }
    }

    public function admin_profile() {
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }

        $data['admin'] = $this->User_model->get_user($this->session->userdata('admin_id'));
        if (!$data['admin']) {
            $this->session->set_flashdata('error', 'Admin not found.');
            redirect('auth/admin_login');
        }
        $this->load->view('admin/profile', $data);
    }

    public function update_admin_profile() {
        if (!$this->session->userdata('admin_id')) {
            redirect('auth/admin_login');
        }

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $this->admin_profile();
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
            );

            if ($this->input->post('password')) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            if ($this->User_model->update_user($this->session->userdata('admin_id'), $data)) {
                $this->session->set_flashdata('success', 'The info has been updated!');
            } else {
                $this->session->set_flashdata('error', 'Failed to update info.');
            }
            redirect('admin/profile');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    
}

