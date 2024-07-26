<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok extends CI_Controller
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

        $data['title'] = "Stock";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['stok'] = $this->admin->get('stok');

            $this->template->load('templates/dashboard', 'stok/data', $data);
        }
    }



    private function _validasi($mode)
    {
        $this->form_validation->set_rules('alatbahan', 'alatbahan', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('alatbahan', 'alatbahan', 'required|trim');
        } else {
            $db = $this->admin->get('stok', ['alatbahan' => $this->input->post('alatbahan', true)]);
            $stok = $this->input->post('alatbahan', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Data Alat dan Bahan";
            $this->template->load('templates/dashboard', 'stok/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'alatbahan'       => $input['alatbahan'],
                'jumlah'       => $input['jumlah'],
                'hargabeli'       => $input['hargabeli']

            ];

            if ($this->admin->insert('stok', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('stok');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('stok/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Stock";
            $data['stok'] = $this->admin->get('stok', ['id' => $id]);
            $this->template->load('templates/dashboard', 'stok/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'alatbahan'       => $input['alatbahan'],
                'jumlah'       => $input['jumlah'],
                'hargabeli'       => $input['hargabeli']

            ];

            if ($this->admin->update('stok', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('stok');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('stok/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('stok', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('stok');
    }
}
