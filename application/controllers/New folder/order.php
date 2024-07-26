<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
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

        $data['title'] = "order";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['order'] = $this->admin->get('order');

            $this->template->load('templates/dashboard', 'order/data', $data);
        }
    }



    private function _validasi($mode)
    {
        $this->form_validation->set_rules('orderby', 'orderby', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('orderby', 'orderby', 'required|trim');
        } else {
            $db = $this->admin->get('order', ['orderby' => $this->input->post('orderby', true)]);
            $order = $this->input->post('orderby', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah order";
            $this->template->load('templates/dashboard', 'order/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'produk'       => $input['produk'],
                'orderby'       => $input['orderby'],
                'deadline'       => $input['deadline'],
                'harga'       => $input['harga']


            ];

            if ($this->admin->insert('order', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('order');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('order/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit order";
            $data['order'] = $this->admin->get('order', ['id' => $id]);
            $this->template->load('templates/dashboard', 'order/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'produk'       => $input['produk'],
                'orderby'       => $input['orderby'],
                'deadline'       => $input['deadline'],
                'harga'       => $input['harga']
            ];

            if ($this->admin->update('order', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('order');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('order/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('order', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('order');
    }
}
