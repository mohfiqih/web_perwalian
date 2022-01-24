<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_profil extends CI_Model
{
    function getDataProfil()
    {
        $query = $this->db->get('tb_profil');
        return $query->result();
    }

    function insertDataProfil($data)
    {
        $this->db->insert('tb_profil', $data);
    }

    function getDataProfilDetail($id_profil)
    {
        $this->db->where('id_profil', $id_profil);
        $query = $this->db->get('tb_profil');
        return $query->row();
    }
    function updateDataProfil($id_profil, $data)
    {
        $this->db->where('id_profil', $id_profil);
        $this->db->update('tb_profil', $data);
    }

    function deleteDataProfil($id_profil)
    {
        $this->db->where('id_profil', $id_profil);
        $this->db->delete('tb_profil');
    }

    // total
    function total_data()
    {
        return $this->db->get('tb_profil')->num_rows();
    }
}
