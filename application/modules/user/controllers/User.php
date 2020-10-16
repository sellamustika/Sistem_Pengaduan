<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
        $this->load->model("user_model");
        $this->load->library('form_validation');
       
    }
        public function index(){
            $data ["comp"] = $this->user_model->getData();
             $data ["kategori"] = $this->user_model->getKategori();
            $data ["iduser"] = $this->user_model->getuser();
            $data ["status"] = $this->user_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('user',$data);
        }

        public function form()
        {
           
            $data ["comp"] = $this->user_model->getData();
            $data ["status"] = $this->user_model->getStatus();
            $this->load->view('user');
        }

         public function create(){
            $data ["comp"] = $this->user_model->getData();
            $data ["status"] = $this->user_model->getStatus();
             $data ["kategori"] = $this->user_model->getKategori();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('create',$data);
        }

         public function aspirasi(){
            $data ["comp"] = $this->user_model->getData();
            $data ["status"] = $this->user_model->getStatus();
             $data ["kategori"] = $this->user_model->getKategori();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('aspirasi',$data);
        }




        public function fetchBrandDataById($id)
        {
                if($id) {
                    $data = $this->user_model->getBrandData($id);
                    echo json_encode($data);
                }

                return false;
        }

        public function add()
    {
        $form = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["comp"] = $this->user_model->getData();
            $data ["kategori"] = $this->user_model->getKategori();
            $data ["status"] = $this->user_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
             $this->session->set_flashdata('error', 'Successfully created');
                redirect('user', 'refresh');
            $this->load->view("user",$data);
    }

     public function tambah()
    {
        $form = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->add();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["comp"] = $this->user_model->getData();
            $data ["kategori"] = $this->user_model->getKategori();
            $data ["status"] = $this->user_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
             $this->session->set_flashdata('error', 'Successfully created');
                redirect('user', 'refresh');
            $this->load->view("user",$data);
    }

         function edit()
    {

        $id=  $this->input->post('id');
             
        $nama=  $this->input->post('nama');
         $jenis=  $this->input->post('jenis');
          $deskripsi=  $this->input->post('deskripsi');
        $status=  $this->input->post('status');
       
     
        

        $this->form_model->edit($id,$nama,$jenis,$deskripsi,$status);
        redirect('form');
    }

         public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
             $this->session->set_flashdata('delete', 'your data was deleted');
            redirect(site_url('form/'));
        }
    }

       


}


