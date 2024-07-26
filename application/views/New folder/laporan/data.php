 <div class="row">

 <?php 
    $p_bulan=date('M');
    $p_bulann=date('m');
    $p_tahun=date('Y');
    $p_hari=date('d');
 ?>


     <?php
        $role = $this->session->userdata('login_session')['role'];
        $yang_login = $this->session->userdata('login_session')['nama'];
        ?>
     <div class="col-xl-12 ">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                 <h3 class="m-0 font-weight-bold text-white"></h3>
             </div>
             <!-- Card Body -->

         </div>
     </div>
    


 </div>

 

 
 <div class="row">

 

     <!-- Area Chart -->


     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Data Pemasukan <?=$p_tahun; ?></div>

                         <div class="table-responsive">
                             <table class="table" id="dataTable11">
                                 <thead>
                                     <tr>
                                         <th>Bulan</th>
                                         <th>Jumlah</th>
                                     </tr>
                                     <tr>
                                        <td>Januari</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan1,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Februari</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan2,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Maret</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan3,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>April</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan4,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Mei</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan5,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Juni</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan6,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Juli</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan7,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Agustus</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan8,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>September</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan9,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Oktober</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan10,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>November</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan11,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Desember</td>
                                        <td><?="Rp. " . number_format($pemasukan_bulanan12,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <th><font color=green>Total</font></th>
                                        <th><font color=green><?="Rp. " . number_format($total_pemasukan,0,',','.'); ?></font></th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                 </tbody>
                             </table>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>


     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Data Pengeluaran <?=$p_tahun; ?></div>

                         <div class="table-responsive">
                             <table class="table" id="dataTable11">
                                 <thead>
                                 <tr>
                                         <th>Bulan</th>
                                         <th>Jumlah</th>
                                     </tr>
                                     <tr>
                                        <td>Januari</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan1,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Februari</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan2,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Maret</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan3,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>April</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan4,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Mei</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan5,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Juni</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan6,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Juli</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan7,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Agustus</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan8,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>September</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan9,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Oktober</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan10,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>November</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan11,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <td>Desember</td>
                                        <td><?="Rp. " . number_format($pengeluaran_bulanan12,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                        <th><font color=red>Total</font></th>
                                        <th><font color=red><?="Rp. " . number_format($total_pengeluaran,0,',','.'); ?></font></th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                 </tbody>
                             </table>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>

     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Laba & Rugi <?=$p_tahun; ?></div>

                         <div class="table-responsive">
                             <table class="table" id="dataTable11">
                                 <thead>
                                     <tr>
                                         <th>Bulan</th>
                                         <th>Jumlah</th>
                                     </tr>
                                     <tr>
                                        <td>Januari</td>
                                        <td>
                                        <?php if ($labarugi1<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi1,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi1,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Februari</td>
                                        <td>
                                        <?php if ($labarugi2<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi2,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi2,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Maret</td>
                                        <td>
                                        <?php if ($labarugi3<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi3,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi3,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>April</td>
                                        <td>
                                        <?php if ($labarugi4<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi4,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi4,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Mei</td>
                                        <td>
                                        <?php if ($labarugi5<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi5,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi5,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Juni</td>
                                        <td>
                                        <?php if ($labarugi6<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi6,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi6,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Juli</td>
                                        <td>
                                        <?php if ($labarugi7<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi7,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi7,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Agustus</td>
                                        <td>
                                        <?php if ($labarugi8<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi8,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi8,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>September</td>
                                        <td>
                                        <?php if ($labarugi9<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi9,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi9,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Oktober</td>
                                        <td>
                                        <?php if ($labarugi10<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi10,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi10,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>November</td>
                                        <td>
                                        <?php if ($labarugi11<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi11,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi11,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Desember</td>
                                        <td>
                                        <?php if ($labarugi12<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($labarugi12,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($labarugi12,0,',','.'); ?></font>
                                       <?php } ?>
                                        </td>
                                     </tr>
                                     <tr>
                                        <th>Total</th>
                                        <th>
                                        <?php if ($total_labarugi<0) { ?>
                                       <font color="red"> <?="Rp. " . number_format($total_labarugi,0,',','.'); ?></font>
                                       <?php }else {?>
                                          <font color="green"> <?="Rp. " . number_format($total_labarugi,0,',','.'); ?></font>
                                       <?php } ?>
                                        </th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                 </tbody>
                             </table>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>



 </div>


 <!-- </div>
        </div>
    </div>

</div>   -->