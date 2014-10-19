<?php
class User_home extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->_isLoggedIn();
    }

    function _isLoggedIn(){
        $this->load->model('session_model');
        $var=$this->session_model->loggedIn();
        if($var!=TRUE){
           redirect('homepage');
        }
    }
    function index(){
        $this->load->view('v_header');
        $this->load->view('user/v_user_home');
        $this->load->view('v_footer');
    }
    function  logout(){
        $this->load->model('session_model');
        $this->session_model->logout();
        redirect('homepage');
    }
}