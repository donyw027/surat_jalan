<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mb-4 border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form <?= $title; ?>
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('order') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
            <div class="card-body pb-2">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $order['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="produk">produk</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('produk', $order['produk']); ?>" type="text" id="produk" name="produk" class="form-control" placeholder="produk">
                        <?= form_error('produk', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="orderby">orderby</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('orderby', $order['orderby']); ?>" type="text" id="orderby" name="orderby" class="form-control" placeholder="orderby">
                        <?= form_error('orderby', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="deadline">deadline</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('deadline', $order['deadline']); ?>" type="text" id="deadline" name="deadline" class="form-control" placeholder="deadline">
                        <?= form_error('deadline', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="harga">harga</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('harga', $order['harga']); ?>" type="text" id="harga" name="harga" class="form-control" placeholder="harga">
                        <?= form_error('harga', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>


                <br>
                <div class="row form-group justify-content-end">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>