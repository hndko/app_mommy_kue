<?php
class GaleriModel extends CI_Model
{
    public function getData($id = null)
    {
        if ($id == null) {
            return $this->db->get('tb_galeri')->result();
        }

        return $this->db->get_where('tb_galeri', ['tb_galeri.galeri_id' => $id])->row();
    }

    public function tambahData($data)
    {
        $this->db->insert('tb_galeri', $data);
    }
}
