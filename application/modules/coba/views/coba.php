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
  <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
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
    <div class="header bg-primary pb-6">
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
                  <h3 class="mb-0">Manage Data</h3><br>
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">
                    <i class= "fa fa-plus"></i>Tambah Data</button>
                </div>

                <div class="table-responsive py-4">
                  <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">PID</th>
                        <th scope="col">Cabang</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Aplikasi</th>
                        <th scope="col">Tanggal Terima</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php foreach ($customer as $data): ?>
                          <tr>
                    
                            <td>
                            <?php echo $data->id ?>
                            </td>
                          <td>
                            <?php echo $data->pid ?>
                            </td>
                          <td>
                            <?php echo $data->id_cabang ?>
                            </td>
                          <td>
                            <?php echo $data->nama ?>
                            </td>
                           <td>

                            <?php

                            $st = $data->status;

                            if ($st == 'Pending') {
                             echo "<span class='badge badge-info'>Pending</span>";
                            }elseif ($st == 'Tolak') {
                              echo "<span class='badge badge-warning'>Tolak</span>";
                            }elseif ($st == 'Batal'){
                              echo "<span class='badge badge-danger'>Batal</span>";
                            }else {
                              echo "<span class='badge badge-secondary'>Sistem Tidak Input</span>";
                            }

                            ?>

                          </td>
                          <td>
                            <?php echo $data->tgl_aplikasi ?>
                            </td>
                          <td>
                            <?php echo $data->tgl_terima ?>
                            </td>
                          <td>

                          <?php if (empty($data->an)){ ?>
                            <span class="badge badge-pill badge-secondary">File AN Tidak Ada</span>
                          <?php } else { ?>
                            <span class="badge badge-pill badge-success">File AN Tersedia </span>
                          <?php } ?>

                          <?php if (empty($data->pj)){ ?>
                            <span class="badge badge-pill badge-secondary">File PJ Tidak Ada</span>
                          <?php } else { ?>
                            <span class="badge badge-pill badge-danger">File PJ Tersedia </span>
                          <?php } ?>

                          <?php if (empty($data->sv)){ ?>
                            <span class="badge badge-pill badge-secondary">File SV Tidak Ada</span>
                          <?php } else { ?>
                            <span class="badge badge-pill badge-warning">File SV Tersedia </span>
                          <?php } ?>
                            
                          </td>
                   
                   
                   
                          <td width="300">
                              <div class="row row-example">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-notification<?php echo $data->id ?>"><i class="fas fa-download"></i></button>

                                <div class="col">
                                  <button type = "button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#modal-update<?php echo $data->id ?>"><i class="fas fa-edit"></i></button>

                                </div>
                                <div class="col">
                                  <button type = "button" class="btn btn-block btn-danger mb-2"  data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                  
                                </div>
                                <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                                  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                    <div class="modal-content bg-gradient-danger">
                              
                                <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-notification">Detail</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
            
                                <div class="modal-body">
              
                                <div class="py-3 text-center">
                                  <button type="button" class="btn btn-success">AN</button>
                                  <button type="button" class="btn btn-info">PJ</button>
                                  <button type="button" class="btn btn-warning">SV</button>
                                    <!-- <i class="ni ni-bell-55 ni-3x"></i> -->
                                    
                                </div>
                                
                              </div>
                            
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-white">Ok, Got it</button>
                                  <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
                              </div>
                              
                                    </div>
                                  </div>
                                </div>
                              </div>
                      <!-- <a href="#" class="btn btn-small"><i class="far fa-edit"></i> Edit</a>
                      <a href="#" class="btn btn-small text-danger"><i class="far fa-trash"></i> Hapus</a> -->
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
            </div>
          <!-- </div> -->
        
      
      <!-- Footer -->
      <?php $this->load->view("dashboard/_partials/footer.php")?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php $this->load->view("dashboard/_partials/js.php")?>

  <!-- Modal Download -->

  <?php foreach ($customer as $data): ?>
<div class="col-md-4">
  <div class="modal fade" id="modal-notification<?php echo $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-info modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-info">
              
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Download Your Data</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
                
            <div class="modal-body">
                  
                <div class="py-3 text-center">
                    <i class="ni ni-cloud-download-95 ni-3x"></i>
                    <h1 class="heading mt-4">PID : <?php echo $data->pid ?></h1>
                    <p class="heading mt-4">Nama : <?php echo $data->nama ?></p>
                    <p>Download File AN / PJ / SV </p>
                    <p>

                        <?php 

                          if (empty($data->an)){

                        ?>                          
                          <button disabled class="btn btn-icon btn-block btn-3 btn-secondary mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Tidak Ada File AN</span>
                              
                          </button>

                          <?php } else { ?>

                          <a href="<?php echo base_url('/assets/dokumen/an/'.$data->an)?>" target=_blank>
                          <button class="btn btn-icon btn-block btn-3 btn-success mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Download File AN</span>
                              
                          </button></a>
                      <?php } ?>

                      <?php 

                          if (empty($data->pj)){

                        ?>                          
                          <button disabled class="btn btn-icon btn-block btn-3 btn-secondary mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Tidak Ada File PJ</span>
                              
                          </button>

                          <?php } else { ?>

                          <a href="<?php echo base_url('/assets/dokumen/an/'.$data->pj)?>" target=_blank>
                          <button class="btn btn-icon btn-block btn-3 btn-danger mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Download File PJ</span>
                              
                          </button></a>
                      <?php } ?>

                      <?php 

                          if (empty($data->sv)){

                        ?>                          
                          <button disabled class="btn btn-icon btn-block btn-3 btn-secondary mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Tidak Ada File SV</span>
                              
                          </button>

                          <?php } else { ?>

                          <a href="<?php echo base_url('/assets/dokumen/an/'.$data->sv)?>" target=_blank>
                          <button class="btn btn-icon btn-block btn-3 btn-warning mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Download File SV</span>
                              
                          </button></a>
                      <?php } ?>

                    </p>
                </div>
                    
            </div>
                
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-white">Ok, Got it</button> -->
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
            </div>
                
        </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Modal Update -->

<?php foreach ($customer as $data): ?>
<div class="col-md-6">
  <div class="modal fade" id="modal-update<?php echo $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-update"       aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
              
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Download Your Data</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
                
            <div class="modal-body">
                  
                <div class="py-3">
                    <form action="<?php echo base_url('form/edit')?>" method="POST" enctype="multipart/form-data">

             <div class="form-group">
             <input class="form-control <?php echo form_error('id') ? 'is-invalid':'' ?>"
                 type="hidden" name="id" value = "<?php echo $data->id ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('id') ?>
                </div>
             </div>
            
              
              <div class ="form-group row">
                <label class="col-sm-3 control-label">PID</label>
                <div class="col-sm-4">
                  <input type="text" name="pid" class="form-control <?php echo form_error('pid') ? 'is-invalid':'' ?>" 
                  value = "<?php echo $data->pid ?>"/>
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                   value = "<?php echo $data->nama ?>"/>
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Cabang</label>
                <div class="col-sm-6">
                  
                 <input type="text" name="id_cabang" class="form-control <?php echo form_error('id_cabang') ? 'is-invalid':'' ?>"
                   value = "<?php echo $data->id_cabang ?>"/>
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-8">

                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="optionsRadios2" value="tolak" <?php if($data->status == 'Tolak') {
                        echo "checked";
                      } ?>>
                      Tolak
                    </label> 
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="batal" <?php if($data->status  == 'Batal') {
                        echo "checked";
                      } ?>>
                      Batal
                    </label>
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="pending" <?php if($data->status  == 'Pending') {
                        echo "checked";
                      } ?>>

                      Pending
                    </label> 
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="tdkinput" <?php if($data->status  == 'tdkinput') {
                        echo "checked";
                      } ?>>
                      Sistem Tidak Input
                    </label> 
                  </div>
                  

                  <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>               
              </div>
               <div class ="form-group row">
                <label class="col-sm-3 control-label">Tanggal Terima</label>
                <div class="col-sm-3">
                  <!-- <div class="col-md-6 col-xs-11"> -->
                    <input name = "tgl_terima" class="form-control form-control-inline input-medium default-date-picker" 
                    <?php echo form_error('tgl_terima') ? 'is-invalid':'' ?>" size="16" type="date" 
                    value="<?php echo $data->tgl_terima ?>"/>
                    <!-- <span class="help-block">Select date</span> -->
                  <!-- </div> -->
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>
               </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Tanggal Aplikasi</label>
                <div class="col-sm-3">
                  <!-- <div class="col-md-6 col-xs-11"> -->
                    <input name ="tgl_aplikasi" class="form-control form-control-inline input-medium default-date-picker" 
                    <?php echo form_error('tgl_aplikasi') ? 'is-invalid':'' ?> size="16" type="date" 
                    value="<?php echo $data->tgl_aplikasi ?>"/>
                    <!-- <span class="help-block">Select date</span> -->
                  <!-- </div> -->
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>
              </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Analisa</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" name="" value="<?php echo $data->an ?>" readonly><br>
                    <input type="file" id="an" name="an" <?php echo form_error('an') ? 'is-invalid':'' ?> 
                    class="default"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Survey</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" name="" value="<?php echo $data->sv ?>" readonly><br>
                     <input type="file" name="sv" name="sv" <?php echo form_error('sv') ? 'is-invalid':'' ?> 
                     class="default" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Perjanjian</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" name="" value="<?php echo $data->pj ?>" readonly><br>
                     <input type="file" name="pj" name="pj" <?php echo form_error('sv') ? 'is-invalid':'' ?> 
                      class="default" />
                  </div>
                </div>
              </div>
              <div class="modal-footer">              
              <button type="button" class="btn btn-theme" data-dismiss="modal">Batal</button>
              <button class="btn btn-default" type="submit">Save</button>
              </div>
           
            </div>
          </form>
        </div>
       </div>
                
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-white">Ok, Got it</button> -->
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
            </div>
                
        </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Modal Tambah -->

   
      <div class="modal fade" id = "tambah" tabindex="-1" role ="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-tittle">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              

          </div>
          <div class="card-body">
          <form action="<?php echo base_url('user/add')?>" method="POST" enctype="multipart/form-data">
            
              
              <div class ="form-group row">
                <label class="col-sm-3 control-label">PID</label>
                <div class="col-sm-4">
                  <input type="text" name="pid" class="form-control" placeholder="PID">
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Cabang</label>
                <div class="col-sm-6">
                  
                  <select class = "form-control" data-toggle="select" name="id_cabang">
                    <?php foreach ($cabang as $cabang): ?>
                              <option><?php echo $cabang->cabang?></option>
                            <?php endforeach; ?>
                  </select>
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-8">

                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="optionsRadios2" value="tolak">
                      Tolak
                    </label> 
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="batal">
                      Batal
                    </label>
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="pending">
                      Pending
                    </label> 
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="tdkinput">
                      Sistem Tidak Input
                    </label> 
                  </div>
                  

                  <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>               
              </div>
               <div class ="form-group row">
                <label class="col-sm-3 control-label">Tanggal Terima</label>
                <div class="col-sm-3">
                  <!-- <div class="col-md-6 col-xs-11"> -->
                    <input name = "tgl_terima" class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="">
                    <!-- <span class="help-block">Select date</span> -->
                  <!-- </div> -->
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>

              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Tanggal Aplikasi</label>
                <div class="col-sm-6">
                  <!-- <div class="col-md-6 col-xs-11"> -->
                    <input name ="tgl_aplikasi" class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="">
                    <!-- <span class="help-block">Select date</span> -->
                  <!-- </div> -->
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>

              </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Analisa</label>
                  <div class="col-md-6">
                    <input type="file" id="an" name="an" class="default" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Survey</label>
                  <div class="col-md-4">
                     <input type="file" name="sv" name="sv" class="default" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Perjanjian</label>
                  <div class="col-md-4">
                     <input type="file" name="pj" name="pj" class="default" />
                  </div>
                </div>

              </div>
              <div class="modal-footer">              
              <button type="button" class="btn btn-theme" data-dismiss="modal">Batal</button>
              <button class="btn btn-default" type="submit">Save</button>
            </div>



            
            </div>

            
          </form>
        </div>

        
      </div>
  
</body>

</html>