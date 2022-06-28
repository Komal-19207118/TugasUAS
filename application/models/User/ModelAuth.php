<?php

class ModelAuth extends CI_Model {
    function signup($data)
    {
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }

    function check_user($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row_array();
    }

    function get_profile($email)
    {
        $this->db->select('user.*, peserta.*, seminar.jenis_seminar, seminar.jadwal');
        $this->db->from('user');
        $this->db->join('peserta', 'user.email = peserta.email', 'LEFT');
        $this->db->join('seminar', 'seminar.id = peserta.id_seminar', 'LEFT');
        $this->db->where('user.email', $email);
        return $this->db->get()->row_array();
    }
}