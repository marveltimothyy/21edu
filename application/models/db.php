<?php

class db extends CI_Model
{
    public function get_topic()
    {
        $this->load->database();
        $data = $this->db->query('SELECT * FROM topic');
        return $data->result();
    }
}