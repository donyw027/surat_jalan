<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        if (!is_admin()) {
            redirect('dashboard');
        }

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function cuti()
    {
        $data['title'] = "Form Cuti ";
        $this->template->load('templates/form_cuti', 'print/form_cuti');
    }

    public function lembur()
    {
        $data['title'] = "Form Lembur ";
        $this->template->load('templates/form_lembur', 'print/form_lembur');
    }

    public function ijin()
    {
        $data['title'] = "Form Ijin ";
        $this->template->load('templates/form_ijin', 'print/form_ijin');
    }

    
}
