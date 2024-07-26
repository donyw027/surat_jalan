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
                <?= form_open('', [], ['id' => $pkwt['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="isi_pkwt">isi_pkwt</label>
                    <div class="col-md-10">
                        <textarea value="<?= set_value('isi_pkwt', $pkwt['isi_pkwt']); ?>" name="isi_pkwt" id="editor" class="form-control">
                        <?= set_value('isi_pkwt', $pkwt['isi_pkwt']); ?>
                    </textarea>
                        <?= form_error('isi_pkwt', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="nama_hrd">nama_hrd</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('nama_hrd', $pkwt['nama_hrd']); ?>" type="text" id="nama_hrd" name="nama_hrd" class="form-control" placeholder="nama_hrd">
                        <?= form_error('nama_hrd', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="alamat_hrd">alamat_hrd</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('alamat_hrd', $pkwt['alamat_hrd']); ?>" type="text" id="alamat_hrd" name="alamat_hrd" class="form-control" placeholder="alamat_hrd">
                        <?= form_error('alamat_hrd', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-2 text-md-right" for="ttd_hrd">ttd_hrd</label>
                    <div class="col-md-10">
                        <input value="<?= set_value('ttd_hrd', $pkwt['ttd_hrd']); ?>" type="text" id="ttd_hrd" name="ttd_hrd" class="form-control" placeholder="ttd_hrd">
                        <?= form_error('ttd_hrd', '<span class="text-danger small">', '</span>'); ?>
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