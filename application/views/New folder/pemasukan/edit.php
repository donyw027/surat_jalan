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
                        <a href="<?= base_url('pemasukan') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?= form_open('', [], ['id' => $pemasukan['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tgl">tgl</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('tgl', $pemasukan['tgl']); ?>" type="text" id="tgl" name="tgl" class="form-control" placeholder="tgl">
                        <?= form_error('tgl', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="produk">produk</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('produk', $pemasukan['produk']); ?>" type="text" id="produk" name="produk" class="form-control" placeholder="produk">
                        <?= form_error('produk', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="orderby">orderby</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('orderby', $pemasukan['orderby']); ?>" type="text" id="orderby" name="orderby" class="form-control" placeholder="orderby">
                        <?= form_error('orderby', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jumlah_pemasukan">jumlah_pemasukan</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('jumlah_pemasukan', $pemasukan['jumlah_pemasukan']); ?>" type="text" id="jumlah_pemasukan" name="jumlah_pemasukan" class="form-control" placeholder="jumlah_pemasukan">
                        <?= form_error('jumlah_pemasukan', '<span class="text-danger small">', '</span>'); ?>
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