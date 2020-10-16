<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    
    public function getcount_deskripsi()
        {
            $sql = "SELECT count(deskripsi) as deskripsi FROM comp WHERE id";
            $result = $this->db->query($sql);
            return $result->row()->deskripsi;
        }

    public function getcount_aspirasi()
        {
            $sql = "SELECT count(deskripsi) as aspirasi FROM aspirasi WHERE id ";
            $result = $this->db->query($sql);
            return $result->row()->aspirasi;
        }

         public function getcount_tanggapan()
        {
            $sql = "SELECT count(tanggapan) as tanggapan FROM comp WHERE status='sudah' ";
            $result = $this->db->query($sql);
            return $result->row()->tanggapan;
        }

    public function getcount_nottanggapan()
        {
            $sql = "SELECT count(tanggapan) as belumtanggapan FROM comp WHERE id AND tanggapan= null";
            $result = $this->db->query($sql);
            return $result->row()->belumtanggapan;
        }
     public function getcount_user()
        {
            $sql = "SELECT count(email) as pengguna FROM user WHERE role_id= '2'";
            $result = $this->db->query($sql);
            return $result->row()->pengguna;
        }
    public function getcount_tdkinput()
        {
            $sql = "SELECT count(status) as status FROM customer WHERE status= 'tdkinput'";
            $result = $this->db->query($sql);
            return $result->row()->status;
        }



    
}
