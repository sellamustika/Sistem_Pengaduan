<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
  <img src="assets/img/logo.jpg" style="position: absolute; width: 100px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          PT. Multindo Auto Finance
          <br>DEPARTMENT RMC (Risk Management & Compliance)
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <p align="center">
    LAPORAN DATA APLIKASI TOLAK BATAL <br>
    
  </p>
  <table class="table table-bordered">
    <tr>
      <th>#</th>
      <th>PID</th>
      <th>Nama</th>
      <th>Cabang</th>
      <th>Status</th>
      <th>Tanggal Aplikasi</th>
      <th>Tanggal Terima</th>
      

    </tr>

     <?php $i = 1; ?>
    <?php foreach ($customer as $list): ?> 
    
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $list->pid ?></td>
        <td><?php echo $list->nama ?></td>
        <td><?php echo $list->id_cabang ?></td>
        <td><?php echo $list->status ?></td>
        <td><?php echo $list->tgl_aplikasi ?></td>
        <td><?php echo $list->tgl_terima ?></td>
       
      </tr>
      <?php $i++; ?>
    <?php endforeach ?>
    
                          
                          

 
  </table>


</body>
</html>