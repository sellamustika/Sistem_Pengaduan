<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
        $this->load->model("form_model");
        $this->load->library('form_validation');
       
    }
        public function index(){
            $data ["comp"] = $this->form_model->getData();
             $data ["kategori"] = $this->form_model->getKategori();
            $data ["iduser"] = $this->form_model->getuser();
            $data ["status"] = $this->form_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('form',$data);
        }

        public function form()
        {
           
            $data ["comp"] = $this->form_model->getData();
            $data ["status"] = $this->form_model->getStatus();
            $this->load->view('form');
        }

         public function create(){
            $data ["comp"] = $this->form_model->getData();
            $data ["status"] = $this->form_model->getStatus();
             $data ["kategori"] = $this->form_model->getKategori();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('create',$data);
        }

         public function aspirasi(){
            $data ["comp"] = $this->form_model->getData();
            $data ["status"] = $this->form_model->getStatus();
             $data ["kategori"] = $this->form_model->getKategori();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('aspirasi',$data);
        }




        public function fetchBrandDataById($id)
        {
                if($id) {
                    $data = $this->form_model->getBrandData($id);
                    echo json_encode($data);
                }

                return false;
        }

        public function add()
    {
        $form = $this->form_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["comp"] = $this->form_model->getData();
            $data ["kategori"] = $this->form_model->getKategori();
            $data ["status"] = $this->form_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
             $this->session->set_flashdata('error', 'Successfully created');
                redirect('form', 'refresh');
            $this->load->view("form",$data);
    }

     public function tambah()
    {
        $form = $this->form_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->add();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["comp"] = $this->form_model->getData();
            $data ["kategori"] = $this->form_model->getKategori();
            $data ["status"] = $this->form_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
             $this->session->set_flashdata('error', 'Successfully created');
                redirect('form', 'refresh');
            $this->load->view("form",$data);
    }

         function edit()
    {

        $id=  $this->input->post('id');
             
        $nama=  $this->input->post('nama');
        $petugas=  $this->input->post('petugas');
        $status=  $this->input->post('status');

        $deskripsi=  $this->input->post('deskripsi');
       
        $tanggapan=  $this->input->post('tanggapan');
        $this->form_model->edit($id,$nama,$petugas,$status,$deskripsi,$tanggapan);
        $data['user'] = $this->db->get_where('user', ['email' =>

        $this->session->userdata('email')])->row_array();
        $this->session->set_flashdata('error', 'Successfully created');
        redirect('form', 'refresh');
     
        $this->load->view("form",$data);

        // $this->pengaduan_model->edit($id,$nama,$petugas,$deskripsi,$tanggapan);
        // redirect('pengaduan');
    }

         public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->form_model->delete($id)) {
             $this->session->set_flashdata('delete', 'your data was deleted');
            redirect(site_url('form/'));
        }
    }

       


}


