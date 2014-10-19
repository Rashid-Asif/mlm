<?php

class User_login extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->isLoggedIn();
    }

    function isLoggedIn(){
        $this->load->model('session_model');
        $var=$this->session_model->loggedIn();
        if($var==TRUE){
           // redirect('homepage');
        }
    }


    function _plain_text_to_hash($plan_pass)
    {

        return hash('sha512', $plan_pass . config_item('encryption_key'));

    }

    function check_user_identity()
    {

        $check_email_or_username = "login_id"; //login_id is the database column id
        $this->load->library('form_validation');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');

        if (filter_var($this->input->post('email_or_user_id'), FILTER_VALIDATE_EMAIL)) {

            $this->form_validation->set_rules('email_or_user_id', 'Email', 'trim|required|valid_email');
            $check_email_or_username = "e_mail";
        } else {
            $this->form_validation->set_rules('email_or_user_id', 'USER NAME', 'trim|required');
        }


        if ($this->form_validation->run() == FALSE) {

            // redirect(site_url('homepage'));
            $error = validation_errors();
            die();
            $data['record'] = $error;
            //print_r($data);
            //echo "<script>javascript:alert('$error');</script>";
            //usleep(2000000);
            //redirect(site_url('homepage'));
            //$error=validation_errors();
            //echo $error;
            //print_r($this->uri->segment(3));
            //echo $this->uri->segment(2);
            //sleep(10);
            //redirect(site_url('homepage'));
            //$data['record']=$error;
            //echo "<script>javascript:alert('".$data['record']."')</script>";

            // header("refresh:20000000;url=".$uri);


        } else {

            $login_id = trim($this->input->post('email_or_user_id'));
            $this->load->model('session_model');
            $Hash_pass = $this->_plain_text_to_hash($this->input->post('pass'));
            $result = $this->session_model->login($login_id, $Hash_pass, $check_email_or_username);

            if ($this->session_model->loggedIn()) {
               redirect('user_home/index');

            } else {
                $data['error'] = 'Invalid or Password';
                echo 'Invalid email/Password';
                die();
            }
        }

    }

}