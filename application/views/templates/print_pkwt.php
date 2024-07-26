<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrak_PKWT-<?= $karyawan['nik_akt'];?>-<?= $karyawan['nama'];?>  </title>

    <link rel="icon" href="<?= base_url('assets/img/xto.ico'); ?>">


    <style>
        h2,
        h4 {
            margin: 0;
            text-align: center;
        }

        @media print {

            body {
                margin: 20mm 15mm;
                /* Atur margin halaman cetak */

                -webkit-print-color-adjust: exact;
            }

            .content {
                page-break-inside: avoid;
                text-align: justify;
                margin-top: 70px;
                page-break-inside: avoid;
                /* Hindari memecah konten di tengah halaman */
            }

            header.print-header {
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                height: 50px;
                text-align: center;
                background-color: #f8f8f8;
                border-bottom: 1px solid #ddd;
                padding: 10px 0;
            }

            /* Atur halaman baru sebelum dan setelah elemen dengan class .page-break */
            .page-break {
                page-break-before: always;
                page-break-after: always;
            }
        }

        header.print-header {
            display: none;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 50px;
            /* Adjust the height of your header */
            text-align: left;
            padding: 10px;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 35px;
            /* Adjust the height of your footer */
            text-align: center;
            padding: 10px;
        }



        /* Atur halaman baru sebelum dan setelah elemen dengan class .page-break */
        .page-break {
            page-break-before: always;
            page-break-after: always;
        }



        body {
            margin: 60px;
            padding: 0;
            background-color: #FAFAFA;
            font: 10pt "Times New Roman";
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {

                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        
    </style>
</head>

<body>
<?php 
    $tgl = format_indo(date('Y-m-d'));
    $hari =format_hari(date('Y-m-d'));
    $thn = date('Y');

    $bl_th = format_bulan(date('Y-m-d')); ?>
    
    <?= form_open('', [], ['id' => $karyawan['id']]); ?>
   <header class="print-header" id="1">
    <br><br><br><br><br>
    <button><a href="<?= base_url('karyawan/up_print_phl/') . $karyawan['id'] ?>" class="btn  btn-sm btn-primary" >Edit & Print PHL</a></button>
    <button><a href="<?= base_url('pkwt/print_phl/') . $karyawan['id'] ?>" class="btn  btn-sm btn-primary" target="_blank">Print PHL</a></button>
    </header>
    <header>
        <table>
            <tr>
        
                <td>
                <a href="<?= base_url('karyawan/reminder_pkwt') ?>"><img src="<?= base_url('assets/img/akt.png'); ?>" width="250" alt=""></a>
                </td>
                <td style="width: 280px;"></td>
                <td></td>
            </tr>
        </table>
    </header>

    <center><br><br>
        <h3> PERJANJIAN KERJA WAKTU TERTENTU (PKWT)

        </h3> <br><br>
        
        <h3>NAMA JABATAN : <?= $karyawan['jabatan'] ?></h3><br><br>

        <u><h2> PERIODE WAKTU : <?= format_indo(date("Y-m-d", strtotime($karyawan['start_kontrak']))); ?> – <?= format_indo(date("Y-m-d", strtotime($karyawan['end_kontrak']))); ?> </h2> </u>
        Salary Per <?= $bl_th;?> : Rp. <?= number_format($karyawan['gaji'],0,',','.'); ?>
        <br><br><br><br><br>
        antara<br><br><br><br><br>

        <b style="font-size: 10pt;">PT. AKT INDONESIA</b><br>
        SEBAGAI <br>
        <b style="font-size: 10pt;">PENGUSAHA</b><br><br><br><br>
        DENGAN <br><br><br><br>
        <b style="font-size: 14pt;" ><?= $karyawan['nama'] ?></b><br>
        <b style="font-size: 12pt;">NIK : <?= $karyawan['nik_akt'] ?> </b>
        <hr width="200" style="background-color: black;">
        SEBAGAI <br>
        <b>PEKERJA</b>

        <br><br><br><br><br><br><br><br>
        <p style="font-size: 12pt;"><b>PT. AKT Indonesia</b><br>
        Pasuruan <br>
        Tahun <?= $thn; ?></p>



        
        

      
    </center>

    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>


    <div class="content">
        <center><h3>PERJANJIAN KERJA WAKTU TERTENTU (PKWT)</h3></center><hr>

        <p>Pada hari ini, <?= format_indo(date("Y-m-d", strtotime($karyawan['start_kontrak']))); ?> para pihak telah bersepakat dan saling menyetujui untuk mengadakan perjanjian kerja waktu tertentu (PKWT) sebagai berikut :<br>
<ul>
    <li type="none">
    <table>
                    <tr>
                        <td style="width: 150px;">Nama</td>
                        <td>:</td>
                        <td><?php
                            if ($pkwt) :
                                foreach ($pkwt as $row) :
                            ?>
                                    <?= $row['nama_hrd'] ?>
                                <?php endforeach; ?>

                            <?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>HRD</td>
                    </tr>
                    <tr>
                        <td>Perusahaan</td>
                        <td>:</td>
                        <td>PT. AKT Indonesia</td>
                    </tr>
                    <tr>
                        <td>Jenis Usaha</td>
                        <td>:</td>
                        <td>Industri Alat Musik Non-Tradisional dan Aksesoris </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Jalan Rembang Industri Raya No.45, PIER, Rembang, Pasuruan</td>
                    </tr>
                </table>
    </li>
</ul>
Menurut keterangannya dan berdasarkan atas anggaran dasar perseroan dan karenanya sah mewakili serta bertindak untuk dan atas nama perseroan.<br>
Selanjutnya di dalam perjanjian ini disebut sebagai PIHAK PERUSAHAAN<br>
<ul>
    <li type="none">
    <table>
                    <tr>
                        <td style="width: 150px;">Nama</td>
                        <td>:</td>
                        <td><?= $karyawan['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>No. ID</td>
                        <td>:</td>
                        <td><?= $karyawan['nik_akt']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= $karyawan['jk']; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tgl. Lahir</td>
                        <td>:</td>
                        <td><?= $karyawan['ttl']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $karyawan['alamat']; ?></td>
                    </tr>
                    
                </table>

    </li>
</ul>
Menurut keterangannya bertindak untuk dan atas nama diri sendiri.<br>
Selanjutnya di dalam perjanjian ini disebut sebagai PIHAK PEKERJA<br>
Para pihak dengan tetap berdasarkan kedudukan/pekerjaannya tersebut diatas terlebih dahulu menerangkan hal-hal sebagai berikut :<br>
<ul>
    <li>Pihak Perusahaan selaku Badan Hukum yang didirikian berdasarkan atas akta notaries nomor : <b>AHU-461.AH.02.01.TAHUN 2011, Tanggal 20 Juni 2011</b> yang telah mendapatkan pengesahan dari Kementerian Hukum dan Hak Azasi Manusia Nomor : <b>AHU-30346.AH.01.02.Tahun 2013</b> adalah perusahaan yang bergerak di bidang produksi alat musik non-tradisional beserta akesesoris lainnya adalah selaku pemberi kerja di dalam menjalankan usahanya membutuhkan beberapa pekerja;</li>
    <li>Pihak Pekerja adalah calon pekerja berdasarkan permohonannya mengajukan lamaran pekerjaan sebagai pekerja dengan status PKWT kepada pihak kesatu untuk dapat diterima bekerja sebagai calon pekerja dengan status PKWT;</li>
    <li>Pihak Kesatu membutuhkan keahlian Pihak Kedua sebagai pekerja untuk perjanjian kerja kerja waktu tertentu yang didasarkan atas Sehubungan dengan adanya pekerjaan yang berhubungan dengan produk baru, kegiatan baru, atau produk tambahan yang masih dalam percobaan atau penjajakan maka diperlukan penambahan tenaga kerja yang bersifat tidak tetap untuk melakukan pekerjaan tambahan;</li>
</ul>
<h4>TENTANG PEKERJAAN <br>
Pasal 1</h4>
<ol type="1">
    <li>Pihak Perusahaan dengan ini mempekerjakan Pihak Pekerja selaku pekerja dengan waktu kerja tertentu (kontrak) dan ditempatkan pada bagian <b> <?= $karyawan['jabatan'] ?>.</b></li>
    <li>Pihak perusahaan berhak untuk melakukan mutasi / perpindahan tugas, transfer (pergeseran) ,penurunan jabatan (demosi), rotasi (perputaran tugas) pihak pekerja kebagian lain sesuai dengan kebijakan perusahaan;</li>
    <li>Pihak Pekerja di dalam pelaksanaan perjanjian ini akan bertindak sebagai pekerja yang baik yaitu untuk melakukan atau tidak melakukan segala sesuatu yang dalam keadaan yang sama seharusnya dilakukan atau tidak dilakukan oleh seorang pekerja yang baik;</li>
    <li>Pihak Pekerja selaku pekerja wajib menyampaikan segala laporan atas pekerjaan yang menjadi tugas dan kewenangannya dan selalu akan mengikuti petunjuk-petunjuk ataupun perintah kerja yang diberikan oleh atasan ataupun pimpinan;</li>
    <li>Pihak Pekerja memahami dan menerima baik pekerjaan yang diberikan kepadanya dengan syarat-syarat sebagaimana ditentukan di dalam perjanjian kerja waktu tertentu (PKWT), peraturan perusahaan (PP), Standart Operasional Prosedure (SOP) dan dengan ini pekerja berjanji serta mengikatkan diri untuk melakukan pekerjaan itu dengan sebaik-baiknya dan sejujur-jujurnya; untuk itu pekerja akan mencurahkan pula segala kegiatan dan kerajinannya;</li>
</ol>
</div>
    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <div class="content">
<ol type="1" start="6">
    
    <li>Pihak Pekerja dengan ini menjamin kepada Pihak Perusahaan bahwa pada saat penandatangan perjanjian ini sampai dengan berakhirnya perjanjian ini atau selama berlangsungnya perjanjian kerja ini tidak sedang terikat oleh adanya hubungan kerja atau bekerja pada perusahaan/badan usaha/perorangan yang dapat mengganggu jalannya pekerjaan pihak Pekerja dan apabila terbukti Pihak Pekerja melanggar hal tersebut maka pekerja bersedia untuk mengundurkan diri dari seluruh tugas dan tanggungjawab seketika itu dan atau dikenakan sanksi pemutusan hubungan kerja (PHK) dengan tanpa diberikan ganti rugi atas sisa upah dari pejanjian kerja waktu terentu yang belum dijalani.</li>
</ol>

<h4>BERLAKUNYA PERJANJIAN<br>
Pasal 2</h4>
<ol type="1">
    <li>Para pihak telah sepakat dan saling setuju bahwa perjanjian kerja waktu tertentu (PKWT) ini mulai berlaku terhitung sejak tanggal <b><?= format_indo(date("Y-m-d", strtotime($karyawan['start_kontrak']))); ?></b> sampai dengan <b><?= format_indo(date("Y-m-d", strtotime($karyawan['end_kontrak']))); ?></b> atau selama <b><?= $karyawan['periode'];?>  Bulan</b> dan pengakhiran perjanjian ini tidak diperlukan adanya penetapan tertulis pemutusan hubungan kerja dari Lembaga Penyelesaian Perselisihan Hubungan Industrial;</li>
    <li>Pihak pekerja telah sepakat dan setuju terhadap Pihak Perusahaan bahwa perjanjian kerja waktu tertentu ini akan berakhir demi hukum dengan selesainya jangka waktu yang diperjanjikan.</li>
</ol>

<h4>LOKASI TEMPAT KERJA<br>
Pasal 3</h4>
Bahwa Pihak Pekeja telah sepakat dan setuju terhadap Pihak Pengusaha untuk dipekerjakan atau ditempatkan bekerja di perusahaan pihak Pengusaha yang berlokasi di <b><i>Pasuruan</i></b> dan ditempatkan pada bagian <b><?= $karyawan['jabatan'] ?>.</b><br>
<h4>HARI KERJA DAN JAM KERJA<br>
Pasal 4</h4>
<ol>
    <li>Hari kerja pihak Pekeja apabila tidak ditentukan lain oleh pihak Perusahaan adalah 5 hari kerja dan 2 hari libur ataupun waktu-waktu sesuai tuntutan pekerjaan. Jam kerja adalah waktu produktif yang digunakan sepenuhnya untuk produksi, waktu persiapan memulai pekerjaan dan waktu persiapan mengakhiri pekerjaan dilakukan diluar jam kerja produktif;</li>
    <li>Mengingat sifat pekerjaan yang harus dijalankan secara terus menerus maka hari libur Pihak Pekerja tidak mengikuti kalender resmi pemerintah namun di dasarkan atas schedule kerja yang telah ditentukan oleh perusahaan dimana di dalamnya telah ditentukan pula hari libur pihak Kedua pekerja dengan jumlah sesuai sebagaimana ditentukan di dalam peraturan perundang-undangan yang berlaku;</li>
    <li>Jam kerja pihak Pekerja apabila tidak ditentukan lain oleh pihak Perusahaan dalam 1 minggu adalah 40 jam kerja, dimana ketentuan berlakunya jam kerja tersebut setiap harinya akan ditentukan oleh Pihak Perusahaan; <br> Apabila dibutuhkan oleh pihak Pengusaha atau oleh karena kebutuhan operasional perusahaan dengan menyimpang ketentuan tersebut diatas maka pihak Pekerja wajib dan untuk itu bersedia untuk bekerja menyimpang dari ketentuan sebagaimana tersebut diatas dan melebihi jam kerja;</li>
</ol>
<h4>UPAH LEMBUR<br>
Pasal 5</h4>
Tata cara penghitungan upah lembur dilakukan berdasarkan atas ketentuan hukum yang berlaku.</p>

<p><h4>TUNJANGAN HARI RAYA<br>
Pasal 6</h4>
<ol type="1">
    <li>Tunjangan Hari Raya / THR hanya diberikan kepada pekerja dengan masa kerja lebih dari 1 bulan sebelum hari raya.</li>
    <li>Tunjangan Hari Raya / THR bagi Pekerja dengan masa kerja lebih dari 1 bulan dan di bawah 1 Tahun,akan di hitung secara proporsional.</li>
    <li>Tunjangan Hari Raya / THR bagi Pekerja 1 Tahun atau lebih dibayarkan sebesar 1 kali Gaji.</li>
</ol>


<h4>SYARAT-SYARAT KERJA<br>
Pasal 7</h4>
<ol type="1">
<li>Hak Pekerja.
    <ol type="A">
        <li>Mendapatkan pekerjaan sebagaimana yang diperjanjikan;</li>
        <li>Mendapatkan upah sebagaimana diperjanjikan;</li>
    </ol>
</li>

<li>Kewajiban Pekerja.
    <ol type="A">
        <li>Melaksanakan pekerjaan sebagaimana yang diperjanjikan dengan sebaik-baiknya serta sejujur-jujurnya sesuai Standart Operasional Prosedur (SOP) / Job Description / Peraturan Perusahaan (PP) yang telah ditetapkan;</li> 
        
    </ol>
</li></ol>
</div>
    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <div class="content">

<ol type="1" start="2">
   
        <li>
            <ol type="A" start="2">
            <li>Melaksanakan segala perintah yang diberikan oleh Pimpinan / atasan baik yang bersifat lisan maupun tertulis dengan sebaik-baiknya dan memberikan laporan atas hasil kerja yang telah dilaksanakan tersebut;</li>
        <li>Mematuhi segala tata tertib perusahaan, standart operasional prosedur, memo / surat tugas / surat peringatan / teguran yang diberikan pimpinan tanpa kecuali sebagaimana yang telah ditetapkan dengan sebaik-baiknya;</li>
            </ol>
                                    
        </li>
    
    


<li>Hak Perusahaan.
    <ol type="A">
        <li>Menentukan upah, jenis , tempat pekerjaan yang akan diberikan kepada pekerja tanpa diperlukan persetujuan terlebih dahulu dari pekerja;</li>
        <li>Memotong upah bulanan berdasarkan absensi karyawan, bila karyawan absen dalam jam kerja untuk melakukan kepentingan pribadi. Dimana perhitungan pemotongan berdasarkan jam kerja diatur dalam peraturan perusahaan.</li>
        <li>Menentukan mutasi (perpindahan), transfer (pergeseran), demosi (penurunan jabatan), rotasi (perputaran tugas) dari pekerjaan yang satu ke pekerjaan yang lain setiap saat sesuai dengan keadaan / kebutuhan pekerjaan / perusahaan tanpa diperlukan adanya persetujuan dari pekerja terlebih dahulu untuk itu;</li>
        <li>Menentukan jenis (berat ringan) dan tindakan atas / berupa sanksi yang akan diberikan kepada pekerja , baik berupa tegoran, surat peringatan bertingkat baik tertulis maupun secara lisan maupun melakukan skorsing atau pemberhentian sementara pekerja oleh karena telah melakukan pelanggaran perintah, standart operasional prosedur (SOP) ataupun peraturan perusahaan / kebijakan perusahaan yang telah ditetapkan sesuai dengan akibat perbuatan dan atau berat ringanya dari perbuatan yang dilakukan oleh pekerja tersebut;</li>
        <li>Menentukan segala kebijakan perusahaan di dalam melakukan pengelolaan / manajemen perusahaan tanpa adanya campur tangan pekerja ataupun pihak lain.</li>
    </ol>
</li>

<li>Kewajiban Perusahaan.
    <ol type="A">
        <li>Memberikan pekerjaan kepada pekerja sebagaimana yang diperjanjikan;</li>
        <li>Memberikan upah kepada pekerja sebagaimana ditentukan di dalam perjanjian;</li>
        <li>Memberikan perintah kerja kepada pekerja setiap saat sesuai dengan keadaan / situasi pekerjaan, standart operasional procedure, peraturan perusahaan, kebijakan perusahaan dan keadaan pekerjaan pada saat itu untuk mencapai tujuan yang telah ditentukan;</li>
        <li>Memberikan sanksi bersifat pembinaan ataupun tindakan penghukuman kepada Pekerja oleh karena telah melakukan pelanggaran standart operasional pekerjaan (SOP), Peraturan Perusahaan (PP), perintah pimpinan, kebijakan perusahaan sebagaimana yang telah ditentukan;</li>
        <li>Memberikan pertimbangan / kebijakan di dalam pelaksanaan pekerjaan agar dapat tercapai hasil yang lebih baik sesuai dengan keadaan / situasi pekerjaan pada saat itu.</li>
    </ol>
</li>
</ol>




<p><h4>TATA TERTIB<br>
Pasal 8</h4>
<ol type="1">
        <li>Pihak Pekerja sanggup dan bersedia untuk mematuhi segala peraturan-peraturan atau ketentuan yang berlaku di perusahaan sebagaimana diatur di dalam Peraturan Perusahaan maupun ketentuan-ketentuan lain yang telah ditetapkan dan atau akan ditetapkan di kemudian waktu oleh Pihak Perusahaan;</li>
        <li>Pihak pekerja tidak diperkenankan untuk mengikuti serikat pekerja eksternal selama perusahaan memiliki serikat pekerja internal yang beranggotakan pekerja perusahaan itu sendiri.</li>
        <li>Pihak Pekerja bertanggung jawab penuh atas tugas-tugas pekerjaan yang berjalan dari waktu ke waktu tanpa terkecuali dan mengingat posisi serta tanggung jawab yang diberikan akan selalu siap bertugas kapanpun dan dimanapun dibutuhkan oleh Pihak Perusahaan;</li>
        <li>Pihak Pekerja bertanggung jawab serta memelihara barang-barang dan alat &ndash; alat milik Pihak Perusahaan, apabila Pihak Pekerja melakukan kecerobohan baik sengaja maupun tidak disengaja yang mengakibatkan kerusakan atau kehilangan barang milik Pihak Perusahaan maka Pihak Pekerja harus mengganti kerugian tersebut pada Pihak Perusahaan;</li>
        <li>Pihak pekerja bersedia bahwa dalam kurun waktu 3 (Tiga) bulan sejak ditandatanganinya perjanjian kerja ini untuk bekerja secara penuh dalam hari kerja efektif yang telah ditentukan oleh perusahaan, dan jika terdapat ketidakhadiran dalam bentuk apapun maka perusahaan hanya akan membayarkan gaji/upah sesuai dengan jumlah hari kehadiran pihak pekerja<br>
Pihak pekerja tetap berkewajiban untuk mengajukan izin sebelumnya dan atau menginformasikan/melaporkan ketidakhadirannya kepada atasan langsung atau pihak perusahaan dan kemudian menyerahkan dokumen pendukung atau bukti yang diperlukan selambat-lambatnya pada saat pihak pekerja kembali hadir bekerja, semua bentuk ketidakhadiran pihak pekerja yang tidak mendapat izin, tidak dilaporkan dan atau tidak dilengkapi dokumen yang sah dan bisa dipertanggungjawabkan akan dianggap sebagai mangkir;</li>
</ol>
</div>
    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <div class="content">
<ol type="1" start="6">
        <li>Bila Pihak Pekerja melanggar peraturan disiplin kerja yang telah ditetapkan oleh Pihak Perusahaan seperti ; absen atau mangkir kerja, datang terlambat, pulang lebih awal, tidak melakukan check &ndash;clock atau kartu absensi dan lain-lain, maka Pihak Pekerja sanggup menerima sanksi dari Pihak Perusahaan berupa upah tidak akan dibayarkan berdasarkan ketentuan aturan Perusahaan maupun sanksi administrasi berupa surat peringatan tertulis.</li>

</ol>

<p><h4>PENGAKHIRAN PERJANJIAN<br>
Pasal 9</h4></p>

<p>Perjanjian kerja waktu tertentu ini akan berakhir apabila :</p>
<ul>
    <li>
    <p>9.1. Salah satu dari 2 pihak (pihak perusahaan atau pihak pekerja) memutuskan perjanjian kerja waktu tertentu ini;<br>
9.2. Masa waktu berlakunya telah berakhir;<br>
9.3. Pekerja meninggal dunia;
    </li>
</ul>
Pengakhiran perjanjian kerja oleh pihak pekerja :</p>
<ul>
    <li>
    <p>9.1.1. Pihak Pekerja yang bekerja kurang dari 30 hari dan bermaksud mengundurkan diri, maka harus memberitahukan kepada Pihak Perusahaan minimal 7 hari kerja sebelum hari pengunduran diri, dan bersedia menerima sanksi administratif berupa pemotongan separuh (50%) atas upah yang seharusnya diterima dihitung dari hari kerja yang sudah dijalani sebelum pengunduran diri;<br>
9.1.2. Pihak Pekerja dapat mengakhiri perjanjian ini sewaktu-waktu dengan cara mengajukan pengunduran diri secara tertulis dengan tenggang waktu 30 (tiga puluh) hari kerja komulatif tanpa memperhitungkan hari libur atau segala bentuk ketidakhadiran lainnya sebelum tanggal pekerja tersebut mengundurkan diri sebagaimana tertera di dalam suratnya;<br>
9.1.3. Apabila tanggal pengunduran diri telah ditentukan, sebagaimana dimaksud dalam pasal 9.1.1 dan/atau 9.1.2, perhitungan gaji akan menggunakan sistem &ldquo;No Show No Pay&rdquo;, perusahaan bersikeras untuk menerapkan sistem ini agar karyawan tetap bekerja sesuai dengan keinginannya. /Posisinya saat ini sementara perusahaan mempunyai cukup waktu untuk mencari pengganti dan menyerahkan seluruh pekerjaan;<br>
9.1.4. Pada saat tanggal pengunduran diri telah diserahkan atau diputuskan, seperti yang tercantum pada Pasal 9.1.1 dan 9.1.2. Maka sistem perhitungan gaji akan berdasarkan &ldquo;no show, no pay&rdquo;, pihak perusahaan bersikeras menerapkan hal ini agar pihak pekerja tetap melaksanakan pekerjaannya hingga tanggal tersebut di atas, dan memberi cukup waktu bagi perusahaan untuk mencari pengganti dan melakukan serah terima jabatan atau pekerjaan.<br>
9.1.5. Kegagalan pemenuhan kondisi Pengakhiran atas perjanjian kerja waktu tertentu oleh Pihak Pekerja sebagaimana tersebut di Pasal 9.1.2. diatas, berakibat Pihak Pekerja dikenakan sanksi administratif berupa pemotongan sisa upah yang belum dibayarkan sebesar kekurangan pemenuhan 30 (tiga puluh) hari kerja komulatif (pasal 9.2.2.), atau ganti rugi sebesar upah yang disepakati untuk sisa perjanjian kerja waktu tertentu yang belum dijalani;<br>
    </li>
</ul>
Pengakhiran perjanjian kerja oleh pihak pengusaha :</p>
<ul>
    <li><p>9.1.6. Pihak Perusahaan dapat mengakhiri perjanjian ini sewaktu-waktu apabila pihak Pekerja telah melakukan pelanggaran peraturan perusahaan (PP), standart operasional prosedur (SOP) ataupun peraturan perundang-undangan yang berlaku yang dapat dikenakan sanksi pemutusan hubungan kerja;
9.1.7. Pihak perusahaan dapat mengakhiri perjanjian ini sewaktu-waktu apabila menemukan bukti catatan dan atau rekam medis atas pihak pekerja mengenai kondisi kesehatannya dan pihak pekerja tidak melaporkan kondisi kesehatan yang sebenarnya atau sakit bawaannya kepada perusahaan pada saat penandatanganan perjanjian kerja ini yang berdampak pada ketidakhadiran pihak pekerja;<br>
9.1.8. Apabila pengakhiran perjanjian ini disebabkan oleh pelanggaran sebagaimana tercantum dalam pasal 9.1.4 dan atau 9.1.5. di atas, maka Pihak Pekerja tidak berhak atas sisa upah yang belum dibayarkan dan atau segala bentuk kompensasi lainnya yang seharusnya diterima oleh pekerja tersebut, seperti dan tidak terbatas pada uang pesangon, uang penghargaan masa kerja, uang pisah dan kompensasi lain sebagaimana diatur dalam undang-undang ketenagakerjaan yang berlaku. serta melepaskan pihak perusahaan atas segala bentuk gugatan dan atau konsekuensi hukum yang bisa ditimbulkan setelahnya;</li>
</ul>
Pengakhiran perjanjian kerja karena berakhirnya masa waktu perjanjian kerja :</p>
<ul>
    <li>
    <p>9.3.1. Perjanjian ini dengan sendirinya berakhir demi hukum apabila waktu yang diperjanjikan telah terpenuhi sehingga tidak diperlukan adanya penetapan tertulis dari Lembaga penyelesaian Perselisihan Hubungan Industrial;
    </li>
</ul>

</div>
    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <div class="content">

Pihak perusahaan dan pekerja dengan ini telah bersepakat dan menyetujui bahwa pada saat pengakhiran perjanjian kerja waktu tertentu ini, maka pihak pekerja bersedia melepaskan hak nya sebagai pekerja berupa kewajiban dari pihak perusahaan untuk memberikan kompensasi atas pengakhiran atau berakhirnya perjanjian kerja waktu tertentu yang telah dijalani sesuai dengan peraturan perundang-undangan ketenagakerjaan yang berlaku, dan membebaskan pihak perusahaan atas segala bentuk tuntutan secara hukum di kemudian hari.</p>



<p><h4>JENIS PELANGGARAN YANG DAPAT DIKENAKAN PEMUTUSAN HUBUNGAN KERJA<br>
Pasal 10</h4>
Adapun jenis pelanggaran yang dapat dikenakan pemutusan hubungan kerja / PHK tanpa diberikan ganti rugi adalah sebagai berikut :<br>
<ol type="1">
    <li>Mengambil barang milik perusahaan tanpa melalui procedure yang telah ditentukan untuk dimiliki atau dengan membawa keluar barang tersebut keluar dari perusahaan;</li>
    <li>Mengambil barang milik perusahaan yang adanya barang tersebut telah ada pada penguasaannya untuk dimiliki tanpa melalui procedure yang telah ditentukan untuk dimiliki atau dengan membawa keluar barang tersebut keluar dari perusahaan;</li>
    <li>Melakukan tindakan dengan cara memberikan informasi yang tidak benar tentang segala sesuatu yang menyangkut orang / pekerja, pekerjaan, hasil pekerjaan ataupun barang inventaris milik perusahaan sehingga menimbulkan kerugian bagi perusahaan;</li>
    <li>Melakukan tindakan mengancam, kekerasan fisik ataupun menimbulkan keributan di lingkungan perusahaan sehingga menggangu suasana bekerja ataupun ketenangan berusaha dari pengusaha;</li>
    <li>Melakukan tindakan merokok di lingkungan perusahaan ataupun menyulut api / membakar barang-barang tidak pada tempat yang telah ditentukan, padahal dapat diduga akan berakibat timbulnya kebakaran di lingkungan perusahaan;</li>
    <li>Mengajak teman-teman sekerja untuk melakukan tindakan yang menentang kebijakan perusahaan / perintah pimpinan atau Peraturan Perusahaan (PP) sehingga menimbulkan suasana kerja yang tidak kondusif ataupun tidak harmonis;</li>
    <li>
    Tidak masuk kerja tanpa alasan yang sah selama 5 hari kerja secara berturut-turut.
    </li>
</ol>


<p><h4>TENTANG UPAH DAN PPH 21<br>
Pasal 11</h4>
<ol type="1">
    <li>Pihak Perusahaan telah sepakat dan setuju untuk upah Pihak Pekerja diberikan Upah sebesar <b>Rp. <?= number_format($karyawan['gaji'],0,',','.'); ?>,-</b> yang akan dibayarkan Tanggal 15 setiap bulan.</li>
    <li>Pembayaran upah Pihak Pekerja akan dilakukan sesuai dengan ketentuan perusahaan setelah Pihak Pekerja melaksanakan pekerjaannya terlebih dahulu pada bulan tersebut.</li>
    <li>Tata cara pembayaran atas upah Pihak Pekerja setiap bulannya akan dilakukan dengan cara pembayaran langsung dan atau cara transfer Bank kepada Pihak Pekerja.</li>
    <li>Atas penerimaan upah sebagaimana tersebut diatas maka sesuai dengan ketentuan hukum pajak yang berlaku, apabila telah dapat dikenakan pembayaran wajib pajak penghasilan kepada pihak Pekerja yang besarnya sesuai dengan peraturan perundang-undangan yang berlaku maka akan dilakukan pemotongan langsung atas penerimaan upah setiap bulan dari Pihak pekerja tersebut .</li>
    <li>Apabila Pihak Pekerja tidak hadir bekerja di tempat kerjanya tanpa alasan yang sah (mangkir) , maka upah yang akan diterimanya selama pekerja tidak hadir bekerja sebagaimana tersebut diatas tidak akan dibayarkan oleh Perusahaan.</li>
    <li>Hak Cuti Tahunan Pihak Pekerja selama 12 hari kerja pada tahun itu baru akan timbul <b><u>SETELAH</u></b> Pihak Kedua bekerja selama 12 bulan secara terus menerus namun apabila ternyata Pihak Pengusaha tidak memperpanjang perjanjian ini sebagaimana tanggal yang tertera di dalam perjanjian ini maka hak cuti tahunan Pihak Pekerja pada tahun itu dengan sendirinya belum ada / belum timbul sebagaimana ditentukan di dalam pasal 79 ayat 2 huruf c UU No.13 Tahun 2003 Tentang Ketenagakerjaan sehingga tidak ada kewajiban hukum Pihak Perusahaan untuk memberikan hak cuti tahunan tersebut.</li>
</ol>


<h4>JAMINAN PIHAK PEKERJA<br>
Pasal 12</h4>
<ol type="1">
    <li>Pihak Pekerja dengan ini menjamin kepada Pihak Perusahaan bahwa di dalam pelaksanaan perjanjian kerja waktu tertentu ini tidak akan melakukan tuntutan untuk melakukan perubahan status pekerja dari pekerja waktu tertentu (kontrak) menjadi pekerja tetap;</li>
    <li>Pihak Pekerja dengan ini berjanji untuk selalu patuh dan taat serta mematuhi segala perintah pimpinan, peraturan perusahaan (PP), Standart Operasional Procedure (SOP) serta peraturan perundang-undangan di bidang ketenagakerjaan.</li>
</ol>
</div>
    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <div class="content">

<p><h4>PERUBAHAN PERJANJIAN<br>
Pasal 13</h4>
<ol type="1">
    <li>Pihak Pekerja telah sepakat dan setuju terhadap Pihak Perusahaan untuk tidak melakukan perubahan terhadap isi perjanjian ini atau melakukan tambahan / adendum tanpa adanya kesepakatan tertulis kedua belah pihak terlebih dahulu;</li>
    <li>Bahwa terhadap adanya perubahan isi perjanjian ataupun tambahan (adendum) dan lain-lainnya terhadap perjanjian kerja waktu tertentu ini tanpa terlebih dahulu adanya kesepakatan tertulis masing-masing pihak maka berakibat perubahan perjanjian ataupun tambahan (adendum) dan lain-lain tersebut adalah batal demi hukum.</li>
</ol>

<p><h4>KESELURUHAN PERJANJIAN<br>
Pasal 14</h4><br>
Segala surat-menyurat, surat keputusan, standart operasional procedure (SOP) atau dokumen ataupun memo perusahaan dan lain-lain yang berkaitan dengan perjanjian ini adalah merupakan bagian yang tidak terpisahkan dan menjadi satu kesatuan dengan perjanjian ini maupun Peraturan Perusahaan (PP).<br><br>
<h4>PENYELESAIAN KELUH KESAH<br>
Pasal 15</h4>
<ol type="1">
    <li>Perbedaan pendapatan/perselisihan/ketidaksepahaman kedua belah pihak di dalam hubungan kerja ini maka para pihak telah sepakat dan saling menyetujui untuk menyelesaikan seluruh persoalan dengan jalan musyawarah mufakat terlebih dahulu diantara pihak-pihak saja;</li>
    <li>Apabila tata cara penyelesaian tersebut diatas ternyata tidak dapat menyelesaian persoalan tersebut maka para pihak telah sepakat dan setuju untuk menyerahkan perselisihan tersebut kepada Mediator Hubungan Industrial ataupun Lembaga Penyelesaian Perselisihan Hubungan Industrial.</li>
</ol>
Demikian perjanjian kerja waktu tertentu ini dibuat dan ditandatangani oleh para pihak dalam keadaan sehat wal&rsquo;afiat dengan tanpa adanya paksaan dari pihak manapun juga.<br>
Para pihak setelah membaca isi perjanjian ini dengan teliti dan seksama maka masing-masing pihak telah membubuhkan tanda-tangan sebagaimana tersebut dibawah ini<br>
</p>

    </div>
    <div>
        <center>
            <table border="0">
                <tr>
                    <td colspan="3">Dibuat di Pasuruan pada <?= format_indo(date("Y-m-d", strtotime($karyawan['start_kontrak']))); ?> </td>

                </tr>
                <tr>
                    <td colspan="3" style="height: 0px;"></td>

                </tr>
                <tr style="text-align: center;">
                    <td style="width: 200px;">Para Pihak, <br>Pihak Pertama</td>
                    <td style="width: 150px;"></td>
                    <td style="width: 200px;">Pihak Kedua</td>
                </tr>

                <tr>
                    <td></td>
                    <td style="height: 90px;"></td>
                    <td></td>
                </tr>

                <tr style="text-align: center;">
                    <td>
                        <?php
                        if ($pkwt) :
                            foreach ($pkwt as $row) :
                        ?>
                                <b><?= $row['nama_hrd'] ?></b>
                            <?php endforeach; ?>

                        <?php endif; ?>
                        <br> <i>HRD</i>
                    </td>
                    <td></td>
                    <td><b><?= set_value('nama', $karyawan['nama']); ?></b> </td>
                </tr>
            </table>
        </center>
    </div>



    <footer style="font-size: 9pt;">
        PIER, Jalan Rembang Industri Raya, No. 45, Rembang, Pasuruan Indonesia</footer>

    <?= form_close(); ?>


</body>

</html>
<!-- <script>
    window.print();
</script> -->

<script>
    window.addEventListener('beforeprint', function () {
        const headers = document.querySelectorAll('header.print-header');
        const pages = document.querySelectorAll('.page');
        headers.forEach(header => header.style.display = 'none');

        pages.forEach((page, index) => {
            if (index < 6) { // Only for pages 1 to 6
                const header = headers[index];
                if (header) {
                    const clonedHeader = header.cloneNode(true);
                    clonedHeader.style.display = 'none';
                    page.insertAdjacentElement('afterbegin', clonedHeader);
                }
            }
        });
    });

    window.addEventListener('afterprint', function () {
        const headers = document.querySelectorAll('header.print-header');
        headers.forEach(header => header.style.display = 'block');
    });
</script>

