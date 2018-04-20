
<?php
include("conexion.php");
$x=1;
while(isset($_POST['boton'.$x])== null){
	
	echo $x=$x+1;
	echo "<br>";
	
	if ($x==100){
	$_POST['boton'.$x]=100;
	}
	
}
 
 if($_POST['boton'.$x]==100){//cierre de SAM
	 $y=1;
	 while(isset($_POST['botonc'.$y])== null){
	
	echo $y=$y+1;
	 }
	 if(isset($_POST['comentarioc'.$y])){
	 echo "comentario".$comentario =$_POST['comentarioc'.$y];
}else {
	echo $comentario="coment=)";
}
echo "accidente".$acc=$_POST['acc'.$y]; 
echo "<br>linea".$linea=$_POST['linea'.$y];

	 
	 $sql="UPDATE `registro_sam` SET `comentariocierre`='$comentario',`fecha_cierre`=DATE(now()),`estado`=2 WHERE idaccidente='$acc' and  idlinea='$linea'";
  mysqli_query($con,$sql)or die(mysqli_error());
 
 
 }else{ // evaluacion SAM




//echo $x;
if (isset($_POST['fechac'.$x])){
echo $fechac=$_POST['fechac'.$x];
}else {
	echo $fechac=null;
	
}
echo "//////<br>";
if(isset($_POST['comentario'.$x])){
echo $comentario =$_POST['comentario'.$x];
}else {
	echo $comentario=null;
}
echo $acc=$_POST['acc'.$x]; 
echo $linea=$_POST['linea'.$x];
$i=0;
echo "<br>";
while(isset($_POST['evalua'.$x.$i])!=null){
echo $id=$_POST['id'.$i] ;
echo $ev=$_POST['evalua'.$x.$i] ; 
echo"<br>";

$sql ="INSERT INTO `evaluacion` (`idevaluacion`, `idsam`, `idaccidente`, `evaluacion`) VALUES (NULL, '$id', '$acc', '$ev'); ";
 
 
 $resultado = mysqli_query($con,$sql);
    if(!$resultado) {
      die('Invalid query: ' . mysqli_error());
    }
	 

$i=$i+1;
}

$sql2 ="INSERT INTO `registro_sam` (`idregsam`, `idlinea`, `idaccidente`, `accion`, `comentario`, `comentariocierre`, `fecha_compromiso`, `fecha_cierre`, `estado`) VALUES (NULL, '$linea', '$acc', '$comentario', '', '', '$fechac', '', '1')";
$resultado = mysqli_query($con,$sql2);
    if(!$resultado) {
      die('Invalid query: ' . mysqli_error());
    }else{
	}
 }
 echo"<script type=\"text/javascript\"> window.location='SAM.php';</script>";

?>


<!DOCTYPE html>
<html>

<head></head>
<body>




</body>
</html>
