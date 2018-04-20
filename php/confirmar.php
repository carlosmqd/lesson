<?php include("conexion.php")?>
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
								<li role="presentation"><a href="../registro.html"class="active">Registro de Accidentes</a></li>
								<li role="presentation"><a href="SAM.php">SAM</a></li>		
                                <li role="presentation"><a href="reporte.php">Reporte</a></li>									
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
  
  <!-- Form -->
<?php
 
  // valor del id
  
    if(isset($_GET['pos']))
    {
        $location=$_GET['pos'];
       
    ?>
    <script>
        var myselect = document.getElementById("myselect");
        myselect.options.selectedIndex = <?php echo $_GET["pos"]; ?>
    </script>
    <?php
    }
    ?>
<?php
    
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        
    ?>
    <script>
        var myselect = document.getElementById("myselect");
        myselect.options.selectedIndex = <?php echo $_GET["pos"]; ?>
    </script>
    <?php
    } else {$id =0;}
//datos de la base
	$sqldatos= " SELECT * FROM accidente where idaccidente = '$id'  ";
  $result= mysqli_query($con,$sqldatos)or die(mysqli_error());
  
  while($row=mysqli_fetch_array($result)) {
     
      $idlinea= $row['idlinea'];
	 
	   $fecha= $row['fecha'];
	 
	   $idtipo= $row['idtipo'];
	 
	   $idlesion= $row['idlesion'];
	 
	   $idprincipio= $row['idprincipio'];
	 
	   $accion1= $row['accion1'];
	 
	   $accion2= $row['accion2'];
	 
	  $accion3= $row['accion3'];
	 
	   $descripcion = $row['descripcion'];
	  
	   $img1=$row['img1'];
	  
	   $img2=$row['img2'];
	  
		$leccion=$row['leccion'];
      	  
		  
		 
  $raiz1=$row['raiz1'];
  $acc1=$row['correctiva1'];
 //
  $tip2=$row['tipo2'];
 $raiz2=$row['raiz2'];
  $acc2=$row['correctiva2']; 
 //
  $tip3=$row['tipo3'];
  $raiz3=$row['raiz3'];
  $acc3=$row['correctiva3'];
 //
  $tip4=$row['tipo4'];
  $raiz4=$row['raiz4'];
  $acc4=$row['correctiva4'];
	 
  }
    ?>
	
  <div class="jumbotron">
		<h2>4CS Conciencia de Seguridad</h2>		
	</div>
	<div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">				
					<form role="form" action="confirma.php" enctype="multipart/form-data" method="post">
						<input type="text" name="location"  value="<?php echo $location;?>" style="visibility:hidden">
						<div class="form-group">
						<select  class="form-control"  id="myselect" name="id" onchange="window.location='confirmar.php?id='+this.value+'&pos='+this.selectedIndex;" required> 
			<option value="">No.de accidente</option>
		   <?php $i=0;
                     //and comprobado ='0'  
			$result = mysqli_query($con,"SELECT idaccidente FROM accidente where YEAR(fecha) = YEAR(now()) ORDER BY `accidente`.`idaccidente` ASC") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				  <?php if($i+1 ==  $location){  ?>  
			  
                                 <option value="<?php echo $row['idaccidente'];?>" selected="selected"><?php echo $i+1?></option>
				 <?php } else {  ?>
                             <option value="<?php echo $row['idaccidente'];?>"><?php echo $i+1;?></option>     
           <?php } $i=$i+1; }  ?>
            
            
			 </select>
			 </div><?php if ($id != 0 ){
				 
				 ?>
					 <div class="form-group">
						
						 <select  class="form-control"  id="myselect" name="linea"  required> 
			<option value="">Linea</option>
		   <?php 
                  $i=0;    
			$result = mysqli_query($con,"SELECT * FROM linea,area where linea.idarea = area.idarea") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

            
				  <?php if($i+1 ==  $idlinea){  ?>  
			  
                                  <option value="<?php echo $row['idlinea'];?>" selected><?php echo $row['linea']."/".$row['area'];?></option>
				 <?php } else {  ?>
                               
           
                                 <option value="<?php echo $row['idlinea'];?>"><?php echo $row['linea']."/".$row['area'];?></option>
				
                                  
          <?php } $i=$i+1; }  ?>
            
            
			 </select>
			 </div>
					 <div class="form-group">
						<input type="text" class="form-control" data-toggle="datepicker" name="fecha" placeholder="Fecha" value="<?php echo $fecha;?>" required>
			            </div>
						<div class="form-group">
						   <select  class="form-control"  id="myselect" name="tipo"  required> 
			                    <?php 
                       $i=0;
			$result = mysqli_query($con,"SELECT * FROM tipo ") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				 
				  <?php if($i+1 ==  $idtipo){  ?>  
				              
                                 <option value="<?php echo $row['idtipo'];?>"selected><?php echo $row['tipo'];?></option>
				
                                  
          <?php } else {  ?>
                                   <option value="<?php echo $row['idtipo'];?>" ><?php echo $row['tipo'];?></option>
             <?php } $i=$i+1; }  ?>
					       </select>
						   </div>
						   <div class="form-group">
						    <select  class="form-control"  id="myselect" name="lesion"  required> 
			<option value="">Lesion</option>
		   <?php 
                       $i=0;
			$result = mysqli_query($con,"SELECT * FROM lesiones") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				 
				  <?php if($i+1 ==  $idlesion){  ?>  
				              
                                 <option value="<?php echo $row['idlesiones'];?>"selected><?php echo $row['lesiones'];?></option>
				
                                  
          <?php } else {  ?>
                                   <option value="<?php echo $row['idlesiones'];?>" ><?php echo $row['lesiones'];?></option>
             <?php } $i=$i+1; }  ?>
            
            
			 </select>
			 </div>
			 <div class="form-group">
			 <select  class="form-control"  id="myselect" name="principio"  required> 
			<option value="">Principio no cumplido</option>
		   <?php 
                     $i=0;
			$result = mysqli_query($con,"SELECT * FROM principio") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				 
				  <?php if($i+1 ==  $idprincipio){  ?>  
           
                                 <option value="<?php echo $row['idprincipio'];?>" selected><?php echo $row['principio'];?></option>
				<?php } else {  ?>
                                   <option value="<?php echo $row['idprincipio'];?>"><?php echo $row['principio'];?></option>
             <?php } $i=$i+1; }  ?>
            
            
			 </select>
				</div>	  
				<input type="text" class="form-control" name="accion1" value="<?php echo $accion1;?>" placeholder="accion de contecion 1" required>
				<input type="text" class="form-control"  name="accion2"  value="<?php echo $accion2;?>"placeholder="accion de contecion 2">
				<input type="text" class="form-control" name="accion3"  value="<?php echo $accion3;?>"placeholder="accion de contecion 3">
						<textarea class="form-control" name="descripcion" rows="2"   placeholder="Descripcion"required><?php echo $descripcion;?></textarea >
						<a>imagen del accidente</a><input type="file" id="files" name="files"  / >
						<center><img src="<?php echo $img1;?>" name="<?php echo $img1;?>" width="200" height="200"></center>
                  <br />
                 
				 	<a>imagen del lugar del accidente</a><input type="file" id="files2" name="files2"  / >
                  <br />
				  <center><img src="<?php echo $img2;?>" name="<?php echo $img2;?>" width="200" height="200"></center>
						<br>
			 <input type="text" class="form-control" name ="tip1" value="TRC" readonly>
			 <textarea style="width: 60%" class="form-control" name="raiz1" rows="1"   placeholder="causa raiz" required><?php echo $raiz1;?></textarea > 
			 <textarea style="width: 60%" class="form-control" name="acc1" rows="1"   placeholder="acciones correctivas" required><?php echo $acc1;?></textarea >
			<br>
			  <div class="form-group">
						<select  class="form-control"  id="myselect" name="tip2"  required> 
			<option value="">---</option>
		   <?php $i=0;
                       
			$result = mysqli_query($con,"SELECT * FROM raiz") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				  <?php if($i+1 == $tip2){  ?>  
			  
                                 <option value="<?php echo $row['idraiz'];?>" selected="selected"><?php echo $row['nombre'];?></option>
				 <?php } else {  ?>
                             <option value="<?php echo $row['idraiz'];?>"><?php echo $row['nombre'];?></option>     
           <?php }  $i=$i+1; }  ?>
            
            
			 </select>
			 </div>
			 
			  <textarea style="width: 60%" class="form-control" name="raiz2" rows="1"   placeholder="causa raiz" required><?php echo $raiz2;?></textarea > 
			 <textarea style="width: 60%" class="form-control" name="acc2" rows="1"   placeholder="acciones correctivas" required><?php echo $acc2;?></textarea >
			<br>
			   <div class="form-group">
						<select  class="form-control"  id="myselect" name="tip3"  > 
			<option value="">---</option>
		   <?php $i=0;
                       
			$result = mysqli_query($con,"SELECT * FROM raiz") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				  <?php if($i+1 == $tip3){  ?>  
			  
                                 <option value="<?php echo $row['idraiz'];?>" selected="selected"><?php echo $row['nombre'];?></option>
				 <?php } else {  ?>
                             <option value="<?php echo $row['idraiz'];?>"><?php echo $row['nombre'];?></option>     
           <?php }  $i=$i+1; }  ?>
            
            
			 </select>
			 </div>
			  <textarea style="width: 60%" class="form-control" name="raiz3" rows="1"   placeholder="causa raiz" ><?php echo $raiz3;?></textarea > 
			 <textarea style="width: 60%" class="form-control" name="acc3" rows="1"   placeholder="acciones correctivas" ><?php echo $acc3;?></textarea >
			<br>
			  <div class="form-group">
						<select  class="form-control"  id="myselect" name="tip4"  > 
			<option value="">---</option>
		   <?php $i=0;
                       
			$result = mysqli_query($con,"SELECT * FROM raiz") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				  <?php if($i+1 == $tip4){  ?>  
			  
                                 <option value="<?php echo $row['idraiz'];?>" selected="selected"><?php echo $row['nombre'];?></option>
				 <?php } else {  ?>
                             <option value="<?php echo $row['idraiz'];?>"><?php echo $row['nombre'];?></option>     
           <?php }  $i=$i+1; }  ?>
            
            
			 </select>
			 </div>
			 
			<textarea style="width: 60%" class="form-control" name="raiz4" rows="1"    placeholder="causa raiz" ><?php echo $raiz4;?></textarea > 
			 <textarea style="width: 60%" class="form-control" name="acc4" rows="1"   placeholder="acciones correctivas" ><?php echo $acc4;?></textarea >
			 <br> </br>
			 <?php if($leccion == null){ ?>
			 <textarea class="form-control" name="leccion" rows="2"   placeholder="Leccion Aprendida" required></textarea >
			 <?php }else {?>
              <textarea class="form-control" name="leccion" rows="2"   placeholder="Leccion Aprendida" required><?php echo $leccion ;  ?></textarea >
             <?php } ?>			 
			<br> </br>
			
						<center><button type="submit" class="btn btn-default">Confirmar</button></center>
			 <?php } ?>
					</form>
				</div>		
			</div>
		</div>
	</div>
	
	
	
    
	
	<!-- footer -->
		
	<footer>
		
			
		<div class="last-div">
			<div class="container">
				<center><div class="row">
					<div class="copyright">
						© 2018 | HSE 
					</div>
                    
					
					<div class="clear"></div>
				</div></center> 
			</div>
				
		</div>		
	</footer>
   

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
   
 $(function() {
     
 $('[data-toggle="datepicker"]').datepicker({
       
 autoHide: true,
    
    zIndex: 2048,
 
    format: 'yyyy-mm-dd'   
  });
   
 });
  
</script>
<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
                  var files2 = evt.target.files;
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
				  for (var i = 0, f2; f2 = files2[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list2").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f2);
             
                    reader.readAsDataURL(f2);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
			   document.getElementById('files2').addEventListener('change', archivo, false);
      </script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>

