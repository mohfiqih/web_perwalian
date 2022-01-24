<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{
    public function cek_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('tb_user');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'username' => $row->username,
                    'password' => $row->password,
                    'level' => $row->role
                );
            }
            $this->session->set_userdata($sess);
            return $sess;
        } else {
            $this->session->set_flashdata('info', 'Maaf Username dan Password Anda salah!');
            return false;
        }
    }
}
