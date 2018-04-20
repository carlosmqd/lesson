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
        $idarea=$_GET['id'];
        
    ?>
    <script>
        var myselect = document.getElementById("myselect");
        myselect.options.selectedIndex = <?php echo $_GET["pos"]; ?>
    </script>
    <?php
    }
    ?>
  <div class="jumbotron">
		<h2>4CS Conciencia de Seguridad</h2>		
	</div>
	<div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">				
					<form role="form" action="registrar.php" enctype="multipart/form-data" method="post">
						<div class="form-group">
						
						 <select  class="form-control"  id="myselect" name="area" onchange="window.location='registro.php?id='+this.value+'&pos='+this.selectedIndex;" required> 
			<option value="">Area</option>
		   <?php $i=0;
                       
			$result = mysqli_query($con,"SELECT * FROM area") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				  <?php if($i+1 ==  $location){  ?>  
			  
                                 <option value="<?php echo $row['idarea'];?>" selected="selected"><?php echo $row['area'];?></option>
				 <?php } else {  ?>
                             <option value="<?php echo $row['idarea'];?>"><?php echo $row['area'];?></option>     
           <?php } $i=$i+1; }  ?>
            
            
			 </select>
			         </div>
					 <div class="form-group">
						
						 <select  class="form-control"  id="myselect" name="linea"  required> 
			<option value="">Linea</option>
		   <?php 
                      
			$result = mysqli_query($con,"SELECT * FROM linea where idarea = '$idarea'") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				 
				 
           
                                 <option value="<?php echo $row['idlinea'];?>"><?php echo $row['linea'];?></option>
				
                                  
           <?php }  ?>
            
            
			 </select>
			 </div>
					 <div class="form-group">
						<input type="text" class="form-control" data-toggle="datepicker" name="fecha" placeholder="Fecha" required>
			            </div>
						<div class="form-group">
						   <select  class="form-control"  id="myselect" name="tipo"  required> 
			                    <option value="">Tipo</option>
								<option value="1">Accidente</option>
								<option value="2">Incidente</option>
								<option value="3">Enfermedad profesional</option>
					       </select>
						   </div>
						   <div class="form-group">
						    <select  class="form-control"  id="myselect" name="lesion"  required> 
			<option value="">Lesion</option>
		   <?php 
                       $i=0;
			$result = mysqli_query($con,"SELECT * FROM lesiones") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				 
				 
           
                                 <option value="<?php echo $row['idlesiones'];?>"><?php echo $row['lesiones'];?></option>
				
                                  
           <?php } ?>
            
            
			 </select>
			 </div>
			 <div class="form-group">
			 <select  class="form-control"  id="myselect" name="principio"  required> 
			<option value="">Principio no cumplido</option>
		   <?php 
                     
			$result = mysqli_query($con,"SELECT * FROM principio") or die("Error: ".mysqli_error($con));
		
		   while($row = mysqli_fetch_array($result)){?>

      
				 
				 
           
                                 <option value="<?php echo $row['idprincipio'];?>"><?php echo $row['principio'];?></option>
				
                                  
           <?php } ?>
            
            
			 </select>
				</div>	  
				<input type="text" class="form-control" name="accion1" placeholder="accion de contecion 1" required>
				<input type="text" class="form-control"  name="accion2" placeholder="accion de contecion 2">
				<input type="text" class="form-control" name="accion3" placeholder="accion de contecion 3">
						<textarea class="form-control" name="descripcion" rows="2" placeholder="Descripcion"required></textarea >
						<a>imagen del accidente</a><input type="file" id="files" name="files" / required>
                  <br />
                 
				 	<a>imagen del lugar del accidente</a><input type="file" id="files2" name="files2" / required>
                  <br />
				  <center><output id="list"></output></center>
				<br></br>

				<center><output id="list2"></output></center>
						<button type="submit" class="btn btn-default">Guardar</button>
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
                         document.getElementById("list").innerHTML = ['<img class="thumb" width="200" height="200" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
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
                         document.getElementById("list2").innerHTML = ['<img  width="200" height="200" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
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
