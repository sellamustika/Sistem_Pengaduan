<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_model extends CI_Model
{
 function get_data_stok(){


 		$tgl=  $this->input->post('tgl');

        // $query = $this->db->query("SELECT status ,SUM(count) AS stok FROM customer WHERE tgl_aplikasi LIKE '%$tgl%' GROUP BY status ");
          $query = $this->db->query("SELECT tgl_aplikasi,status ,SUM(count) AS stok FROM customer WHERE tgl_aplikasi LIKE '%$tgl%' GROUP BY status ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data_date(){

        $query = $this->db->query("SELECT DISTINCT YEAR(tgl_aplikasi) FROM customer");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $tanggal){
                $h = $tanggal;
            }
            return $h;
        }
    }

    public function getDate()
    {
        $sql = "SELECT DISTINCT YEAR(tgl_aplikasi) FROM customer";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function data()
    {
        $sql = "SELECT * FROM customer WHERE status='tolak' ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
}