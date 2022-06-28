<?php

class ModelUser extends CI_Model {
    function daftar($data)
    {
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }

    function getDataSeminar()
    {
        return $this->db->get('seminar')->result_array();
    }

    function check_seminar($email, $seminar)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('seminar', 'seminar.id = user.id_seminar', 'LEFT');
        $this->db->where('user.email', $email);
        $this->db->where('user.id_seminar', $seminar);
        return $this->db->get()->row_array();
    }
}