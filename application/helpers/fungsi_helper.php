<?php

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->has_userdata('login_session')) {
        set_pesan('silahkan login.');
        redirect('auth');
    }
}

function is_admin()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'admin') {
        $status = false;
    }

    return $status;
}

function is_non_admin()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'non_admin') {
        $status = false;
    }

    return $status;
}

function is_admin1()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['email'];

    $status = true;

    if ($role != 'IT') {
        $status = false;
    }

    return $status;
}

function is_keuangan()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'keuangan') {
        $status = false;
    }

    return $status;
}

function is_marketing()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'marketing') {
        $status = false;
    }

    return $status;
}

function is_pendidikan()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'marketing') {
        $status = false;
    }

    return $status;
}

function is_sarpras()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'sarpras') {
        $status = false;
    }

    return $status;
}

function is_sdm()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'sdm') {
        $status = false;
    }

    return $status;
}

function is_sekretariat()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'sekretariat') {
        $status = false;
    }

    return $status;
}

function is_akunting()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'akunting') {
        $status = false;
    }

    return $status;
}

function is_yayasan()
{
    $ci = get_instance();
    $role = $ci->session->userdata('login_session')['role'];

    $status = true;

    if ($role != 'yayasan') {
        $status = false;
    }

    return $status;
}

function set_pesan($pesan, $tipe = true)
{
    $ci = get_instance();
    if ($tipe) {
        $ci->session->set_flashdata('pesan', "<div class='alert alert-success'><strong>SUCCESS!</strong> {$pesan} <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
    } else {
        $ci->session->set_flashdata('pesan', "<div class='alert alert-danger'><strong>ERROR!</strong> {$pesan} <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
    }
}

function userdata($field)
{
    $ci = get_instance();
    $ci->load->model('Admin_model', 'admin');

    $userId = $ci->session->userdata('login_session')['user'];
    return $ci->admin->get('user', ['id_user' => $userId])[$field];
}

function output_json($data)
{
    $ci = get_instance();
    $data = json_encode($data);
    $ci->output->set_content_type('application/json')->set_output($data);
}

if (!function_exists('format_indo')) {
    function format_indo($date){
      date_default_timezone_set('Asia/Jakarta');
      // array hari dan bulan
      $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
      $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
      
      // pemisahan tahun, bulan, hari, dan waktu
      $tahun = substr($date,0,4);
      $bulan = substr($date,5,2);
      $tgl = substr($date,8,2);
      $waktu = substr($date,11,5);
      $hari = date("w",strtotime($date));
      $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;
  
      return $result;
    }
  }

  if (!function_exists('format_hari')) {
    function format_hari($date){
      date_default_timezone_set('Asia/Jakarta');
      // array hari dan bulan
      $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
      $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
      
      // pemisahan tahun, bulan, hari, dan waktu
      $tahun = substr($date,0,4);
      $bulan = substr($date,5,2);
      $tgl = substr($date,8,2);
      $waktu = substr($date,11,5);
      $hari = date("w",strtotime($date));
      $result = $Hari[$hari];
  
      return $result;
    }
  }

  if (!function_exists('format_bulan')) {
    function format_bulan($date){
      date_default_timezone_set('Asia/Jakarta');
      // array hari dan bulan
      $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
      $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
      
      // pemisahan tahun, bulan, hari, dan waktu
      $tahun = substr($date,0,4);
      $bulan = substr($date,5,2);
      $tgl = substr($date,8,2);
      $waktu = substr($date,11,5);
      $hari = date("w",strtotime($date));
      $result = $Bulan[(int)$bulan-1]." ".$tahun;
  
      return $result;
    }
  }