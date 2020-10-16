<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Semar BPJS</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets/img/brand/favicon.png" type="image/png')?>">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css" type="text/css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')?>" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css?v=1.1.0')?>" type="text/css">
</head>

<body>
  <!-- Sidenav -->
   <?php $this->load->view("dashboard/_partials/sidebar.php")?>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <?php $this->load->view("dashboard/_partials/topnav.php")?>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-gradient-success pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">


          <!-- Card stats -->
          <div class="row">

              <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                     <h5 class="card-title text-uppercase text-muted mb-0">Jumlah User</h5>
                       <span class="h2 font-weight-bold mb-0"><?php echo $pengguna; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <a href="<?php echo base_url('form')?>"><i class="ni ni-active-40 text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                   <!--  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span> -->
                  </p>
                </div>
              </div>
            </div>



                <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                     <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Pengaduan</h5>
                       <span class="h2 font-weight-bold mb-0"><?php echo $deskripsi; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <a href="<?php echo base_url('form')?>"><i class="ni ni-active-40 text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                   <!--  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span> -->
                  </p>
                </div>
              </div>
            </div>

             <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                     <h5 class="card-title text-uppercase text-muted mb-0">Tanggapan</h5>
                       <span class="h2 font-weight-bold mb-0"><?php echo $tanggapan; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <a href="<?php echo base_url('form')?>"><i class="ni ni-active-40 text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                   <!--  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span> -->
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                     <h5 class="card-title text-uppercase text-muted mb-0">Aspirasi</h5>
                       <span class="h2 font-weight-bold mb-0"><?php echo $aspirasi; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <a href="<?php echo base_url('form')?>"><i class="ni ni-active-40 text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                   <!--  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span> -->
                  </p>
                </div>
              </div>
            </div>

           







           <!--  <div class="col-xl-3 col-md-6">
              <div class="card card-stats"> -->
                <!-- Card body -->
               <!--  <div class="card-body">
                  <div class="row">
                    <div class="col">
                     <h5 class="card-title text-uppercase text-muted mb-0">Pengaduan</h5>
                       <span class="h2 font-weight-bold mb-0"><?php echo $jenis; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <a href="<?php echo base_url('form')?>"><i class="ni ni-active-40 text-white"></i></a>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm"> -->
                   <!--  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span> -->
                  <!-- </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats"> -->
                <!-- Card body -->
               <!--  <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Aspirasi</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $aspirasi; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow href= "">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm"> -->
                    <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span> -->
           <!--        </p>
                </div>
              </div>
            </div>
 -->

              <!--  <div class="col-xl-3 col-md-6">
              <div class="card card-stats"> -->
                <!-- Card body -->
              <!--   <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Belum ada Tangapan</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $tanggapan; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow href= "">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm"> -->
                    <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span> -->
           <!--        </p>
                </div>
              </div>
            </div>
 -->


          
        </div>





      <div class="row">
        
        <div class="col-xl-4">
         
          <!-- <div class="card-deck"> -->
           
            <!-- Username card -->
            <div class="card bg-gradient-warning">
              <!-- Card body -->
              <div class="card-body">
                <div class="row justify-content-between align-items-center">
                  <div class="col">
                   <div class="h1 text-white">SELAMAT DATANG !</div>
                  </div>
                  <div class="col-auto">
                    <span class="badge badge-lg badge-success">Active</span>
                  </div>
                </div>
                <div class="my-4">
                  <span class="h6 surtitle text-light">
                    Username
                  </span>
                  <div class="h1 text-white"><?= $user['name'];?></div>
                </div>
                <div class="row">
                  <div class="col">
                    <span class="h6 surtitle text-light">Name</span>
                    <span class="d-block h3 text-white"><?= $user['name'];?></span>
                  </div>
                </div>
              </div>
            </div>
          <!-- </div> -->
        </div>
      </div>
      
      <!-- Footer -->
      <?php $this->load->view("dashboard/_partials/footer.php")?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php $this->load->view("dashboard/_partials/js.php")?>
  
</body>

</html>