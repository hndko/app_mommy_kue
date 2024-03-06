<?php
class PortofolioModel extends CI_Model
{
    public function getData($id = null)
    {
        if ($id == null) {
            return $this->db->get('tb_portofolio')->result();
        }

        return $this->db->get_where('tb_portofolio', ['tb_portofolio.portofolio_id' => $id])->row();
    }

    public function tambahData($data)
    {
        $this->db->insert('tb_portofolio', $data);
    }

    public function ubahData($id, $data)
    {
        $this->db->where('portofolio_id', $id);
        $this->db->update('tb_portofolio', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('portofolio_id', $id);
        $this->db->delete('tb_portofolio');
    }
}
