<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Working Days
                </h4>
            </div>
            <div class="col-auto">
                <a onclick="return confirm('Semua Slip akan dikirim kesetiap email karyawan?')" href="<?= base_url('workingdays/send_workingdays') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    
                    <span class="text">
                        Kirim Slip WD Via Email
                    </span>
                </a>

                <a id="myBtn"  class="btn btn-sm btn-secondary btn-icon-split">
                    <span class="text" style="color: white;">
                        Export Database
                    </span>
                </a>

                <a onclick="return confirm('Yakin ingin menghapus semua data workingdays?')" href="<?= base_url('workingdays/empty_workingdays') ?>" class="btn btn-sm btn-danger btn-icon-split">
                    
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
                    <th>section</th>
                    <th>ijin</th>
                    <th>sakit</th>
                    <th>cuti</th>
                    <th>alpha</th>
                    <th>total_hari_kerja</th>
                    <th>total_hari_phl</th>
                    <th>jam1pertama</th>
                    <th>jam2lebih</th>
                    <th>hari_libur2x</th>

                    <th>harilibur8</th>
                    <th>total_overtime</th>
                    <th>email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($workingdays) :
                    foreach ($workingdays as $workingdaysi) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?=$workingdaysi['nama'] ?></td>
                            <td><?=$workingdaysi['nik'] ?></td>
                            <td><?=$workingdaysi['dept'] ?></td>
                            <td><?=$workingdaysi['section'] ?></td>
                            <td><?=$workingdaysi['ijin'] ?></td>
                            <td><?=$workingdaysi['sakit'] ?></td>
                            <td><?=$workingdaysi['cuti'] ?></td>
                            <td><?=$workingdaysi['alpha'] ?></td>
                            <td><?=$workingdaysi['total_hari_kerja'] ?></td>
                            <td><?=$workingdaysi['total_hari_phl'] ?></td>
                            <td><?=$workingdaysi['jam1pertama'] ?></td>
                            <td><?=$workingdaysi['jam2lebih'] ?></td>
                            <td><?=$workingdaysi['hari_libur2x'] ?></td>
                            <td><?=$workingdaysi['harilibur8'] ?></td>
                            <td><?=$workingdaysi['total_overtime'] ?></td>
                            <td><?=$workingdaysi['email'] ?></td>
                           
                            

                            <td>

                                <a href="<?= base_url('workingdays/edit/') . $workingdaysi['id'] ?>" class="btn btn-square btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i>Edit Email</a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('workingdays/delete/') . $workingdaysi['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>

                                <a onclick="return confirm('Slip WD akan dikirim ke email karyawan yang dipilih?')" href="<?= base_url('workingdays/send_workingdays_by1/') . $workingdaysi['id'] ?>" class="btn btn-circle btn-sm btn-secondary"><i class="fa fa-fw fa-envelope"></i></a>
                            </td>
                            
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="19" class="text-center">Silahkan tambahkan Data Working Days baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div id="myModal" class="modal">

<!-- Modal content -->
<center>
<div class="col-5" >
<div class="modal-content" >
  <span class="close">&times;</span>
  <h4>Upload Working Days Excel</h4>
  <?php echo form_open_multipart('workingdays/upload_excel'); ?>
  <table style="margin-bottom: 50px;">
      <tr>
          <td><input class="form-control" type="file" name="excel_file" /></td>
          <td><input  class="form-control"z type="submit" value="Upload" /></td>
      </tr>
  </table>
      
      
  <?php echo form_close(); ?>
  </center>
</div>
    
    



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