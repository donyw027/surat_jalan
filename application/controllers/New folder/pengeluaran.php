<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluaran extends CI_Controller
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

        $data['title'] = "Pengeluaran";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['pengeluaran'] = $this->admin->get('pengeluaran');

            $this->template->load('templates/dashboard', 'pengeluaran/data', $data);
        }
    }



    private function _validasi($mode)
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('tgl', 'tgl', 'required|trim');
        } else {
            $db = $this->admin->get('pengeluaran', ['tgl' => $this->input->post('tgl', true)]);
            $tgl = $this->input->post('tgl', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah pengeluaran";
            $this->template->load('templates/dashboard', 'pengeluaran/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'tgl'       => $input['tgl'],
                'pengeluaran'       => $input['pengeluaran'],
                'jumlah_pengeluaran'       => $input['jumlah_pengeluaran']
            ];

            if ($this->admin->insert('pengeluaran', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('pengeluaran');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('pengeluaran/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit pengeluaran";
            $data['pengeluaran'] = $this->admin->get('pengeluaran', ['id' => $id]);
            $this->template->load('templates/dashboard', 'pengeluaran/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'tgl'       => $input['tgl'],
                'pengeluaran'       => $input['pengeluaran'],
                'jumlah_pengeluaran'       => $input['jumlah_pengeluaran']

            ];

            if ($this->admin->update('pengeluaran', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('pengeluaran');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('pengeluaran/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('pengeluaran', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('pengeluaran');
    }
}
