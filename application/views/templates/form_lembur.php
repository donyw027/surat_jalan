<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LEMBUR  </title>
    <link rel="icon" href="<?= base_url('assets/img/xto.ico'); ?>">


    <style>
        @page 
    {
        size:  auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
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

        



        /* Atur halaman baru sebelum dan setelah elemen dengan class .page-break */
        .page-break {
            page-break-before: always;
            page-break-after: always;
        }



        body {
            margin: 20px;
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
        <h2 style="text-align: left;">PT. AKT INDONESIA</h2> 
        <h2 style="text-align: left; margin-top: 0px; background-color: #9fc5f0;">SURAT PERINTAH LEMBUR</h2> 
        <p>
            Departemen/Bagian   : <br>
            tanggal Lembur      : <br>
        </p>
        <table  border="1" style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
            <tr>
                <td rowspan="2">NO</td>
                <td rowspan="2" style="width: 200px;">Nama</td>
                <td rowspan="2" style="width: 90px;">NIK <br> (Wajib Diisi)</td>
                <td rowspan="2" style="width: 190px;">PEKERJAAN</td>
                <td colspan="2" style="width: 100px;">JAM LEMBUR</td>
                <td rowspan="2" style="width: 70px;">TTD</td>
            </tr>
            <tr>
                
                <td style="width: 100px;">Rencana</td>
                <td style="width: 100px;">Pelaksanaan</td>
            </tr>
            <tr style="height: 23px;">
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 23px;">
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>5</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>6</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>7</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>8</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>9</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>10</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <b style="color: red;">Note : NIK Wajib Di isi, <br>Bila OT tidak terinput karena NIK tidak ditulis, maka tidak ada revisi OT</b>
        <table border="1" style="float: right; margin-top:3px ;border: 1px solid black; text-align: center; border-collapse: collapse ;">
            <tr >
                <td>Pemohon, <br><br><br>Supervisor</td>
                <td>Menyetujui, <br><br><br>Manager</td>
                <td>Mengetahui, <br><br><br>Personalia</td>
            </tr>
        </table><br>
<br><br><br><br><br><br>
        <hr>

        <h2 style="text-align: left;">PT. AKT INDONESIA</h2> 
        <h2 style="text-align: left; margin-top: 0; background-color: #9fc5f0;">SURAT PERINTAH LEMBUR</h2> 
        <p>
            Departemen/Bagian   : <br>
            tanggal Lembur      : <br>
        </p>
        <table  border="1" style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
            <tr>
                <td rowspan="2">NO</td>
                <td rowspan="2" style="width: 200px;">Nama</td>
                <td rowspan="2" style="width: 90px;">NIK <br> (Wajib Diisi)</td>
                <td rowspan="2" style="width: 190px;">PEKERJAAN</td>
                <td colspan="2" style="width: 100px;">JAM LEMBUR</td>
                <td rowspan="2" style="width: 70px;">TTD</td>
            </tr>
            <tr>
                
                <td style="width: 100px;">Rencana</td>
                <td style="width: 100px;">Pelaksanaan</td>
            </tr>
            <tr style="height: 23px;">
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 23px;">
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>5</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>6</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>7</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>8</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>9</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr style="height: 23px;">
                <td>10</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <b style="color: red;">Note : NIK Wajib Di isi, <br>Bila OT tidak terinput karena NIK tidak ditulis, maka tidak ada revisi OT</b>
        <table border="1" style="float: right; margin-top:3px ; border: 1px solid black; text-align: center; border-collapse: collapse ;">
            <tr >
                <td>Pemohon, <br><br><br>Supervisor</td>
                <td>Menyetujui, <br><br><br>Manager</td>
                <td>Mengetahui, <br><br><br>Personalia</td>
            </tr>
        </table>
        
</body>

</html>
<script>
    window.print();
</script>