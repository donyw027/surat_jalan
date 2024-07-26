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
                        <a href="<?= base_url('stok') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?= form_open('', [], ['id' => $stok['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="alatbahan">alatbahan</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('alatbahan', $stok['alatbahan']); ?>" type="text" id="alatbahan" name="alatbahan" class="form-control" placeholder="alatbahan">
                        <?= form_error('alatbahan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jumlah">jumlah</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('jumlah', $stok['jumlah']); ?>" type="text" id="jumlah" name="jumlah" class="form-control" placeholder="jumlah">
                        <?= form_error('jumlah', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="hargabeli">hargabeli</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('hargabeli', $stok['hargabeli']); ?>" type="text" id="hargabeli" name="hargabeli" class="form-control" placeholder="hargabeli">
                        <?= form_error('hargabeli', '<span class="text-danger small">', '</span>'); ?>
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