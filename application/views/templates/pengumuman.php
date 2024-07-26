<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="icon" href="<?= base_url('assets/img/xto.ico'); ?>">


    <style>
        @media print { body { -webkit-print-color-adjust: exact; } }

        @media print {

body {
    margin: 20mm 15mm;
    /* Atur margin halaman cetak */

    -webkit-print-color-adjust: exact;
}

.content {
    page-break-inside: avoid;
    text-align: justify;
    margin-top: 0px;
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
padding: 10pt;
}


footer {
position: fixed;
bottom: 0;
left: 0;
right: 0;
height: 50px;
/* Adjust the height of your footer */
text-align: center;
padding: 10pt;
}



/* Atur halaman baru sebelum dan setelah elemen dengan class .page-break */
.page-break {
page-break-before: always;
page-break-after: always;
}



body {
    /* text-align: center; */
    text-align: justify;

    margin: 10px;
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
    margin: 0px;
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

         <table>
            <tr>
        
                <td>
                <img src="<?= base_url('assets/img/akt.png'); ?>" width="250" alt="">
                </td>
                <td style="width: 280px;"><h2 style="text-align: center;">Pengumuman Reminder Kontrak</h2></td>
                <td></td>
            </tr>
        </table>
        <hr>
        <h3>Bagi karyawan dengan nama-nama berikut, mohon untuk kedatangannya di office menemui HRD untuk penandatanganan kontrak kerja.</h3>
    
    <!-- <div class="content" style="margin-top: 70px;"> -->

    <center><div class="table-responsive">
        <table  border="1" style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
            <thead>
                <tr  style="background: yellow; color: ;">
                    <th width="30">No.</th>
                    <th width="50">NIP</th>
                    <th width="210" >NAMA</th>
                    <th width="100">DEPT</th>
                    <th width="150">POS</th>
                    <th width="100">HABIS KONTRAK</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($karyawan) :
                    foreach ($karyawan as $row) :
                ?>
                        <tr>
                            <td style="padding: 5px;"><?= $no++; ?></td>
                            <td style=""><?=$row['nik_akt'] ?></td>
                            <td style="text-align: left;"><?=$row['nama'] ?></td>
                            <td style="text-align: left;"><?=$row['dept'] ?></td>
                            <td style="text-align: left;"><?=$row['post'] ?></td>
                            <td style="background: #F54E49; ;"><?=$row['end_kontrak'] ?></td>
                         
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="9" class="text-center">Silahkan tambahkan Karyawan baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>

            
        </table></center><br>
        <div style="margin-left: 50px;">
        <b>TTD HRD <br>PT AKT INDONESIA 
            <br><br><br><br><br>
            <?php foreach ($nama_hrd as $hrd) : ?>
            <?php echo $hrd->nama_hrd; ?>
        <?php endforeach; ?>  </b></div>
             

    </div>
    <!-- </div> -->


<script>
    window.print();
</script>

    
</body>
</html>