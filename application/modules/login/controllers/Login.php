<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_login');
    }

    public function utama()
    {
        $this->load->view('beranda_utama');
    }

    public function proses()
    {
        $username   = $this->input->post('username');
        $password   = md5($this->input->post('password'));
        $this->load->model('Model_login');
        $query =
            $this->Model_login->cek_login($username, $password);

        if ($query) {
            if ($query['level'] == 'admin') {
                redirect('Beranda/admin', 'refresh');
            } elseif ($query['level'] == 'dosen') {
                redirect('Beranda/dosen', 'refresh');
            } elseif ($query['level'] == 'mahasiswa') {
                redirect('Beranda/mahasiswa', 'refresh');
            } 
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal login</div>');
            redirect('login', 'refresh');
        }
    }
}