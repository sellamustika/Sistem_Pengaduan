<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 --> -->
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
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')?>">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css?v=1.1.0')?>" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
     
</head>
</head>

<body>
  <!-- Sidenav -->
   <?php $this->load->view("dashboard/_partials/sidebar.php")?>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <?php $this->load->view("dashboard/_partials/topnav.php")?>

   <?php if($this->session->flashdata('success')): ?>
          <script type="text/javascript">
            swal('Good', 'Insert Data Sucessfuly!', 'success');
          </script>
        <?php elseif($this->session->flashdata('delete')): ?>
          <script type="text/javascript">
            swal('Deleted', 'Your data was deleted', 'warning');
          </script>
          <?php elseif($this->session->flashdata('error')): ?>
          <script type="text/javascript">
            swal('Info', 'Your data is EMPTY', 'info');
          </script>
        
        <?php endif; ?>
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
                  <li class="breadcrumb-item"><a href="#">Form</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
         
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        
        <div class="col-xl-12">
         
          <!-- <div class="card-deck"> -->
           
            <!-- Username card -->
            <div class="row mt-5">
        <div class="col-xl-12 mb-12 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h2>Portal Berita</h2><hr/>
                  <a href="<?php echo base_url().'berita/lists'?>"><button class="btn btn-sm btn-success">BERITA</button></a>
                            
                </div>

            </div>

             
                <form action="<?php echo base_url().'berita/simpan_post'?>" method="post" enctype="multipart/form-data">
                <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
                <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
                <input type="file" name="filefoto" required><br>
                <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
            </form>

              </div>
            </div>
        </div>
      </div>
       




        
      
      <!-- Footer -->
      <?php $this->load->view("dashboard/_partials/footer.php")?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php $this->load->view("form/_partials/modal.php")?>
  <?php $this->load->view("dashboard/_partials/js.php")?>

  <script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>

 <script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>

        
      </div>
  
</body>

</html>

