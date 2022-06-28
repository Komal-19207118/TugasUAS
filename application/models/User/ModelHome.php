<?php

class ModelHome extends CI_Model {
    function daftar($data)
    {
        $this->db->insert('peserta', $data);
        return $this->db->affected_rows();
    }

    function getDataSeminar()
    {
        return $this->db->get('seminar')->result_array();
    }

    function check_seminar($email, $seminar)
    {
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('seminar', 'seminar.id = peserta.id_seminar', 'LEFT');
        $this->db->where('peserta.email', $email);
        $this->db->where('peserta.id_seminar', $seminar);
        return $this->db->get()->row_array();
    }
}