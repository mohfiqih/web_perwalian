<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Model_hadir extends CI_Model
{
    function getDataMahasiswa()
    {
        $query = $this->db->get('tb_daftarhadir');
        return $query->result();
    }

    function insertDataHadir($data)
    {
        $this->db->insert('tb_daftarhadir', $data);
    }

    function getDataHadirDetail($id_hadir)
    {
        $this->db->where('id_hadir', $id_hadir);
        $query = $this->db->get('tb_daftarhadir');
        return $query->row();
    }
    function updateDataHadir($id_hadir, $data)
    {
        $this->db->where('id_hadir', $id_hadir);
        $this->db->update('tb_daftarhadir', $data);
    }

    function deleteDataHadir($id_hadir)
    {
        $this->db->where('id_hadir', $id_hadir);
        $this->db->delete('tb_daftarhadir');
    }

    // total
    function total_hadir()
    {
        return $this->db->get('tb_daftarhadir')->num_rows();
    }
}
