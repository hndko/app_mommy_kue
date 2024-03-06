<?php
class UcapanModel extends CI_Model
{
    public function getData($id = null)
    {
        if ($id == null) {
            return $this->db->get('tb_ucapan')->result();
        }

        return $this->db->get_where('tb_ucapan', ['tb_ucapan.ucapan_id ' => $id])->row();
    }

    public function tambahData($data)
    {
        $this->db->insert('tb_ucapan', $data);
    }

    public function ubahData($id, $data)
    {
        $this->db->where('ucapan_id ', $id);
        $this->db->update('tb_ucapan', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('ucapan_id ', $id);
        $this->db->delete('tb_ucapan');
    }
}
