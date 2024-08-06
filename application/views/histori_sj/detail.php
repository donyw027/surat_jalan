<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Detail Surat Jalan
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
            <div class="col-auto">
                        <a href="<?= base_url('histori_sj') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
    <div class="table-responsive">
        

        <div class="card mb-4">
       
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 200px; background-color: #d5e5ff;">No Surat</th>
                    <td>
                        <?php 
                            if (!empty($detail_hsj->no_surat_db)) {
                                echo $detail_hsj->no_surat_db;
                            } else {
                                echo "Data tidak ada";
                            }
                        ?>
                    </td>
                    <th style="width: 200px; background-color: #d5e5ff;">Tanggal Buat</th>
                    <td><?php 
                            if (!empty($detail_hsj->tgl)) {
                                echo format_indo(date("Y-m-d", strtotime($detail_hsj->tgl)));
                            } else {
                                echo "Data tidak ada";
                            }
                        ?></td>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <th style="width: 200px; background-color: #d5e5ff;">Kepada</th>
                    <td><?php 
                            if (!empty($detail_sj1->kepada)) {
                                echo $detail_sj1->kepada;
                            } else {
                                echo "Data tidak ada";
                            }
                        ?></td>

                    <th style="width: 200px; background-color: #d5e5ff;">Car Plat</th>
                    <td><?php 
                            if (!empty($detail_sj1->car_plat)) {
                                echo $detail_sj1->car_plat;
                            } else {
                                echo "Data tidak ada";
                            }
                        ?></td>
                </tr>
                
                <tr>
                    <th style="width: 200px; background-color: #d5e5ff;">Invoice No</th>
                    <td><?php 
                            if (!empty($detail_sj1->inv_no)) {
                                echo $detail_sj1->inv_no;
                            } else {
                                echo "Data tidak ada";
                            }
                        ?></td>

                    <th style="width: 200px; background-color: #d5e5ff;">Author</th>
                    <td><?php 
                            if (!empty($detail_sj1->author)) {
                                echo $detail_sj1->author;
                            } else {
                                echo "Data tidak ada";
                            }
                        ?></td>
                </tr>
                
                <tr>
                    <th style="width: 200px; background-color: #d5e5ff;">Receiver</th>
                    <td><?php 
                            if (!empty($detail_sj1->receiver)) {
                                echo $detail_sj1->receiver;
                            } else {
                                echo "Data tidak ada";
                            }
                        ?></td>

                    <th style="width: 200px; background-color: #d5e5ff;">PIC</th>
                    <td><?php 
                            if (!empty($detail_hsj->paraf_pic)) {
                                echo $detail_hsj->paraf_pic;
                            } else {
                                echo "Data tidak ada";
                            }
                        ?></td>
                </tr>
               
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Detail
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr style=" background-color: #d5e5ff;">
                        <th>Item</th>
                        <th>Deskripsi</th>
                        <th>Qty</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($detail_sj)) : ?>
                        <?php foreach ($detail_sj as $index => $item) : ?>
                            <tr>
                                <td><?= $item->item; ?></td>
                                <td><?= $item->deskripsi; ?></td>
                                <td><?= $item->qty; ?></td>
                                <td><?= $item->remark; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="text-center">No items found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>