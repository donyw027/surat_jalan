<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card shadow-sm mb-4 border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form <?= $title; ?>
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('dashboard') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>

                <?php
                $no_surat_lanjutan = $detail_hsj->no_surat + 1;
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
                $no_surat_value = "NO/SJ/" . $bulanRomawi[$bulan] . "/" . $tahun . "/0" . $no_surat_lanjutan;

                ?>


                <div class="row">
                    <div class="col-md-6">

                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="no_surat">no_surat</label>
                            <div class="col-md-9">
                                <input value="<?= $no_surat_lanjutan; ?>" type="text" id="no_surat" name="no_surat" class="form-control" placeholder="Masukan no_surat" hidden>

                                <input value="<?= $no_surat_value ?>" type="text" id="no_surat_db" name="no_surat_db" class="form-control" placeholder="Masukan no_surat" readonly>
                                <?= form_error('no_surat', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="tgl">tgl</label>
                            <div class="col-md-9">
                                <input value="<?= set_value('tgl'); ?>" type="date" id="tgl" name="tgl" class="form-control" placeholder="Masukan tgl">
                                <?= form_error('tgl', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>







                        <!-- <div class="row form-group">
                            <label class="col-3 text-md-right" for="tujuan">tujuan</label>
                            <div class="col-md-9">
                                <input value="<?= set_value('tujuan'); ?>" type="text" id="tujuan" name="tujuan" class="form-control" placeholder="Masukan tujuan">
                                <?= form_error('tujuan', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div> -->

                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="kepada">kepada</label>
                            <div class="col-md-9">
                                <input value="<?= set_value('kepada'); ?>" type="text" id="kepada" name="kepada" class="form-control" placeholder="Masukan kepada">

                                <?= form_error('kepada', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="perihal">perihal</label>
                            <div class="col-md-9">
                                <input style="background-color: yellow;" value="<?= set_value('perihal'); ?>" type="text" id="perihal" name="perihal" class="form-control" placeholder="Ini Harus Di isi ya ...">
                                <?= form_error('perihal', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                       
                    </div>

                    <div style="margin-bottom: 50px;" class="col-md-6">
                        



                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="inv_no">inv_no</label>
                            <div class="col-md-9">
                                <input value="<?= set_value('inv_no'); ?>" type="text" id="inv_no" name="inv_no" class="form-control" placeholder="Masukan inv_no">
                                <?= form_error('inv_no', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="car_plat">car_plat</label>
                            <div class="col-md-9">
                                <input value="<?= set_value('car_plat'); ?>" type="text" id="car_plat" name="car_plat" class="form-control" placeholder="Masukan car_plat">
                                <!-- <select class="form-control" name="car_plat" id="car_plat">
                                    <option value="">--Pilih Car Plat--</option>
                                    <?php if (!empty($car_plat)) : ?>
                                        <?php foreach ($car_plat as $car_plati) : ?>
                                            <option value="<?= $car_plati['plat']; ?>"><?= $car_plati['plat']; ?> - <?= $car_plati['keterangan']; ?></option>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <option value="">Data tidak ada</option>
                                    <?php endif; ?>
                                </select> -->
                                <?= form_error('car_plat', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="author">author</label>
                            <div class="col-md-9">
                                <!-- <input value="<?= set_value('author'); ?>" type="text" id="author" name="author" class="form-control" placeholder="Masukan author"> -->
                                <select class="form-control" name="author" id="author">
                                    <option value="">--Pilih Authorize--</option>
                                    <?php if (!empty($author1)) : ?>
                                        <?php foreach ($author1 as $authori) : ?>
                                            <option value="<?= $authori['nama']; ?>"><?= $authori['nama']; ?></option>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <option value="">Data tidak ada</option>
                                    <?php endif; ?>
                                </select>
                                <?= form_error('author', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="receiver">receiver</label>
                            <div class="col-md-9">
                                <input value="<?= set_value('receiver'); ?>" type="text" id="receiver" name="receiver" class="form-control" placeholder="Masukan receiver">

                                <?= form_error('receiver', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-3 text-md-right" for="paraf_pic">PIC</label>
                            <div class="col-md-9">
                                <input style="background-color: yellow;" value="<?= set_value('paraf_pic'); ?>" type="text" id="paraf_pic" name="paraf_pic" class="form-control" placeholder="Masukan PIC">
                                <?= form_error('paraf_pic', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>


                    </div>

                </div>

                <div id="form-container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row form-group">
                                <label class="col-3 text-md-right" for="item">Item</label>
                                <div class="col-md-9">
                                    <input value="<?= set_value('item'); ?>" type="text" id="item" name="item[]" class="form-control" placeholder="Masukan item">
                                    <?= form_error('item[]', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                <label class="col-3 text-md-right" for="deskripsi">Deskripsi</label>
                                <div class="col-md-9">
                                    <input value="<?= set_value('deskripsi'); ?>" type="text" id="deskripsi" name="deskripsi[]" class="form-control" placeholder="Masukan deskripsi">
                                    <?= form_error('deskripsi[]', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                <label class="col-3 text-md-right" for="qty">Qty</label>
                                <div class="col-md-9">
                                    <input value="<?= set_value('qty'); ?>" type="text" id="qty" name="qty[]" class="form-control" placeholder="Masukan qty">
                                    <?= form_error('qty', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                <label class="col-3 text-md-right" for="remark">Remark</label>
                                <div class="col-md-9">
                                    <input value="<?= set_value('remark'); ?>" type="text" id="remark" name="remark[]" class="form-control" placeholder="Masukan remark">
                                    <?= form_error('remark[]', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-success btn-icon-split" id="add-row">
                            <span class="icon"><i class="fa fa-plus"></i></span>
                            <span class="text">Tambah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-icon-split" id="remove-row">
                            <span class="icon"><i class="fa fa-minus"></i></span>
                            <span class="text">Kurangi</span>
                        </button>
                    </div>
                </div>

                <br>
                <br><br><br>


                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <button type="submit" class="btn btn-primary btn-icon-split" onclick="return confirm('Yakin ingin Simpan dan Print data?')">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan & Print</span>
                        </button>
                        <button type="button" class="btn btn-info btn-icon-split" onclick="printPreview()">
            <span class="icon"><i class="fa fa-print"></i></span>
            <span class="text">Print Preview (Tanpa Simpan)</span>
        </button>
                        
                    </div>
                </div>

                <?= form_close(); ?>
            </div>

        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formContainer = document.getElementById('form-container');
        document.getElementById('add-row').addEventListener('click', function() {
            const newRow = document.createElement('div');
            newRow.className = 'row';

            newRow.innerHTML = `
                <div class="col-md-3">
                    <div class="row form-group">
                        <label class="col-3 text-md-right" for="item">Item</label>
                        <div class="col-md-9">
                            <input type="text" name="item[]" class="form-control" placeholder="Masukan item">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row form-group">
                        <label class="col-3 text-md-right" for="deskripsi">Deskripsi</label>
                        <div class="col-md-9">
                            <input type="text" name="deskripsi[]" class="form-control" placeholder="Masukan deskripsi">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row form-group">
                        <label class="col-3 text-md-right" for="qty">Qty</label>
                        <div class="col-md-9">
                            <input type="text" name="qty[]" class="form-control" placeholder="Masukan qty">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row form-group">
                        <label class="col-3 text-md-right" for="remark">Remark</label>
                        <div class="col-md-9">
                            <input type="text" name="remark[]" class="form-control" placeholder="Masukan remark">
                        </div>
                    </div>
                </div>
            `;

            formContainer.appendChild(newRow);
        });

        document.getElementById('remove-row').addEventListener('click', function() {
            if (formContainer.children.length > 1) {
                formContainer.removeChild(formContainer.lastElementChild);
            }
        });
    });
</script>

<script>
    function printPreview() {
        // Ambil data dari form
        const noSuratValue = document.getElementById('no_surat_db').value;
        const tglValue = document.getElementById('tgl').value;
        const kepadaValue = document.getElementById('kepada').value;
        const perihalValue = document.getElementById('perihal').value;
        const invNoValue = document.getElementById('inv_no').value;
        const carPlatValue = document.getElementById('car_plat').value;
        const authorValue = document.getElementById('author').value;
        const receiverValue = document.getElementById('receiver').value;
        const parafPicValue = document.getElementById('paraf_pic').value;
        
        const items = document.querySelectorAll('input[name="item[]"]');
        const deskripsi = document.querySelectorAll('input[name="deskripsi[]"]');
        const qty = document.querySelectorAll('input[name="qty[]"]');
        const remark = document.querySelectorAll('input[name="remark[]"]');

        let itemList = '';
        items.forEach((item, index) => {
            itemList += `
                <tr style="height: 20px;">
                    <td style="border-right: 1px solid black;padding-left: 4px;">${item.value}</td>
                    <td style="border-right: 1px solid black;padding-left: 4px;">${deskripsi[index].value}</td>
                    <td style="border-right: 1px solid black;padding-left: 4px;">${qty[index].value}</td>
                    <td style="border-right: 1px solid black;padding-left: 4px;">${remark[index].value}</td>
                </tr>
            `;
        });

        // Buat jendela print preview
        const printWindow = window.open('', '_blank');
        printWindow.document.write(`
        <!DOCTYPE html>
<html lang="en">
           
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Print Surat Jalan</title>
        <style>
            @page {
                size: auto;
                margin: 0mm;
            }
            h2, h4 {
                text-align: center;
            }
            @media print {
                body {
                    margin: 20mm 15mm;
                    -webkit-print-color-adjust: exact;
                }
                .content {
                    page-break-inside: avoid;
                    text-align: justify;
                    margin-top: 90px;
                    page-break-inside: avoid;
                }
                .page-break {
                    page-break-before: always;
                    page-break-after: always;
                }
            }
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
            <button><a href="#" onclick="window.close()" class="btn btn-sm btn-primary">Kembali</a></button>
        </header>

        <center><h1>INI HANYA PREVIEW YA</h1></center><hr>

        <table border="0" style="margin-left: 10px;">
            <tr>
                <td style="width: 250px;">
                    <p style="font-family: Arial, Helvetica, sans-serif; font-weight: 800;font-size: 14pt; margin: 0;">PT. <b style="font-weight: 800;font-size: 19pt;">AKT</b> INDONESIA</p>
                    <p style="text-align: left; margin-top: 0px; font-size: 11pt;">Jalan Rembang Industri Raya 45 Pier <br> Pasuruan, Indonesia <br>Post Code : 67152</p>
                </td>
                <td style="width: 280px; text-align: center;">
                    <H2 style="margin: 0;"><br>SURAT JALAN</H2>
                    <b style="font-size: 15pt;">${noSuratValue}</b>
                </td>
                <td style="font-family: Arial, Helvetica, sans-serif; font-weight: 500;font-size: 11pt; margin: 0; width: 200px;">
                    Date: ${tglValue}
                </td>
            </tr>
        </table>
        
        <center>
            <table border="0" style="margin-left: 5px;">
                <tr style="font-size: 10pt;">
                    <td style="width: 290px;">Kepada: ${kepadaValue}</td>
                    <td style="width: 250px;">Car License Plate: ${carPlatValue}</td>
                    <td style="width: 200px;">Invoice No: ${invNoValue}</td>
                </tr>
            </table>
            <table border="0" style="margin-left: 7px; margin-bottom: 10px; border: 1px solid black !important; font-family: Arial, Helvetica, sans-serif; font-size: 10pt; border-collapse: collapse;">
                <tr style="text-align: center;">
                    <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 230px;">Item</th>
                    <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 250px;">Description</th>
                    <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 100px;">Qty</th>
                    <th style="border-bottom: 1px solid black; border-right: 1px solid black; width: 250px;">Remark</th>
                </tr>
                ${itemList}
            </table>
            <br>
            <table border="0">
                <tr>
                    <th style="width: 300px;">Authorize</th>
                    <th style="width: 300px;">Receiver</th>
                    <th style="width: 300px;">Security</th>
                    <td style="width: 300px; text-align: left;" rowspan="3">
                        <b>Note:</b> <br>
                        White Sheet (authorizer) <br>
                        Red Sheet (receiver) <br>
                        Yellow Sheet (security) <br>
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
                    <td>${authorValue}</td>
                    <td>${receiverValue}</td>
                    <td></td>
                </tr>
                <tr style="text-align: center;">
                    <td>_________________</td>
                    <td>_________________</td>
                    <td>_________________</td>
                </tr>
            </table>
        </center>
    </body>

    
    </html>




            
        `);

        printWindow.document.close();
    }
</script>