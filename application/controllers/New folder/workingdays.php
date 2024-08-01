<?php
defined('BASEPATH') or exit('No direct script access allowed');



// require_once 'application/third_party/fpdf/fpdf.php';


// require_once 'application/third_party/dompdf/autoload.inc.php';
// use Dompdf\Dompdf;

class Workingdays extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Admin_model', 'admin');
        $this->load->library('email');
        $this->load->library('upload');

        // $this->load->library('PHPExcel'); $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = "WorkingDays";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['workingdays'] = $this->admin->get('workingdays');

            $this->template->load('templates/dashboard', 'workingdays/data', $data);
        }
    }


    public function send_workingdays_by1($getId) {
        $id = encode_php_tags($getId);

        $workingdays = $this->admin->get_workingdays_by_id($id);
        // var_dump($workingdayss->email); die();

        

            $this->send_workingdays_email_by1($workingdays);
            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Pengiriman Slip Working Days ke '.$workingdays->nama .', NIK : '.$workingdays->nik,
                'aktor'       => $yang_login
            ];
            $this->admin->insert('log_s', $data_log);

        set_pesan('Email Berhasil Terkirim');
                redirect('workingdays');
    }

    private function send_workingdays_email_by1($workingdays) {
        // var_dump($workingdays); die();
        $bulann =  date('Y-m-d');
$date1 = new DateTime($bulann);
$date1->modify("-1 month");
$bulan_sebelum = format_bulan($date1->format('Y-m-d'));

        $this->email->from('aktindonesia@akt-id.com', 'PT. AKT Indonesia');
        $this->email->to($workingdays->email);
        $this->email->subject('Slip WD ' . $bulan_sebelum);

        $message = $this->load->view('workingdays/print_workingdays', ['workingdays' => $workingdays], TRUE);
        $this->email->message($message);

        if (!$this->email->send()) {
            log_message('error', 'Failed to send workingdays email to: ' . $workingdays->email);
        }
    }
    

    public function send_workingdays() {

        $workingdayss = $this->admin->get_all_workingdays();

        foreach ($workingdayss as $workingdays) {
            $this->send_workingdays_email($workingdays);
        }
        $this->email->clear(TRUE);
        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Pengiriman Semua Slip Working Days ke email karyawan',
                'aktor'       => $yang_login
            ];
            $this->admin->insert('log_s', $data_log);

        set_pesan('Email Berhasil Terkirim');
                redirect('workingdays');
    }

   

    private function send_workingdays_email($workingdays) {
        $bulann =  date('Y-m-d');
$date1 = new DateTime($bulann);
$date1->modify("-1 month");
$bulan_sebelum = format_bulan($date1->format('Y-m-d'));

        $this->email->from('aktindonesia@akt-id.com', 'PT. AKT Indonesia');
        $this->email->to($workingdays->email);
        $this->email->subject('Slip WD ' . $bulan_sebelum);

        $message = $this->load->view('workingdays/print_workingdays', ['workingdays' => $workingdays], TRUE);
        $this->email->message($message);

        if (!$this->email->send()) {
            log_message('error', 'Failed to send workingdays email to: ' . $workingdays->email);
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
            redirect('workingdays');
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
                    'section' => $row['E'],
                    'ijin' => $row['F'],
                    'sakit' => $row['G'],
                    'cuti' => $row['H'],
                    'alpha' => $row['I'],
                    'total_hari_kerja' => $row['J'],
                    'total_hari_phl' => $row['K'],
                    'jam1pertama' => $row['L'],
                    'jam2lebih' => $row['M'],
                    'hari_libur2x' => $row['N'],
                    'harilibur8' => $row['O'],
                    'total_overtime' => $row['P'],
                    'email' => $row['Q']
                    
                ];
            }
            // var_dump($data);die();
    
            // Menggunakan insert_batch untuk memasukkan data ke dalam database
            $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Import Data Working Days',
                'aktor'       => $yang_login
            ];
            $this->admin->insert('log_s', $data_log);
            $this->db->insert_batch('workingdays', $data);
    
            $this->session->set_flashdata('message', 'File berhasil diupload dan data dimasukkan ke database');
            redirect('workingdays/');
        }
    }

    public function empty_workingdays()
    {
        // Execute truncate query
        $yang_login = $this->session->userdata('login_session')['nama'];
            $tgl = date('d M Y | H:i');
            $data_log = [
                'tanggal'       => $tgl,
                'aksi'       => 'Menghapus semua data Working Days',
                'aktor'       => $yang_login
            ];
            $this->admin->insert('log_s', $data_log);
        $this->db->truncate('workingdays');

        // Set flashdata for success message
        $this->session->set_flashdata('message', 'All Data payrol berhasil dihapus.');

        // Redirect to the desired page
        redirect('workingdays');
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
            $data['title'] = "Edit Workingdays";
            $data['workingdays'] = $this->admin->get('workingdays', ['id' => $id]);
            $this->template->load('templates/dashboard', 'workingdays/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'email'       => $input['email']

            ];

            if ($this->admin->update('workingdays', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('workingdays');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('workingdays/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('workingdays', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('workingdays');
    }
}
