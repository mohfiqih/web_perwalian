<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Model_keluhan extends CI_Model
{
    function getDataKeluhan()
    {
        $query = $this->db->get('tb_keluhan');
        return $query->result();
    }

    function insertDataKeluhan($data)
    {
        $this->db->insert('tb_keluhan', $data);
    }

    function getDataKeluhanDetail($id_keluhan)
    {
        $this->db->where('id_keluhan', $id_keluhan);
        $query = $this->db->get('tb_keluhan');
        return $query->row();
    }
    function updateDataKeluhan($id_keluhan, $data)
    {
        $this->db->where('id_keluhan', $id_keluhan);
        $this->db->update('tb_keluhan', $data);
    }

    function deleteDataKeluhan($id_keluhan)
    {
        $this->db->where('id_keluhan', $id_keluhan);
        $this->db->delete('tb_keluhan');
    }

    // total
    function total_keluhan()
    {
        return $this->db->get('tb_keluhan')->num_rows();
    }
}
