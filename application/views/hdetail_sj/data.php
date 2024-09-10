<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Detail Surat Jalan
                </h4>
            </div>
            <!-- <div class="col-auto">
                <a href="<?= base_url('hdetail_sj/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Add Data Detail Surat Jalan
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
                    <th>No Surat Jalan</th>
                    <th>Tgl</th>
                    <th>Kepada</th>
                    
                    <th>Item</th>
                    <th>Deskripsi</th>
                    <th>Qty</th>
                    <th>Car Plat</th>
                    <th>Invoice No</th>
                    <th>Remark</th>
                    <th>Autor</th>
                    <th>Receiver</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($hdetail_sj) :
                    foreach ($hdetail_sj as $hdetail_sji) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $hdetail_sji['no_surat_db']; ?></td>
                            <td><?= $hdetail_sji['tgl']; ?></td>
                            <td><?= $hdetail_sji['kepada']; ?></td>
                            
                            <td><?= $hdetail_sji['item']; ?></td>
                            <td><?= $hdetail_sji['deskripsi']; ?></td>
                            <td><?= $hdetail_sji['qty']; ?></td>
                            <td><?= $hdetail_sji['car_plat']; ?></td>
                            <td><?= $hdetail_sji['inv_no']; ?></td>
                            <td><?= $hdetail_sji['remark']; ?></td>
                            <td><?= $hdetail_sji['author']; ?></td>
                            <td><?= $hdetail_sji['receiver']; ?></td>


                            <td>

                                <a href="<?= base_url('hdetail_sj/edit/') . $hdetail_sji['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('hdetail_sj/delete/') . $hdetail_sji['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan car</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>