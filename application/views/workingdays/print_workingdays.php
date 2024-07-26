<!DOCTYPE html>
<html>
<head>
    <title>Working Days</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 9pt;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>

<?php
$bulann =  date('Y-m-d');
$date1 = new DateTime($bulann);
$date1->modify("-1 month");
$bulan_sebelum = format_bulan($date1->format('Y-m-d'));
?>
    <h3>Slip Working Days <?= $bulan_sebelum; ?>-<?= $workingdays->nik ?>_<?= $workingdays->nama ?></h3>
    <p>Berikut Detail Slip Working Days Bulan <?= $bulan_sebelum; ?> :</p>
    <table>
        
        <tr >
            <td style="font-weight: bold;">NIK</td>
            <td><?= $workingdays->nik ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">NAMA KARYAWAN</td>
            <td><?= $workingdays->nama ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">DEPT</td>
            <td><?= $workingdays->dept ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">SECTION</td>
            <td><?= $workingdays->section ?></td>
        </tr>
    </table>

    <h3>Rincian Hari Kerja</h3>
    <table>
        
        <tr>
            <td style="font-weight: bold;">Potongan (Ijin)</td>
            <td> <?= $workingdays->ijin; ?> JAM</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Sakit</td>
            <td> <?= $workingdays->sakit; ?> WORKINGDAYS</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Cuti</td>
            <td> <?= $workingdays->cuti; ?> WORKINGDAYS</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Alpha</td>
            <td> <?= $workingdays->alpha; ?> WORKINGDAYS</td>
        </tr>
        <tr>
            <td style="background-color: yellow;font-weight: bold;">Total Hari Kerja</td>
            <td style="background-color: yellow;"> <?= $workingdays->total_hari_kerja; ?> WORKINGDAYS</td>
        </tr>
        <tr>
            <td style="background-color: yellow; font-weight: bold;">PHL (Harian)</td>
            <td style="background-color: yellow;"> <?= $workingdays->total_hari_phl; ?> WORKINGDAYS</td>
        </tr>
       
    </table>
    <h3>Overtime</h3>
    <table>
    <tr>
            <td style="font-weight: bold;">1 Jam Pertama (1,5)</td>
            <td> <?= $workingdays->jam1pertama; ?> JAM</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">2 Jam (2x)</td>
            <td> <?= $workingdays->jam2lebih; ?> JAM</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Hari Libur (2x)</td>
            <td> <?= $workingdays->hari_libur2x; ?> JAM</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Hari Libur (>8)</td>
            <td> <?= $workingdays->harilibur8; ?> JAM</td>
        </tr>
        <tr>
            <td style="background-color: yellow;font-weight: bold;">Total Overtime</td>
            <td style="background-color: yellow;"> <?= $workingdays->total_overtime; ?> JAM</td>
        </tr>
        
        
    </table>
    <p>
        <b>NOTE :</b> <br> TERKAIT SAKIT (S) AKAN DI CEK DAN DIVALIDASI LEBIH LANJUT KOMPLAIN JIKA TERDAPAT KESALAHAN DATA MAXIMAL PADA TANGGAL 10 <?= format_bulan(date('Y-m-d')); ?> JAM 9 PAGI KE PIHAK HRD
    </p>
    <hr>


<br>
    <p>HRD PT AKT INDONESIA <br>
    Rembang Industri Raya No. 45 <br>
    Tlp./Fax 0343 - 4505082 <br>
    Pasuruan Jawa Timur 67152


    </p>
</body>
</html>
