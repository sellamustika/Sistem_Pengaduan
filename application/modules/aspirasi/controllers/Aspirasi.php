<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
        $this->load->model("aspirasi_model");
        $this->load->library('form_validation');
       
    }
        public function index(){
            $data ["aspirasi"] = $this->aspirasi_model->getData();
             $data ["kategori"] = $this->aspirasi_model->getKategori();
            $data ["iduser"] = $this->aspirasi_model->getuser();
            $data ["status"] = $this->aspirasi_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('aspirasi',$data);
        }
          public function aspirasi(){
            $data ["aspirasi"] = $this->aspirasi_model->getData();
            $data ["status"] = $this->aspirasi_model->getStatus();
             $data ["kategori"] = $this->aspirasi_model->getKategori();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('aspirasi',$data);
        }

        // public function aspirasi()
        // {
           
        //     $data ["comp"] = $this->aspirasi_model->getData();
        //     $data ["status"] = $this->aspirasi_model->getStatus();
        //     $this->load->view('aspirasi',$data);
        // }

         public function create(){
            $data ["aspirasi"] = $this->aspirasi_model->getData();
            $data ["status"] = $this->aspirasi_model->getStatus();
             $data ["kategori"] = $this->aspirasi_model->getKategori();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('create',$data);
        }

       




        public function fetchBrandDataById($id)
        {
                if($id) {
                    $data = $this->aspirasi_model->getBrandData($id);
                    echo json_encode($data);
                }

                return false;
        }

        public function add()
    {
        $form = $this->aspirasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["aspirasi"] = $this->aspirasi_model->getData();
            $data ["kategori"] = $this->aspirasi_model->getKategori();
            $data ["status"] = $this->aspirasi_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
             $this->session->set_flashdata('error', 'Successfully created');
                redirect('aspirasi', 'refresh');
            $this->load->view("aspirasi",$data);
    }

    //  public function tambah()
    // {
    //     $form = $this->aspirasi_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($form->rules());

    //     if ($validation->run()) {
    //         $form->add();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //         $data ["comp"] = $this->aspirasi_model->getData();
    //         $data ["kategori"] = $this->aspirasi_model->getKategori();
    //         $data ["status"] = $this->aspirasi_model->getStatus();
    //          $data['user'] = $this->db->get_where('user', ['email' =>

    //         $this->session->userdata('email')])->row_array();
    //          $this->session->set_flashdata('error', 'Successfully created');
    //             redirect('aspirasi', 'refresh');
    //         $this->load->view("aspirasi",$data);
    // }

         function edit()
    {

        $id=  $this->input->post('id');
             
        $nama=  $this->input->post('nama');
         $jenis=  $this->input->post('jenis');
          $deskripsi=  $this->input->post('deskripsi');
       
        $tanggapan=  $this->input->post('tanggapan');
       
     
        

        $this->aspirasi_model->edit($id,$nama,$jenis,$deskripsi,$tanggapan);
        redirect('aspirasi');
    }

         public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->aspirasi_model->delete($id)) {
             $this->session->set_flashdata('delete', 'your data was deleted');
            redirect(site_url('aspirasi/'));
        }
    }

       


}


