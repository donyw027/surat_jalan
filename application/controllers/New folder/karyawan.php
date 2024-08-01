<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = "Karyawan";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['karyawan'] = $this->admin->get('karyawan');

            $this->template->load('templates/dashboard', 'karyawan/data', $data);
        }
    }

    public function data_pkwt()
    {

        $data['title'] = "Data Karyawan PKWT";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $query_karyawan = $this->db->query("SELECT * FROM karyawan WHERE status_karyawan='aktif' AND status_pkwt != 'PMNT' AND status_pkwt != 'PMNT-STAFF'");
            $data['karyawan'] = $query_karyawan->result_array();


            $this->template->load('templates/dashboard', 'data_pkwt/data', $data);
        }
    }

    public function reminder_pkwt()
    {

        $data['title'] = "Data Reminder PKWT";
        $role = $this->session->userdata('login_session')['role'];
        $bulan = date('m');
        $tahun = date('Y');

        // var_dump($bulan);die();

        if (is_admin() == true) {
            $query_reminder = $this->db->query("SELECT * FROM karyawan WHERE status_karyawan='aktif' and MONTH(end_kontrak) = '$bulan' and YEAR(end_kontrak) = '$tahun' AND status_pkwt != 'PMNT'");
            $data['karyawan'] = $query_reminder->result_array();

            $this->template->load('templates/dashboard', 'reminderpkwt/data', $data);
        }
    }

    public function reminder_pkwtnext()
    {

        $data['title'] = " Data Friday List";
        $role = $this->session->userdata('login_session')['role'];
        $bulan = date('m');
        $tahun = date('Y');

        $date = new DateTime();
            $date->modify("+1 month");
            $next_month = $date->format('m');


        // var_dump($next_month);die();

        if (is_admin() == true) {
            $query_reminder = $this->db->query("SELECT * FROM karyawan WHERE status_karyawan='aktif' and MONTH(end_kontrak) = '$next_month' and YEAR(end_kontrak) = '$tahun' AND status_pkwt != 'PMNT' AND status_pkwt != 'PMNT-STAFF'");
            $data['karyawan'] = $query_reminder->result_array();

            $this->template->load('templates/dashboard', 'reminderpkwtnext/data', $data);
        }
    }






    private function _validasi($mode)
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('periode', 'periode', 'required|trim');


        if ($mode == 'add') {
            $this->form_validation->set_rules('nama', 'nama', 'required|trim');
            $this->form_validation->set_rules('status_karyawan', 'status_karyawan', 'required|trim');
            $this->form_validation->set_rules('nik_akt', 'nik_akt', 'required|trim');
            $this->form_validation->set_rules('status_pkwt', 'status_pkwt', 'required|trim');
            $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
            $this->form_validation->set_rules('gaji', 'gaji', 'required|trim');
            $this->form_validation->set_rules('periode', 'periode', 'required|trim');



        } else {
            $db = $this->admin->get('karyawan', ['nama' => $this->input->post('nama', true)]);
            $nama = $this->input->post('nama', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah karyawan";
            $this->template->load('templates/dashboard', 'karyawan/add', $data);
        } else {

            $input = $this->input->post(null, true);
            $date = new DateTime($input['start_kontrak']);
            $periode = $input['periode'];
            $date->modify("+$periode month");
            $date->modify("-1 day");
            $end_kontrak = $date->format('Y-m-d');



            $input_data = [
                'nik_akt'       => $input['nik_akt'],
                'nama'       => $input['nama'],
                'status_pkwt'       => $input['status_pkwt'],
                'jabatan'       => $input['jabatan'],
                'divisi'       => $input['divisi'],
                'dept'       => $input['dept'],
                'post'       => $input['post'],
                'gaji'       => $input['gaji'],
                'nik_kk'       => $input['nik_kk'],
                'jk'       => $input['jk'],
                'ttl'       => $input['ttl'],
                'alamat'       => $input['alamat'],
                'email'       => $input['email'],
                'bpjstk'       => $input['bpjstk'],
                'bpjskes'       => $input['bpjskes'],
                'bank'       => $input['bank'],
                'periode'       => $input['periode'],
                'start_kontrak'       => $input['start_kontrak'],
                'end_kontrak'       => $end_kontrak,
                'status_karyawan'       => $input['status_karyawan'],
                'keterangan'       => $input['keterangan'],
                'tgl_join'       => $input['tgl_join'],
                'tgl_keluar'       => $input['tgl_keluar']

            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Add Data ( Nik : '. $input['nik_akt']. ', Nama : '. $input['nama'] . ', Dept : '. $input['dept']. ', Post : '. $input['post'] . ')',
                'aktor'       => $yang_login
            ];

            // var_dump($data_log);die();


            if ($this->admin->insert('karyawan', $input_data) and $this->admin->insert('log_s', $data_log)) {
                set_pesan('data berhasil disimpan.');
                redirect('karyawan');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('karyawan/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Karyawan";
            $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'karyawan/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $date = new DateTime($input['start_kontrak']);
            $periode = $input['periode'];
            $date->modify("+$periode month");
            $date->modify("-1 day");
            $end_kontrak = $date->format('Y-m-d');
            $input_data = [
                'nik_akt'       => $input['nik_akt'],
                'nama'       => $input['nama'],
                'status_pkwt'       => $input['status_pkwt'],
                'jabatan'       => $input['jabatan'],

                'divisi'       => $input['divisi'],
                'dept'       => $input['dept'],
                'post'       => $input['post'],
                'gaji'       => $input['gaji'],
                'nik_kk'       => $input['nik_kk'],
                'jk'       => $input['jk'],
                'ttl'       => $input['ttl'],
                'alamat'       => $input['alamat'],
                'email'       => $input['email'],
                'bpjstk'       => $input['bpjstk'],
                'bpjskes'       => $input['bpjskes'],
                'bank'       => $input['bank'],
                'periode'       => $input['periode'],

                'start_kontrak'       => $input['start_kontrak'],
                'end_kontrak'       => $end_kontrak,
                'status_karyawan'       => $input['status_karyawan'],
                'keterangan'       => $input['keterangan'],
                'tgl_join'       => $input['tgl_join'],
                'tgl_keluar'       => $input['tgl_keluar']

            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Edit Data ( Nik : '. $input['nik_akt']. ', Nama : '. $input['nama'] . ', Dept : '. $input['dept']. ', Post : '. $input['post'] . ')',
                    'aktor'       => $yang_login
                ];

            

            if ($this->admin->update('karyawan', 'id', $id, $input_data) and  $this->admin->insert('log_s', $data_log)) {
                set_pesan('data berhasil diubah.');
                redirect('karyawan');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('karyawan/edit/' . $id);
            }
        }
    }

    public function up_print_pkwt($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Karyawan";
            $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'karyawan/edit_dan_print_pkwt', $data);
        } else {
            $input = $this->input->post(null, true);
            $date = new DateTime($input['start_kontrak']);
            $periode = $input['periode'];
            $date->modify("+$periode month");
            $date->modify("-1 day");
            $end_kontrak = $date->format('Y-m-d');
            $input_data = [
                'nik_akt'       => $input['nik_akt'],
                'nama'       => $input['nama'],
                'status_pkwt'       => $input['status_pkwt'],
                'jabatan'       => $input['jabatan'],

                
                'gaji'       => $input['gaji'],
                'nik_kk'       => $input['nik_kk'],
                'jk'       => $input['jk'],
                'ttl'       => $input['ttl'],
                'alamat'       => $input['alamat'],
                'periode'       => $input['periode'],


                'start_kontrak'       => $input['start_kontrak'],
                'end_kontrak'       => $end_kontrak


            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Edit & Print Data ( Nik : '. $input['nik_akt']. ', Nama : '. $input['nama'] . ', Dept : '. $input['dept']. ', Post : '. $input['post'] . ')',
                    'aktor'       => $yang_login
                ];

            if ($this->admin->update('karyawan', 'id', $id, $input_data) and $this->admin->insert('log_s', $data_log)) {
                $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
                $data['pkwt'] = $this->admin->get('pkwt');


                $this->template->load('templates/print_pkwt', 'pkwt/print_pkwt', $data);
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('karyawan/edit/' . $id);
            }
        }
    }

    public function up_print_phl($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Karyawan";
            $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'karyawan/edit_dan_print_phl', $data);
        } else {
            $input = $this->input->post(null, true);
            $date = new DateTime($input['start_kontrak']);
            $periode = $input['periode'];
            $date->modify("+$periode month");
            $date->modify("-1 day");

            $end_kontrak = $date->format('Y-m-d');
            $input_data = [
                'nik_akt'       => $input['nik_akt'],
                'nama'       => $input['nama'],
                'status_pkwt'       => $input['status_pkwt'],
                'jabatan'       => $input['jabatan'],
                
                'gaji'       => $input['gaji'],
                'nik_kk'       => $input['nik_kk'],
                'jk'       => $input['jk'],
                'ttl'       => $input['ttl'],
                'alamat'       => $input['alamat'],
                'periode'       => $input['periode'],


                'start_kontrak'       => $input['start_kontrak'],
                'end_kontrak'       => $end_kontrak


            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Edit & Print Data ( Nik : '. $input['nik_akt']. ', Nama : '. $input['nama'] . ', Dept : '. $input['dept']. ', Post : '. $input['post'] . ')',
                    'aktor'       => $yang_login
                ];

            if ($this->admin->update('karyawan', 'id', $id, $input_data) and $this->admin->insert('log_s', $data_log)) {
                $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
                $data['pkwt'] = $this->admin->get('pkwt');


                $this->template->load('templates/print_phl', 'pkwt/print_phl', $data);
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('karyawan/edit/' . $id);
            }
        }
    }

    public function up_print_phl_pkwt($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Karyawan";
            $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
            $this->template->load('templates/dashboard', 'karyawan/edit_dan_print_phl_pkwt', $data);
        } else {
            $input = $this->input->post(null, true);
            $date = new DateTime($input['start_kontrak']);
            $periode = $input['periode'];
            $date->modify("+$periode month");
            $date->modify("-1 day");

            $end_kontrak = $date->format('Y-m-d');
            $input_data = [
                'nik_akt'       => $input['nik_akt'],
                'nama'       => $input['nama'],
                'status_pkwt'       => $input['status_pkwt'],
                'jabatan'       => $input['jabatan'],
                
                'gaji'       => $input['gaji'],
                'nik_kk'       => $input['nik_kk'],
                'jk'       => $input['jk'],
                'ttl'       => $input['ttl'],
                'alamat'       => $input['alamat'],
                'periode'       => $input['periode'],


                'start_kontrak'       => $input['start_kontrak'],
                'end_kontrak'       => $end_kontrak


            ];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Edit & Print Data ( Nik : '. $input['nik_akt']. ', Nama : '. $input['nama'] . ', Dept : '. $input['dept']. ', Post : '. $input['post'] . ')',
                    'aktor'       => $yang_login
                ];

            if ($this->admin->update('karyawan', 'id', $id, $input_data) and $this->admin->insert('log_s', $data_log)) {
                $data['karyawan'] = $this->admin->get('karyawan', ['id' => $id]);
                $data['pkwt'] = $this->admin->get('pkwt');


                $this->template->load('templates/print_phl_pkwt', 'pkwt/print_phl_pkwt', $data);
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('karyawan/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        $karyawan = $this->admin->get('karyawan', ['id' => $id]);
        $nik_akt = $karyawan['nik_akt'];
        $nama = $karyawan['nama'];
        $dept = $karyawan['dept'];
        $post = $karyawan['post'];


        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
                $data_log = [
                    'tanggal'       => $tgl,
                    'aksi'       => 'Delete Data ( Nik : '. $nik_akt. ', Nama : '. $nama . ' , Dept : '. $dept. ', Post : '. $post . ')',
                    'aktor'       => $yang_login
                ];

                // var_dump($data_log);die();


        if ($this->admin->delete('karyawan', 'id', $id) and  $this->admin->insert('log_s', $data_log)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('karyawan');
    }
}
