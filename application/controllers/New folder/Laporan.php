<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {

        $data['title'] = "Laporan Sistem";
        $role = $this->session->userdata('login_session')['role'];

        //pemasukan---------------------------------------------------------------------------------------

        $bulan=date('m');
        $tahun=date('Y');
        $hari=date('d');

        $saldo = $this->db->query("SELECT SUM(saldo) as total_saldo FROM saldo")->row()->total_saldo;
        
        
        $queri1 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 01 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan1'] = $queri1->row()->total_bulan;

        $queri2 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 02 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan2'] = $queri2->row()->total_bulan;

        $queri3 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 03 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan3'] = $queri3->row()->total_bulan;

        $queri4 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 04 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan4'] = $queri4->row()->total_bulan;

        $queri5 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 05 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan5'] = $queri5->row()->total_bulan;

        $queri6 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 06 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan6'] = $queri6->row()->total_bulan;

        $queri7 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 07 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan7'] = $queri7->row()->total_bulan;

        $queri8 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 08 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan8'] = $queri8->row()->total_bulan;

        $queri9 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 09 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan9'] = $queri9->row()->total_bulan;

        $queri10 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 10 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan10'] = $queri10->row()->total_bulan;

        $queri11 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 11 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan11'] = $queri11->row()->total_bulan;

        $queri12 = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = 12 AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan12'] = $queri12->row()->total_bulan;

        $data['total_pemasukan'] = $saldo + $data['pemasukan_bulanan1'] + $data['pemasukan_bulanan2'] + $data['pemasukan_bulanan3'] + $data['pemasukan_bulanan4'] + $data['pemasukan_bulanan5'] + $data['pemasukan_bulanan6'] + $data['pemasukan_bulanan7'] + $data['pemasukan_bulanan8'] + $data['pemasukan_bulanan9'] + $data['pemasukan_bulanan10'] + $data['pemasukan_bulanan11'] + $data['pemasukan_bulanan12'];

        //pengeluaran---------------------------------------------------------------------------------------------

        $querio1 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 01 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan1'] = $querio1->row()->total_bulan;

        $querio2 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 02 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan2'] = $querio2->row()->total_bulan;

        $querio3 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 03 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan3'] = $querio3->row()->total_bulan;

        $querio4 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 04 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan4'] = $querio4->row()->total_bulan;

        $querio5 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 05 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan5'] = $querio5->row()->total_bulan;

        $querio6 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 06 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan6'] = $querio6->row()->total_bulan;

        $querio7 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 07 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan7'] = $querio7->row()->total_bulan;

        $querio8 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 08 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan8'] = $querio8->row()->total_bulan;

        $querio9 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 09 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan9'] = $querio9->row()->total_bulan;

        $querio10 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 10 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan10'] = $querio10->row()->total_bulan;

        $querio11 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 11 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan11'] = $querio11->row()->total_bulan;

        $querio12 = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = 12 AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan12'] = $querio12->row()->total_bulan;

        $data['total_pengeluaran'] = $data['pengeluaran_bulanan1'] + $data['pengeluaran_bulanan2'] + $data['pengeluaran_bulanan3'] + $data['pengeluaran_bulanan4'] + $data['pengeluaran_bulanan5'] + $data['pengeluaran_bulanan6'] + $data['pengeluaran_bulanan7'] + $data['pengeluaran_bulanan8'] + $data['pengeluaran_bulanan9'] + $data['pengeluaran_bulanan10'] + $data['pengeluaran_bulanan11'] + $data['pengeluaran_bulanan12'];

        //laba rugi----------------------------------------------------------------------------------------

        $data['labarugi1'] = $data['pemasukan_bulanan1'] -$data['pengeluaran_bulanan1'];
        $data['labarugi2'] = $data['pemasukan_bulanan2'] -$data['pengeluaran_bulanan2'];
        $data['labarugi3'] = $data['pemasukan_bulanan3'] -$data['pengeluaran_bulanan3'];
        $data['labarugi4'] = $data['pemasukan_bulanan4'] -$data['pengeluaran_bulanan4'];
        $data['labarugi5'] = $data['pemasukan_bulanan5'] -$data['pengeluaran_bulanan5'];
        $data['labarugi6'] = $data['pemasukan_bulanan6'] -$data['pengeluaran_bulanan6'];
        $data['labarugi7'] = $data['pemasukan_bulanan7'] -$data['pengeluaran_bulanan7'];
        $data['labarugi8'] = $data['pemasukan_bulanan8'] -$data['pengeluaran_bulanan8'];
        $data['labarugi9'] = $data['pemasukan_bulanan9'] -$data['pengeluaran_bulanan9'];
        $data['labarugi10'] = $data['pemasukan_bulanan10'] -$data['pengeluaran_bulanan10'];
        $data['labarugi11'] = $data['pemasukan_bulanan11'] -$data['pengeluaran_bulanan11'];
        $data['labarugi12'] = $data['pemasukan_bulanan12'] -$data['pengeluaran_bulanan12'];

        $data['total_labarugi'] = $saldo + $data['labarugi1'] + $data['labarugi2'] + $data['labarugi3'] + $data['labarugi4'] + $data['labarugi5'] + $data['labarugi6'] + $data['labarugi7'] + $data['labarugi8'] + $data['labarugi9'] + $data['labarugi10'] + $data['labarugi11'] + $data['labarugi12'];


        $this->template->load('templates/dashboard', 'laporan/data', $data);
        
    }

    
}
