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
                        <a href="<?= base_url('karyawan') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?= form_open('', [], ['id' => $karyawan['id']]); ?>

                <div class="row">

                    <div class="col-6">
                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="nik_akt">nik_akt</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('nik_akt', $karyawan['nik_akt']); ?>" type="text" id="nik_akt" name="nik_akt" class="form-control" placeholder=" Masukan nik_akt">
                                <?= form_error('nik_akt', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="nama">nama</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('nama', $karyawan['nama']); ?>" type="text" id="nama" name="nama" class="form-control" placeholder=" Masukan nama">
                                <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="status_pkwt">status_pkwt</label>
                            <div class="col-md-8">
                            <select name="status_pkwt" id="status_pkwt" class="form-control" placeholder=" Masukan status_pkwt">
                                    <option value="">--Pilih status_pkwt--</option>
                                    <option value="PMNT" <?php echo ($karyawan['status_pkwt'] == 'PMNT') ? 'selected' : ''; ?>>PMNT</option>
                                    <option value="PMNT-STAFF" <?php echo ($karyawan['status_pkwt'] == 'PMNT-STAFF') ? 'selected' : ''; ?>>PMNT-STAFF</option>
                                    <option value="PKWT" <?php echo ($karyawan['status_pkwt'] == 'PKWT') ? 'selected' : ''; ?>>PKWT</option>
                                    <option value="PKWT-STAFF" <?php echo ($karyawan['status_pkwt'] == 'PKWT-STAFF') ? 'selected' : ''; ?>>PKWT-STAFF</option>
                                    <option value="C4" <?php echo ($karyawan['status_pkwt'] == 'C4') ? 'selected' : ''; ?>>C4</option>
                                    <option value="3A" <?php echo ($karyawan['status_pkwt'] == '3A') ? 'selected' : ''; ?>>3A</option>
                                    <option value="2A" <?php echo ($karyawan['status_pkwt'] == '2A') ? 'selected' : ''; ?>>2A</option>
                                    <option value="1A" <?php echo ($karyawan['status_pkwt'] == '1A') ? 'selected' : ''; ?>>1A</option>
                                    
                                </select>
                                <?= form_error('status_pkwt', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="divisi">divisi</label>
                            <div class="col-md-8">
                            <select name="divisi" id="divisi" class="form-control" placeholder=" Masukan divisi" >
                                    <option value="">--Pilih Divisi--</option>
                                    <option value="Direct" <?php echo ($karyawan['divisi'] == 'Direct') ? 'selected' : ''; ?>>Direct</option>
                                    <option value="Indirect" <?php echo ($karyawan['divisi'] == 'Indirect') ? 'selected' : ''; ?>>Indirect</option>
                                    <option value="Cleaner" <?php echo ($karyawan['divisi'] == 'Cleaner') ? 'selected' : ''; ?>>Cleaner</option>
                                    
                                </select>
                                <?= form_error('divisi', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="jabatan">jabatan</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('jabatan', $karyawan['jabatan']); ?>" type="text" id="jabatan" name="jabatan" class="form-control" placeholder=" Masukan jabatan">
                                <?= form_error('jabatan', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="dept">dept</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('dept', $karyawan['dept']); ?>" type="text" id="dept" name="dept" class="form-control" placeholder=" Masukan dept" >
                                <?= form_error('dept', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="post">post</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('post', $karyawan['post']); ?>" type="text" id="post" name="post" class="form-control" placeholder=" Masukan post" >
                                <?= form_error('post', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="gaji">gaji</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('gaji', $karyawan['gaji']); ?>" type="text" id="gaji" name="gaji" class="form-control" placeholder=" Masukan gaji">
                                <?= form_error('gaji', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        


                    </div>
                    <div class="col-6">

                    <div class="row form-group">
                            <label class="col-4 text-md-right" for="nik_kk">nik_kk</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('nik_kk', $karyawan['nik_kk']); ?>" type="text" id="nik_kk" name="nik_kk" class="form-control" placeholder=" Masukan nik_kk">
                                <?= form_error('nik_kk', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="jk">jk</label>
                            <div class="col-md-8">
                            <select name="jk" id="jk" class="form-control" placeholder=" Masukan jk" >
                                    <option value="">--Pilih JK--</option>
                                    <option value="Laki-Laki" <?php echo ($karyawan['jk'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php echo ($karyawan['jk'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                                <?= form_error('jk', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="ttl">ttl</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('ttl', $karyawan['ttl']); ?>" type="text" id="ttl" name="ttl" class="form-control" placeholder=" Masukan ttl">
                                <?= form_error('ttl', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="alamat">alamat</label>
                            <div class="col-md-8">
                                <textarea value="<?= set_value('alamat', $karyawan['alamat']); ?>" type="text" id="alamat" name="alamat" class="form-control" placeholder=" Masukan alamat"><?= set_value('alamat', $karyawan['alamat']); ?></textarea>
                                <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="start_kontrak">start_kontrak</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('start_kontrak', $karyawan['start_kontrak']); ?>" type="date" id="start_kontrak" name="start_kontrak" class="form-control" placeholder=" Masukan start_kontrak">
                                <?= form_error('start_kontrak', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="periode">periode</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('periode', $karyawan['periode']); ?>" type="text" id="periode" name="periode" class="form-control" placeholder=" Masukan periode">
                                <?= form_error('periode', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-4 text-md-right" for="status_karyawan">status_karyawan</label>
                            <div class="col-md-8">
                                <select name="status_karyawan" id="status_karyawan" class="form-control" placeholder=" Masukan status_karyawan">
                                    <option value="">--Pilih Status--</option>
                                    <option value="aktif" <?php echo ($karyawan['status_karyawan'] == 'aktif') ? 'selected' : ''; ?>>Aktif</option>
                                    <option value="non-aktif" <?php echo ($karyawan['status_karyawan'] == 'non-aktif') ? 'selected' : ''; ?>>Non-Aktif</option>
                                </select>
                                <?= form_error('status_karyawan', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>

                        

                        <br>
                        <div class="row form-group justify-content-end">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary btn-icon-split">
                                    <span class="icon"><i class="fa fa-save"></i></span>
                                    <span class="text">Simpan</span>
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Reset
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>