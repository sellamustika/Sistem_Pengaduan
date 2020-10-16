<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')) {
        //     redirect('auth');
        // }
        // $this->load->model("harian_model");
        $this->load->model("activity_model");
        $this->load->library('form_validation');
    }
        public function index(){
            $data ["aktivitas"] = $this->activity_model->getData();
            // $data ["cabang"] = $this->activity_model->getCabang();
            // $data ["status"] = $this->activity_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('activity',$data);
        }

        public function activity()
        {
             $data ["aktivitas"] = $this->activity_model->getData();
            //$data["products"] = $this->coba_model->getAll();
            
            // $data ["customer"] = $this->activity_model->getData();
            //  $data ["cabang"] = $this->activity_model->getCabang();
            // $data ["status"] = $this->activity_model->getStatus();
            $this->load->view('activity',$data);
        }

      
    




}

