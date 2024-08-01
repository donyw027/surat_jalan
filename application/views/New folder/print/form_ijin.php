<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrak_PHL-<?= $karyawan['nik_akt'];?>-<?= $karyawan['nama'];?>  </title>
    <link rel="icon" href="<?= base_url('assets/img/xto.ico'); ?>">


    <style>
        h2,
        h4 {
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
                margin-top: 90px;
                page-break-inside: avoid;
                /* Hindari memecah konten di tengah halaman */
            }

            /* Atur halaman baru sebelum dan setelah elemen dengan class .page-break */
            .page-break {
                page-break-before: always;
                page-break-after: always;
            }
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
            height: 50px;
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
<?= form_open('', [], ['id' => $karyawan['id']]); ?>

<?php 
    $tgl = format_indo(date('Y-m-d'));
    $hari =format_hari(date('Y-m-d'));
    $thn = date('Y');

    $bl_th = date('M Y'); ?>
    
    <header>
        <table>
            <tr>
        
                <td>
                <a href="<?= base_url('karyawan/reminder_pkwt') ?>"><img src="<?= base_url('assets/img/akt.png'); ?>" width="250" alt=""></a>
                </td>
                <td style="width: 280px;"></td>
                <td><h1>PHL-<?= $karyawan['status_pkwt']; ?></h1></td>
            </tr>
        </table>
    </header>
<br><br>
    <center><br><br>
        <h1> PERJANJIAN KERJA <br> HARIAN LEPAS

        </h1> <br><br><br><br><br><br><br><br><br>

        <table>
            <tr style="text-align: left; font-weight: bold; font-size: 18pt;">
                <td>NAMA</td>
                <td>:</td>
                <td><p><?= set_value('nama', $karyawan['nama']); ?></p></td>

            </tr>
            <tr style="text-align: left; font-weight: bold; font-size: 18pt;">
                <td>ID</td>
                <td>:</td>
                <td><?= set_value('nik_akt', $karyawan['nik_akt']); ?></td>

            </tr>
        </table>

        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <h2><u>
                PERIODE HARIAN LEPAS <br><br>

                <?= format_indo(date("Y-m-d", strtotime($karyawan['start_kontrak']))); ?> – <?= format_indo(date("Y-m-d", strtotime($karyawan['end_kontrak']))); ?>
            </u></h2>
    </center>

    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    

    <div class="content">
        <h2>PERJANJIAN KERJA HARIAN LEPAS</h2>

        <p>Pada hari ini, <?= $hari; ?> tanggal <?= $tgl; ?> bertempat di Pasuruan, yang bertanda tangan di bawah ini:<br>
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
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php
                            if ($pkwt) :
                                foreach ($pkwt as $row) :
                            ?>
                                    <?= $row['alamat_hrd'] ?>
                                <?php endforeach; ?>

                            <?php endif; ?></td>
                    </tr>
                </table>
            </li>
        </ul>
        </p>

        <p>Bertindak untuk dan atas nama PT. AKT Indonesia beralamat di Rembang Industri Raya No.45 PIER - Pasuruan selanjutnya disebut sebagai Pihak Pertama.</p>

        <ul>
            <li type="none">
                <table>
                    <tr>
                        <td style="width: 150px;">Nama</td>
                        <td>:</td>
                        <td><?= $karyawan['nama']; ?></td>
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
                        <td>No. KTP</td>
                        <td>:</td>
                        <td><?= $karyawan['nik_kk']; ?></td>
                    </tr>
                    <tr>
                        <td>No. ID</td>
                        <td>:</td>
                        <td><?= $karyawan['nik_akt']; ?></td>
                    </tr>
                </table>

            </li>
        </ul>
        <p>Dalam hal ini bertindak untuk dan atas nama diri sendiri, selanjutnya disebut sebagai Pihak Kedua</p>


        <p>Para pihak menerangkan lebih dulu :
        <ul>
            <li>Bahwa Pihak Pertama membutuhkan tenaga kerja harian lepas di lingkungan perusahaan Pihak Pertama.</li>
            <li>Bahwa Pihak Kedua membutuhkan pekerjaan dan memperoleh informasi tentang kebutuhan tenaga kerja harian lepas di perusahaan pihak pertama.<br>
                Berhubung dengan hal-hal tersebut di atas, maka Pihak Pertama dan Pihak Kedua setuju dan sepakat untuk mengikatkan diri dalam satu perjanjian kerja harian lepas dengan ketentuan-ketentuan sebagai berikut.</li>

        </ul>


        <p>
        <h4>Pasal 1 <br>
            Tempat Kerja</h4>
        Pihak Pertama menerima Pihak Kedua sebagai Tenaga Kerja Harian Lepas sebagaimana halnya Pihak Kedua menyatakan kesediaannya untuk bekerja sebagai Tenaga Kerja Harian Lepas pada perusahaan Pihak Pertama di PT. AKT INDONESIA yang berlokasi di Jalan Rembang Industri Raya No.45 PIER &ndash; Pasuruan.</p>

        <p>
        <h4>Pasal 2<br>
            Jenis Pekerjaan</h4>
        Pihak Pertama memberikan pekerjaan kepada Pihak Kedua untuk jenis pekerjaan <b><?= $karyawan['jabatan']; ?></b>.</p>

        <p>
        <h4>Pasal 3<br>
            Jangka Waktu Perjanjian Kerja</h4>
    
        <ol type="1">
            <li>Jangka waktu perjanjian kerja harian lepas adalah <b><?= $karyawan['periode'];?> Bulan</b> terhitung sejak <b><?= format_indo(date("Y-m-d", strtotime($karyawan['start_kontrak']))); ?> &ndash; <?= format_indo(date("Y-m-d", strtotime($karyawan['end_kontrak']))); ?>.</b></li>
            <li>Pekerjaan dilaksanakan pada jam kerja untuk setiap hari kerja sesuai dengan jam kerja Perusahaan.Dengan tetap mengacu pada UU Ketenagakerjaan No. 13 Tahun 2003 pasal 77 ayat 2</li>
            <li>Jangka waktu tersebut dapat diperpanjang atau diperpendek atas pertimbangan Pihak Pertama berdasarkan rekomendasi tertulis dari Perusahaan.
                Dalam hal demikian, Pihak Kedua tidak berhak menolak ataupun menuntut ganti rugi berupa apa pun baik dari Pihak Pertama maupun dari Perusahaan.</li>

        </ol>
        <h4>Pasal 4<br>
            Upah Lembur</h4>
        Tata cara penghitungan upah lembur dilakukan berdasarkan atas ketentuan hukum yang berlaku.</p>

        <p>
        </div>
    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <div class="content">
        <h4>Pasal 5 <br>
            Tunjangan Hari Raya</h4>
        <ol>
            <li>Tunjangan Hari Raya / THR hanya diberikan kepada pekerja dengan masa kerja lebih dari 1 bulan sebelum hari raya.</li>
            <li>Tunjangan Hari Raya / THR bagi Pekerja dengan masa kerja lebih dari 1 bulan dan di bawah 1 Tahun,akan di hitung secara proporsional.</li>
            <li>Tunjangan Hari Raya / THR bagi Pekerja 1 Tahun atau lebih dibayarkan sebesar 1 kali Gaji.</li>
        </ol>
        </p>

        <p>
        <h4>Pasal 6<br>
            Hak dan Kewajiban Pihak Pertama</h4>
        <ol type="1">
            <li>
                Pihak Pertama mempunyai hak-hak sebagai berikut :
                <ol type="A">
                    <li>
                        Memberhentikan Pihak Kedua yang melanggar ketentuan seperti yang tercantum dalam kontrak tanpa kompensasi apapun dalam hal antara lain :
                        <ol type="I">
                            <li>Melakukan kelalaian, walaupun telah mendapatkan peringatan, serta melakukan tindakan yang tidak bertanggungjawab. ( Sesuai dengan Peraturan Perusahaan )</li>
                            <li>Dengan sengaja merusak, merugikan atau membiarkan dalam keadaan bahaya barang milik Pihak Pertama (Misal : Inventaris Perusahaan)</li>
                            <li>Melakukan tindakan kejahatan misalnya berkelahi, mencuri, menggelapkan, menipu dan memperdagangkan barang-barang yang terlarang baik didalam maupun diluar perusahaan.</li>
                            <li>Absen atau mangkir tanpa alasan yang sah sesuai dengan peraturan yang berlaku di perusahaan.</li>
                            <li>Pihak Kedua melanggar ketentuan kontrak yang telah disepakati.</li>
                        </ol>
                    </li>
                </ol>
            </li>
            <li>
                Pihak Pertama mempunyai kewajiban-kewajiban sebagai berikut :
                <ol type="A">
                    <li>Sebagai imbalan atas pekerjaan Pihak Kedua tersebut Pihak Pertama akan memberikan
                        <?php
                        if ($karyawan['status_pkwt'] == '3A') { ?>
                            <b> gaji sebesar Rp. 180.000- per hari</b> kehadiran pihak kedua,
                        <?php  } elseif ($karyawan['status_pkwt'] == '2A') { ?>
                            <b> gaji sebesar Rp. 150.000- per hari </b> kehadiran pihak kedua,

                        <?php } elseif ($karyawan['status_pkwt'] == '1A') { ?>
                            <b> gaji sebesar Rp. 120.000- per hari</b> kehadiran pihak kedua,

                        <?php } elseif ($karyawan['status_pkwt'] == '4A') { ?>
                            <b> gaji sebesar Rp. <?= number_format($karyawan['gaji'],0,',','.'); ?>- </b>
                            <?php } ?>
                        

                        
                    </li>
                    <li>Merujuk pada UU Ketenagakerjaan No. 13 Tahun 2013 Pasal 93. (1) Perjanjian kerja ini apapun alasannya didasarkan pada &ldquo;no show, no pay&rdquo;. </li>
                   <li>Melaksanakan pekerjaan harian lepas hingga perjanjian kerja harian lepas ini berakhir</li>
                    <li>Memberikan pembinaan dan pengarahan kepada Pihak Kedua</li>
                    <li>Melakukan evaluasi secara berkala tentang perkembangan Pihak Kedua dalam hal Pelaksanaan Pekerjaan.</li>
                </ol>
            </li>

        </ol>

        <p>
        <h4>Pasal 7<br>
            Hak dan Kewajiban Pihak Kedua</h4>
        <ol type="1">
            <li>Selama masa perjanjian kerja, Pihak Kedua mempunyai hak-hak sebagai berikut :
                <ol type="A">
                    <li>Selama masa perjanjian kerja harian lepas Pihak Kedua menerima gaji, sesuai dengan pasal 6 ayat (2.a).</li>
                    <li>Memperoleh Jaminan Sosial ketenagakerjaan dan Jaminan Sosial Kesehatan</li>
                </ol>
            </li>
            <li>Selama masa perjanjian kerja harian lepas ini, Pihak Kedua mempunyai kewajiban-kewajiban sebagai berikut :
                <ol type="A">
                    <li>Wajib mengikuti masa perjanjian kerja harian lepas ini hingga selesai</li>
                    <li>Wajib memenuhi segala peraturan yang berlaku di Perusahaan</li>
                    <li>Wajib mentaati segala instruksi langsung dan atau tidak langsung dari pihak pertama atau pihak yang ditunjuk oleh pihak pertama untuk mengawasi pekerjaan yang dilakukan oleh pihak kedua.</li>
                    <li>Tidak akan menuntut untuk tetap menjadi karyawan dalam semua bentuk perjanjian kerja di Perusahaan setelah selesainya Perjanjian kerja harian lepas sesuai dengan masa kontrak</li>
                </ol>
            </li>

        </ol>

        <p>
        <h4>PENGAKHIRAN PERJANJIAN<br>
            Pasal 8</h4>
        Perjanjian kerja harian lepas ini akan berakhir apabila :
        <ul>
            <li>8.1. Salah satu dari 2 pihak (pihak perusahaan atau pihak pekerja) memutuskan perjanjian kerja ini;</li>
            <li>8.2. Masa waktu berlakunya telah berakhir;</li>
            <li>8.3. Pekerja meninggal dunia;</li>
        </ul>

        Pengakhiran perjanjian kerja oleh pihak pekerja :
        </div>
    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <div class="content">
        <ul>
            <li>8.1.1. Pihak Pekerja yang bekerja kurang dari 30 hari dan bermaksud mengundurkan diri, maka harus memberitahukan kepada Pihak Perusahaan minimal 7 hari kerja sebelum hari pengunduran diri, dan bersedia menerima sanksi administratif berupa pemotongan separuh (50%) atas upah yang seharusnya diterima dihitung dari hari kerja yang sudah dijalani sebelum pengunduran diri;</li>
            <li>8.1.2. Pihak Pekerja dapat mengakhiri perjanjian ini sewaktu-waktu dengan cara mengajukan pengunduran diri secara tertulis dengan tenggang waktu 30 (tiga puluh) hari kerja komulatif tanpa memperhitungkan hari libur atau segala bentuk ketidakhadiran lainnya sebelum tanggal pekerja tersebut mengundurkan diri sebagaimana tertera di dalam suratnya;</li>
            <li>8.1.3. Apabila tanggal pengunduran diri telah ditentukan, sebagaimana dimaksud dalam pasal 8.1.1 dan/atau 8.1.2, perhitungan gaji akan menggunakan sistem &quot;No Show No Pay&quot;, perusahaan bersikeras untuk menerapkan sistem ini agar karyawan tetap bekerja sesuai dengan keinginannya. /Posisinya saat ini sementara perusahaan  mempunyai cukup waktu untuk mencari pengganti dan menyerahkan seluruh pekerjaan;</li>
            <li>8.1.4. Pada saat tanggal pengunduran diri telah diserahkan atau diputuskan, seperti yang tercantum pada Pasal 8.1.1 dan 8.1.2. Maka sistem perhitungan gaji akan berdasarkan &ldquo;no show, no pay&rdquo;, pihak perusahaan bersikeras menerapkan hal ini agar pihak pekerja tetap melaksanakan pekerjaannya hingga tanggal tersebut di atas, dan memberi cukup waktu bagi perusahaan untuk mencari pengganti dan melakukan serah terima jabatan atau pekerjaan;</li>
            <li>8.1.5. Kegagalan pemenuhan kondisi Pengakhiran atas perjanjian kerja harian lepas ini oleh Pihak Pekerja sebagaimana tersebut di Pasal 8.1.1. diatas, berakibat Pihak Pekerja dikenakan sanksi administratif berupa pemotongan sisa upah yang belum dibayarkan sebesar kekurangan pemenuhan 30 (tiga puluh) hari kerja komulatif (pasal 8.1.2.), atau ganti rugi sebesar upah yang disepakati untuk sisa perjanjian kerja waktu tertentu yang belum dijalani;<br>
                Pengakhiran perjanjian kerja oleh pihak pengusaha :</li>
            <li>8.1.6. Pihak Perusahaan dapat mengakhiri perjanjian ini sewaktu-waktu apabila pihak Pekerja telah melakukan pelanggaran peraturan perusahaan (PP), standart operasional prosedur (SOP) ataupun peraturan perundang-undangan yang berlaku yang dapat dikenakan sanksi pemutusan hubungan kerja;</li>
            <li>8.1.7. Pihak perusahaan dapat mengakhiri perjanjian ini sewaktu-waktu apabila menemukan bukti catatan dan atau rekam medis atas pihak pekerja mengenai kondisi kesehatannya dan pihak pekerja tidak melaporkan kondisi kesehatan yang sebenarnya atau sakit bawaannya kepada perusahaan pada saat penandatanganan perjanjian kerja ini yang berdampak pada ketidakhadiran pihak pekerja;</li>
            <li>8.1.8. Apabila pengakhiran perjanjian ini disebabkan oleh pelanggaran sebagaimana tercantum dalam pasal 8.1.4 dan atau 8.1.5. di atas, maka Pihak Pekerja tidak berhak atas sisa upah yang belum dibayarkan dan atau segala bentuk kompensasi lainnya yang seharusnya diterima oleh pekerja tersebut, seperti dan tidak terbatas pada uang pesangon, uang penghargaan masa kerja, uang pisah dan kompensasi lain sebagaimana diatur dalam undang-undang ketenagakerjaan yang berlaku. serta melepaskan pihak perusahaan atas segala bentuk gugatan dan atau konsekuensi hukum yang bisa ditimbulkan setelahnya;</li>
        </ul>


        <p>Pengakhiran perjanjian kerja karena berakhirnya masa waktu perjanjian kerja :
        <ul>
            <li>
                8.2. Perjanjian ini dengan sendirinya berakhir demi hukum apabila waktu yang diperjanjikan telah terpenuhi sehingga tidak diperlukan adanya penetapan tertulis dari Lembaga penyelesaian Perselisihan Hubungan Industrial;
            </li>
        </ul>


        <h4>Pasal 9<br>
            Evaluasi dan Sanksi</h4>
        <ol type="1">
            <li>Pihak Pertama mengadakan evaluasi atas prestasi, penampilan serta perilaku dan sikap kerja Pihak Kedua selama pelaksanaan pekerjaan.</li>
            <li>Jika Pihak Kedua dinyatakan tidak dapat melanjutkan pekerjaan yang dimaksud, Pihak Pertama berhak membatalkan perjanjian kerja harian lepas terhadap Pihak Kedua tanpa kewajiban memberikan kompensasi dalam bentuk apa pun.</li>

        </ol>

        </div>
    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <div class="content">

        <h4>Pasal 10<br>
            Perselisihan</h4>
        Apabila terjadi perselisihan selama masa perjanjian kerja harian lepas ini, para pihak sepakat akan menyelesaikan secara musyawarah untuk mufakat. Jika dengan cara musyawarah tidak tercapai penyelesaian, kedua belah pihak akan menyelesaikannya sesuai dengan perjanjian kerja harian lepas yang telah disepakati ini dengan meminta bantuan dari instansi terkait, untuk menyelesaikannya sesuai hukum yang berlaku.</p>

        <p>
        <h4>Pasal 11<br>
            Lain-lain</h4>
        Untuk hal-hal yang belum diatur dalam perjanjian ini, berlaku ketentuan dari peraturan Perusahaan di mana Pihak Kedua ditempatkan, sepanjang tidak bertentangan dengan peraturan ketenagakerjaan yang berlaku.</p>

        <p>
        <h4>Pasal 12<br>
            Penutup</h4>
        Perjanjian ini dibuat dan ditandatangani oleh kedua belah pihak dalam keadaan sadar dan tanpa paksaan dari pihak manapun, yang diketahui Departemen Tenaga Kerja RI dan berlaku sejak tanggal ditandatanganinya perjanjian kerja harian lepas ini dan berakhir setelah selesai masa perjanjian kerja harian lepas.</p>

    </div><br>

    <div>
        <center>
            <table border="0">
                <tr>
                    <td colspan="3">Dibuat di Pasuruan pada <?= $tgl; ?> </td>

                </tr>
                <tr>
                    <td colspan="3" style="height: 0px;"></td>

                </tr>
                <tr style="text-align: center;">
                    <td style="width: 150px;">Pihak Pertama</td>
                    <td style="width: 300px;"></td>
                    <td style="width: 150px;">Pihak Kedua</td>
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
<script>
    window.print();
</script>