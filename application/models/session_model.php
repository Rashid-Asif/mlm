<?php

class Session_model extends CI_Model
{

    public function login($login_id, $pass, $email_or_username)
    {
        $this->db->where($email_or_username, $login_id);
        $this->db->where('passw', $pass);
        $query = $this->db->get('g_user');
        if ($query->num_rows() == 1) {
            foreach ($query->result() as $row) {

                $user_session_data = array(
                    'username' => $row->ap_name,
                    'privilege' => $row->privilege,
                    'email' => $row->e_mail,
                    'logged_in' => TRUE
                );
            }
            $this->session->set_userdata($user_session_data);
        }
    }

    public function loggedIn()
    {

        return (bool)$this->session->userdata('logged_in');
    }

    public function logout()
    {
        $this->session->sess_destroy();
    }

}