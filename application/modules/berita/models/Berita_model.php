<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    private $_table = "berita";

    // public $id_kategori;
    // public $kategori;
   


    public function rules()
    {
         return [

             // ['field' => 'id_cabang',
             // 'label' => 'Id_Cabang',
             // 'rules' => 'required'],

             ['field' => 'kategori',
             'label' => 'Kategori',
             'rules' => 'required']

            
         ];
     }
    // public function getData()
    // {
    //     $sql = "SELECT * FROM customer WHERE id";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }

     function simpan_berita($jdl,$berita,$gambar){
        $hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
        return $hsl;
    }

    function get_berita_by_kode($kode){
        $hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_id='$kode'");
        return $hsl;
    }

    function get_all_berita(){
        $hsl=$this->db->query("SELECT * FROM tbl_berita ORDER BY berita_id DESC");
        return $hsl;
    }

 public function getData()
    {
        $sql = "SELECT * FROM tbl_berita WHERE berita_id";
        $query = $this->db->query($sql);
        return $query->result();
    }




    public function getNKategori()
    {
        $sql = "SELECT * FROM kategori as nkategori WHERE id_kategori";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //  public function getStatus()
    // {
    //     $sql = "SELECT * FROM customer as status WHERE status";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kategori" => $id])->row();
    }

    public function save()

    {
        // $id_cabang= $this->id = uniqid();
        $id_kategori=  $this->input->post('id_kategori');
        $kategori=  $this->input->post('kategori');

        $sql=$this->db->query("SELECT kategori FROM kategori where kategori='$kategori'");
        $cek_kategori = $sql->num_rows();
        if($cek_kategori>0){
            $this->session->set_flashdata('message','Nama Kategori sudah ada');
            redirect('kategori');
        }
        //$upload_dokumen = $this->upload_dokumen();
        // $post = $this->input->post();
        //$this->id = uniqid();
        // $this->id_cabang = $post["id_cabang"];
        // $this->id_cabang = $post["id_cabang"];
        // $this->cabang = $post["cabang"];

         $data=array(
            'id_kategori'=>$id_kategori,
            'kategori'=>$kategori,
            );
       $this->db->insert('kategori',$data);
    }

    public function edit()
    {
        $post = $this->input->post();
        // $id= $this->id = uniqid();
        $this->id_kategori = $post["id_kategori"];
        $this->kategori=  $post["kategori"];
        

        return $this->db->update($this->_table, $this, array('product_id' => $post['id']));

        // $this->db->update('customer',$data);

    }

   


    function update($id_kategori,$kategori){
        $hasil=$this->db->query("UPDATE kategori SET 
            id_kategori='$id_kategori',
            kategori='$kategori'

            WHERE id_kategori='$id_kategori'");

        return $hsl;
    }


    public function delete($id)
    {

        return $this->db->delete($this->_table, array("id_kategori" => $id));
    
    }

     public function hapus($id)
    {

        return $this->db->delete($this->_table, array("berita_id" => $id));
    
    }

    //  public function update()
    // {
    //     $post = $this->input->post();
    //     $this->product_id = $post["id"];
    //     $this->name = $post["name"];
    //     $this->price = $post["price"];
    //     $this->description = $post["description"];
    //     $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    // }

    //   public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("product_id" => $id));
    // }
    // public function upload_dokumen()
    // {
    //     // assets/images/product_image
    //     $config['upload_path'] = 'assets/dokumen/an';
    //     $config['file_name'] =  uniqid();
    //     $config['allowed_types'] = 'pdf';
    //     $config['max_size'] = '1000';

    //     // $config['max_width']  = '1024';s
    //     // $config['max_height']  = '768';

    //     $this->load->library('upload', $config);
    //     if ( ! $this->upload->do_upload('an'))
    //     {
    //         $error = $this->upload->display_errors();
    //         return $error;
    //     }
    //     else
    //     {
    //         $data = array('upload_data' => $this->upload->data());
    //         $type = explode('.', $_FILES['an']['name']);
    //         $type = $type[count($type) - 1];
            
    //         $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
    //         return ($data == true) ? $path : false;            
    //     }
    

    
}