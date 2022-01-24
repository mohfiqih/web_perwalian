<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hadir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_hadir');
    }

    //admin//
    function hadir_admin()
    {
        $data['page'] = 'hadir_admin';
        $queryAllMahasiswa = $this->Model_hadir->getDataMahasiswa();
        $data['queryAllMhs'] = $queryAllMahasiswa;
        $data['jml_hdr'] = $this->Model_hadir->total_hadir();
        $this->load->view('v_hadir', $data, FALSE);
    }

    //dosen//
    function hadir_dosen()
    {
        $data['page'] = 'dosen';
        $queryAllMahasiswa = $this->Model_hadir->getDataMahasiswa();
        $data['queryAllMhs'] = $queryAllMahasiswa;
        $data['jml_hdr'] = $this->Model_hadir->total_hadir();
        $this->load->view('hadir_dosen', $data, FALSE);
    }

    // hadir mahasiswa //
    function Daftar_Hadir()
    {
        $data['page'] = 'Daftar_Hadir';
        $queryAllMahasiswa = $this->Model_hadir->getDataMahasiswa();
        $data['queryAllMhs'] = $queryAllMahasiswa;
        $data['jml_hdr'] = $this->Model_hadir->total_hadir();
        $this->load->view('hadir_mahasiswa', $data, FALSE);
    }

    // Hadir //
    public function index()
    {
        $queryAllMahasiswa = $this->Model_hadir->getDataMahasiswa();
        $data['queryAllMhs'] = $queryAllMahasiswa;
        $this->load->view('v_hadir', $data, TRUE);
    }

    public function tambah_hadir()
    {
        $this->load->view('view_hadir/tambah_hadir');
    }

    //edit dosen//
    public function edit_hadir($id_hadir)
    {
        $queryHadirDetail = $this->Model_hadir->getDataHadirDetail($id_hadir);
        $DATA = array('queryHdrDetail' => $queryHadirDetail);
        $this->load->view('edit_hadir', $DATA);
    }

    public function fungsiTambah()
    {
        $id_hadir = $this->input->post('id_hadir');
        $nim_mhs = $this->input->post('nim_mhs');
        $nama_mhs = $this->input->post('nama_mhs');
        $keterangan = $this->input->post('keterangan');

        $ArrInsert = array(
            'id_hadir' => $id_hadir,
            'nim_mhs' => $nim_mhs,
            'nama_mhs' => $nama_mhs,
            'keterangan' => $keterangan,
        );
        $this->Model_hadir->insertDataHadir($ArrInsert);
        redirect(base_url('Hadir/Daftar_Hadir'));
    }

    //edit admin//
    public function fungsiEdit()
    {
        $id_hadir = $this->input->post('id_hadir');
        $nim_mhs = $this->input->post('nim_mhs');
        $nama_mhs = $this->input->post('nama_mhs');
        $keterangan = $this->input->post('keterangan');

        $ArrUpdate = array(
            'nim_mhs' => $nim_mhs,
            'nama_mhs' => $nama_mhs,
            'keterangan' => $keterangan,
        );
        $this->Model_hadir->updateDataHadir($id_hadir, $ArrUpdate);
        redirect(base_url('Hadir/hadir_admin'));
    }

    //delete dosen//
    public function fungsiDeleteDosen($id_hadir)
    {
        $this->Model_hadir->deleteDataHadir($id_hadir);
        redirect(base_url('Hadir/hadir_dosen'));
    }

    //delete admin//
    public function fungsiDeleteAdmin($id_hadir)
    {
        $this->Model_hadir->deleteDataHadir($id_hadir);
        redirect(base_url('Hadir/hadir_admin'));
    }

    function logout()
    {
        $this->session->sess_destroy($this->session->userdata('data_login'));
        redirect('Login/utama', 'refresh');
    }

    function insert_data()
    {
        $kata = $this->input->post('kata');
        if ($kata == null) {
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-danger">
                        <h4>Oppss</h4>
                        <p>Tidak ada kata dinput.</p>
                    </div>'
            );
            $this->load->view('welcome_message');
        } else {
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-success">
                        <h4>Berhasil </h4>
                        <p>Anda berhasil input kata ' . $kata . '.</p>
                    </div>'
            );
            $this->load->view('welcome_message');
        };
    }
}
