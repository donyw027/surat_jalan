<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_jalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();


        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index1()
    {

        $data['title'] = "Master Car";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['car_plat'] = $this->admin->get('car_plat');

            $this->template->load('templates/dashboard', 'car/data', $data);
        }
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('plat', 'plat', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('plat', 'plat', 'required|trim');
        } else {
            $db = $this->admin->get('car_plat', ['plat' => $this->input->post('plat', true)]);
            $stok = $this->input->post('plat', true);
        }
    }

    public function index()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Surat Jalan";
            $this->template->load('templates/dashboard', 'surat_jalan/data', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data_sj = [
                'plat'       => $input['plat'],
                'keterangan'       => $input['keterangan']
            ];

            $input_data_hsj = [
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


            if ($this->admin->insert('riwayat_surat_jalan', $input_data_sj) and $this->admin->insert('surat_jalan', $input_data_hsj) and $this->admin->insert('log_s', $data_log)) {

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
            $data['title'] = "Edit car";
            $data['car_plat'] = $this->admin->get('car_plat', ['id' => $id]);
            $this->template->load('templates/dashboard', 'car/edit', $data);
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
                'aksi'       => 'Edit Data ( Plat : '. $input['plat']. ', Keterangan : '. $input['keterangan'] . ')',
                'aktor'       => $yang_login
            ];

            // var_dump($data_log);die();


            if ($this->admin->update('car_plat', 'id', $id, $input_data) and $this->admin->insert('log_s', $data_log)) {

                set_pesan('data berhasil diubah.');
                redirect('car');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('car/edit/' . $id);
            }
        }
    }



    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $car_plat = $this->admin->get('car_plat', ['id' => $id]);
        $plat = $car_plat['plat'];
        $keterangan = $car_plat['keterangan'];


        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Delete Data ( plat : '. $plat. ', keterangan : '. $keterangan . ')',
                    'aktor'       => $yang_login
                ];

                // var_dump($data_log);die();


        if ($this->admin->delete('car_plat', 'id', $id) and  $this->admin->insert('log_s', $data_log)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('car');
    }

    
}
