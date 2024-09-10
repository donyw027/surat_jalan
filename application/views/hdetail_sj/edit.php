<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card shadow-sm mb-4 border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form <?= $title; ?>
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('hdetail_sj') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?= form_open('', [], ['id' => $surat_jalan['id']]); ?>
                
                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="no_surat_db">no_surat_db</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('no_surat_db', $surat_jalan['no_surat_db']); ?>" type="text" id="no_surat_db" name="no_surat_db" class="form-control" placeholder="no_surat_db" disabled>
                        <?= form_error('no_surat_db', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="item">item</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('item', $surat_jalan['item']); ?>" type="text" id="item" name="item" class="form-control" placeholder="item">
                        <?= form_error('item', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="deskripsi">deskripsi</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('deskripsi', $surat_jalan['deskripsi']); ?>" type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="deskripsi">
                        <?= form_error('deskripsi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="qty">qty</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('qty', $surat_jalan['qty']); ?>" type="text" id="qty" name="qty" class="form-control" placeholder="qty">
                        <?= form_error('qty', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="remark">remark</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('remark', $surat_jalan['remark']); ?>" type="text" id="remark" name="remark" class="form-control" placeholder="remark">
                        <?= form_error('remark', '<span class="text-danger small">', '</span>'); ?>
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