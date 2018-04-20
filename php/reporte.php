<?php

 include("conexion.php");


$sql ="SELECT area.idarea,SUM(if(area.idarea=2,1,0))as a1,SUM(if(area.idarea=3,1,0))as a2,SUM(if(area.idarea=4,1,0))as a3,SUM(if(area.idarea=5,1,0))as a4,SUM(if(area.idarea=6,1,0))as a5 FROM `registro_sam`,area,linea where linea.idlinea=registro_sam.idlinea and linea.idarea=area.idarea and estado=2 and fecha_cierre > fecha_compromiso";
//en evaluadas fecha vencida ";

$resultl= mysqli_query($con,$sql)or die(mysqli_error());
  
 
  while($row=mysqli_fetch_array($resultl)) {
  echo $v1 = $row['a1'];
  echo $v2 = $row['a2'];
  echo $v3 = $row['a3'];
  echo $v4 = $row['a4'];
  echo $v5 = $row['a5'];
  }

  $sql ="SELECT area.idarea,SUM(if(area.idarea=2,1,0))as a1,SUM(if(area.idarea=3,1,0))as a2,SUM(if(area.idarea=4,1,0))as a3,SUM(if(area.idarea=5,1,0))as a4,SUM(if(area.idarea=6,1,0))as a5 FROM `registro_sam`,area,linea where linea.idlinea=registro_sam.idlinea and linea.idarea=area.idarea and estado =1  ";
//en evaluadas fecha vencida ";

$resultl= mysqli_query($con,$sql)or die(mysqli_error());
  
 
  while($row=mysqli_fetch_array($resultl)) {
  echo $e1 = $row['a1'];
  echo $e2 = $row['a2'];
  echo $e3 = $row['a3'];
  echo $e4 = $row['a4'];
  echo $e5 = $row['a5'];
  }

  $sql ="SELECT area.idarea,SUM(if(area.idarea=2,1,0))as a1,SUM(if(area.idarea=3,1,0))as a2,SUM(if(area.idarea=4,1,0))as a3,SUM(if(area.idarea=5,1,0))as a4,SUM(if(area.idarea=6,1,0))as a5 FROM `registro_sam`,area,linea where linea.idlinea=registro_sam.idlinea and linea.idarea=area.idarea and estado =2 ";
//en evaluadas fecha vencida ";

$resultl= mysqli_query($con,$sql)or die(mysqli_error());
  
 
  while($row=mysqli_fetch_array($resultl)) {
  echo $c1 = $row['a1'];
   echo $c2 = $row['a2'];
    echo $c3 = $row['a3'];
	 echo $c4 = $row['a4'];
	 echo $c5 = $row['a5'];
  }

  $sql ="SELECT Count(*) as n FROM accidente where year(fecha) = year(now())";
//en evaluadas fecha vencida ";

$resultl= mysqli_query($con,$sql)or die(mysqli_error());
  
 
  while($row=mysqli_fetch_array($resultl)) {
  echo $t = $row['n'];
  }

  
  // mse-lps
  
  
 $sql ="SELECT linea FROM linea WHERE idarea = 2 ORDER BY `linea`.`linea` ASC ";
//en evaluadas fecha vencida ";

$resultl= mysqli_query($con,$sql)or die(mysqli_error());
  
 
  while($row=mysqli_fetch_array($resultl)) {
  echo $lps[] = $row['linea'];
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HSE</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="../text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="../css/style.css" rel="stylesheet">	
     <link rel="stylesheet" href="dist/datepicker.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
          .thumb {
            height: 200;
			width: 200;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>
  </head>
  <body>
	<header>
		<nav div style="height:17px"  role="navigation">
        
        <IMG style="width:100%" SRC="../Img/header.png" align="left">
    </nav>
		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="../index.html" >Inicio</a></li>
								<li role="presentation"><a href="../registro.html">Registro de Accidentes</a></li>
								<li role="presentation"><a href="SAM.php">SAM</a></li>		
                                <li role="presentation"><a href="reporte.php" class="active">Reporte</a></li>									
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>










<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<br></br>
<center><div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div></center>

<center><div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div></center>

<center><div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div></center>

<center><div id="container4" style="min-width: 310px; height: 400px; margin: 0 auto"></div></center>

<center><div id="container5" style="min-width: 310px; height: 400px; margin: 0 auto"></div></center>

<center><div id="container6" style="min-width: 310px; height: 400px; margin: 0 auto"></div></center>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="../js/jquery.isotope.min.js"></script>
	<script src="../js/jquery.bxslider.min.js"></script>
	<script src="../js/functions.js"></script>
	<script src="dist/datepicker.js"></script>
<script>
Highcharts.chart('container1', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Porcentaje de accidentes evaluados en TIP '
  },
  xAxis: {
   categories: ['MSE-FS-LPS', 'MSE-WS', 'MSE-CA', 'MSE-TS', 'MSE-TC','MSE-PA']
  },
  yAxis: {
    min: 0,
    title: {
      text: 'porcentaje de accidentes'
    }
  },
  tooltip: {
    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
    shared: true
  },
  plotOptions: {
    column: {
      stacking: 'percent'
    }
  },
  series:  [{
    name: 'Ceradas',
	color:'green',
    data: [<?php echo $c1-$v1 ?>, <?php echo $c2-$v2 ?>, <?php echo $c3-$v3 ?>, <?php echo $c4-$v4 ?>,  <?php echo $c5-$v5 ?>,]
  }, {
    name: 'En proceso',
	color:'blue',
    data: [<?php echo $e1 ?>,<?php echo $e2 ?>, <?php echo $e3 ?>, <?php echo $e4 ?>, <?php echo $e5 ?>]
  },{
    name: 'Fecha vencida',
	color:'red',
    data: [<?php echo $v1 ?>,<?php echo $v2 ?>, <?php echo $v3 ?>, <?php echo $v4 ?>, <?php echo $v5 ?>]
  },  {
    name: 'Sin revisar',
	color:'gray',
    data: [<?php echo $t-$c1-$e1 ?>, <?php echo $t-$c2-$e2 ?>, <?php echo $t-$c3-$e3 ?>, <?php echo $t-$c4-$e4 ?>, <?php echo $t-$c5-$e5 ?>]
  }]
});
</script>
<script>
Highcharts.chart('container2', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Porcentaje de accidentes evaluados en TIP '
  },
  xAxis: {
    categories: ["<?php echo join($lps, '","') ?>"]
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Total fruit consumption'
    }
  },
  tooltip: {
    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
    shared: true
  },
  plotOptions: {
    column: {
      stacking: 'percent'
    }
  },
  series: [{
    name: 'Ceradas',
    data: [5, 3, 4, 7, 2]
  }, {
    name: 'En proceso',
    data: [2, 2, 3, 2, 1]
  },{
    name: 'Fecha vencida',
    data: [2, 2, 3, 2, 1]
  },  {
    name: 'Sin revisar',
    data: [3, 4, 4, 2, 5]
  }]
});
</script>
<script>
Highcharts.chart('container3', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Porcentaje de accidentes evaluados en TIP '
  },
  xAxis: {
    categories: ['MSE-FS-LPS', 'MSE-WS', 'MSE-CA', 'MSE-TS', 'MSE-TC','MSE-PA']
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Total fruit consumption'
    }
  },
  tooltip: {
    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
    shared: true
  },
  plotOptions: {
    column: {
      stacking: 'percent'
    }
  },
  series: [{
    name: 'Ceradas',
    data: [5, 3, 4, 7, 2]
  }, {
    name: 'En proceso',
    data: [2, 2, 3, 2, 1]
  },{
    name: 'Fecha vencida',
    data: [2, 2, 3, 2, 1]
  },  {
    name: 'Sin revisar',
    data: [3, 4, 4, 2, 5]
  }]
});
</script>
<script>
Highcharts.chart('container4', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Porcentaje de accidentes evaluados en TIP '
  },
  xAxis: {
    categories: ['MSE-FS-LPS', 'MSE-WS', 'MSE-CA', 'MSE-TS', 'MSE-TC','MSE-PA']
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Total fruit consumption'
    }
  },
  tooltip: {
    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
    shared: true
  },
  plotOptions: {
    column: {
      stacking: 'percent'
    }
  },
  series: [{
    name: 'Ceradas',
    data: [5, 3, 4, 7, 2]
  }, {
    name: 'En proceso',
    data: [2, 2, 3, 2, 1]
  },{
    name: 'Fecha vencida',
    data: [2, 2, 3, 2, 1]
  },  {
    name: 'Sin revisar',
    data: [3, 4, 4, 2, 5]
  }]
});
</script>
<script>
Highcharts.chart('container5', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Porcentaje de accidentes evaluados en TIP '
  },
  xAxis: {
    categories: ['MSE-FS-LPS', 'MSE-WS', 'MSE-CA', 'MSE-TS', 'MSE-TC','MSE-PA']
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Total fruit consumption'
    }
  },
  tooltip: {
    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
    shared: true
  },
  plotOptions: {
    column: {
      stacking: 'percent'
    }
  },
  series: [{
    name: 'Ceradas',
    data: [5, 3, 4, 7, 2]
  }, {
    name: 'En proceso',
    data: [2, 2, 3, 2, 1]
  },{
    name: 'Fecha vencida',
    data: [2, 2, 3, 2, 1]
  },  {
    name: 'Sin revisar',
    data: [3, 4, 4, 2, 5]
  }]
});
</script>
