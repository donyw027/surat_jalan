<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Surat Jalan  </title>
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
            margin: 2px;
            margin-left: 3px;

            padding: 0;
            background-color: #FAFAFA;
            font: 10pt "Times New Roman";
            
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        @page {
            /* size: A4; */
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
        header.print-header {
            display: none;
        }
    </style>
</head>

<body>  

<header class="print-header" id="1">
    <br><br>
    <button><a href="<?= base_url('Histori_sj') ?>" class="btn  btn-sm btn-primary">Kembali</a></button>
    </header>

    <table border="0" style="margin-left: 10px;">
        <tr>
            <td style="width: 250px ;">
            <p style="font-family: Arial, Helvetica, sans-serif; font-weight: 800;font-size: 14pt; margin: 0;">PT. <b style="font-weight: 800;font-size: 19pt;">AKT</b> INDONESIA</p>
            <p style="text-align: left; margin-top: 0px; font-size: 11pt; ">Jalan Rembang Industri Raya 45 Pier <br> Pasuruan, Indonesia <br>Post Code : 67152</p> 
            </td>
            <td style="width: 280px; text-align: center;">
                <H2 style="margin: 0;"><br>SURAT JALAN
                
                </H2>
                <?php   
                    $tahun = date('y');
                    $bulan = date('m');

                    $bulanRomawi = array(
                        '01' => 'I',
                        '02' => 'II',
                        '03' => 'III',
                        '04' => 'IV',
                        '05' => 'V',
                        '06' => 'VI',
                        '07' => 'VII',
                        '08' => 'VIII',
                        '09' => 'IX',
                        '10' => 'X',
                        '11' => 'XI',
                        '12' => 'XII'
                    );

                    // var_dump($tahun);
                ?>
                <b style="font-size: 15pt;"><?= $detail_sj1->no_surat_db; ?></b>
            </td>
            <td style="font-family: Arial, Helvetica, sans-serif; font-weight: 500;font-size: 11pt; margin: 0; width: 200px;"  >
                Date : <?= format_indo(date("Y-m-d", strtotime($detail_hsj->tgl))); ?>
            </td>
        </tr>
    </table>
    
<center>

    <table border="0" style="margin-left: 5px;">
        <tr style="font-size: 10pt;">
            <td style="width: 290px;">Kepada : <?= $detail_sj1->kepada; ?></td>
            <td style="width: 250px;">Car License Plate : <?= $detail_sj1->car_plat; ?></td>
            <td style="width: 200px;">Invoice No : <?= $detail_sj1->inv_no; ?></td>
        </tr>
    </table>
    <table border="0"  style="margin-left: 7px; margin-bottom: 10px; border: 1px solid black;  font-family: Arial, Helvetica, sans-serif; font-size: 10pt; border-collapse: collapse ;">
        <tr style="text-align: center;">
            <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 20px;">No</th>
            <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 230px;">Item</th>
            <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 250px;">Description</th>
            <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 100px;">Qty</th>
            <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 250px;">Remark</th>
        </tr>
        <tr style="text-align: left;" >
        <?php $no = 1; if (!empty($detail_sj)) : ?>
                        <?php foreach ($detail_sj as $index => $item) : ?>
                            <tr>
                                <td style="border-right: 1px solid black; text-align: center;"><?= $item->item ? $no++ : ''; ?></td>

                                <td style="border-right: 1px solid black;padding-left: 4px;"><?= $item->item; ?></td>
                                <td style="border-right: 1px solid black;padding-left: 4px;"><?= $item->deskripsi; ?></td>
                                <td style="border-right: 1px solid black;padding-left: 4px; text-align: center;"><?= $item->qty; ?></td>
                                <td style="border-right: 1px solid black;padding-left: 4px;"><?= $item->remark; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="text-center">No items found.</td>
                        </tr>
                    <?php endif; ?>
        </tr>
        
    </table>
    <br>
    <table border="0">
        <tr>
            <th style="width: 300px;">Authorize</th>
            <th style="width: 300px;">Receiver</th>
            <th style="width: 300px;">Security</th>
            <td style="width: 300px; text-align: left;" rowspan="3">
                <b>Note :</b> <br>
                White Sheet (authorizer) <br>
                Red Sheet (receiver) <br>
                Yellow Sheet(security) <br>
            </td>
        </tr>
        <tr>
            <td style="height: 60px;"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr style="text-align: center;">
            <td><?= $detail_sj1->author; ?></td>
            <td><?= $detail_sj1->receiver; ?></td>
            <td></td>
        </tr>
        <tr style="text-align: center;">
            <!-- <td><hr style="width: 120px; "></td>
            <td><hr style="width: 120px;"></td>
            <td><hr style="width: 120px;"></td> -->
            <td>_________________</td>
            <td>_________________</td>
            <td>_________________</td>
        </tr>
    </table>
    </center>
        
        
</body>

</html>
<script>
    window.print();
</script>

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