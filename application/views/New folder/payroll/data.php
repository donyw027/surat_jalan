<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Payroll
                </h4>
            </div>
            <div class="col-auto">
                <a onclick="return confirm('Semua Slip akan dikirim kesetiap email karyawan?')" href="<?= base_url('payroll/send_payrolls') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    
                    <span class="text">
                        Kirim Slip Gaji Via Email
                    </span>
                </a>

                <a id="myBtn"  class="btn btn-sm btn-secondary btn-icon-split">
                    <span class="text" style="color: white;">
                        Export Database
                    </span>
                </a>

                <a onclick="return confirm('Yakin ingin menghapus semua data payroll?')" href="<?= base_url('payroll/empty_payroll') ?>" class="btn btn-sm btn-danger btn-icon-split">
                    
                    <span class="text">
                        Hapus Database
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
                    <th>nama</th>
                    <th>nik</th>
                    <th>dept</th>
                    <th>status</th>
                    <th>gaji_pokok</th>
                    <th>gaji_tidak_full</th>
                    <th>uang_saku_phl</th>
                    <th>tunjangan</th>
                    <th>sisa_cuti</th>
                    <th>lembur</th>
                    <th>koreksi_positif</th>
                    <th>jumlah_pendapatan</th>
                    <th>bpjs_tk</th>

                    <th>bpjs_kes</th>
                    <th>pph21</th>
                    <th>absensi</th>
                    <th>koreksi_negatif</th>
                    <th>jumlah_potongan</th>
                    <th>take_home_pay</th>
                    <th>email</th>
                    <th>total_hari_kerja</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($payroll) :
                    foreach ($payroll as $payrolli) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?=$payrolli['nama'] ?></td>
                            <td><?=$payrolli['nik'] ?></td>
                            <td><?=$payrolli['dept'] ?></td>
                            <td><?=$payrolli['status'] ?></td>
                            <td>Rp. <?= number_format($payrolli['gaji_pokok'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['gaji_tidak_full'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['uang_phl'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['tunjangan'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['sisa_cuti'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['lembur'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['koreksi_positif'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['jumlah_pendapatan'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['bpjs_tk'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['bpjs_kes'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['pph21'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['absensi'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['koreksi_negatif'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['jumlah_potongan'],0,',','.'); ?> </td>
                            <td>Rp. <?= number_format($payrolli['take_home_pay'],0,',','.'); ?> </td>

                            <td><?=$payrolli['email'] ?></td>
                            <td><?=$payrolli['total_hari_kerja'] ?></td>
                           
                            

                            <td>

                                <a href="<?= base_url('payroll/edit/') . $payrolli['id'] ?>" class="btn btn-square btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i>Edit Email</a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('payroll/delete/') . $payrolli['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>

                                <a onclick="return confirm('Slip Gaji akan dikirim ke email karyawan yang dipilih?')" href="<?= base_url('payroll/send_payrolls_by1/') . $payrolli['id'] ?>" class="btn btn-circle btn-sm btn-secondary"><i class="fa fa-fw fa-envelope"></i></a>
                            </td>
                            
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="19" class="text-center">Silahkan tambahkan payroll baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div id="myModal" class="modal">

<!-- Modal content -->
<center>
<div class="col-5" >
<div class="modal-content">
  <span class="close">&times;</span>
  <h4>Upload Payroll Excel</h4>
  <?php echo form_open_multipart('payroll/upload_excel'); ?>
  <table style="margin-bottom: 50px;">
      <tr>
          <td><input class="form-control" type="file" name="excel_file" /></td>
          <td><input class="form-control" type="submit" value="Upload" /></td>
      </tr>
  </table>
  <?php echo form_close(); ?>
</div>
</center>
    
    



</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>