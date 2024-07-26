<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="icon" href="<?= base_url('assets/img/xto.ico'); ?>">


    <style>
        @media print {
            body {
                margin: 20mm 15mm;
                /* Atur margin halaman cetak */

                -webkit-print-color-adjust: exact;
            }


            .content {
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

        .content {
            page-break-inside: avoid;
            text-align: justify;
            /* Hindari memecah konten di tengah halaman */
        }

        /* Atur halaman baru sebelum dan setelah elemen dengan class .page-break */
        .page-break {
            page-break-before: always;
            page-break-after: always;
        }



        body {
            margin: 50px;
            padding: 0;
            background-color: #FAFAFA;
            font: 12pt "Tahoma";
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
    <header>
        <img src="<?= base_url('assets/img/akt.png'); ?>" width="250" alt="">
    </header> <br><br>
    <?= form_open('', [], ['id' => $karyawan['id']]); ?>

    <center>
        <h1> PERJANJIAN KONTRAK KERJA <br>
            <h2> (<?= set_value('status_pkwt', $karyawan['status_pkwt']); ?>) <br></h2>

        </h1> <br><br><br><br><br><br><br>


        <h2> NAMA: <?= set_value('nama', $karyawan['nama']); ?> <br></h2>

        <h2> ID : <?= set_value('nik_akt', $karyawan['nik_akt']); ?></h2><br><br><br><br><br><br><br><br><br>

        <h2><u>
                PERIODE <br><br>

                <?= date("d M Y", strtotime($karyawan['start_kontrak'])); ?> – <?= date("d M Y", strtotime($karyawan['end_kontrak'])); ?>
            </u></h2>
    </center>

    <div style="page-break-after: always;">
        <!-- Konten yang akan diakhiri di halaman ini -->
    </div>
    <?php 
    $tgl = date('d M Y');
    $hari = date('D'); ?>

    <div class="content">
        

    </div>

    <div><center>
        <table border="0">
            <tr>
                <td colspan="3">Dibuat di Pasuruan pada <b><?= $tgl; ?></b> </td>

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
        </center></div>



    <footer>
        PIER, Jalan Rembang Industri Raya, No. 45, Rembang, Pasuruan Indonesia</footer>

    <?= form_close(); ?>


</body>

</html>
<script>
    window.print();
</script>