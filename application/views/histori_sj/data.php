<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Riwayat Surat Jalan
                </h4>
            </div>
            <!-- <div class="col-auto">
                <a href="<?= base_url('autor/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Add Data riwayat_surat_jalan
                    </span>
                </a>
            </div> -->
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Tgl</th>
                    <th>No Surat</th>
                    <th>Tujuan</th>
                    <th>Perihal</th>
                    <th>PIC</th>

                    
                    


                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($riwayat_surat_jalan) :
                    foreach ($riwayat_surat_jalan as $autori) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $autori['tgl']; ?></td>
                            <td><?= $autori['no_surat']; ?></td>
                            <td><?= $autori['tujuan']; ?></td>
                            <td><?= $autori['perihal']; ?></td>
                            <td><?= $autori['paraf_pic']; ?></td>
                            <td>

                                <a href="<?= base_url('histori_sj/detail/') . $autori['id'] ?>" class="btn btn btn-sm btn-primary">Detail Surat Jalan</a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('histori_sj/delete/') . $autori['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan Riwayat SJ</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>