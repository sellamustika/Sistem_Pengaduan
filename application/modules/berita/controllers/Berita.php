<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')){
        //     redirect('auth');
        // }
        // $this->load->model("harian_model");
        $this->load->model("berita_model");
        $this->load->library('form_validation');
         $this->load->library('upload');
    }
		public function index(){
             $data ["tbl_berita"] = $this->berita_model->getData();
   //          $data ["kategori"] = $this->kategori_model->getAll();
			
			// $data ["nkategori"] = $this->kategori_model->getNKategori();
            $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
			$this->load->view('v_post_news',$data);
		}

		public function berita()
		{
             $data ["tbl_berita"] = $this->berita_model->getData();

             // $data ["nkategori"] = $this->kategori_model->getNKategori();
            $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('v_post_news',$data);
            
			// $this->load->view('v_post_news');
			
		}

        function simpan_post(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');
                
                $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
           
                $this->berita_model->simpan_berita($jdl,$berita,$gambar);
                redirect('berita/lists',$data);
        }else{
            redirect('berita');
        }
                     
        }else{
            redirect('berita');
        }
                
    }

    function lists(){

         $x ["tbl_berita"] = $this->berita_model->getData();
        $x['data']=$this->berita_model->get_all_berita();
         $x['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
           

        $this->load->view('v_post_list',$x);
    }

    function view(){
        $kode=$this->uri->segment(3);
        $x['data']=$this->berita_model->get_berita_by_kode($kode);
        $this->load->view('v_post_view',$x);
    }






    
     public function add()
    {
        $berita = $this->berita_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $berita->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

        }
        else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Sudah ada </div>');
            redirect('auth');

        }
             $data ["berita"] = $this->kategori_model->getAll();
      		 $data ["nkategori"] = $this->kategori_model->getNKategori();
            $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->session->set_flashdata('success', 'Successfully created');
                redirect('berita', 'refresh');
            $this->load->view('kategori',$data);
    }


         function editt()
    {

        $id_berita=  $this->input->post('id_berita');
        $berita=  $this->input->post('berita');

        $this->kategori_model->edit($id_kategori,$kategori);
        redirect('berita');
    }


     function edit()
    {

        $id_kategori=  $this->input->post('id_kategori');
             
        $kategori=  $this->input->post('kategori');
        
       
     
        

        $this->kategori_model->update($id_kategori,$kategori);
        redirect('kategori');
    }



    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('kategori/');
       
    //     $kategori = $this->kategori_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($kategori->rules());

    //     if ($validation->run()) {
    //         $kategori->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["kategori"] = $kategori->getById($id);
    //     if (!$data["kategori"]) show_404();
        
    //     $this->load->view("kategori", $data);
    // }



   


// class Form extends CI_Controller{
		// public function __construct(){
		// 	        parent::__construct();
		// 	        $this->load->model("coba_model");
		// 	        $this->load->library('form_validation');
		// 	    }
		// public function index(){
		// 	$this->load->view('form');
		// }

		// public function form()
		// {
		// 	//$data["products"] = $this->coba_model->getAll();
		// 	$this->load->view('form');
		// }
  //   }

// 		 public function add()
//     	{
//         $product = $this->coba_model;
//         $validation = $this->form_validation;
//         $validation->set_rules($product->rules());

//         if ($validation->run()) {
//             $product->save();
//             $this->session->set_flashdata('success', 'Berhasil disimpan');
//         }

//         $this->load->view("product/new_form");
//    		 }

//    		 public function edit($id = null)
//     {
//         if (!isset($id)) redirect('products');
       
//         $product = $this->coba_model;
//         $validation = $this->form_validation;
//         $validation->set_rules($product->rules());

//         if ($validation->run()) {
//             $product->update();
//             $this->session->set_flashdata('success', 'Berhasil disimpan');
//         }

//         $data["product"] = $product->getById($id);
//         if (!$data["product"]) show_404();
        
//         $this->load->view("product/edit_form", $data);
//     }

    // public function delete($id)
    // {
    //      if (!isset($id_cabang)) show_404();
        
    //     if ($this->cabang_model->delete($id_cabang)) {
    //         redirect(site_url('/cabang/index'));
    //     }

    // }
    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kategori_model->delete($id)) {
             $this->session->set_flashdata('delete', 'Successfully created');
             redirect('kategori', 'refresh');
            redirect(site_url('kategori/'));
        }
    }

     public function hapus($id=null)
    {
        if (!isset($berita_id)) show_404();
        
        if ($this->berita_model->happus($berita_id)) {
             $this->session->set_flashdata('delete', 'Successfully created');
             redirect('berita', 'refresh');
            redirect(site_url('berita/'));
        }
    }

}
