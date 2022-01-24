<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluhan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_keluhan');
    }

    //admin//
    function keluhan_admin()
    {
        $data['page'] = 'keluhan_admin';
        $queryAllKeluhan = $this->Model_keluhan->getDataKeluhan();
        $data['queryAllKeluh'] = $queryAllKeluhan;
        $data['jml_keluhan'] = $this->Model_keluhan->total_keluhan();
        $this->load->view('v_keluhan', $data, FALSE);
    }

    //dosen//
    function keluhan_dosen()
    {
        $data['page'] = 'keluhan_dosen';
        $queryAllKeluhan = $this->Model_keluhan->getDataKeluhan();
        $data['queryAllKeluh'] = $queryAllKeluhan;
        $data['jml_keluhan'] = $this->Model_keluhan->total_keluhan();
        $this->load->view('keluhan_dosen', $data, FALSE);
    }

    //mahasiswa//
    function Daftar_Keluhan()
    {
        $data['page'] = 'Daftar_Keluhan';
        $queryAllKeluhan = $this->Model_keluhan->getDataKeluhan();
        $data['queryAllKeluh'] = $queryAllKeluhan;
        $data['jml_keluhan'] = $this->Model_keluhan->total_keluhan();
        $this->load->view('keluhan_mahasiswa', $data, FALSE);
    }

    // Keluhan //
    public function edit_keluhan($id_keluhan)
    {
        $queryKeluhanDetail = $this->Model_keluhan->getDataKeluhanDetail($id_keluhan);
        $DATA = array('queryKeluhDetail' => $queryKeluhanDetail);
        $this->load->view('edit_keluhan', $DATA);
    }

    public function fungsiTambah()
    {
        $id_keluhan = $this->input->post('id_keluhan');
        $nim_mhs = $this->input->post('nim_mhs');
        $nama_mhs = $this->input->post('nama_mhs');
        $keluhan = $this->input->post('keluhan');

        $ArrInsert = array(
            'id_keluhan' => $id_keluhan,
            'nim_mhs' => $nim_mhs,
            'nama_mhs' => $nama_mhs,
            'keluhan' => $keluhan,
        );
        $this->Model_keluhan->insertDataKeluhan($ArrInsert);
        redirect(base_url('Keluhan/Daftar_Keluhan'));
    }

    //edit admin//
    public function fungsiEdit()
    {
        $id_keluhan = $this->input->post('id_keluhan');
        $nim_mhs = $this->input->post('nim_mhs');
        $nama_mhs = $this->input->post('nama_mhs');
        $keluhan = $this->input->post('keluhan');

        $ArrUpdate = array(
            'nim_mhs' => $nim_mhs,
            'nama_mhs' => $nama_mhs,
            'keluhan' => $keluhan,
        );
        $this->Model_keluhan->updateDataKeluhan($id_keluhan, $ArrUpdate);
        redirect(base_url('Keluhan/keluhan_admin'));
    }

    //delete admin//
    public function fungsiDeleteAdmin($id_keluhan)
    {
        $this->Model_keluhan->deleteDataKeluhan($id_keluhan);
        redirect(base_url('Keluhan/keluhan_admin'));
    }

    //delete dosen//
    public function fungsiDeleteDosen($id_keluhan)
    {
        $this->Model_keluhan->deleteDataKeluhan($id_keluhan);
        redirect(base_url('Keluhan/keluhan_dosen'));
    }

    function logout()
    {
        $this->session->sess_destroy($this->session->userdata('data_login'));
        redirect('Login/utama', 'refresh');
    }
}
