<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

 
  public function index()
  {
  	$this->load->library('mypdf');
    $data ['customer'] = $this->db->query("SELECT * FROM customer ORDER BY id DESC")->result();
    $this->mypdf->generate('Laporan/laporan',$data);
    
  //   $data['data'] = array(
  //   ['nama'=>'sella','id_cabang'=>'Jember','status'=>'Batal', 'tgl_aplikasi' => '2019-08-13', 'tgl_terima'=>'2019-09-08'],
   
  // );
  //   $this->mypdf->generate('laporan', $data, $filename, 'A4', 'landscape');
  }

}