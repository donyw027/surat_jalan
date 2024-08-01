<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <img src="<?= base_url('assets/img/akt.png'); ?>" width="250" alt=""> <br><br>
    <h4>Perjanjian Kontrak kerja</h4><br>

    <?= form_open('', [], ['id' => $karyawan['id']]); ?>


    <?php
                if ($pkwt) :
                    foreach ($pkwt as $row) :
                ?>
                            <?=$row['isi_pkwt'] ?>
                    <?php endforeach; ?>
                    
                <?php endif; ?>

    <?= form_close(); ?>



    
</body>
</html>