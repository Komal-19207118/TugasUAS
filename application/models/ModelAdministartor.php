<?php

class ModelAdministartor extends CI_Model {
    
    function check_login($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('auth')->row_array();
    }

    function getPendaftarSeminar()
    {
        $this->db->select('peserta.*, seminar.jenis_seminar, seminar.jadwal');
        $this->db->from('peserta');
        $this->db->join('seminar', 'seminar.id = peserta.id_seminar', 'LEFT');
        return $this->db->get()->result_array();
    }

    function acc($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('peserta', $data);
    }

    function not_acc($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('peserta', $data);
    }

    function getJenisSeminar()
    {
        return $this->db->get('seminar')->result_array();
    }

    function save_jenis_seminar($data)
    {
        $this->db->insert('seminar', $data);
        return $this->db->affected_rows();
    }

    function getDetailJenisSeminar($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('seminar')->row_array();
    }

    function update_jenis_seminar($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('seminar', $data);
    }

    function del_jenis_seminar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('seminar');
    }
}