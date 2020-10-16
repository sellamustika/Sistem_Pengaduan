<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')){
        //     redirect('auth');
        // }
        // $this->load->model("harian_model");
        $this->load->model("create_model");
        $this->load->library('form_validation');
        // $this->load->library('excel');
         // $this->load->library('excel');
    }
        public function index(){
            $data ["customer"] = $this->create_model->getData();
            $data ["iduser"] = $this->create_model->getuser();
          
            $data ["status"] = $this->create_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('create',$data);
        }

        public function form()
        {
            //$data["products"] = $this->coba_model->getAll();
            
            $data ["customer"] = $this->create_model->getData();
           
            $data ["status"] = $this->create_model->getStatus();
            $this->load->view('form');
        }

         public function create(){
            $data ["customer"] = $this->create_model->getData();
           
            $data ["status"] = $this->create_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('create',$data);
        }

        public function fetchBrandDataById($id)
        {
                if($id) {
                    $data = $this->create_model->getBrandData($id);
                    echo json_encode($data);
                }

                return false;
        }

        public function add()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
                'is_unique' => 'This Email has Already Registered!'

        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]',[
                'matches' => 'password dont match!',
                'min_lenght' => 'password too short'

        ]);

        if($this->form_validation->run() == false) {

            $this->load->view('registrasi');

        }else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
               
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1
               

            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Yor account has been created! Please Login </div>');
            redirect('create');
        }
        
    }
}

