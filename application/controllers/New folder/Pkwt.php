<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pkwt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();


        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = "PKWT";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['pkwt'] = $this->admin->get('pkwt');

            $this->template->load('templates/dashboard', 'pkwt/data', $data);
        }
    }

    public function riwayat_pkwt($getId)
    {
        $id = encode_php_tags($getId);
        $data['title'] = "Riwayat PKWT";
        $role = $this->session->userdata('login_session')['role'];
        $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);

            $data['riwayat_pkwt'] =  $this->db->query("SELECT * FROM riwayat_pkwt WHERE idk = '$id'")->result_array();

            $this->template->load('templates/dashboard', 'riwayat_pkwt/data', $data);
    }

    public function print_pkwt($getId)
    {



        $data['title'] = "Print PKWT";
        $role = $this->session->userdata('login_session')['role'];
        $id = encode_php_tags($getId);


        if (is_admin() == true) {
            $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
            $data['pkwt'] = $this->admin->get('pkwt');


            $this->template->load('templates/print_pkwt', 'pkwt/print_pkwt', $data);
        }
    }

    public function print_phl($getId)
    {

        $data['title'] = "Print PHL";
        $role = $this->session->userdata('login_session')['role'];
        $id = encode_php_tags($getId);


        if (is_admin() == true) {
            $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
            $data['pkwt'] = $this->admin->get('pkwt');


            $this->template->load('templates/print_phl', 'pkwt/print_phl', $data);
        }
    }

    public function print_phl_pkwt($getId)
    {

        $data['title'] = "Print PHL";
        $role = $this->session->userdata('login_session')['role'];
        $id = encode_php_tags($getId);


        if (is_admin() == true) {
            $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
            $data['pkwt'] = $this->admin->get('pkwt');


            $this->template->load('templates/print_phl_pkwt', 'pkwt/print_phl_pkwt', $data);
        }
    }

    public function pengumuman()
    {

        $data['title'] = "Pengumuman Reminder PKWT";
        $role = $this->session->userdata('login_session')['role'];
        $bulan = date('m');

        if (is_admin() == true) {
            $query_reminder = $this->db->query("SELECT * FROM karyawan WHERE status_karyawan='aktif' and MONTH(end_kontrak) = '$bulan'");
            $data['karyawan'] = $query_reminder->result_array();

            $data['nama_hrd'] = $this->admin->getNamaHrd();

            $this->template->load('templates/pengumuman', 'pkwt/pengumuman', $data);
        }
    }

    public function pengumumannext()
    {

        $data['title'] = "Pengumuman Next Month Reminder PKWT";
        $role = $this->session->userdata('login_session')['role'];
        $bulan = date('m');
        $date = new DateTime();
            $date->modify("+1 month");
            $next_month = $date->format('m');

        if (is_admin() == true) {
            $query_reminder = $this->db->query("SELECT * FROM karyawan WHERE status_karyawan='aktif' and MONTH(end_kontrak) = '$next_month'");
            $data['karyawan'] = $query_reminder->result_array();

            $data['nama_hrd'] = $this->admin->getNamaHrd();

            $this->template->load('templates/pengumuman', 'pkwt/pengumuman', $data);
        }
    }



    private function _validasi($mode)
    {
        $this->form_validation->set_rules('isi_pkwt', 'isi_pkwt', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('isi_pkwt', 'isi_pkwt', 'required|trim');
        } else {
            $db = $this->admin->get('pkwt', ['isi_pkwt' => $this->input->post('isi_pkwt', true)]);
            $stok = $this->input->post('isi_pkwt', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Data PKWT";
            $this->template->load('templates/dashboard', 'pkwt/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'isi_pkwt'       => $input['isi_pkwt'],
                'nama_hrd'       => $input['nama_hrd'],
                'alamat_hrd'       => $input['alamat_hrd'],
                'ttd_hrd'       => $input['ttd_hrd']

            ];

            if ($this->admin->insert('pkwt', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('pkwt');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('pkwt/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit PKWT";
            $data['pkwt'] = $this->admin->get('pkwt', ['id' => $id]);
            $this->template->load('templates/dashboard', 'pkwt/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'isi_pkwt'       => $input['isi_pkwt'],
                'nama_hrd'       => $input['nama_hrd'],
                'alamat_hrd'       => $input['alamat_hrd'],
                'ttd_hrd'       => $input['ttd_hrd']

            ];

            if ($this->admin->update('pkwt', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('pkwt');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('pkwt/edit/' . $id);
            }
        }
    }

    public function simpan_pkwt($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('add');

        $karyawan = $this->admin->get('karyawan', ['id' => $id]);

        $idk = set_value('id', $karyawan['id']);
        $nik_akt = set_value('nik_akt', $karyawan['nik_akt']);
        $status_pkwt = set_value('status_pkwt', $karyawan['status_pkwt']);
        $start_kontrak = set_value('start_kontrak', $karyawan['start_kontrak']);
        $end_kontrak = set_value('end_kontrak', $karyawan['end_kontrak']);
        $tgl_simpan = date('Y-m-d');
        


        $input_data = [
            'idk'       => $idk,

            'nik_akt'       => $nik_akt,
            'status_pkwt'       => $status_pkwt,
            'start_kontrak'       => $start_kontrak,
            'end_kontrak'       => $end_kontrak,
            'tgl_simpan'       => $tgl_simpan

        ];

        $this->admin->insert('riwayat_pkwt', $input_data);
        set_pesan('data berhasil disimpan.');
        redirect('karyawan/data_pkwt');
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('pkwt', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('pkwt');
    }

    public function d_riwayat($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('riwayat_pkwt', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('karyawan/data_pkwt');
    }
}
