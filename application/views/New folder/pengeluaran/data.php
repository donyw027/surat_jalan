<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data pengeluaran
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('pengeluaran/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah pengeluaran
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
                    <th>Tgl</th>
                    <th>Keterangan Pengeluaran</th>
                    <th>Jumlah Pengeluaran</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($pengeluaran) :
                    foreach ($pengeluaran as $pengeluarani) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>

                            <td><?= $pengeluarani['tgl']; ?></td>
                            <td><?= $pengeluarani['pengeluaran']; ?></td>
                            <td><?="Rp. " . number_format($pengeluarani['jumlah_pengeluaran'],0,',','.'); ?></td>

                            <td>

                                <a href="<?= base_url('pengeluaran/edit/') . $pengeluarani['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('pengeluaran/delete/') . $pengeluarani['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan pengeluaran baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>