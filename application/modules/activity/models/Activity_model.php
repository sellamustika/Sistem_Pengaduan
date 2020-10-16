<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_model extends CI_Model
{
    private $_table = "customer";

    public $id;
    public $pid;
    public $id_cabang;
    public $nama;
    public $status;
    public $tgl_aplikasi;
    public $tgl_terima;
    public $an;
    public $pj;


    public function rules()
    {
         return [
             ['field' => 'pid',
             'label' => 'PID',
             'rules' => 'required'],

             ['field' => 'id_cabang',
             'label' => 'Id_cabang',
             'rules' => 'required'],
            
             ['field' => 'nama',
             'label' => 'Nama',
             'rules' => 'required']
         ];
     }
    public function getData()
    {
        $sql = "SELECT id_user, pid, tgl_input, tgl_update from customer as aktivitas";
        $query = $this->db->query($sql);
        return $query->result();
    }
 

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    


    
    
    
}