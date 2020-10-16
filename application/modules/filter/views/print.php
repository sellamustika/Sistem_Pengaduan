<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>Laporan</title>
	  <link rel="stylesheet" href="">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<title>Cetak PDF</title>
	<style>
		.line-tittle {
			border: 0;
	      border-style: inset;
	      border-top: 1px solid #000;
		}
		
	</style>
</head>
<body>
	<img src="assets/img/iconbpjs.png" style="position: absolute; width: 100px; height: auto;">
 

  <hr class="line-title"> 
  <p align="center">
    BPJS Kesehatan Kota Semarang  <br>
    Jl. Sultan Agung 109<br>
    email : multindoautofinance.co.id
    
  </p>

	

  <hr class="line-title"> 
  <p align="center">
    LAPORAN DATA USER <br>
    
  </p>

    <b><?php echo $ket; ?></b><br /><br />
    
	<table border="1" cellpadding="3">
	<tr>
		
		<th>Nama</th>
		
		<th>Created</th>
    
	</tr>

    <?php
    if( ! empty($user)){
    	$no = 1;
    	foreach($user as $data){
            $date_create = date('d-m-Y', strtotime($data->date_created));

    		echo "<tr>";
           
            echo "<td>".$data->name."</td>";
           
           
            echo "<td>".$data->date_created."</td>";
          
            echo "</tr>";
            $no++;
    	}
    }
    ?>
	</table>
</body>
</html>
