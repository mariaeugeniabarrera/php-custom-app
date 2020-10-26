<?php
if (isset($_FILES['fotopic5'])) {
    $fotopic5 = $_FILES['fotopic5'];
    $extension = strtolower(pathinfo($fotopic5['name'], PATHINFO_EXTENSION));
	  $time = time();
    //$nombre = "{$_POST['nombre_fotopic5']}_$time.$extension";
    $nombre = "{$_POST['nombre_fotopic5']}$time.$extension";
		$sizefotopic5 = $_FILES['fotopic5']['size'];

if (($extension=='jpeg' || $extension=='jpe' || $extension=='jpg' || $extension=='png' || $extension=='gif' ) && ($sizefotopic5<=10000000000))
{


if (move_uploaded_file($fotopic5['tmp_name'], "pictures/$nombre")) {



$ruta_imagen = "pictures/$nombre";

$miniatura_ancho_maximo = 161;
$miniatura_alto_maximo = 161;




$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];


$proporcion_imagen = $imagen_ancho / $imagen_alto;
$proporcion_miniatura = $miniatura_ancho_maximo / $miniatura_alto_maximo;

if ( $proporcion_imagen > $proporcion_miniatura ){
	$miniatura_ancho = $miniatura_alto_maximo * $proporcion_imagen;
	$miniatura_alto = $miniatura_alto_maximo;
} else if ( $proporcion_imagen < $proporcion_miniatura ){
	$miniatura_ancho = $miniatura_ancho_maximo;
	$miniatura_alto = $miniatura_ancho_maximo / $proporcion_imagen;
} else {
	$miniatura_ancho = $miniatura_ancho_maximo;
	$miniatura_alto = $miniatura_alto_maximo;
}

$x = ( $miniatura_ancho - $miniatura_ancho_maximo ) / 2;
$y = ( $miniatura_alto - $miniatura_alto_maximo ) / 2;

switch ( $imagen_tipo ){
	case "image/jpg":
	case "image/jpeg":
		$imagen = imagecreatefromjpeg( $ruta_imagen );
		break;
	case "image/png":
		$imagen = imagecreatefrompng( $ruta_imagen );
		break;
	case "image/gif":
		$imagen = imagecreatefromgif( $ruta_imagen );
		break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );
$lienzo_temporal = imagecreatetruecolor( $miniatura_ancho, $miniatura_alto );

imagecopyresampled($lienzo_temporal, $imagen, 0, 0, 0, 0, $miniatura_ancho, $miniatura_alto, $imagen_ancho, $imagen_alto);
imagecopy($lienzo, $lienzo_temporal, 0,0, $x, $y, $miniatura_ancho_maximo, $miniatura_alto_maximo);




//imagejpeg($lienzo, "pictures/_$time"."_thumbnail.".$extension, 80);

imagejpeg($lienzo, "pictures/$time"."_thumbnail.".$extension, 80);

//$nombre_thumbnail = "_$time"."_thumbnail.".$extension;
$nombre_thumbnail = "$time"."_thumbnail.".$extension;

echo json_encode ( array("respuesta" => 1, "nombre_thumbnail" => $nombre_thumbnail) );

        //echo 1;
    } else {
        
        exit(); echo 0;
}

}  else {

        exit(); echo 0;
}






}
?>
