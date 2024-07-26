<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemasukan extends CI_Controller
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

        $data['title'] = "Pemasukan";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['pemasukan'] = $this->admin->get('pemasukan');

            $this->template->load('templates/dashboard', 'pemasukan/data', $data);
        }
    }



    private function _validasi($mode)
    {
        $this->form_validation->set_rules('tgl', 'tgl', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('tgl', 'tgl', 'required|trim');
        } else {
            $db = $this->admin->get('pemasukan', ['tgl' => $this->input->post('tgl', true)]);
            $tgl = $this->input->post('tgl', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Pemasukan";
            $this->template->load('templates/dashboard', 'pemasukan/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'tgl'       => $input['tgl'],
                'produk'       => $input['produk'],
                'orderby'       => $input['orderby'],
                'jumlah_pemasukan'       => $input['jumlah_pemasukan']


            ];

            if ($this->admin->insert('pemasukan', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('pemasukan');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('pemasukan/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit pemasukan";
            $data['pemasukan'] = $this->admin->get('pemasukan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'pemasukan/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'tgl'       => $input['tgl'],
                'produk'       => $input['produk'],
                'orderby'       => $input['orderby'],
                'jumlah_pemasukan'       => $input['jumlah_pemasukan']

            ];

            if ($this->admin->update('pemasukan', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('pemasukan');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('pemasukan/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('pemasukan', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('pemasukan');
    }
}
