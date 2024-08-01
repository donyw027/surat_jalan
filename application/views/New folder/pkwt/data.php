<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data PKWT
                </h4>
            </div>
            <!-- <div class="col-auto">
                <a href="<?= base_url('PKWT/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Edit Data PKWT / HRD
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
                    <th>nama_hrd</th>
                    <th>isi_pkwt</th>
                    <th>alamat_hrd</th>
                    <th>ttd_hrd</th>


                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($pkwt) :
                    foreach ($pkwt as $pkwti) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $pkwti['nama_hrd']; ?></td>
                            <td><?= $pkwti['isi_pkwt']; ?></td>
                            <td><?= $pkwti['alamat_hrd']; ?></td>
                            <td><?= $pkwti['ttd_hrd']; ?></td>
                            <td>

                                <a href="<?= base_url('pkwt/edit/') . $pkwti['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('pkwt/delete/') . $pkwti['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan pkwt</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>