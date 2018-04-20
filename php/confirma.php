<?php

include("conexion.php");
 
// Recibo los datos de la imagen

$nombre_img = $_FILES['files']['name'];
$tipo = $_FILES['files']['type'];
$tamano = $_FILES['files']['size'];
echo "<br>";
 $nombre_img2 = $_FILES['files2']['name'];
$tipo2 = $_FILES['files2']['type'];
$tamano2 = $_FILES['files2']['size'];
 
 if($_FILES['files'] == null || $_FILES['files'] == null ){
	  echo"<script type=\"text/javascript\">alert('Los datos son muy pesados no se pueden subir, \\n \\n                 revisa las imagenes');window.history.back();</script>";
 
 }
 $pos=$_POST['location'];
 $id=$_POST['id'];
 $linea =$_POST['linea'];
 $fecha =$_POST['fecha'];
 $tip =$_POST['tipo'];
 $lesion =$_POST['lesion'];
 $principio =$_POST['principio'];
 $acc1 =$_POST['accion1'];
 $acc2 =$_POST['accion2'];
 $acc3 =$_POST['accion3'];
 $descripcion =$_POST['descripcion'];
 //
  $tip1=$_POST['tip1'];
  $raiz1=$_POST['raiz1'];
  $acc1=$_POST['acc1'];
 //
  $tip2=$_POST['tip2'];
  $raiz2=$_POST['raiz2'];
  $acc2=$_POST['acc2']; 
 //
  $tip3=$_POST['tip3'];
  $raiz3=$_POST['raiz3'];
  $acc3=$_POST['acc3'];
 //
  $tip4=$_POST['tip4'];
  $raiz4=$_POST['raiz4'];
  $acc4=$_POST['acc4'];
 
  $leccion=$_POST['leccion'];
 
 //$sqlr = "INSERT INTO `raiz` (`idraiz`, `causa`, `accion`, `idaccidente`) VALUES (NULL, 'asxas', 'saSAs', '62'); ";
//	 mysqli_query($con,$sqlr)or die(mysqli_error());
	 
 if($nombre_img == null && $nombre_img2 == null ){
	
	  
	  "imagenes no modificadas";
	  
 
	$sql = "UPDATE `accidente` SET   idlinea='$linea', fecha='$fecha', idtipo='$tip', idlesion='$lesion', idprincipio='$principio', accion1='$acc1', accion2='$acc2', accion3='$acc3', descripcion='$descripcion',leccion='$leccion' ,raiz1='$raiz1',correctiva1='acc1',tipo2='$tip2',raiz2='$raiz2',correctiva2='$acc2',tipo3='$tip3',raiz3='$raiz3',correctiva3='$acc3',tipo4='$tip4',raiz4='$raiz4',correctiva4='$acc4',comprobado='1' where idaccidente = '$id'";
  
 

	 mysqli_query($con,$sql)or die(mysqli_error());
 

  echo"<script type=\"text/javascript\">alert('datos guardados correctamente'); window.location='confirmar.php?pos=$pos&id=$id';</script>";
 
 }else{
 
//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL || $nombre_img2 == !NULL ) && ($_FILES['files']['size'] <= 2000000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if ((($_FILES["files"]["type"] == "image/gif")
   || ($_FILES["files"]["type"] == "image/jpeg")
   || ($_FILES["files"]["type"] == "image/jpg")
   || ($_FILES["files"]["type"] == "image/png"))
   ||
   (($_FILES["files2"]["type"] == "image/gif")
   || ($_FILES["files2"]["type"] == "image/jpeg")
   || ($_FILES["files2"]["type"] == "image/jpg")
   || ($_FILES["files2"]["type"] == "image/png")))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/hse/img/2018/accidentes/';
	  move_uploaded_file($_FILES['files']['tmp_name'],$directorio.$nombre_img);
	  $directorio2 = $_SERVER['DOCUMENT_ROOT'].'/hse/img/2018/lugares/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      
	  move_uploaded_file($_FILES['files2']['tmp_name'],$directorio2.$nombre_img2);
    
	
	$img1="../img/2018/accidentes/".$nombre_img;
	  $img2="../img/2018/lugares/".$nombre_img2;
	   
	  
 $query =1;
	
	 if($nombre_img == null && $nombre_img2 != null){
		 
		 $query =2;
		 
	 } 
	 if($nombre_img2 == null && $nombre_img != null){
		  $query =3;
		
	 }
if($query == 1){
	$sql = "UPDATE `accidente` SET   idlinea='$linea', fecha='$fecha', idtipo='$tip', idlesion='$lesion', idprincipio='$principio', accion1='$acc1', accion2='$acc2', accion3='$acc3', descripcion='$descripcion', img1='$img1', img2='$img2',leccion='$leccion',raiz1='$raiz1',correctiva1='acc1',tipo2='$tip2',raiz1='$raiz2',correctiva2='$acc2',tipo3='$tip3',raiz3='$raiz3',correctiva3='$acc3',tipo4='$tip4',raiz4='$raiz4',correctiva4='$acc4',comprobado='1' where idaccidente = '$id'";
 
}else if($query == 2){
	 $sql = "UPDATE `accidente` SET   idlinea='$linea', fecha='$fecha', idtipo='$tip', idlesion='$lesion', idprincipio='$principio', accion1='$acc1', accion2='$acc2', accion3='$acc3', descripcion='$descripcion',  img2='$img2',leccion='$leccion',raiz1='$raiz1',correctiva1='acc1',tipo2='$tip2',raiz2='$raiz2',correctiva2='$acc2',tipo3='$tip3',raiz3='$raiz3',correctiva3='$acc3',tipo4='$tip4',raiz4='$raiz4',correctiva4='$acc4' ,comprobado='1' where idaccidente = '$id'";
 
	 
 }else if($query == 3){
	  $sql = "UPDATE `accidente` SET   idlinea='$linea', fecha='$fecha', idtipo='$tip', idlesion='$lesion', idprincipio='$principio', accion1='$acc1', accion2='$acc2', accion3='$acc3', descripcion='$descripcion', img1='$img1',leccion='$leccion',raiz1='$raiz1',correctiva1='acc1',tipo2='$tip2',raiz2='$raiz2',correctiva2='$acc2',tipo3='$tip3',raiz3='$raiz3',correctiva3='$acc3',tipo4='$tip4',raiz4='$raiz4',correctiva4='$acc4' ,comprobado='1' where idaccidente = '$id'";
 
 }
 
	 mysqli_query($con,$sql)or die(mysqli_error());
	

  echo"<script type=\"text/javascript\">alert('datos guardados correctamente'); window.location='confirmar.php?pos=$pos&id=$id';</script>";
	} 
    else 
    {
       //si no cumple con el formato
       //echo "No se puede subir una imagen con ese formato ";
	  echo"<script type=\"text/javascript\">alert('No se puede subir una imagen con ese formato'); window.history.back();</script>";

    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo"<script type=\"text/javascript\">alert('La imagen es demasiado grande'); window.location='registro.php?';</script>";
//echo "La imagen es demasiado grande "; 
}
    
}

?>
