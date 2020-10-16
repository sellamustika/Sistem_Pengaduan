<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')){
        //     redirect('auth');
        // }
        // $this->load->model("harian_model");
        $this->load->model("kategori_model");
        $this->load->library('form_validation');
    }
		public function index(){
            $data ["kategori"] = $this->kategori_model->getAll();
			
			$data ["nkategori"] = $this->kategori_model->getNKategori();
            $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
			$this->load->view('kategori',$data);
		}

		public function kategori()
		{
            $data ["kategori"] = $this->kategori_model->getAll();
			//$data["products"] = $this->coba_model->getAll();
            $data ["nkategori"] = $this->kategori_model->getNKategori();
			$this->load->view('kategori');
			
		}
    
     public function add()
    {
        $kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

        }
        else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Sudah ada </div>');
            redirect('auth');

        }
             $data ["kategori"] = $this->kategori_model->getAll();
      		 $data ["nkategori"] = $this->kategori_model->getNKategori();
            $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->session->set_flashdata('success', 'Successfully created');
                redirect('kategori', 'refresh');
            $this->load->view('kategori',$data);
    }


         function editt()
    {

        $id_kategori=  $this->input->post('id_kategori');
        $kategori=  $this->input->post('kategori');

        $this->kategori_model->edit($id_kategori,$kategori);
        redirect('kategori');
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

}
