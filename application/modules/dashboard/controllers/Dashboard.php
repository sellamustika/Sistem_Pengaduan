<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct(){

		parent::__construct();
		is_logged_in();
		// if(!$this->session->userdata('email')) {
		// 		redirect('auth');
		// }
			$this->load->model("dashboard_model");
			$this->load->library('form_validation');


	}
	public function index(){
		$data ["deskripsi"] = $this->dashboard_model->getcount_deskripsi();
		$data ["aspirasi"] = $this->dashboard_model->getcount_aspirasi();
		$data ["tanggapan"] = $this->dashboard_model->getcount_tanggapan();
		$data ["pengguna"] = $this->dashboard_model->getcount_user();
		// $data ["belumtanggapan"] = $this->dashboard_model->getcount_nottanggapan();
		$data['user'] = $this->db->get_where('user', ['email' =>

		$this->session->userdata('email')])->row_array();


		$this->load->view('dashboard',$data);
		}

		
}

