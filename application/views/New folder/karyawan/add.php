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
            <div class="card-body ">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>

                <div class="row">
                    
                    <div class="col-6">
                    <div class="row form-group">
                    <label class="col-4 text-md-right" for="nik_akt">nik_akt</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('nik_akt'); ?>" type="text" id="nik_akt" name="nik_akt" class="form-control" placeholder=" Masukan nik_akt">
                        <?= form_error('nik_akt', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="nama">nama</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('nama'); ?>" type="text" id="nama" name="nama" class="form-control" placeholder=" Masukan nama">
                        <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="status_pkwt">status_pkwt</label>
                    <div class="col-md-8">
                        <select value="<?= set_value('status_pkwt'); ?>" type="text" id="status_pkwt" name="status_pkwt" class="form-control" placeholder=" Masukan status_pkwt">
                            <option value="">--Pilih Status PKWT--</option>
                            <option value="PMNT">PMNT</option>
                            <option value="PMNT-STAFF">PMNT-STAFF</option>
                            <option value="PKWT">PKWT</option>
                            <option value="PKWT-STAFF">PKWT-STAFF</option>
                            <option value="CA">CA</option>
                            <option value="3A">3A</option>
                            <option value="2A">2A</option>
                            <option value="1A">1A</option>

                        </select>
                        <!-- <input value="<?= set_value('status_pkwt'); ?>" type="text" id="status_pkwt" name="status_pkwt" class="form-control" placeholder=" Masukan status_pkwt"> -->
                        <?= form_error('status_pkwt', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="divisi">divisi</label>
                    <div class="col-md-8">
                    <select value="<?= set_value('divisi'); ?>" type="text" id="divisi" name="divisi" class="form-control" placeholder=" Masukan divisi">
                            <option value="">--Pilih Divisi--</option>
                            <option value="Indirect">Indirect</option>
                            <option value="Direct">Direct</option>
                        </select>
                        <!-- <input value="<?= set_value('divisi'); ?>" type="text" id="divisi" name="divisi" class="form-control" placeholder=" Masukan divisi"> -->
                        <?= form_error('divisi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="jabatan">jabatan</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('jabatan'); ?>" type="text" id="jabatan" name="jabatan" class="form-control" placeholder=" Masukan jabatan">
                        <?= form_error('jabatan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="dept">dept</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('dept'); ?>" type="text" id="dept" name="dept" class="form-control" placeholder=" Masukan dept">
                        <?= form_error('dept', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="post">post</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('post'); ?>" type="text" id="post" name="post" class="form-control" placeholder=" Masukan post">
                        <?= form_error('post', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="gaji">gaji</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('gaji'); ?>" type="text" id="gaji" name="gaji" class="form-control" placeholder=" Masukan gaji">
                        <?= form_error('gaji', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="nik_kk">nik_kk</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('nik_kk'); ?>" type="text" id="nik_kk" name="nik_kk" class="form-control" placeholder=" Masukan nik_kk">
                        <?= form_error('nik_kk', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="jk">Jenis_Kelamin</label>
                    <div class="col-md-8">
                    <select value="<?= set_value('jk'); ?>" type="text" id="jk" name="jk" class="form-control" placeholder=" Masukan jk">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <!-- <input value="<?= set_value('jk'); ?>" type="text" id="jk" name="jk" class="form-control" placeholder=" Masukan jk"> -->
                        <?= form_error('jk', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="ttl">ttl</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('ttl'); ?>" type="text" id="ttl" name="ttl" class="form-control" placeholder=" Masukan ttl">
                        <?= form_error('ttl', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                

                
                    </div>
                    <div class="col-6">
                    <div class="row form-group">
                    <label class="col-4 text-md-right" for="alamat">alamat</label>
                    <div class="col-md-8">
                        <textarea value="<?= set_value('alamat'); ?>" type="text" id="alamat" name="alamat" class="form-control" placeholder=" Masukan alamat"></textarea>
                        <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                    <div class="row form-group">
                    <label class="col-4 text-md-right" for="email">email</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('email'); ?>" type="text" id="email" name="email" class="form-control" placeholder=" Masukan email">
                        <?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="bpjstk">bpjstk</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('bpjstk'); ?>" type="text" id="bpjstk" name="bpjstk" class="form-control" placeholder=" Masukan bpjstk">
                        <?= form_error('bpjstk', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="bpjskes">bpjskes</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('bpjskes'); ?>" type="text" id="bpjskes" name="bpjskes" class="form-control" placeholder=" Masukan bpjskes">
                        <?= form_error('bpjskes', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="bank">bank</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('bank'); ?>" type="text" id="bank" name="bank" class="form-control" placeholder=" Masukan bank">
                        <?= form_error('bank', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="start_kontrak">start_kontrak</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('start_kontrak'); ?>" type="date" id="start_kontrak" name="start_kontrak" class="form-control" placeholder=" Masukan start_kontrak">
                        <?= form_error('start_kontrak', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="periode">periode</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('periode'); ?>" type="text" id="periode" name="periode" class="form-control" placeholder=" Masukan periode">
                        <?= form_error('periode', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="status_karyawan">status_karyawan</label>
                    <div class="col-md-8">
                    <select value="<?= set_value('status_karyawan'); ?>" type="text" id="status_karyawan" name="status_karyawan" class="form-control" placeholder=" Masukan status_karyawan">
                            <option value="">--Pilih Status Karyawan--</option>
                            <option value="aktif">Aktif</option>
                            <option value="non-aktif">Non-aktif</option>
                        </select>
                        <!-- <input value="<?= set_value('status_karyawan'); ?>" type="text" id="status_karyawan" name="status_karyawan" class="form-control" placeholder=" Masukan status_karyawan"> -->
                        <?= form_error('status_karyawan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>


                <!-- <textarea name="keterangan" id="editor"></textarea> -->


                <div class="row form-group">
                    <label class="col-4 text-md-right" for="keterangan">keterangan</label>
                    <div class="col-md-8">
                        <textarea value="<?= set_value('keterangan'); ?>" type="text" id="keterangan" name="keterangan" class="form-control" placeholder=" Masukan keterangan"></textarea>
                        <?= form_error('keterangan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-4 text-md-right" for="tgl_join">tgl_join</label>
                    <div class="col-md-8">
                        <input value="<?= set_value('tgl_join'); ?>" type="date" id="tgl_join" name="tgl_join" class="form-control" placeholder=" Masukan tgl_join">
                        <?= form_error('tgl_join', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                        <!-- <div class="row form-group">
                            <label class="col-4 text-md-right" for="tgl_keluar">tgl_keluar</label>
                            <div class="col-md-8">
                                <input value="<?= set_value('tgl_keluar'); ?>" type="date" id="tgl_keluar" name="tgl_keluar" class="form-control" placeholder=" Masukan tgl_keluar">
                                <?= form_error('tgl_keluar', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div> -->

                

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

                
                

                <?= form_close(); ?>
                    </div>
                </div>



                
                
                



               
            </div>
        </div>
    </div>
</div>