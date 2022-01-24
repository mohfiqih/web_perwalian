<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Model_beranda extends CI_Model
{
    public function total_hadir()
    {
        return $this->db->get('tb_daftarhadir')->num_rows();
    }

    public function total_keluhan()
    {
        return $this->db->get('tb_keluhan')->num_rows();
    }

    function total_data()
    {
        return $this->db->get('tb_profil')->num_rows();
    }
}
