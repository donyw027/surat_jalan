<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Stok
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('stok/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Data Stok
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
                    <th>Alat Dan Bahan</th>
                    <th>Jumlah</th>
                    <th>Harga Beli</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($stok) :
                    foreach ($stok as $stoki) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>

                            <td><?= $stoki['alatbahan']; ?></td>
                            <td><?= $stoki['jumlah']; ?></td>
                            <td><?="Rp. " . number_format($stoki['hargabeli'],0,',','.'); ?></td>
                            <td>

                                <a href="<?= base_url('stok/edit/') . $stoki['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('stok/delete/') . $stoki['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan stok baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>