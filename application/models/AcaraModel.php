<?php
class AcaraModel extends CI_Model
{
    public function getData()
    {
        return $this->db->get('tb_acara')->row();
    }
}
