<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Buat Data</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets/img/brand/favicon.png" type="image/png'); ?>">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'); ?>">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css" type="text/css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css'); ?>">
  <!-- Page plugins -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/quill/dist/quill.core.css'); ?>">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css?v=1.1.0" type="text/css'); ?>">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

<style type="text/css">

#preview-container {
    margin: 5px auto;
    width: 500px;
}


#upload-dialog {
    padding: 5px;
    border: 1px solid #336699;
    background-color: white;
    color: #336699;
    background: none;
    font-size: inherit;
    font-family: inherit;
    outline: none;
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 2px;
}

#pdf-file {
    display: none;
}

#pdf-loader {
  display: none;
  vertical-align: middle;
  color: #cccccc;
    font-size: 12px;
}

.pdf-preview {
    display: none;
    vertical-align: middle;
    border: 1px solid rgba(0,0,0,0.2);
    border-radius: 2px;
}

#pdf-name {
    display: none;
    vertical-align: middle;
    color: #336699;
    margin: 0 15px;
    max-width: 200px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

#upload-button {
    padding: 5px;
    border: 1px solid #336699;
    background-color: #336699;
    color: white;
    font-size: inherit;
    font-family: inherit;
    outline: none;
    display: none;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 2px;
}

#cancel-pdf {
    display: none;
    vertical-align: middle;
    padding: 0px;
    border: none;
    color: #777777;
    background-color: white;
    font-size: inherit;
    font-family: inherit;
    outline: none;
    vertical-align: middle;
    cursor: pointer;
    margin: 0 0 0 15px;
}

</style>

</head>

<body>
<?php $this->load->view("dashboard/_partials/sidebar.php")?>
  <div class="main-content" id="panel">
 
  <?php if($this->session->flashdata('success')): ?>
    <script type="text/javascript">
      swal('Good', 'Insert Data Sucessfuly!', 'success');
    </script>
  <?php elseif($this->session->flashdata('delete')): ?>
    <script type="text/javascript">
      swal('Ohh', 'Your data was out', 'warning');
  </script>
  <?php endif; ?>

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Form elements</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
  <form method="get" action="" enctype="multipart/form-data">
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Data USER</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                 
                  <!-- Input groups with icon -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Filter Berdasarkan</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                          </div>
                          <select class= "form-control" name="filter" id="filter">
                                <option value="">Pilih</option>
                                <option value="1">Per Tanggal</option>
                                <option value="2">Per Bulan</option>
                                <option value="3">Per Tahun</option>
                                
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div id="form-tanggal">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Tanggal</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="date" name="tanggal" class="form-control form-control-inline input-medium default-date-picker" />
                        </div>
                      </div>
                    </div>
                    </div>


                
                    <div id="form-bulan">
                    <div class="col-md-12">
                      <div class="form-group">
                        
                         <label class="form-control-label" for="exampleDatepicker">Bulan</label>
                         <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                          </div>
                          <select class="form-control" id = "bulan" name="bulan">
                            <option value="">Pilih</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                          </select>     
                        </div>
                      </div>
                    </div>
                  </div>

                   <div id="form-tahun">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Tahun</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                            <select class="form-control" id = "tahun" name="tahun">
                            <option value="">Pilih</option>
                                <?php
                                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                                }
                                ?>
                          </select>    
                        </div>
                      </div>
                    </div>
                    </div>

                     
                      
                      <div class="card-body">
                        <a href="<?php echo base_url('form')?>"><button class="btn btn-secondary" type="button">Batal</button></a>
                        <button class="btn btn-icon btn-primary" type="submit">
                          <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                          <span class="btn-inner--text">Tampilkan</span>
                        </button>
                      </div>
                    
                </form>

                  
              </div>
            </div>

      </div>



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
                  <h3 class="mb-0">Manage Data</h3><br>
                    

                   
                    
                </div>

                <div class="table-responsive py-4" >
                  <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                   
                    </thead>
                    <tbody>
                       <b><?php echo $ket; ?></b><br /><br />
    <a href="<?php echo $url_cetak; ?>">CETAK PDF</a><br /><br />

    <table border="1" cellpadding="8">
    <tr>
        <th>No</th>
       
        <th>Nama</th>
        
        
        <th>Created/</th>
       
    </tr>
    <?php
    if( ! empty($transaksi)){
        $no = 1;
        foreach($transaksi as $data){
            $date_created = date('d-m-Y', strtotime($data->date_created));
            
            echo "<tr>";
            echo "<td>".$no."</td>";
           
            echo "<td>".$data->name."</td>";
           
            echo "<td>".$date_created."</td>";
           
            echo "</tr>";
            $no++;
        }
    }
    ?>

                </tbody>
                  </table>
                </div>
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
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url('assets/vendor/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/js-cookie/js.cookie.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js'); ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url('assets/vendor/select2/dist/js/select2.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/nouislider/distribute/nouislider.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/dist/quill.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/dropzone/dist/min/dropzone.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'); ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url('assets/js/argon.js?v=1.1.0'); ?>"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?php echo base_url('assets/js/demo.min.js'); ?>"></script>

  <script src="<?php echo base_url('assets/js/pdf.js'); ?>"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?php echo base_url('assets/js/pdf.worker.js'); ?>"></script>

 <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>

</body>

</html>