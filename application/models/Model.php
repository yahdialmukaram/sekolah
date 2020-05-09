<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model 
{
    public function tampil_siswa()
    {
        $this->db->from('tb_siswa');
        $this->db->order_by('id_siswa', 'desc');
        return $this->db->get()->result_array();

    }
    public function save_siswa($data)
    {
        $this->db->insert('tb_siswa', $data);
    }
    public function delete_siswa($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete('tb_siswa');
    }
    public function edit_siswa($id)
    {
        $this->db->where('id_siswa', $id);
        return $this->db->get('tb_siswa')->row_array();
        
    }
    public function details_siswa($id)
    {
        $this->db->where('id_siswa', $id);
        return $this->db->get_where('tb_siswa')->row_array();
    }

    public function update_siswa($id,$data)
    {
        $this->db->where('id_siswa', $id);
        $this->db->update('tb_siswa', $data);

    }

    public function tampil_guru()
    {

      return  $this->db->get('tb_guru')->result_array();
        
    }
    public function save_guru($data)
    {
        $this->db->insert('tb_guru', $data);

    }
    public function delete_guru($id)
    {
        $this->db->where('id_guru', $id);        
        $this->db->delete('tb_guru');

        
    }
    
}
?>