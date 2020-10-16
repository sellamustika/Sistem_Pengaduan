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
  <title>Beranda</title>
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
   <!-- disini -->
    <!-- Header -->
    <!-- Header -->
    
    <!-- Page content -->
    <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php $this->load->view("beranda/_partials/header.php")?>
    <!-- Header -->
    <!-- Header -->
 
    <div class="container-fluid mt-2">
    <!-- Page content -->
    <h1>Change Password</h1>
  </div>
  <form action="<?php echo base_url('changePassword/add')?>" method="POST" enctype="multipart/form-data">
    <div class="container-fluid mt-2">
      <div class="row">
        
          <div class="card card-profile">
           
           
           
             <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Informasi</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                  <!-- Input groups with icon -->
                  <input class="form-control" type="hidden" name="id_user" value="<?= $user['name'];?>" readonly><br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="current_password">Current Password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" id ="current_password" name="current_password" class="form-control" placeholder="Password">
                          <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="new_password1">New Password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" id ="new_password1" name="new_password1" class="form-control" placeholder="Password">
                          <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>');?>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="new_password2">Confirm Password</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" id="new_password2" name="new_password2" class="form-control" placeholder="New Password">
                        </div>
                      </div>
                    </div>

                    <div class= "form-group">
                        <button type= "submit" class="btn btn-primary">Change Password</button>
                      </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Progress track -->
         
        
        <div class="col-xl-8 order-xl-1">
          <div class="row">
           
            
          </div>
          <div class="card">
            
            
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </form>
  </div>
    
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php $this->load->view("dashboard/_partials/js.php")?>
  
</body>

</html>