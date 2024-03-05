<?php
class SosialMediaModel extends CI_Model
{
    public function getData()
    {
        return $this->db->get('tb_sosial_media')->row();
    }
}
