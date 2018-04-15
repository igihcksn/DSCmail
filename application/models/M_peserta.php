<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_peserta extends CI_Model {

    public function ambil_peserta()
    {
      $this->db->select('*');
      $this->db->from('peserta');
      $query = $this->db->get();
      return $result = $query->result();
    }

    public function tambah_peserta()
      {
        $data = [
                'nama_peserta'            =>$this->input->post('nama'),
                'email_peserta'           =>$this->input->post('email'),
                'asal_peserta'            =>$this->input->post('asal'),
                'gender'                  =>$this->input->post('gender'),
                'hape'                    =>$this->input->post('hape')
        ];
        $this->db->insert('peserta', $data);
      }

      public function kirim_email()
        {
          $email = $this->db->escape_str(($this->input->post('email')));
          $this->db->select('*');
          $this->db->from('peserta');
          $this->db->where('email_peserta', $email);
          $query = $this->db->get();
          return $result = $query->row();
        }

}
