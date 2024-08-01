<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <img src="<?= base_url('assets/img/akt.png'); ?>" width="250" alt=""> <br><br>
    <h4>Bagi karyawan dengan nama-nama berikut, mohon untuk kedatangannya di office menemui HRD untuk penandatanganan kontrak kerja.</h4><br>

    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable22">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>nik_akt</th>
                    <th>nama</th>
                    <th>dept</th>
                    <th>post</th>
                    <th style="background: #F54E49; color: white;">end_kontrak</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($karyawan) :
                    foreach ($karyawan as $row) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?=$row['nik_akt'] ?></td>
                            <td><?=$row['nama'] ?></td>
                            <td><?=$row['dept'] ?></td>
                            <td><?=$row['post'] ?></td>
                            <td style="background: #F54E49; color: white;"><?=$row['end_kontrak'] ?></td>
                         
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="9" class="text-center">Silahkan tambahkan Karyawan baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>

            
        </table><br><br>
        TTD HRD <br>PT AKT INDONESIA 
            <br><br><br><br>
            <?php foreach ($nama_hrd as $hrd) : ?>
            <?php echo $hrd->nama_hrd; ?>
        <?php endforeach; ?>  
             

    </div>


    
</body>
</html>