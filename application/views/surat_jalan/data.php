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
                        <a href="<?= base_url('dashboard') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
            <div class="card-body">
    <?= $this->session->flashdata('pesan'); ?>
    <?= form_open(); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label class="col-3 text-md-right" for="tgl">tgl</label>
                <div class="col-md-9">
                    <input value="<?= set_value('tgl'); ?>" type="text" id="tgl" name="tgl" class="form-control" placeholder="Masukan tgl">
                    <?= form_error('tgl', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-3 text-md-right" for="no_surat">no_surat</label>
                <div class="col-md-9">
                    <input value="<?= set_value('no_surat'); ?>" type="text" id="no_surat" name="no_surat" class="form-control" placeholder="Masukan no_surat">
                    <?= form_error('no_surat', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-3 text-md-right" for="tujuan">tujuan</label>
                <div class="col-md-9">
                    <input value="<?= set_value('tujuan'); ?>" type="text" id="tujuan" name="tujuan" class="form-control" placeholder="Masukan tujuan">
                    <?= form_error('tujuan', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-3 text-md-right" for="perihal">perihal</label>
                <div class="col-md-9">
                    <input value="<?= set_value('perihal'); ?>" type="text" id="perihal" name="perihal" class="form-control" placeholder="Masukan perihal">
                    <?= form_error('perihal', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-3 text-md-right" for="paraf_pic">PIC</label>
                <div class="col-md-9">
                    <input value="<?= set_value('paraf_pic'); ?>" type="text" id="paraf_pic" name="paraf_pic" class="form-control" placeholder="Masukan paraf_pic">
                    <?= form_error('paraf_pic', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 50px;" class="col-md-6">
            <div class="row form-group">
                <label class="col-3 text-md-right" for="kepada">kepada</label>
                <div class="col-md-9">
                <input value="<?= set_value('kepada'); ?>" type="text" id="kepada" name="kepada" class="form-control" placeholder="Masukan kepada">

                    <?= form_error('kepada', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-3 text-md-right" for="car_plat">car_plat</label>
                <div class="col-md-9">
                    <input value="<?= set_value('car_plat'); ?>" type="text" id="car_plat" name="car_plat" class="form-control" placeholder="Masukan car_plat">
                    <?= form_error('car_plat', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-3 text-md-right" for="inv_no">inv_no</label>
                <div class="col-md-9">
                    <input value="<?= set_value('inv_no'); ?>" type="text" id="inv_no" name="inv_no" class="form-control" placeholder="Masukan inv_no">
                    <?= form_error('inv_no', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-3 text-md-right" for="author">author</label>
                <div class="col-md-9">
                    <input value="<?= set_value('author'); ?>" type="text" id="author" name="author" class="form-control" placeholder="Masukan author">
                    <?= form_error('author', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-3 text-md-right" for="receiver">receiver</label>
                <div class="col-md-9">
                <input value="<?= set_value('receiver'); ?>" type="text" id="receiver" name="receiver" class="form-control" placeholder="Masukan receiver">

                    <?= form_error('receiver', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>

            
        </div> 
        
    </div>

    <div class="row">
                    <!-- ... Existing form fields ... -->
                </div>

                <div id="form-container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row form-group">
                                <label class="col-3 text-md-right" for="item">Item</label>
                                <div class="col-md-9">
                                    <input value="<?= set_value('item'); ?>" type="text" id="item" name="item[]" class="form-control" placeholder="Masukan item">
                                    <?= form_error('item', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                <label class="col-3 text-md-right" for="deskripsi">Deskripsi</label>
                                <div class="col-md-9">
                                    <input value="<?= set_value('deskripsi'); ?>" type="text" id="deskripsi" name="deskripsi[]" class="form-control" placeholder="Masukan deskripsi">
                                    <?= form_error('deskripsi', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                <label class="col-3 text-md-right" for="qty">Qty</label>
                                <div class="col-md-9">
                                    <input value="<?= set_value('qty'); ?>" type="text" id="qty" name="qty[]" class="form-control" placeholder="Masukan qty">
                                    <?= form_error('qty', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                <label class="col-3 text-md-right" for="remark">Remark</label>
                                <div class="col-md-9">
                                    <input value="<?= set_value('remark'); ?>" type="text" id="remark" name="remark[]" class="form-control" placeholder="Masukan remark">
                                    <?= form_error('remark', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-success btn-icon-split" id="add-row">
                            <span class="icon"><i class="fa fa-plus"></i></span>
                            <span class="text">Tambah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-icon-split" id="remove-row">
                            <span class="icon"><i class="fa fa-minus"></i></span>
                            <span class="text">Kurangi</span>
                        </button>
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formContainer = document.getElementById('form-container');

        document.getElementById('add-row').addEventListener('click', function () {
            const newRow = document.createElement('div');
            newRow.className = 'row';
            newRow.innerHTML = `
                <div class="col-md-3">
                    <div class="row form-group">
                        <label class="col-3 text-md-right" for="item">Item</label>
                        <div class="col-md-9">
                            <input type="text" name="item[]" class="form-control" placeholder="Masukan item">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row form-group">
                        <label class="col-3 text-md-right" for="deskripsi">Deskripsi</label>
                        <div class="col-md-9">
                            <input type="text" name="deskripsi[]" class="form-control" placeholder="Masukan deskripsi">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row form-group">
                        <label class="col-3 text-md-right" for="qty">Qty</label>
                        <div class="col-md-9">
                            <input type="text" name="qty[]" class="form-control" placeholder="Masukan qty">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row form-group">
                        <label class="col-3 text-md-right" for="remark">Remark</label>
                        <div class="col-md-9">
                            <input type="text" name="remark[]" class="form-control" placeholder="Masukan remark">
                        </div>
                    </div>
                </div>
            `;
            formContainer.appendChild(newRow);
        });

        document.getElementById('remove-row').addEventListener('click', function () {
            if (formContainer.children.length > 1) {
                formContainer.removeChild(formContainer.lastElementChild);
            }
        });
    });
</script>
