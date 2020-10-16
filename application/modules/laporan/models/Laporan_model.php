<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_model extends CI_Model {
    public function view_by_date($date){
        $this->db->where('DATE(tgl_aplikasi', $date); // Tambahkan where tanggal nya
        
        return $this->db->get('customer')->result();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
    }
    
    public function view_by_month($month, $year){
        $this->db->where('MONTH(tgl_aplikasi)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tgl_aplikasi)', $year); // Tambahkan where tahun
        
        return $this->db->get('customer')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    }
    
    public function view_by_year($year){
        $this->db->where('YEAR(tgl_aplikasi)', $year); // Tambahkan where tahun
        
        return $this->db->get('customer')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
    }
    
    public function view_all(){
        return $this->db->get('customer')->result(); // Tampilkan semua data transaksi
    }
    
    public function option_tahun(){
        $this->db->select('YEAR(tgl_aplikasi) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('customer'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tgl_aplikasi)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tgl_aplikasi)'); // Group berdasarkan tahun pada field tgl
        
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
}
