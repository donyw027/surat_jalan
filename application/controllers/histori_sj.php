<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Histori_sj extends CI_Controller
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

        $data['title'] = "Riwayat Surat Jalan";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['riwayat_surat_jalan'] = $this->admin->get('riwayat_surat_jalan');

            $this->template->load('templates/dashboard', 'histori_sj/data', $data);
        }
    }

    public function detail()
    {   
        $no_surat = $this->uri->segment('3');
        // var_dump($no_surat);die();

        $data['title'] = "Detail Surat Jalan";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['detail_hsj'] = $this->db->query("SELECT * FROM `riwayat_surat_jalan` WHERE no_surat = '$no_surat'")->row();
            $data['detail_sj1'] = $this->db->query("SELECT * FROM `surat_jalan` WHERE no_surat = '$no_surat'")->row();

            $data['detail_sj'] = $this->db->query("SELECT * FROM `surat_jalan` WHERE no_surat = '$no_surat'")->result();

            $this->template->load('templates/dashboard', 'histori_sj/detail', $data);
        }
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('tgl', 'tgl', 'required|trim');
        } else {
            $db = $this->admin->get('riwayat_surat_jalan', ['tgl' => $this->input->post('tgl', true)]);
            $stok = $this->input->post('tgl', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Data History";
            $this->template->load('templates/dashboard', 'autor/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'nama'       => $input['nama']
            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Add Data ( Nama : '. $input['nama'].  ')',
                'aktor'       => $yang_login
            ];

            // var_dump($data_log);die();


            if ($this->admin->insert('riwayat_surat_jalan', $input_data) and $this->admin->insert('log_s', $data_log)) {

                set_pesan('data berhasil disimpan.');
                redirect('autor');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('autor/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit autor";
            $data['riwayat_surat_jalan'] = $this->admin->get('riwayat_surat_jalan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'autor/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'nama'       => $input['nama']
            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Edit Data ( Nama : '. $input['nama']. ')',
                'aktor'       => $yang_login
            ];

            // var_dump($data_log);die();


            if ($this->admin->update('riwayat_surat_jalan', 'id', $id, $input_data) and $this->admin->insert('log_s', $data_log)) {

                set_pesan('data berhasil diubah.');
                redirect('autor');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('autor/edit/' . $id);
            }
        }
    }



    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $riwayat_surat_jalan = $this->admin->get('riwayat_surat_jalan', ['id' => $id ]);
        $d_surat_jalan = $this->db->query("SELECT * FROM `riwayat_surat_jalan` WHERE id = '$id'")->row();
        $nosuratsj= $d_surat_jalan->no_surat;
       
            
        


        $no_surat = $riwayat_surat_jalan['no_surat'];

        // $nosuratdb ="NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'];

        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Delete Data (  No Surat : '. $d_surat_jalan->no_surat_db . ')',
                    'aktor'       => $yang_login
                ];

                // var_dump($data_log);die();


        if ($this->admin->delete('riwayat_surat_jalan', 'id', $id) and $this->admin->delete('surat_jalan', 'no_surat', $nosuratsj) and  $this->admin->insert('log_s', $data_log)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('histori_sj');
    }

    
}
