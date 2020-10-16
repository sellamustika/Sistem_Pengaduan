<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
        $this->load->model("pengaduan_model");
        $this->load->library('form_validation');
       
    }
        public function index(){
            $data ["comp"] = $this->pengaduan_model->getData();
             $data ["kategori"] = $this->pengaduan_model->getKategori();
            $data ["iduser"] = $this->pengaduan_model->getuser();
            $data ["status"] = $this->pengaduan_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('pengaduan',$data);
        }

        public function pengaduan()
        {
           
            $data ["comp"] = $this->pengaduan_model->getData();
            $data ["status"] = $this->pengaduan_model->getStatus();
            $this->load->view('pengaduan',$data);
        }

         public function create(){
            $data ["comp"] = $this->pengaduan_model->getData();
            $data ["status"] = $this->pengaduan_model->getStatus();
             $data ["kategori"] = $this->pengaduan_model->getKategori();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('create',$data);
        }

         public function aspirasi(){
            $data ["comp"] = $this->pengaduan_model->getData();
            $data ["status"] = $this->pengaduan_model->getStatus();
             $data ["kategori"] = $this->pengaduan_model->getKategori();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('aspirasi',$data);
        }




        public function fetchBrandDataById($id)
        {
                if($id) {
                    $data = $this->pengaduan_model->getBrandData($id);
                    echo json_encode($data);
                }

                return false;
        }

        public function add()
    {
        $form = $this->pengaduan_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["comp"] = $this->pengaduan_model->getData();
            $data ["kategori"] = $this->pengaduan_model->getKategori();
            $data ["status"] = $this->pengaduan_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
             $this->session->set_flashdata('error', 'Successfully created');
                redirect('pengaduan', 'refresh');
            $this->load->view("pengaduan",$data);
    }

     public function tambah()
    {
        $form = $this->pengaduan_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->add();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["comp"] = $this->pengaduan_model->getData();
            $data ["kategori"] = $this->pengaduan_model->getKategori();
            $data ["status"] = $this->pengaduan_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
             $this->session->set_flashdata('error', 'Successfully created');
                redirect('pengaduan', 'refresh');
            $this->load->view("pengaduan",$data);
    }

         function edit()
    {

        $id=  $this->input->post('id');
             
        $nama=  $this->input->post('nama');
        $petugas=  $this->input->post('petugas');
        $deskripsi=  $this->input->post('deskripsi');
       
        $tanggapan=  $this->input->post('tanggapan');
        $this->pengaduan_model->edit($id,$nama,$petugas,$deskripsi,$tanggapan);
        $data['user'] = $this->db->get_where('user', ['email' =>

        $this->session->userdata('email')])->row_array();
        $this->session->set_flashdata('error', 'Successfully created');
        redirect('pengaduan', 'refresh');
     
        $this->load->view("pengaduan",$data);

        // $this->pengaduan_model->edit($id,$nama,$petugas,$deskripsi,$tanggapan);
        // redirect('pengaduan');
    }

         public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pengaduan_model->delete($id)) {
             $this->session->set_flashdata('delete', 'your data was deleted');
            redirect(site_url('pengaduan/'));
        }
    }

       


}


