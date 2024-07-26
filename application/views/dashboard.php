 <div class="row">

 <?php 
    $p_bulan=date('M');
    $p_bulann=date('m');
    $p_tahun=date('Y');
    $p_hari=date('d');

    

 ?>


     <?php
        $bulan = format_bulan(date('Y-m-D'));
        
        $role = $this->session->userdata('login_session')['role'];
        $yang_login = $this->session->userdata('login_session')['nama'];

        $date = new DateTime('m');
            $date->modify("+1 month");
            $next_month = $date->format('M Y');
        ?>
     <div class="col-xl-12 ">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                 <h2 class="m-0 font-weight-bold text-white">Selamat datang <font style="color:yellow;"><?= $yang_login ?></font> <br> di SI Surat Jalan AKT Indonesia </h2>
             </div>
             <!-- Card Body -->

         </div>
     </div>
     <?php if ($this->session->userdata('login_session')['nama'] == 'Doni' || $this->session->userdata('login_session')['nama'] == 'Faiz') : ?>

     <div class="col-xl-12">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                 <h5 class="m-0 font-weight-bold text-white">Last Update Pada <?= $log->tanggal ?>  <br> <?= $log->aktor ?> Melakukan  <?= $log->aksi ?>      </h5>
             </div>
             <!-- Card Body -->

         </div>
     </div>
     <?php endif; ?>

     <div class="col-xl-4 col-6 mb-4">
                               <div class="card border-left-danger shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                          <div class="text-md font-weight-bold text-success text-uppercase mb-1">Date</div>
                         <!--<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_reminder; ?> Karyawan</div> -->
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-folder fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="col-xl-4 col-6 mb-4">
                               <div class="card border-left-danger shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                          <div class="text-md font-weight-bold text-success text-uppercase mb-1">Jumlah Record Surat Jalan</div>
                         <!--<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_reminder; ?> Karyawan</div> -->
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-folder fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="col-xl-4 col-6 mb-4">
                               <div class="card border-left-danger shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-md font-weight-bold text-success text-uppercase mb-1">Jumlah User</div>
                         <!-- <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_friday; ?> Karyawan</div> -->
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-folder fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

    
    


    
     
     <div class="col-xl-12 col-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1"></div>
                         <?php date_default_timezone_set("Asia/Jakarta"); ?>

                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                         
                         <center><img src="assets/img/xto.png" alt="" width="370"> 
                        
                </center>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     

   



 </div>

