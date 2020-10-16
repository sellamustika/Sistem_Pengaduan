<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model
{
    private $_table = "comp";

    public $id;
    public $nama;
    public $status;
     public $jenis;
     public $id_user;
    
    public $dekripsi;
   


    public function rules()
    {
         return [

             ['field' => 'id_kategori',
             'label' => 'Id_kategori',
             'rules' => 'required'],
           
            
             ['field' => 'nama',
             'label' => 'Nama',
             'rules' => 'required']
         ];
     }

   
     function insert() 
     {
        $this->db->insert_batch('comp',$data);
     }
    public function getData()
    {
        $sql = "SELECT * FROM comp WHERE id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    
     public function getKategori()
    {
        $sql = "SELECT * FROM kategori WHERE id_kategori";
        $query = $this->db->query($sql);
        return $query->result();
    }
     public function getStatus()
    {
        $sql = "SELECT * FROM comp as status WHERE status";
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

     public function getuser()
    {
        $sql = "SELECT name FROM user as iduser WHERE id";
        $query = $this->db->query($sql);
        return $query->result();
    }

   
     public function simpan()
    {
        
        $id= $this->input->post('id');
        $id_user=  $this->input->post('id_user');
       
        
        
        $nama=  $this->input->post('nama');
        $kategori = $this->input->post('id_kategori');
        $jenis=  $this->input->post('jenis');
        $deskripsi=  $this->input->post('deskripsi');
        $status=  $this->input->post('status');
       

        $data=array(
            'id'=>$id,
             'id_user' => $id_user,
            
            'nama'=>$id_user,
            'kategori'=>$kategori,
            'status'=>$status,
           'jenis'=>$jenis,
            'deskripsi' => $deskripsi,
           

        );

        $this->db->insert('comp',$data);
    }

    public function add()
    {
        
        $id= $this->input->post('id');
       
        
        
        $id_user=  $this->input->post('nama');
        $kategori = $this->input->post('id_kategori');
        $jenis=  $this->input->post('jenis');
        $deskripsi=  $this->input->post('deskripsi');
        $status=  $this->input->post('status');
       

        $data=array(
            'id'=>$id,
            
            'nama'=>$nama,
            'kategori'=>$kategori,
            'status'=>"belum",
           'jenis'=>"aspirasi",
            'deskripsi' => $deskripsi,
           

        );

        $this->db->insert('comp',$data);
    }

     function select()
    {

        $this->db->order_by('id', 'DESC');

        $query = $this->db->get('import');

        return $query;

    }

    function input($data)
    {
        $this->db->insert_batch('import', $data);

    }

   

      public function delete($id)
    {

        return $this->db->delete($this->_table, array("id" => $id));
    
    }

  function edit($id,$nama,$petugas,$status,$deskripsi,$tanggapan){
        $hasil=$this->db->query("UPDATE comp SET 
            id='$id',
           
            nama='$nama', 
            -- jenis='$jenis',
            petugas='$petugas' ,
            status = '$status',
            deskripsi='$deskripsi', 
            tanggapan='$tanggapan'
          
            WHERE id='$id'");
        return $hsl;
    }

    
    
    
    
}