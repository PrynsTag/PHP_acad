<?php
defined('BASEPATH') or exit('No direct script access allowed');
include(".config");

class Register extends CI_Controller
{
    public function index()
    {
        $page = "register";
        $data["title"] = ucfirst($page);

        $this->load->view("templates/header");
        $this->load->view("pages/" . $page, $data);
        $this->load->view("templates/footer");
    }

    public function validation()
    {
        global $gmailUsername;
        global $gmailPassword;

        $this->form_validation->set_rules("email", "Email Address", "required|trim|valid_email|is_unique[tsa3_table.tsa3_email]");
        $this->form_validation->set_rules("first_name", "First Name", "required|trim");
        $this->form_validation->set_rules("last_name", "Last Name", "required|trim");
        $this->form_validation->set_rules("username", "Username", "required|trim|is_unique[tsa3_table.tsa3_username]");
        $this->form_validation->set_rules("user-level", "User Level", "required|trim");
        $this->form_validation->set_rules("password", "Password", "required|trim");
        $this->form_validation->set_rules("cpassword", "Confirm Password", "required|trim|matches[password]");

        if ($this->form_validation->run()) {
            $verification_key = mt_rand(100000, 999999);
            // $encrypted_password = $this->encrypt->encode($this->input->post("password"));
            $data = array(
                "tsa3_email" => $this->input->post("email"),
                "tsa3_firstname" => $this->input->post("first_name"),
                "tsa3_lastname" => $this->input->post("last_name"),
                "tsa3_username" => $this->input->post("username"),
                "tsa3_password" => $this->input->post("password"),
                "tsa3_user_level" => $this->input->post("user-level"),
                "tsa3_code" => $verification_key
            );

            $id = $this->register_model->insert_user($data);

            if ($id > 0) {
                $subject = "Please verify your account!";
                $message = "<p>Hi " . $this->input->post('username') . "</p>" . "
                         <p>Click the link to verify your email address: " . "
                         <a href=" . base_url() . "register/verify_email/" . $verification_key . ">Link</a></p>";

                $config = array(
                    "protocol" => "smtp",
                    "smtp_host" => "smtp.gmail.com",
                    "smtp_port" => 587,
                    "_smtp_auth" => TRUE,
                    "smtp_user" => $gmailUsername,
                    "smtp_crypto" => "tls",
                    "smtp_pass" => $gmailPassword,
                    "send_multipart" => FALSE,
                    "mailtype" => "html",
                    "charset" => "utf-8",
                    "wordwrap" => TRUE,
                );

                $this->email->initialize($config);
                $this->email->set_newline("\r\n");
                $this->email->from($gmailUsername);
                $this->email->to($this->input->post("email"));
                $this->email->subject($subject);
                $this->email->message($message);

                if ($this->email->send()) {
                    $this->session->set_flashdata("message", "Check your email to verify your account!");
                    redirect("register");
                } else {
                    show_error($this->email->print_debugger());
                }
            } else {
                show_error("Account not added, try again..");
                redirect("register");
            }
        } else {
            $this->index();
        }
    }

    public function verify_email()
    {
        $key = $this->uri->segment(3);
        if ($key) {
            if ($this->register_model->verify_email($key)) {
                $data['message'] = '
                  <h1 align="center">Your Email has been successfully verified, now you can login from 
                    <a href="' . base_url() . 'login">here</a>
                  </h1>';
            } else {
                $data['message'] = '<h1 align="center">Invalid Link</h1>';
            }
            $data["title"] = ucfirst("Email Verification");
            $this->load->view("templates/header", $data);
            $this->load->view("pages/email_verified", $data);
            $this->load->view("templates/footer");
        }
    }
}