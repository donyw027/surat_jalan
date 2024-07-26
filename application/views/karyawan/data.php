<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data karyawan
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('karyawan/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Karyawan
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>nik_akt</th>
                    <th>nama</th>
                    <th>status_pkwt</th>
                    <th>jabatan</th>
                    <th>divisi</th>
                    <th>dept</th>
                    <th>post</th>
                    <th>periode</th>

                    <th>start_kontrak</th>
                    <th>end_kontrak</th>
                    <th>gaji</th>
                    <th>nik_kk</th>
                    <th>jk</th>
                    <th>ttl</th>
                    <th>alamat</th>
                    <th>email</th>
                    <th>bpjstk</th>
                    <th>bpjskes</th>
                    <th>bank</th>
                    
                    <th>status_karyawan</th>
                    <th>keterangan</th>
                    <th>tgl_join</th>
                    <th>tgl_keluar</th>


                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($karyawan) :
                    foreach ($karyawan as $karyawani) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?=$karyawani['nik_akt'] ?></td>
                            <td><?=$karyawani['nama'] ?></td>
                            <td><?=$karyawani['status_pkwt'] ?></td>
                            <td><?=$karyawani['jabatan'] ?></td>
                            <td><?=$karyawani['divisi'] ?></td>
                            <td><?=$karyawani['dept'] ?></td>
                            <td><?=$karyawani['post'] ?></td>
                            <td><?=$karyawani['periode'] ?> Bulan</td>
                            <td><?=$karyawani['start_kontrak'] ?></td>
                            <td><?=$karyawani['end_kontrak'] ?></td>
                            <td>Rp. <?= number_format($karyawani['gaji'],0,',','.'); ?> </td>
                            <td><?=$karyawani['nik_kk'] ?></td>
                            <td><?=$karyawani['jk'] ?></td>
                            <td><?=$karyawani['ttl'] ?></td>
                            <td><?=$karyawani['alamat'] ?></td>
                            <td><?=$karyawani['email'] ?></td>
                            <td><?=$karyawani['bpjstk'] ?></td>
                            <td><?=$karyawani['bpjskes'] ?></td>
                            <td><?=$karyawani['bank'] ?></td>
                            
                            <td><?=$karyawani['status_karyawan'] ?></td>
                            <td><?=$karyawani['keterangan'] ?></td>
                            <td><?=$karyawani['tgl_join'] ?></td>
                            <td><?=$karyawani['tgl_keluar'] ?></td>

                            

                            <td>

                                <a href="<?= base_url('karyawan/edit/') . $karyawani['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('karyawan/delete/') . $karyawani['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                            
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="19" class="text-center">Silahkan tambahkan Karyawan baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>