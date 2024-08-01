<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Friday List
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('pkwt/pengumumannext') ?>" target="_blank" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-print"></i>
                    </span>
                    <span class="text">
                        Print Friday List
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>nik_akt</th>
                    <th>nama</th>
                    
                    <th>dept</th>
                    <th>post</th>
                    <th>status_pkwt</th>

                    <th style="background:#88FA88; color: white;">start_kontrak</th>
                    <th style="background: #F54E49; color: white;">end_kontrak</th>
                    <th>divisi</th>

                    


                    <!-- <th>Aksi</th> -->
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
                            <td><?=$row['status_pkwt'] ?></td>

                            <td style="background: #88FA88; color: white;"><?=$row['start_kontrak'] ?></td>
                            <td style="background: #F54E49; color: white;"><?=$row['end_kontrak'] ?></td>
                            <td><?=$row['divisi'] ?></td>

                            
                            <!-- <td>
                            <a href="<?= base_url('karyawan/up_print_pkwt/') . $row['id'] ?>" class="btn  btn-sm btn-primary">Edit & Print PKWT</a>
                                <a href="<?= base_url('karyawan/up_print_phl/') . $row['id'] ?>" class="btn  btn-sm btn-secondary">Edit & Print PHL</a>
                                <a href="<?= base_url('pkwt/print_pkwt/') . $row['id'] ?>" class="btn  btn-sm btn-primary" target="_blank">Print PKWT</a>
                                <a href="<?= base_url('pkwt/print_phl/') . $row['id'] ?>" class="btn  btn-sm btn-secondary" target="_blank">Print PHL</a>
                                
                                
                            </td> -->
                            
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="9" class="text-center">Silahkan tambahkan Karyawan baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>