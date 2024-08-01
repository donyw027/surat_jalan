<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autor extends CI_Controller
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

        $data['title'] = "Master Author";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['author'] = $this->admin->get('author');

            $this->template->load('templates/dashboard', 'autor/data', $data);
        }
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        } else {
            $db = $this->admin->get('author', ['nama' => $this->input->post('nama', true)]);
            $stok = $this->input->post('nama', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Data autor";
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


            if ($this->admin->insert('author', $input_data) and $this->admin->insert('log_s', $data_log)) {

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
            $data['author'] = $this->admin->get('author', ['id' => $id]);
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


            if ($this->admin->update('author', 'id', $id, $input_data) and $this->admin->insert('log_s', $data_log)) {

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
        $author = $this->admin->get('author', ['id' => $id]);
        $nama = $author['nama'];


        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Delete Data (  nama : '. $nama . ')',
                    'aktor'       => $yang_login
                ];

                // var_dump($data_log);die();


        if ($this->admin->delete('author', 'id', $id) and  $this->admin->insert('log_s', $data_log)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('autor');
    }

    
}
