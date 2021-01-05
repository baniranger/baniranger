<?php session_start();
  include "koneksi.php";
  if(isset($_SESSION['nipp'])){

  include "header.php"; 
  $view = isset($_GET['view']) ? $_GET['view'] : null;
  
  $id_user=$_SESSION["id_user"];
  $nipp=$_SESSION["nipp"];
  $nama=$_SESSION["nama"];
  $jabatan=$_SESSION["jabatan"];
  $no_telp=$_SESSION["no_telp"];
  
  //Hak Akses dibatasi hanya status jabatan ADMIN
  if ($jabatan!='ADMIN') {
    echo "<div class='row'><div class='col-md-12'><div class='card-header'>Anda tidak punya akses pada halaman ADMIN Anda harus login sebagai ADMIN terlebih dahulu <br><a href='logout.php'>Klik disini</a></div></div></div>";
    exit;
  }
  switch($view){
  default:
  ?>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-mini spin">
          RK
        </a>
        <a href="index.php" class="simple-text logo-normal">
         ROKET
        </a>
      </div>
      <!-- List Menu -->
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons design_app"></i>
              Dashboard
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="dashboard.php">Program Pekerjaan</a>
                  <a class="dropdown-item" href="prog_selesai.php">Program Selesai </a>
                </div>
           </li>
          <li>
            <a href="user.php">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Data User</p>
            </a>
          </li>
          <li>
            <a href="rd_masuk.php">
              <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
              <p>Roda Masuk</p>
            </a>
          </li>
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons text_bold"></i>
              Bearing Roda
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="o_bearing.php">Overhaul Bearing</a>
                  <a class="dropdown-item" href="p_bearing.php">Pemasangan Bearing</a>
                </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons text_bold"></i>
              Mesin Dan Bubutan
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="b_as.php">Data As / Bubutan As</a>
                  <a class="dropdown-item" href="b_keping.php">Data Keping / Mesin Karosel</a>
                  <a class="dropdown-item" href="b_pasang.php">Pemasangan Keping</a>
                  <a class="dropdown-item" href="b_onfloor.php">Bubutan Onfloor</a>
                  <a class="dropdown-item" href="underfloar.php">Bubutan Underfloar</a>
                  <a class="dropdown-item" href="rd_afkir.php">Perangkat Roda Afkir</a>
                </div>
           </li>
           <li>
            <a href="rd_selesai.php">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Roda Selesai</p>
            </a>
          </li>
          <li>
            <a href="ceksheet.php">
              <i class="now-ui-icons text_align-center"></i>
              <p>Check Sheet</p>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="now-ui-icons media-1_button-power"></i>
              <p class="text-transform">Keluar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

<div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">INDEX</a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>" class="form-control" placeholder="Cari..." id="KataKunci" name="KataKunci">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>

            <ul class="navbar-nav">  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <p class="dropdown-item"><b class="text-success">Nama </b>: <?php echo $nama; ?></p>
                  <p class="dropdown-item"><b class="text-success">Nipp </b>: <?php echo $nipp; ?></p>
                  <p class="dropdown-item"><b class="text-success">Status </b>: <?php echo $jabatan; ?></p>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="panel-header panel-header-sm">
        
      </div>


      <div class="content">

<!-- Tabel Program -->
          <div class="col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">List Program Pekerjaan P24/P48</h5>
                <h4 class="card-title"> Program Bulan</h4>
              </div>

<!-- isi Tabel Program -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                      NO
                      </th>
                      <th>
                      SeriKereta
                      </th>
                      <th>
                      Bogie
                      </th>
                      <th>
                        depo
                      </th>
                      <th>
                        Program
                      </th>
                      <th>
                        TanggalMasuk
                      </th>
                      <th>
                        Status
                      </th>
                    </thead>
                    <tbody style="text-transform: uppercase;">
              
                    <?php
                        $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
                        $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

                        // Jumlah data per halaman
                        $limit = 5;
                        $limitStart = ($page - 1) * $limit;
                            
                        //kondisi jika parameter pencarian kosong
                        if($kolomKataKunci==""){
                        $SqlQuery = mysqli_query($con, "SELECT * FROM dashboard ORDER BY tipe_bogie");
                        
                        }else{
                        
                        //kondisi jika parameter kolom pencarian diisi
                        $SqlQuery = mysqli_query($con, "SELECT * FROM dashboard WHERE no_kereta LIKE '%$kolomKataKunci%' OR tgl_masuk LIKE '%$kolomKataKunci%' LIMIT ".$limitStart.",".$limit);
                            }    
                            
                            $no = $limitStart + 1;
                            $jumlah=mysqli_num_rows($SqlQuery);
                            $urut=0;
                            while($row =mysqli_fetch_array($SqlQuery))
                                      {
                                        $id=$row["id_dashboard"];
                                        $no_kereta=$row["no_kereta"];
                                        $tipe_bogie=$row["tipe_bogie"];
                                        $depo=$row["depo"];
                                        $program=$row["program"];
                                        $tgl_masuk=$row["tgl_masuk"];
                                        $status=$row["status"];
                       ?>

                                    <tr>
                                      <td>
                                       <?php echo $no++; ?>
                                      </td>
                                      <td>
                                        <a href="index.php?view=lihat&id=<?php echo $row['id_dashboard']?>">
                                        <?php echo "$no_kereta";?>
                                        </a>
                                      </td>
                                      <td>
                                       <?php echo "$tipe_bogie";?>
                                      </td>
                                      <td>
                                        <?php echo "$depo";?>
                                      </td>
                                      <td>
                                        <?php echo "$program";?>
                                      </td>
                                      <td>
                                        <?php echo "$tgl_masuk";?>
                                      </td>
                                      <td>
                                        <?php echo "$status";?>
                                      </td>
                                      
                                    </tr>

                                <?php
                                  }
                                ?>  

                                  </tbody>
                                </table>
                 
<!-- code paggination  --> 
              <div class="text-right">
                  <ul class="pagination">
                    <?php
              // Jika page = 1, maka LinkPrev disable
                      if($page == 1){ 
                    ?>        
              <!-- link Previous Page disable --> 
                      <li class="disabled"><a href="#"><i class="now-ui-icons arrows-1_minimal-left"></i> </a></li>
                    <?php
                      }
                      else{ 
                        $LinkPrev = ($page > 1)? $page - 1 : 1;  

                        if($kolomKataKunci==""){
                        ?>
                          <li><a href="index.php?page=<?php echo $LinkPrev; ?>"><i class="now-ui-icons arrows-1_minimal-left"></i>. </a></li>
                     <?php     
                        }else{
                      ?> 
                        <li><a href="index.php?KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>"><i class="now-ui-icons arrows-1_minimal-left"></i>. </a></li>
                       <?php
                         } 
                      }
                    ?>

                    <?php
              //kondisi jika parameter pencarian kosong
                      if($kolomKataKunci==""){
                        $SqlQuery = mysqli_query($con, "SELECT * FROM dashboard");
                      }else{
                        //kondisi jika parameter kolom pencarian diisi
                        $SqlQuery = mysqli_query($con, "SELECT * FROM dashboard WHERE no_kereta LIKE '%$kolomKataKunci%' OR tgl_masuk LIKE '%$kolomKataKunci%' LIMIT ".$limitStart.",".$limit);
                      }     
                    
                      //Hitung semua jumlah data yang berada pada tabel Sisawa
                      $JumlahData = mysqli_num_rows($SqlQuery);
                      
                      // Hitung jumlah halaman yang tersedia
                      $jumlahPage = ceil($JumlahData / $limit); 
                      
                      // Jumlah link number 
                      $jumlahNumber = 1; 

                      // Untuk awal link number
                      $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
                      
                      // Untuk akhir link number
                      $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
                      
                      for($i = $startNumber; $i <= $endNumber; $i++){
                        $linkActive = ($page == $i)? ' class="active"' : '';

                        if($kolomKataKunci==""){
                    ?>
                        <li<?php echo $linkActive; ?>><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                    <?php
                      }else{
                        ?>
                        <li<?php echo $linkActive; ?>><a href="index.php?KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php
                      }
                    }
                    ?>
                    
                    <!-- link Next Page -->
                    <?php       
                     if($page == $jumlahPage){ 
                    ?>
                      <li class="disabled"><a href="#"> .<i class="now-ui-icons arrows-1_minimal-right"></i> </a></li>
                    <?php
                    }
                    else{
                      $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
                     if($kolomKataKunci==""){
                        ?>
                          <li><a href="index.php?page=<?php echo $linkNext; ?>"> .<i class="now-ui-icons arrows-1_minimal-right"></i> </a></li>
                     <?php     
                        }else{
                      ?> 
                         <li><a href="index.php?KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>"> .<i class="now-ui-icons arrows-1_minimal-right"></i> </a></li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </div>
              </div>
                  </div>
                </div>

<!-- Tabel list Pekerjaan -->
        <div class="row">
          <div class="col-md-3">
            <div class="card  card-chart">
              <div class="card-header ">
                <h5 class="card-category">Pekerjaan</h5>
                <h4 class="card-title"><?php echo date(' M - Y')?></h4>
              </div>

<!-- isi Tabel list Pekerjaan -->
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <?php 

                  $dataprogram = mysqli_query($con, "SELECT * FROM dashboard");
                  $jumlahprogram = mysqli_num_rows($dataprogram);

                  $datatb1014 = mysqli_query($con, "SELECT tipe_bogie FROM dashboard WHERE tipe_bogie='TB 1014'");
                  $jumlahtb1014 = mysqli_num_rows($datatb1014);

                  $datatb398 = mysqli_query($con, "SELECT tipe_bogie FROM dashboard WHERE tipe_bogie='TB 398'");
                  $jumlahtb398 = mysqli_num_rows($datatb398);
                  $datant11 = mysqli_query($con, "SELECT tipe_bogie FROM dashboard WHERE tipe_bogie='NT 11'");
                  $jumlahnt11 = mysqli_num_rows($datant11);
                  $datant60 = mysqli_query($con, "SELECT tipe_bogie FROM dashboard WHERE tipe_bogie='NT 60'");
                  $jumlahnt60 = mysqli_num_rows($datant60);


                  ?>
                  <table class="table">
                    <tbody style="text-transform: uppercase;">
                      <tr class="text-primary">
                        <td>DAFTAR PEKERJAAN</td>
                        </tr>
                        <tr>
                          <td class="text-left">TB 1014 : <b style="color: red;"><?php echo $jumlahtb1014; ?></b></td>
                        </tr>
                        <tr>
                          <td class="text-left">TB 398 : <b style="color: red;"><?php echo $jumlahtb398; ?></b></td>
                       </tr>
                       <tr> 
                          <td class="text-left">NT 11 : <b style="color: red;"><?php echo $jumlahnt11; ?></b></td>
                       </tr>
                       <tr>
                          <td class="text-left">NT 60 : <b style="color: red;"><?php echo $jumlahnt60; ?></b> </td>
                        </tr>
                        <tr>
                          <td class="text-left">jumlah : <b style="color: blue;"><?php echo $jumlahprogram; ?> Kereta</b> </td>
                        </tr>
                      </tr>

                    </tbody>
                  </table>
                
              
              
              <div class="card-footer ">
                <?php

                $waktu = mysqli_query($con, "SELECT * FROM program_selesai ORDER BY id_progselesai DESC LIMIT 1");
                $rowk = mysqli_fetch_assoc($waktu);
                $tanggal = $rowk["tgl_selesai"];

                ?>
                <div class="stats">
                  Diperbaharui <?php echo date("d F Y", strtotime($tanggal)); ?>
                </div>
              </div>
              </div>
              </div>
              
                  </div>
               </div>


<!-- Tabel list roda siap -->
          <div class="col-md-3">
            <div class="card  card-chart">
              <div class="card-header ">
                <h5 class="card-category">Roda Siap</h5>
                <h4 class="card-title"></h4>
              </div>

<!-- isi Tabel list RODA SIAP -->
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <?php 

                  $dataprogram = mysqli_query($con, "SELECT * FROM rd_selesai");
                  $jumlahprogram = mysqli_num_rows($dataprogram);

                  $datatb1014 = mysqli_query($con, "SELECT tipe_bogie FROM rd_selesai WHERE tipe_bogie='TB 1014'");
                  $jumlahtb1014 = mysqli_num_rows($datatb1014);

                  $datatb398 = mysqli_query($con, "SELECT tipe_bogie FROM rd_selesai WHERE tipe_bogie='TB 398'");
                  $jumlahtb398 = mysqli_num_rows($datatb398);
                  $datant11 = mysqli_query($con, "SELECT tipe_bogie FROM rd_selesai WHERE tipe_bogie='NT 11'");
                  $jumlahnt11 = mysqli_num_rows($datant11);
                  $datant60 = mysqli_query($con, "SELECT tipe_bogie FROM rd_selesai WHERE tipe_bogie='NT 60'");
                  $jumlahnt60 = mysqli_num_rows($datant60);
                  $datakosong = mysqli_query($con, "SELECT tipe_bogie FROM rd_selesai WHERE tipe_bogie='' OR tipe_bogie='-'");
                  $jumlahkosong = mysqli_num_rows($datakosong);


                  ?>
                  <table class="table">
                    <tbody style="text-transform: uppercase;">
                      <tr class="text-primary">
                        <td>DAFTAR RODA SIAP</td>
                        </tr>
                        <tr>
                          <td class="text-left">TB 1014 : <b style="color: red;"><?php echo $jumlahtb1014; ?></b></td>
                        </tr>
                        <tr>
                          <td class="text-left">TB 398 : <b style="color: red;"><?php echo $jumlahtb398; ?></b></td>
                       </tr>
                       <tr> 
                          <td class="text-left">NT 11 : <b style="color: red;"><?php echo $jumlahnt11; ?></b></td>
                       </tr>
                       <tr>
                          <td class="text-left">NT 60 : <b style="color: red;"><?php echo $jumlahnt60; ?></b> </td>
                        </tr>
                       <tr>
                          <td class="text-left">TANPA AXLEBOX : <b style="color: red;"><?php echo $jumlahkosong; ?></b> </td>
                        </tr>
                        <tr>
                          <td class="text-left">jumlah : <b style="color: blue;"><?php echo $jumlahprogram; ?> Gandar</b> </td>
                        </tr>
                      </tr>

                    </tbody>
                  </table>
                
              
              
              <div class="card-footer ">
                <?php

                $waktu = mysqli_query($con, "SELECT * FROM rd_selesai ORDER BY id_rdselesai DESC LIMIT 1");
                $rowk = mysqli_fetch_assoc($waktu);
                $tanggal = $rowk["tgl_selesai"];

                ?>
                <div class="stats">
                  Diperbaharui <?php echo date("d F Y", strtotime($tanggal)); ?>
                </div>
              </div>
              </div>
              </div>
              
                  </div>
               </div>

<!-- Tabel list Bearing -->
          <div class="col-md-3">
            <div class="card  card-chart">
              <div class="card-header ">
                <h5 class="card-category">Persediaan Bearing</h5>
                <h4 class="card-title"></h4>
              </div>

<!-- isi Tabel list Bearing -->
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <?php 

                  $databearing = mysqli_query($con, "SELECT * FROM oh_bearing");
                  $jumlahbearing = mysqli_num_rows($databearing);

                  $data119 = mysqli_query($con, "SELECT tipe_as FROM oh_bearing WHERE tipe_as='119'");
                  $jumlah119 = mysqli_num_rows($data119);

                  $data110 = mysqli_query($con, "SELECT tipe_as FROM oh_bearing WHERE tipe_as='110'");
                  $jumlah110 = mysqli_num_rows($data110);
                  $datatimken = mysqli_query($con, "SELECT merek_bearing FROM oh_bearing WHERE merek_bearing='TIMKEN'");
                  $jumlahtimken = mysqli_num_rows($datatimken);
                  $dataskf = mysqli_query($con, "SELECT merek_bearing FROM oh_bearing WHERE merek_bearing='SKF'");
                  $jumlahskf = mysqli_num_rows($dataskf);
                  $dataFAG = mysqli_query($con, "SELECT merek_bearing FROM oh_bearing WHERE merek_bearing='FAG'");
                  $jumlahFAG = mysqli_num_rows($dataFAG);


                  ?>
                  <table class="table">
                    <tbody style="text-transform: uppercase;">
                      <tr class="text-primary">
                        <td>DAFTAR BEARING</td>
                        </tr>
                        <tr>
                          <td class="text-left">TIPE 119 : <b style="color: red;"><?php echo $jumlah119; ?></b></td>
                        </tr>
                        <tr>
                          <td class="text-left">TIPE 110 : <b style="color: red;"><?php echo $jumlah110; ?></b></td>
                       </tr>
                       <tr> 
                          <td class="text-left">TIMKEN : <b style="color: red;"><?php echo $jumlahtimken; ?></b></td>
                       </tr>
                       <tr>
                          <td class="text-left">SKF : <b style="color: red;"><?php echo $jumlahskf; ?></b> </td>
                        </tr>
                       <tr>
                          <td class="text-left">FAG : <b style="color: red;"><?php echo $jumlahFAG; ?></b> </td>
                        </tr>
                        <tr>
                          <td class="text-left">jumlah : <b style="color: blue;"><?php echo $jumlahbearing; ?> Bearing</b> </td>
                        </tr>
                      </tr>

                    </tbody>
                  </table>
                
              
              
              <div class="card-footer ">
                <?php

                $waktu = mysqli_query($con, "SELECT * FROM oh_bearing ORDER BY id_bearing DESC LIMIT 1");
                $rowk = mysqli_fetch_assoc($waktu);
                $tanggal = $rowk["tgl_oh"];

                ?>
                <div class="stats">
                  Diperbaharui <?php echo date("d F Y", strtotime($tanggal)); ?>
                </div>
              </div>
              </div>
              </div>
              
                  </div>
               </div>


<!-- Tabel lis AS RODA -->
          <div class="col-md-3">
            <div class="card  card-chart">
              <div class="card-header ">
                <h5 class="card-category">Persediaan AS Roda</h5>
                <h4 class="card-title"></h4>
              </div>

<!-- isi Tabel LIST AS RODA -->
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <?php 

                  $dataas = mysqli_query($con, "SELECT * FROM b_as");
                  $jumlahas = mysqli_num_rows($dataas);

                  $data119 = mysqli_query($con, "SELECT tipe_as FROM b_as WHERE tipe_as='119'");
                  $jumlah119 = mysqli_num_rows($data119);

                  $data119m = mysqli_query($con, "SELECT tipe_as FROM b_as WHERE tipe_as='119 MODIF'");
                  $jumlah119m = mysqli_num_rows($data119m);
                  $data110 = mysqli_query($con, "SELECT tipe_as FROM b_as WHERE tipe_as='110'");
                  $jumlah110 = mysqli_num_rows($data110);
                  $databaru = mysqli_query($con, "SELECT kon_as FROM b_as WHERE kon_as='BARU'");
                  $jumlahbaru = mysqli_num_rows($databaru);
                  $datarekon = mysqli_query($con, "SELECT kon_as FROM b_as WHERE kon_as='REKONDISI'");
                  $jumlahrekon = mysqli_num_rows($datarekon);


                  ?>
                  <table class="table">
                    <tbody style="text-transform: uppercase;">
                      <tr class="text-primary">
                        <td>DAFTAR AS RODA</td>
                        </tr>
                        <tr>
                          <td class="text-left">TIPE 119 : <b style="color: red;"><?php echo $jumlah119; ?></b></td>
                        </tr>
                        <tr>
                          <td class="text-left">TIPE 119 MODIF : <b style="color: red;"><?php echo $jumlah119m; ?></b></td>
                       </tr>
                       <tr> 
                          <td class="text-left">TIPE 110 : <b style="color: red;"><?php echo $jumlah110; ?></b></td>
                       </tr>
                       <tr>
                          <td class="text-left">AS BARU : <b style="color: red;"><?php echo $jumlahbaru; ?></b> </td>
                        </tr>

                       <tr>
                          <td class="text-left">AS REKONDISI : <b style="color: red;"><?php echo $jumlahrekon; ?></b> </td>
                        </tr>
                        <tr>
                          <td class="text-left">jumlah : <b style="color: blue;"><?php echo $jumlahas; ?> AS</b> </td>
                        </tr>
                      </tr>

                    </tbody>
                  </table>
                
              
              
              <div class="card-footer ">
                <?php

                $waktuas = mysqli_query($con, "SELECT * FROM b_as ORDER BY id_b_as DESC LIMIT 1");
                $rowas = mysqli_fetch_assoc($waktuas);
                $tanggalas = $rowas["tgl_bubut"];

                ?>
                <div class="stats">
                  Diperbaharui <?php echo date("d F Y", strtotime($tanggalas)); ?>
                </div>
              </div>
              </div>
                  </div></div></div>
                      </div>
                    </div>
                  </div>
               </div>
              </div>


<!-- Case lihat data dasboard -->
      <?php
        break;
        case "lihat":
        $id=$_GET['id'];
        $query=mysqli_query($con,"SELECT * FROM dashboard WHERE id_dashboard='$id'");
        $row=mysqli_fetch_array($query);
      ?>  

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-mini spin">
          RK
        </a>
        <a href="index.php" class="simple-text logo-normal">
         ROKET
        </a>
      </div>
      <!-- List Menu -->
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons design_app"></i>
              Dashboard
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="dashboard.php">Program Pekerjaan</a>
                  <a class="dropdown-item" href="prog_selesai.php">Program Selesai </a>
                </div>
           </li>
          <li>
            <a href="user.php">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Data User</p>
            </a>
          </li>
          <li>
            <a href="rd_masuk.php">
              <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
              <p>Roda Masuk</p>
            </a>
          </li>
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons text_bold"></i>
              Bearing Roda
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="o_bearing.php">Overhaul Bearing</a>
                  <a class="dropdown-item" href="p_bearing.php">Pemasangan Bearing</a>
                </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons text_bold"></i>
              Mesin Dan Bubutan
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="b_as.php">Data As / Bubutan As</a>
                  <a class="dropdown-item" href="b_keping.php">Data Keping / Mesin Karosel</a>
                  <a class="dropdown-item" href="b_pasang.php">Pemasangan Keping</a>
                  <a class="dropdown-item" href="b_onfloor.php">Bubutan Onfloor</a>
                  <a class="dropdown-item" href="underfloar.php">Bubutan Underfloar</a>
                  <a class="dropdown-item" href="rd_afkir.php">Perangkat Roda Afkir</a>
                </div>
           </li>
           <li>
            <a href="rd_selesai.php">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Roda Selesai</p>
            </a>
          </li>
          <li>
            <a href="ceksheet.php">
              <i class="now-ui-icons text_align-center"></i>
              <p>Check Sheet</p>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="now-ui-icons media-1_button-power"></i>
              <p class="text-transform">Keluar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

<div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">INDEX</a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            

            <ul class="navbar-nav">  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">  
                  <p class="dropdown-item"><b class="text-success">Nama </b>: <?php echo $nama; ?></p>
                  <p class="dropdown-item"><b class="text-success">Nipp </b>: <?php echo $nipp; ?></p>
                  <p class="dropdown-item"><b class="text-success">Status </b>: <?php echo $jabatan; ?></p>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="panel-header panel-header-sm">
        
      </div>


      <div class="content">

<!-- Tabel Program -->
          <div class="col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">List Program Pekerjaan P24/P48</h5>
                <h4 class="card-title"> Program Bulan</h4>
                <div class="dropdown">
                  <a class="btn btn-round btn-outline-default btn-simple btn-icon no-caret" href="index.php">
                      <i class="now-ui-icons arrows-1_minimal-left"></i>
                  </a>
                </div>
              </div>
                      
<!-- ISI Tabel Program -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4 pr-1">
                            <div class="form-group">
                              <label>TANGGAL MASUK</label>
                              <p class="form-control" style="color: #000;"><?php echo $row['tgl_masuk']?></p>
                            </div>
                          </div>
                          
                        </div>
                          <div class="row">
                          <div class="col-md-4 pr-1">
                            <div class="form-group">
                              <label>SERI KERETA</label>
                              <p class="form-control" style="color: #000;"><?php echo $row['no_kereta']?></p>
                            </div>
                          </div>
                          <div class="col-md-3 pr-1">
                              <div class="form-group">
                                <label>BOGIE</label>
                                    <p class="form-control" style="color: #000;"><?php echo $row['tipe_bogie']?></p>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 pr-1">
                            <div class="form-group">
                              <label>DEPO</label>
                              <p class="form-control" style="color: #000;"><?php echo $row['depo']?></p>
                            </div>
                          </div>
                          <div class="col-md-4 pr-1">
                            <div class="form-group">
                              <label>PROGRAM</label>
                              <p class="form-control" style="color: #000;"><?php echo $row['program']?></p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-4 pr-1">
                            <div class="form-group">
                              <label>STATUS PEKERJAAN</label>
                              <p class="form-control" style="color: #000;"><?php echo $row['status'];?></p>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                              <label>KETERANGAN</label>
                              <p class="form-control" style="color: #000;"><?php echo $row['keterangan']?></p>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>


<?php
  break;
  }

  }else{
  ?>
   <script language="javascript">document.location.href='login.php'</script>
  <?php
  }
  include "footer.php"; ?>