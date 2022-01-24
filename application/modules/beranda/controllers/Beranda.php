<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function admin()
    {
        $this->load->model('Model_beranda');
        $data['jml_hdr'] = $this->Model_beranda->total_hadir();
        $data['jml_keluhan'] = $this->Model_beranda->total_keluhan();
        $data['jml_data'] = $this->Model_beranda->total_data();
        $this->load->view('v_beranda', $data);
    }

    public function mahasiswa()
    {
        $this->load->view('beranda_mahasiswa');
    }

    public function dosen()
    {
        $this->load->model('Model_beranda');
        $data['jml_hdr'] = $this->Model_beranda->total_hadir();
        $data['jml_keluhan'] = $this->Model_beranda->total_keluhan();
        $data['jml_data'] = $this->Model_beranda->total_data();
        $this->load->view('beranda_dosen', $data);
    }

    function logout()
    {
        $this->session->sess_destroy($this->session->userdata('data_login'));
        redirect('Login/utama', 'refresh');
    }
}
