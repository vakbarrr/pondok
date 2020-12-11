<?php

class M_spp extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('spp');
    }

    public function detail_spp($nip = null)
    {
        $query = $this->db->get_where('spp', array('nip' => $nip))->row();
        return $query;
    }

    public function sppWhere($where)
    {
        return $this->db->get_where('spp', $where);
    }

    public function delete_spp($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_spp($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
