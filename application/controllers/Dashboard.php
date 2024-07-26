<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

    

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        
        $data['title'] = "Dashboard";
        $role = $this->session->userdata('login_session')['role'];

           $bulan=date('m');
        $tahun=date('Y');
        $hari=date('d');
        $date = new DateTime();
            $date->modify("+1 month");
            $next_month = $date->format('m');

        $query_log = $this->db->query("SELECT tanggal, aksi ,aktor FROM log_s ORDER BY id DESC LIMIT 1");   
        $data['log'] = $query_log->row();



        $data['jumlah_karyawan_aktif'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif'")->row()->jumlah;
        $data['jumlah_karyawan_naktif'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='non-aktif'")->row()->jumlah;
        $data['jumlah_reminder'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' AND MONTH(end_kontrak)='$bulan' and YEAR(end_kontrak) = '$tahun' AND status_pkwt != 'PMNT' AND status_pkwt != 'PMNT-STAFF' AND status_pkwt != 'PMNT'")->row()->jumlah;
        $data['jumlah_friday'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' AND MONTH(end_kontrak)='$next_month' and YEAR(end_kontrak) = '$tahun' AND status_pkwt != 'PMNT' AND status_pkwt != 'PMNT-STAFF' AND status_pkwt != 'PMNT'")->row()->jumlah;
        $data['jumlah_pkwt'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='PKWT'")->row()->jumlah;
        $data['jumlah_pmnt'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='PMNT'")->row()->jumlah;
        $data['jumlah_pkwts'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='PKWT-STAFF'")->row()->jumlah;
        $data['jumlah_pmnts'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='PMNT-STAFF'")->row()->jumlah;

        $data['jumlah_1a'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='1A'")->row()->jumlah;
        $data['jumlah_2a'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='2A'")->row()->jumlah;
        $data['jumlah_3a'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='3A'")->row()->jumlah;
        $data['jumlah_4a'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='4A'")->row()->jumlah;
        $data['jumlah_c4'] = $this->db->query("SELECT COUNT(nik_akt) as jumlah FROM karyawan WHERE status_karyawan='aktif' and status_pkwt ='C4'")->row()->jumlah;



        

       
        

        $this->template->load('templates/dashboard', 'dashboard', $data);
    }
}
