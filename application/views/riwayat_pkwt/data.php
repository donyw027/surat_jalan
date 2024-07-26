<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                <?= form_open('', [], ['id' => $karyawan['id']]); ?>

                    Riwayat PKWT : <?= $karyawan['nama']; ?>
                </h4>
            </div>
            
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>nik_akt</th>
                    <th>status_pkwt</th>
                    <th>start_kontrak</th>
                    <th>end_kontrak</th>
                    <th>tgl_simpan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($riwayat_pkwt as $row) : ?>
                    <tr>
                        <td><?php echo $row['nik_akt']; ?></td>
                        <td><?php echo $row['status_pkwt']; ?></td>
                        <td><?php echo $row['start_kontrak']; ?></td>
                        <td><?php echo $row['end_kontrak']; ?></td>
                        <td><?php echo $row['tgl_simpan']; ?></td>
                        <td>
                        <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('pkwt/d_riwayat/') . $row['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            
            
        </table>
    </div>
</div>