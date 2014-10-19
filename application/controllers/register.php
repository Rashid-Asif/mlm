<?php
class Register extends CI_Controller{

    function index(){
        $this->load->view('v_header');
        $this->load->view('v_register');
        $this->load->view('v_footer');
    }
}