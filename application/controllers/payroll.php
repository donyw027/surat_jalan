<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Payroll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Admin_model', 'admin');
        $this->load->library('email');
        $this->load->library('upload');
        // $this->load->library('PHPExcel');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = "Payroll";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['payroll'] = $this->admin->get('payroll');

            $this->template->load('templates/dashboard', 'payroll/data', $data);
        }
    }


    public function send_payrolls_by1($getId) {
        $id = encode_php_tags($getId);

        $payroll = $this->admin->get_payroll_by_id($id);
        // var_dump($payroll->nama); die();
        

            $this->send_payroll_email_by1($payroll);
            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Pengiriman Slip Gaji ke '.$payroll->nama .', NIK : '.$payroll->nik,
                'aktor'       => $yang_login
            ];
            $this->admin->insert('log_s', $data_log);

        set_pesan('Email Berhasil Terkirim');
                redirect('payroll');
    }

    private function send_payroll_email_by1($payroll) {
        // var_dump($payroll); die();
        $bulann =  date('Y-m-d');
$date1 = new DateTime($bulann);
$date1->modify("-1 month");
$bulan_sebelum = format_bulan($date1->format('Y-m-d'));

        $this->email->from('aktindonesia@akt-id.com', 'PT. AKT Indonesia');
        $this->email->to($payroll->email);
        $this->email->subject('Slip Gaji ' . $bulan_sebelum);

        $message = $this->load->view('payroll/print_payrol', ['payroll' => $payroll], TRUE);
        $this->email->message($message);

        if (!$this->email->send()) {
            log_message('error', 'Failed to send payroll email to: ' . $payroll->email);
        }
    }
    

    public function send_payrolls() {

        $payrolls = $this->admin->get_all_payrolls();

        foreach ($payrolls as $payroll) {
            $this->send_payroll_email($payroll);
        }
        $this->email->clear(TRUE);
        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Mengirim Semua Slip Gaji ke email karyawan',
                'aktor'       => $yang_login
            ];
            $this->admin->insert('log_s', $data_log);


        set_pesan('Email Berhasil Terkirim');
                redirect('payroll');
    }

   

    private function send_payroll_email($payroll) {
        $bulann =  date('Y-m-d');
$date1 = new DateTime($bulann);
$date1->modify("-1 month");
$bulan_sebelum = format_bulan($date1->format('Y-m-d'));

        $this->email->from('aktindonesia@akt-id.com', 'PT. AKT Indonesia');
        $this->email->to($payroll->email);
        $this->email->subject('Slip Gaji ' . $bulan_sebelum);

        $message = $this->load->view('payroll/print_payrol', ['payroll' => $payroll], TRUE);
        $this->email->message($message);

        if (!$this->email->send()) {
            log_message('error', 'Failed to send payroll email to: ' . $payroll->email);
        }
    }


public function upload_excel() {

    $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    // Konfigurasi upload
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'xls|xlsx';
    $config['max_size'] = 10000;

    $this->upload->initialize($config);

    if (!$this->upload->do_upload('excel_file')) {
        echo "Path: " . realpath('./uploads/') . "<br>";
        echo "File exists: " . file_exists(realpath('./uploads/')) . "<br>";
        echo "Is writable: " . is_writable(realpath('./uploads/')) . "<br>";
        $this->session->set_flashdata('message', $this->upload->display_errors());
        redirect('payroll');
    } else {
        $fileData = $this->upload->data();
        $filePath = './uploads/' . $fileData['file_name'];

        // Load PHPExcel library
        require_once(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel.php');
        require_once(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel/IOFactory.php');

        $objPHPExcel = PHPExcel_IOFactory::load($filePath);

        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

        $data = [];
        foreach ($sheetData as $row) {
            $data[] = [
                'id' => $row['A'],
                'nama' => $row['B'],
                'nik' => $row['C'],
                'dept' => $row['D'],
                'status' => $row['E'],
                'gaji_pokok' => $row['F'],
                'gaji_tidak_full' => $row['G'],
                'uang_phl' => $row['H'],
                'tunjangan' => $row['I'],
                'sisa_cuti' => $row['J'],
                'lembur' => $row['K'],
                'koreksi_positif' => $row['L'],
                'jumlah_pendapatan' => $row['M'],
                'bpjs_tk' => $row['N'],
                'bpjs_kes' => $row['O'],
                'pph21' => $row['P'],
                'absensi' => $row['Q'],
                'koreksi_negatif' => $row['R'],
                'jumlah_potongan' => $row['S'],
                'take_home_pay' => $row['T'],
                'email' => $row['U'],
                'total_hari_kerja' => $row['V']
            ];
        }
        // var_dump($data);die();

        // Menggunakan insert_batch untuk memasukkan data ke dalam database
        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Import Data Slip Gaji',
                'aktor'       => $yang_login
            ];
            $this->admin->insert('log_s', $data_log);
        $this->db->insert_batch('payroll', $data);

        $this->session->set_flashdata('message', 'File berhasil diupload dan data dimasukkan ke database');
        redirect('payroll/');
    }
}



    public function empty_payroll()
    {
        // Execute truncate query
        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Menghapus semua data payroll',
                'aktor'       => $yang_login
            ];
            $this->admin->insert('log_s', $data_log);
        $this->db->truncate('payroll');

        // Set flashdata for success message
        $this->session->set_flashdata('message', 'All Data payrol berhasil dihapus.');

        // Redirect to the desired page
        redirect('payroll');
    }

    // public function upload_excel_form() {
    //     $this->load->view('payroll/upload_excel');
    // }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim');

        if ($mode == 'edit') {
            $this->form_validation->set_rules('email', 'email', 'required|trim');
        } else {
            $db = $this->admin->get('payroll', ['email' => $this->input->post('email', true)]);
            $email = $this->input->post('email', true);
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit Payrol";
            $data['payroll'] = $this->admin->get('payroll', ['id' => $id]);
            $this->template->load('templates/dashboard', 'payroll/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'email'       => $input['email']

            ];

            if ($this->admin->update('payroll', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('payroll');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('payroll/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('payroll', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('payroll');
    }
}
