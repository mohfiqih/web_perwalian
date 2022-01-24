<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_profil');
    }

    //mahasiswa//
    public function Lihat_Profil()
    {
        $data['page'] = 'Lihat_Profil';
        $queryAllProfil = $this->Model_profil->getDataProfil();
        $data['queryAllProf'] = $queryAllProfil;
        $this->load->view('v_lihatprofil', $data, FALSE);
    }

    //admin
    public function Data_Profil()
    {
        $data['page'] = 'Data_Profil';
        $queryAllData = $this->Model_profil->getDataProfil();
        $data['queryAllData'] = $queryAllData;
        $data['jml_data'] = $this->Model_profil->total_data();
        $this->load->view('data_profil', $data, FALSE);
    }

    // dosen
    public function Data_Profil_Dosen()
    {
        $data['page'] = 'Data_Profil';
        $queryAllData = $this->Model_profil->getDataProfil();
        $data['queryAllData'] = $queryAllData;
        $data['jml_data'] = $this->Model_profil->total_data();
        $this->load->view('data_profil_dosen', $data, FALSE);
    }

    function Daftar_Profil()
    {
        $data['page'] = 'Daftar_Profil';
        $queryAllProfil = $this->Model_profil->getDataProfil();
        $data['queryAllProf'] = $queryAllProfil;
        $this->load->view('v_profil', $data, FALSE);
    }

    // Keluhan //
    public function edit_profil($id_profil)
    {
        $queryProfilDetail = $this->Model_profil->getDataProfilDetail($id_profil);
        $DATA = array('queryProfDetail' => $queryProfilDetail);
        $this->load->view('edit_profil', $DATA);
    }

    //dosen 
    public function edit_profil_dosen($id_profil)
    {
        $queryProfilDetail = $this->Model_profil->getDataProfilDetail($id_profil);
        $DATA = array('queryProfDetail' => $queryProfilDetail);
        $this->load->view('edit_profil_dosen', $DATA);
    }

    public function fungsiTambah()
    {
        $id_profil = $this->input->post('id_profil');
        $kelas = $this->input->post('kelas');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('no_telp');
        $ipk = $this->input->post('ipk');

        $ArrInsert = array(
            'id_profil' => $id_profil,
            'kelas' => $kelas,
            'nim' => $nim,
            'nama' => $nama,
            'ttl' => $ttl,
            'alamat' => $alamat,
            'no_telp' => $notelp,
            'ipk' => $ipk

        );
        $this->Model_profil->insertDataProfil($ArrInsert);
        redirect(base_url('Profil/Data_Profil'));
    }

    // admin
    public function fungsiEdit()
    {
        $id_profil = $this->input->post('id_profil');
        $kelas = $this->input->post('kelas');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('no_telp');
        $ipk = $this->input->post('ipk');

        $ArrUpdate = array(
            'kelas' => $kelas,
            'nim' => $nim,
            'nama' => $nama,
            'ttl' => $ttl,
            'alamat' => $alamat,
            'no_telp' => $notelp,
            'ipk' => $ipk

        );
        $this->Model_profil->updateDataProfil($id_profil, $ArrUpdate);
        redirect(base_url('Profil/Data_Profil'));
    }

    // dosen
    public function fungsiEditDosen()
    {
        $id_profil = $this->input->post('id_profil');
        $kelas = $this->input->post('kelas');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('no_telp');
        $ipk = $this->input->post('ipk');

        $ArrUpdate = array(
            'kelas' => $kelas,
            'nim' => $nim,
            'nama' => $nama,
            'ttl' => $ttl,
            'alamat' => $alamat,
            'no_telp' => $notelp,
            'ipk' => $ipk

        );
        $this->Model_profil->updateDataProfil($id_profil, $ArrUpdate);
        redirect(base_url('Profil/Data_Profil_Dosen'));
    }

    //admin
    public function fungsiDelete($id_profil)
    {
        $this->Model_profil->deleteDataProfil($id_profil);
        redirect(base_url('Profil/Data_Profil'));
    }

    //dosen
    public function fungsiDeleteDosen($id_profil)
    {
        $this->Model_profil->deleteDataProfil($id_profil);
        redirect(base_url('Profil/Data_Profil_Dosen'));
    }

    function logout()
    {
        $this->session->sess_destroy($this->session->userdata('data_login'));
        redirect('Login', 'refresh');
    }
}
