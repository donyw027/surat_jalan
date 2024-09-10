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
        $this->form_validation->set_rules('tgl', 'tgl', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('tgl', 'tgl', 'required|trim');


        } else {
            $db = $this->admin->get('riwayat_surat_jalan', ['tgl' => $this->input->post('tgl', true)]);
            $stok = $this->input->post('tgl', true);
        }
    }

    public function index()
    {
        $data['detail_hsj'] = $this->db->query("SELECT no_surat FROM `riwayat_surat_jalan` ORDER BY `no_surat` DESC LIMIT 1")->row();
        $data['car_plat'] = $this->admin->get('car_plat');
        $data['author1'] = $this->admin->get('author');



        // var_dump( $data['detail_hsj']);die();

        $data['title'] = "Surat Jalan";

        $tahun = date('y');
                    $bulan = date('m');

                    $bulanRomawi = array(
                        '01' => 'I',
                        '02' => 'II',
                        '03' => 'III',
                        '04' => 'IV',
                        '05' => 'V',
                        '06' => 'VI',
                        '07' => 'VII',
                        '08' => 'VIII',
                        '09' => 'IX',
                        '10' => 'X',
                        '11' => 'XI',
                        '12' => 'XII'
                    );

        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Surat Jalan";
            $this->template->load('templates/dashboard', 'surat_jalan/data', $data);
        } else {
            $input = $this->input->post(null, true);


            $input_data_hsj = [
                'tgl'       => $input['tgl'],
                'no_surat'       => $input['no_surat'],
                'no_surat_db'  =>  "NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'],

                'tujuan'       => $input['tujuan'],
                'perihal'       => $input['perihal'],
                'paraf_pic'       => $input['paraf_pic']
            ];
            $this->admin->insert('riwayat_surat_jalan', $input_data_hsj);



            $items = $input['item'];
            $deskripsi = $input['deskripsi'];
            $qty = $input['qty'];
            $remark = $input['remark'];

            for ($i = 0; $i < count($items); $i++) {
                $input_item = [
                    'no_surat'  => $input['no_surat'],
                'no_surat_db'  =>  "NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'],

                    'tgl' => $input['tgl'],
                    'kepada' => $input['kepada'],
                    'car_plat' => $input['car_plat'],
                    'inv_no' => $input['inv_no'],
                    'item'      => $items[$i],
                    'deskripsi' => $deskripsi[$i],
                    'qty'       => $qty[$i],
                    'remark'    => $remark[$i],
                    'author' => $input['author'],
                    'receiver' => $input['receiver']
                ];
                $this->admin->insert('surat_jalan', $input_item);
            }


            $nosuratdb ="NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'];
            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Add Data Surat Jalan ( No Surat : ' . $nosuratdb . ', perihal : ' . $input['perihal'] . ')',
                'aktor'       => $yang_login
            ];

            // var_dump($data_log);die();


            if ($this->admin->insert('log_s', $data_log)) {

                set_pesan('data berhasil disimpan.');
                redirect('surat_jalan');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('surat_jalan');
            }
        }
    }

    public function print_sj()
    {   
        $data['car_plat'] = $this->admin->get('car_plat');

        $data['detail_hsj'] = $this->db->query("SELECT no_surat FROM `riwayat_surat_jalan` ORDER BY `no_surat` DESC LIMIT 1")->row();
        $data['car_plat'] = $this->admin->get('car_plat');
        $data['author1'] = $this->admin->get('author');


        
        $data['title'] = "Surat Jalan";

        $tahun = date('y');
        $bulan = date('m');

        $bulanRomawi = array(
            '01' => 'I',
            '02' => 'II',
            '03' => 'III',
            '04' => 'IV',
            '05' => 'V',
            '06' => 'VI',
            '07' => 'VII',
            '08' => 'VIII',
            '09' => 'IX',
            '10' => 'X',
            '11' => 'XI',
            '12' => 'XII'
        );

        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Surat Jalan";
            $this->template->load('templates/dashboard', 'surat_jalan/data', $data);
        } else {
            $input = $this->input->post(null, true);


            $input_data_hsj = [
                'tgl'       => $input['tgl'],
                'no_surat'       => $input['no_surat'],
                'no_surat_db'  =>  "NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'],
                'tujuan'       => $input['kepada'],
                'perihal'       => $input['perihal'],
                'paraf_pic'       => $input['paraf_pic']
            ];
            $this->admin->insert('riwayat_surat_jalan', $input_data_hsj);



            $items = $input['item'];
            $deskripsi = $input['deskripsi'];
            $qty = $input['qty'];
            $remark = $input['remark'];

           

            for ($i = 0; $i < count($items); $i++) {
                $input_item = [
                    'no_surat_db'  =>  "NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'],
                    'no_surat'  =>  $input['no_surat'],
                    'tgl' => $input['tgl'],
                    'kepada' => $input['kepada'],
                    'car_plat' => $input['car_plat'],
                    'inv_no' => $input['inv_no'],
                    'item'      => $items[$i],
                    'deskripsi' => $deskripsi[$i],
                    'qty'       => $qty[$i],
                    'remark'    => $remark[$i],
                    'author' => $input['author'],
                    'receiver' => $input['receiver']
                ];
                $this->admin->insert('surat_jalan', $input_item);
            }


            $nosuratdb ="NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Add Data Surat Jalan ( No Surat : ' . $nosuratdb . ', perihal : ' . $input['perihal'] . ')',
                'aktor'       => $yang_login
            ];

            // var_dump($data_log);die();

            // $nosurat= "NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/" . $input['no_surat'];
            if ($this->admin->insert('log_s', $data_log)) {

                // $this->template->load('templates/form_sj', 'print/form_sj', $data);
                redirect('surat_jalan/printdata/' . $input['no_surat']);
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('surat_jalan');
            }
        }
        // $this->template->load('templates/dashboard', 'print/form_sj');

    }

    public function hdetail_sj()
    {

        $data['title'] = "Detail Data Surat Jalan";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['hdetail_sj'] = $this->admin->get('surat_jalan');

            $this->template->load('templates/dashboard', 'hdetail_sj/data', $data);
        }
    }

    public function printdata($no_surat)  {
        $no_surat = $this->uri->segment('3');
        // var_dump($no_surat); die();

        $data['detail_hsj'] = $this->db->query("SELECT * FROM `riwayat_surat_jalan` WHERE no_surat = '$no_surat'")->row();
        $data['detail_sj1'] = $this->db->query("SELECT * FROM `surat_jalan` WHERE no_surat = '$no_surat'")->row();
        $data['detail_sj'] = $this->db->query("SELECT * FROM `surat_jalan` WHERE no_surat = '$no_surat'")->result();
        $this->template->load('templates/form_sj', 'print/form_sj', $data);

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
            $nosuratdb ="NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'];

            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Edit Data ( Plat : ' . $nosuratdb . ', Keterangan : ' . $input['keterangan'] . ')',
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

        $nosuratdb ="NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $input['no_surat'];

        $yang_login = $this->session->userdata('login_session')['nama'];
        $tgl = date('d M Y | H:i');
        $data_log = [
            'tanggal'       => $tgl,
            'aksi'       => 'Delete Data ( plat : ' . $plat . ', keterangan : ' . $keterangan . ')',
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
