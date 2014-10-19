<?php
class Homepage extends CI_Controller{

    function index(){
      //$data['title']='Welcome';
        $this->load->view('v_header');
        $this->load->view('v_homepage_body');
        $this->load->view('v_footer');
    }
    function plain_text_to_hash(){
        $plain_password='@admin_@mlm_@secret@.';
        echo hash('sha512',$plain_password.config_item('encryption_key'));
    }

}