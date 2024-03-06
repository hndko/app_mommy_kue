<?php
class LandingPagesModel extends CI_Model
{
    public function getData()
    {
        return $this->db->get('tb_setting_umum')->row();
    }
}
