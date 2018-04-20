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
 
 if($nombre_img == null || $nombre_img2 == null ){
	  echo"<script type=\"text/javascript\">alert('Los datos son muy pesados no se pueden subir, \\n \\n                 revisa las imagenes');window.history.back();</script>";

 }
//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL || $nombre_img2 == !NULL) && ($_FILES['files']['size'] <= 2000000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if ((($_FILES["files"]["type"] == "image/gif")
   || ($_FILES["files"]["type"] == "image/jpeg")
   || ($_FILES["files"]["type"] == "image/jpg")
   || ($_FILES["files"]["type"] == "image/png"))
   &&
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
	  $linea =$_POST['linea'];
 $fecha =$_POST['fecha'];
 $tip =$_POST['tipo'];
 $lesion =$_POST['lesion'];
 $principio =$_POST['principio'];
 $acc1 =$_POST['accion1'];
 $acc2 =$_POST['accion2'];
 $acc3 =$_POST['accion3'];
 $descripcion =$_POST['descripcion'];
$sql = "INSERT INTO `accidente` (`idaccidente`, `idlinea`, `fecha`, `idtipo`, `idlesion`, `idprincipio`, `accion1`, `accion2`, `accion3`, `descripcion`, `img1`, `img2`) VALUES (NULL, '$linea', '$fecha', '$tip', '$lesion', '$principio', '$acc1', '$acc2', '$acc3', '$descripcion', '$img1', '$img2') ";
	 mysqli_query($con,$sql)or die(mysqli_error());
	

  echo"<script type=\"text/javascript\">alert('datos insertados correctamente'); window.location='registro.php';</script>";
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
   if($nombre_img == !NULL) echo"<script type=\"text/javascript\">alert('La imagen es demasiado grande'); window.location='registro.php';</script>";
//echo "La imagen es demasiado grande "; 
}
    


?>
