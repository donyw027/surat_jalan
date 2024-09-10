<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hdetail_sj extends CI_Controller
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

        $data['title'] = "Detail Data Surat Jalan";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['hdetail_sj'] = $this->admin->get('surat_jalan');

            $this->template->load('templates/dashboard', 'hdetail_sj/data', $data);
        }
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('id', 'id', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('id', 'id', 'required|trim');
        } else {
            $db = $this->admin->get('surat_jalan', ['id' => $this->input->post('id', true)]);
            $stok = $this->input->post('id', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Data Car";
            $this->template->load('templates/dashboard', 'car/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'plat'       => $input['plat'],
                'keterangan'       => $input['keterangan']
            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Add Data ( Plat : '. $input['plat']. ', Keterangan : '. $input['keterangan'] . ')',
                'aktor'       => $yang_login
            ];

            // var_dump($data_log);die();


            if ($this->admin->insert('car_plat', $input_data) and $this->admin->insert('log_s', $data_log)) {

                set_pesan('data berhasil disimpan.');
                redirect('car');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('car/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Surat Jalan";
            $data['surat_jalan'] = $this->admin->get('surat_jalan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'hdetail_sj/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'item'       => $input['item'],
                'deskripsi'       => $input['deskripsi'],
                'qty'       => $input['qty'],
                'remark'       => $input['remark']
            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Edit Data ( item : '. $input['item']. ', remark : '. $input['remark'] . ')',
                'aktor'       => $yang_login
            ];

            // var_dump($data_log);die();


            if ($this->admin->update('surat_jalan', 'id', $id, $input_data) and $this->admin->insert('log_s', $data_log)) {

                set_pesan('data berhasil diubah.');
                redirect('histori_sj');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('hdetail_sj/edit/' . $id);
            }
        }
    }



    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $hdetail_sj = $this->admin->get('surat_jalan', ['id' => $id]);
        $no_surat_db = $hdetail_sj['no_surat_db'];
        $perihal = $hdetail_sj['perihal'];


        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Delete Data ( no_surat_db : '. $no_surat_db. ', perihal : '. $perihal . ')',
                    'aktor'       => $yang_login
                ];

                // var_dump($data_log);die();


        if ($this->admin->delete('surat_jalan', 'id', $id) and  $this->admin->insert('log_s', $data_log)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('hdetail_sj');
    }

    
}
