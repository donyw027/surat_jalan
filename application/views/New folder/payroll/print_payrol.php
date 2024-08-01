<!DOCTYPE html>
<html>
<head>
    <title>Payroll</title>
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
    <h3>Slip Gaji <?= $bulan_sebelum; ?>-<?= $payroll->nik ?>_<?= $payroll->nama ?></h3>
    <p>Berikut Detail Slip Gaji Bulan <?= $bulan_sebelum; ?> :</p>
    <table>
        
        <tr >
            <td style="font-weight: bold;">NIK</td>
            <td><?= $payroll->nik ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">NAMA KARYAWAN</td>
            <td><?= $payroll->nama ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">DEPT</td>
            <td><?= $payroll->dept ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">STATUS</td>
            <td><?= $payroll->status ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">TOTAL HARI KERJA</td>
            <td><?= $payroll->total_hari_kerja ?></td>
        </tr>
    </table>

    <h3>Pendapatan</h3>
    <table>
        
        <tr>
            <td style="font-weight: bold;">Gaji Pokok</td>
            <td>Rp. <?= number_format($payroll->gaji_pokok,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Gaji Tidak Full</td>
            <td>Rp. <?= number_format($payroll->gaji_tidak_full,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Uang Saku (PHL)</td>
            <td>Rp. <?= number_format($payroll->uang_phl,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tunjangan</td>
            <td>Rp. <?= number_format($payroll->tunjangan,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Sisa Cuti</td>
            <td>Rp. <?= number_format($payroll->sisa_cuti,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Lembur</td>
            <td>Rp. <?= number_format($payroll->lembur,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Koreksi Positif</td>
            <td>Rp. <?= number_format($payroll->koreksi_positif,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="background-color: yellow;"><b>Jumlah Pendapatan</b></td>
            <td style="background-color: yellow;"><b>Rp. <?= number_format($payroll->jumlah_pendapatan,0,',','.'); ?></b></td>
        </tr>
    </table>
    <h3>Pengeluaran</h3>
    <table>
    <tr>
            <td style="font-weight: bold;">BPJS Ketenagakerjaan</td>
            <td>Rp. <?= number_format($payroll->bpjs_tk,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">BPJS Kesehatan</td>
            <td>Rp. <?= number_format($payroll->bpjs_kes,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">PPH 21</td>
            <td>Rp. <?= number_format($payroll->pph21,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Absensi</td>
            <td>Rp. <?= number_format($payroll->absensi,0,',','.'); ?></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Koreksi Negatif</td>
            <td>Rp. <?= number_format($payroll->koreksi_negatif,0,',','.'); ?></td>
        </tr>
       
        <tr>
            <td style="background-color: yellow;"><b>Jumlah Potongan</b></td>
            <td style="background-color: yellow;"><b>Rp. <?= number_format($payroll->jumlah_potongan,0,',','.'); ?></b></td>
        </tr>
        
        
    </table>
    <h3>Take Home Pay</h3>
    <table>
        
        <tr>
            <td style="background-color: yellow;"><b>Rp. <?= number_format($payroll->take_home_pay,0,',','.'); ?></b></td>
        </tr>
        
    </table>


<br><br>
    <p>HRD PT AKT INDONESIA <br>
    Rembang Industri Raya No. 45 <br>
    Tlp./Fax 0343 - 4505082 <br>
    Pasuruan Jawa Timur 67152


    </p>
</body>
</html>
