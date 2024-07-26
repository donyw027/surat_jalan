<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol']  = 'smtp';
$config['smtp_host'] = 'srv26.niagahoster.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'aktindonesia@akt-id.com';
$config['smtp_pass'] = '@ktindonesi@';
$config['smtp_crypto'] = 'ssl'; // Tambahkan ini jika menggunakan SSL
$config['mailtype']  = 'html';
$config['charset']   = 'iso-8859-1';
$config['wordwrap']  = TRUE;
$config['newline']   = "\r\n"; // Penting untuk beberapa server email

?>