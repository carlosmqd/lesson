<?php include("conexion.php");

$idlinea = 12;
$n=0;
$e=0;
$c=0;
 $accidente3[]=null;
?>

<!DOCTYPE html>
<html>
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HSE</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/jquery.bxslider.css">
	<link rel="stylesheet" type="/text/css" href="../css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/acordeon.css">
	
     <link rel="stylesheet" href="dist/datepicker.css">
	<script src="../js/jquery-2.1.1.min.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     
    <![endif]-->
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
								<li role="presentation"><a href="SAM.php" class="active">SAM</a></li>		
                                <li role="presentation"><a href="reporte.php">Reporte</a></li>									
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
   

   
  <?php  
  
   $sqldatosl= " SELECT * FROM sam where idlinea='$idlinea' ";
  $resultl= mysqli_query($con,$sqldatosl)or die(mysqli_error());
  
 
  while($rowl=mysqli_fetch_array($resultl)) {
  $ma[]=$rowl['ma'];
  $op[]=$rowl['op'];
  $des[]=$rowl['descripcion'];
  $idsam[]=$rowl['idsam'];
   $idlin=$rowl['idlinea'];
 // $estado=$row['estado'];
  }
  ?>
   <center><h2>Linea <?php echo $idlin ?></h2></center>
   <?php 
   //$sqlda="SELECT * FROM `sam`,evaluacion WHERE sam.idsam = evaluacion.idsam and sam.idlinea='$idlinea' ";
  $sqlda="SELECT idaccidente,evaluacion.idsam,if(evaluacion=0,'N/A',evaluacion) as evaluacion FROM `sam`,evaluacion WHERE sam.idsam = evaluacion.idsam and sam.idlinea='$idlinea'";
  $resultda= mysqli_query($con,$sqlda)or die(mysqli_error());
  
 $k=0;
  while($rowda=mysqli_fetch_array($resultda)) {
	   $datos[$k][1]=$rowda['idaccidente'];
	    //echo "-";
	   $datos[$k][2]=$rowda['idsam'];
	 
	 // echo "-";
	   $datos[$k][3]=$rowda['evaluacion'];
	  // echo "<br>";
	   
	   $k=$k+1;
  }
  
  
  $accidente[] = "";
  $sqldatos2= " SELECT * FROM registro_sam where idlinea='$idlin'  and estado =1";
  $result2= mysqli_query($con,$sqldatos2)or die(mysqli_error());
  
 
  while($row2=mysqli_fetch_array($result2)) {
   $accidente[] = $row2['idaccidente'];
  //$op[]=$row2['op'];
 
 // $estado=$row['estado'];
  }
  $sqldatos3= " SELECT * FROM registro_sam where idlinea='$idlin'  and estado =2";
  $result3= mysqli_query($con,$sqldatos3)or die(mysqli_error());
  
 
  while($row3=mysqli_fetch_array($result3)) {
   $accidente3[] = $row3['idaccidente'];
  //$op[]=$row2['op'];
// echo $cierre[] = $row3['comentariocierre'];
 //echo "<br>";
 // $estado=$row['estado'];
  }
   $sqldatos4= " SELECT accidente.idaccidente,comentariocierre,registro_sam.accion,registro_sam.idlinea,accidente.fecha,registro_sam.fecha_compromiso as fechac,fecha_cierre  FROM accidente LEFT JOIN registro_sam on accidente.idaccidente=registro_sam.idaccidente where Year(accidente.fecha) =year(now()) ORDER BY `accidente`.`idaccidente` ASC ";
  $result4= mysqli_query($con,$sqldatos4)or die(mysqli_error());
  
 
  while($row4=mysqli_fetch_array($result4)) {
   //$accidente3[] = $row4['idaccidente'];
  //$op[]=$row2['op'];
  $cierre[] = $row4['comentariocierre'];
   $comentarioco[] = $row4['accion'];
 $fechaci[]=$row4['fecha_cierre'];
  $fechac[] =$row4['fechac'];
  
  
 //echo "<br>";
 // $estado=$row['estado'];
  }

  $sqldatos= "SELECT accidente.idaccidente,descripcion,fecha,linea,linea.idlinea,lesiones,principio,area FROM accidente,linea,principio,lesiones,area where linea.idlinea = accidente.idlinea and lesiones.idlesiones=accidente.idlesion and principio.idprincipio=accidente.idprincipio and linea.idarea = area.idarea and comprobado ='1' and YEAR(fecha) = YEAR(now()) ORDER BY `idaccidente` ASC ";
  $result= mysqli_query($con,$sqldatos)or die(mysqli_error());
  $i=1;
  
  while($row=mysqli_fetch_array($result)) {
	  $estado=0;
     foreach ($accidente as $a){
     if ((int)$a == (int)$row['idaccidente']){
		 //echo $a."-".$row['idaccidente'];
	        $estado = 1;
			
     	  }
  
           }
		    foreach ($accidente3 as $a2){
     if ((int)$a2 == (int)$row['idaccidente']){
		// echo $a2."-".$row['idaccidente'];
	        $estado = 2;
			
     	  }
           }
	  if ($estado == 0){ 
	  $c=$c+1;
 ?>
  

 
  
  
 <div id="container-main">
  
    <div class="accordion-container">
        <a  class="accordion-titulo""><?php echo "Accidente No.".$i ?><span class="toggle-icon"></span></a>
        <div class="accordion-content">
		  <form action="registrosam.php" method ="post">
		    <center><h4>Fecha: <?php echo $row['fecha']?></h4></center>
			<center><h3>Area: <?php echo $row['area']?> &nbsp&nbsp&nbsp&nbsp Linea: <?php echo $row['linea']?></h3></center>
			
			<h4>Lesion: <?php echo $row['lesiones']?></h4>
			<h4>Principio no cumplido: <?php echo $row['principio']?></h4>
			<br>
			
			<h4>Descripcion: <?php echo $row['descripcion']?></h4>
			<input  style="visibility:hidden" type="text" name="acc<?php echo $i?>" value="<?php echo $row['idaccidente'] ?>">
            <input  style="visibility:hidden" type="text" name="linea<?php echo $i?>" value="<?php echo $idlin?>">
            
			
             <table style="width:100%" cellspacing="0">
          <tr>
		     
             <td><center><b> MA</b></center></td>
			  <td> <center><b>OP</b></center></td>
			  <td><center><b>Descripcion</b></center></td>
			  <td> <center><b> Evaluacion</b></center></td>
<?php $j1=0; foreach ($ma as $m)
			{ ?>
			<tr>
			<input  style="visibility:hidden" type="text" name="id<?php echo $j1?>" value="<?php echo $idsam[$j1] ?>">
            
			<td> <center> <?php echo $m; ?></center></td>
			 <td> <center>  <?php echo $op[$j1]; ?></center></td>
			 <td><center>  <?php echo $des[$j1]; ?></center></td>
			  <td> <select  class="form-control"  id="myselect" name="evalua<?php echo $i.$j1?>"  > 
			<option value="0">N/A</option>
		   
			  
                                 <option value="1" >1</option>
								  <option value="2" >2</option>
								   <option value="3" >3</option>
								    <option value="4" >4</option>
									 <option value="6" >6</option>
									  <option value="9" >9</option>
            
            
			 </select></td>
			   
			<?php  $j1=$j1+1;}
			?>
 </table> 
 
 <br>
  <textarea  class="form-control" style="width:100%" name="comentario<?php echo $i; ?>" rows="3" placeholder="Accion correctiva/preventiva"></textarea>
<br>

					 <div class="form-group">
					<center> <a>Fecha Compromiso:</a><center>
						<center><input type="text" class="form-control" data-toggle="datepicker" name="fechac<?php echo $i; ?>" placeholder="Fecha" style="width:30%" >
			            </center>
						</div>
						
 <br>
 <center><input  class="btn btn-info" type="submit" name="boton<?php echo $i; ?>" value ="Evaluar"></center>
        </div>  
    </div>
	</div>
	
  <?php  $i=$i+1;  }else if ($estado == 1){  $e=$e+1;?>
 <div id="container-main">
    <div class="accordion-container"><!-- #78BE20-->
        <a  class="accordion-titulo"  style="background: #00A8B0;a.nohover {
color:#ddd;
}"><?php echo "Accidente No.".$i ?><span class="toggle-icon"></span></a>
        <div class="accordion-content">
		  <form action="registrosam.php" method ="post">
		    <center><h4>Fecha: <?php echo $row['fecha']?></h4></center>
			<center><h3>Area: <?php echo $row['area']?> &nbsp&nbsp&nbsp&nbsp Linea: <?php echo $row['linea']?></h3></center>
			
			<h4>Lesion: <?php echo $row['lesiones']?></h4>
			<h4>Principio no cumplido: <?php echo $row['principio']?></h4>
			<br>
			
			<h4>Descripcion: <?php echo $row['descripcion']?></h4>
			<input  style="visibility:hidden" type="text" name="acc<?php echo $i?>" value="<?php echo $row['idaccidente'] ?>">
            <input  style="visibility:hidden" type="text" name="linea<?php echo $i?>" value="<?php echo $idlin?>">
            
			
             <table style="width:100%" cellspacing="0">
          <tr>
		     
             <td><center><b> MA</b></center></td>
			  <td> <center><b>OP</b></center></td>
			  <td><center><b>Descripcion</b></center></td>
			  <td> <center><b> Evaluacion</b></center></td>
<?php $j=0; foreach ($ma as $m)
			{ ?>
			<tr>
			<input  style="visibility:hidden" type="text" name="id<?php echo $j?>" value="<?php echo $idsam[$j] ?>">
            
			<td> <center> <?php echo $m; ?></center></td>
			 <td> <center>  <?php echo $op[$j]; ?></center></td>
			 <td><center>  <?php echo $des[$j]; ?></center></td>
			 <?php $l =0; foreach ($datos as $d){
		
				 $row['idaccidente'];
				  
			  if ($row['idaccidente']== $datos[$l][1])
			  
			  {
			    if ($idsam[$j]== $datos[$l][2])
			  
			  {
				 // echo "es igual".$datos[$l][3];
				  ?>
				  <td> <select  class="form-control"  id="myselect" name="evalua<?php echo $i.$j?>"   DISABLED> 
			<option value="0"><?php echo $datos[$l][3] ?></option>
		   
			  
                                
            
            
			 </select></td>
			 <?php  }
			  }$l =$l+1;
			  }?>
			  
			   
			<?php  $j=$j+1;}
			?>
 </table> 
 <br>
 <center><h5>Fecha compromiso:
 <?php echo $fechac[$i-1] ;?>
 </h5></center>
 <center><h5>Accion:
 <textarea   class="form-control" style="width:100%" rows="3" disabled><?php echo $comentarioco[$i-1] ;?></textarea>
 
 </h5></center>
 <br>
 <br>
 <textarea  name="comentarioc<?php echo $i;?>" class="form-control" style="width:100%" rows="3" placeholder="Comentario de cierre"></textarea>
 <br>
 
 <center><input class="btn btn-success" type="submit" name="botonc<?php echo $i; ?>" value ="Cerrar"></center>
        </div>  
    </div>
	</div>
	
  <?php  $i=$i+1; } else if ($estado == 2){ $n=$n+1; ?>
  
 <div id="container-main">
    <div class="accordion-container"><!-- #78BE20-->
        <a  class="accordion-titulo"  style="background: #78BE20;a.nohover {
color:#ddd;
}"><?php echo "Accidente No.".$i ?><span class="toggle-icon"></span></a>
        <div class="accordion-content">
		  <form action="registrosam.php" method ="post">
		    <center><h4>Fecha: <?php echo $row['fecha']?></h4></center>
			<center><h3>Area: <?php echo $row['area']?> &nbsp&nbsp&nbsp&nbsp Linea: <?php echo $row['linea']?></h3></center>
			
			<h4>Lesion: <?php echo $row['lesiones']?></h4>
			<h4>Principio no cumplido: <?php echo $row['principio']?></h4>
			<br>
			
			<h4>Descripcion: <?php echo $row['descripcion']?></h4>
			<input  style="visibility:hidden" type="text" name="acc<?php echo $i?>" value="<?php echo $row['idaccidente'] ?>">
            <input  style="visibility:hidden" type="text" name="linea<?php echo $i?>" value="<?php echo $idlin?>">
            
			
             <table style="width:100%" cellspacing="0">
          <tr>
		     
             <td><center><b> MA</b></center></td>
			  <td> <center><b>OP</b></center></td>
			  <td><center><b>Descripcion</b></center></td>
			  <td> <center><b> Evaluacion</b></center></td>
<?php $j=0; foreach ($ma as $m)
			{ ?>
			<tr>
			<input  style="visibility:hidden" type="text" name="id<?php echo $j?>" value="<?php echo $idsam[$j] ?>">
            
			<td> <center> <?php echo $m; ?></center></td>
			 <td> <center>  <?php echo $op[$j]; ?></center></td>
			 <td><center>  <?php echo $des[$j]; ?></center></td>
			   <?php $l =0; foreach ($datos as $d){
		
				 $row['idaccidente'];
				  
			  if ($row['idaccidente']== $datos[$l][1])
			  
			  {
			    if ($idsam[$j]== $datos[$l][2])
			  
			  {
				 // echo "es igual".$datos[$l][3];
				  ?>
				  <td> <select  class="form-control"  id="myselect" name="evalua<?php echo $i.$j?>"   DISABLED> 
			<option value="0"><?php echo $datos[$l][3] ?></option>
		   
			  
                                
            
            
			 </select></td>
			 <?php  }
			  }$l =$l+1;
			  }?>
			   
			<?php  $j=$j+1;}
			?>
 </table> 
  <br>
 <center><h5>Fecha compromiso:
 <?php echo $fechac[$i-1] ;?>
 </h5></center>
 <center><h5>Accion:
 <textarea   class="form-control" style="width:100%" rows="3" disabled><?php echo $comentarioco[$i-1] ;?></textarea>
 
 </h5></center>
 <br>
 <center><h5>Fecha de cierre:
 <?php echo $fechaci[$i-1] ;?>
 </h5></center>
 <br>
 <center><h5>Comentario Cierre:
 <textarea  name="comentarioc<?php echo $i;?>" class="form-control" style="width:100%" rows="3" placeholder="Comentario de cierre" disabled><?php echo $cierre[$i-1]; ?></textarea >
 </h5></center>
 <br>
        </div>  
    </div>
	</div>
	
  <?php  $i=$i+1; } } ?>
  <center><h2>Total de accidentes :<?php echo $i-1;?></h2>
   <?php if($n == 0){ ?>
  <h2>Todos los accidentes han sido cerrados</h2></center>
  <?php }else{ ?>
   <h2>Accidentes cerrados:<?php echo $n;?></h2></center>
  <?php }?>
  <center><h2>Accidentes evaluados :<?php echo $e;?></h2>
  <center><h2>Accidentes no evaluados :<?php echo $c;?></h2>
 
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
    <script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/jquery.bxslider.min.js"></script>
	<script src="../js/functions.js"></script>
	<script src="dist/datepicker.js"></script>

 
 <script>
   
 $(function() {
     
 $('[data-toggle="datepicker"]').datepicker({
       
 autoHide: true,
    
    zIndex: 2048,
 
    format: 'yyyy-mm-dd'   
  });
   
 });
  
</script>

<script>
	
$(".accordion-titulo").click(function(){
		
   var contenido=$(this).next(".accordion-content");
			
   if(contenido.css("display")=="none"){ //open		
      contenido.slideDown(250);			
      $(this).addClass("open");
   }
   else{ //close		
      contenido.slideUp(250);
      $(this).removeClass("open");	
  }
							
});</script>
</body>
<html>
