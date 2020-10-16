<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export_csv extends CI_Controller {
 
 public function __construct()
 {
  parent::__construct();
   is_logged_in();

    
        $this->load->library('form_validation');
       

  $this->load->model('export_csv_model');
 }

 function index()
 {
   $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
  $data['student_data'] = $this->export_csv_model->fetch_data();
  $this->load->view('export_csv', $data);
 }

 function export()
 {
  $file_name = 'student_details_on_'.date('Ymd').'.csv'; 
     header("Content-Description: File Transfer"); 
     header("Content-Disposition: attachment; filename=$file_name"); 
     header("Content-Type: application/csv;");
   
     // get data 
     $student_data = $this->export_csv_model->fetch_data();

     // file creation 
     $file = fopen('php://output', 'w');
 
     $header = array("Student Name","Student Phone"); 
     fputcsv($file, $header);
     foreach ($student_data->result_array() as $key => $value)
     { 
       fputcsv($file, $value); 
     }
     fclose($file); 
     exit; 
 }
 
  
}