<?php 
session_start(); 
include_once("config.php");

if(isset($_GET["logout"]) && $_GET["logout"]==1)
{
	//User clicked logout button, distroy all session variables.
	session_destroy();
	header('Location: '.$return_url);
}
?>


<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en-gb" lang="en-gb" >
<head>

        <title>INSTITUTO INGENES</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="description" content="INSTITUTO INGENES">
        <meta name="viewport" content="width=device-width, initial-scale=1">

				<link href="style/buttonstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
				<link rel="stylesheet" href="css/alertify.core.css" />
				<link rel="stylesheet" href="css/alertify.default.css" />

        <!-- Css -->
        <!-- <link href="css/bootstrap.css" rel="stylesheet" media="screen"> -->
        <!-- Javascript -->
        <script src="js/jquery-2.0.2.js"></script>
        <script src="js/upload.js"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
		<script type="text/javascript" src="js/alertify.min.js"> </script>
        <script type="text/javascript" src="js/form_condiciones.js"> </script>
        <script>
        	$(document).ready(function(e) {
                
            });
        </script>


<script type="text/javascript">

function subirArchivos() {

$("#archivo").upload('subir_archivo.php',
                {
                    nombre_archivo: $("#nombre_archivo").val()
                },
                 function(data) {

                    $("#barra_de_progreso").val(0);
                    if (data.respuesta === 1) {

$("#img01").css({'background-image': 'url(pictures/'+data.nombre_thumbnail+')'});
$("#img01").css({'background-repeat': 'no-repeat'});
$("#img01").css({'border-style': 'solid'});
$("#img01").css({'border-color': '#043370'});
$('#progreso01').hide();
$("#archivo").removeAttr('disabled');
$("#archivo").css({'cursor': 'pointer'});
$("#archivoruta1").attr('value','pictures/'+data.nombre_thumbnail+'');

                    } else {
                        mostrarRespuesta('El archivo NO se ha podido subir.', false);
                    }

                }, function(progreso, valor) {
                    $("#barra_de_progreso").val(valor);
$("#img01").css({'background-image': 'url(img/ajax.gif)'});
$("#img01").css({'background-repeat': 'no-repeat'});
$("#img01").css({'background-position': 'center'});
$('#progreso01').show();

                });
}

function subirArchivos2() {

$("#pic2").upload('subir_archivo2.php', { nombre_archivo: $("#nombre_archivo").val() }, function(data) {

$("#barra_de_progreso2").val(0);

if (data.respuesta === 1) {
$("#img02").css({'background-image': 'url(pictures/'+data.nombre_thumbnail+')'});
$("#img02").css({'background-repeat': 'no-repeat'});
$("#img02").css({'border-style': 'solid'});
$("#img02").css({'border-color': '#043370'});
$('#progreso02').hide();
$("#pic2").removeAttr('disabled');
$("#pic2").css({'cursor': 'pointer'});
$("#pic2ruta").attr('value','pictures/'+data.nombre_thumbnail+'');
} else {
    mostrarRespuesta('El archivo NO se ha podido subir.', false);
}

    }, function(progreso, valor) {

        $("#barra_de_progreso2").val(valor);
        $("#img02").css({'background-image': 'url(img/ajax.gif)'});
        $("#img02").css({'background-repeat': 'no-repeat'});
        $("#img02").css({'background-position': 'center'});
        $('#progreso02').show();

    });
}








function subirArchivos3() {

$("#pic3").upload('subir_archivo3.php', { nombre_archivo: $("#nombre_archivo").val() }, function(data) {

$("#barra_de_progreso3").val(0);

if (data.respuesta === 1) {
$("#img03").css({'background-image': 'url(pictures/'+data.nombre_thumbnail +')'});
$("#img03").css({'background-repeat': 'no-repeat'});
$("#img03").css({'border-style': 'solid'});
$("#img03").css({'border-color': '#043370'});
$('#progreso03').hide();
$("#pic3").removeAttr('disabled');
$("#pic3").css({'cursor': 'pointer'});
$("#pic3ruta").attr('value','pictures/'+data.nombre_thumbnail+'');
} else {
    mostrarRespuesta('El archivo NO se ha podido subir.', false);
}

    }, function(progreso, valor) {

        $("#barra_de_progreso3").val(valor);
        $("#img03").css({'background-image': 'url(img/ajax.gif)'});
        $("#img03").css({'background-repeat': 'no-repeat'});
        $("#img03").css({'background-position': 'center'});
        $('#progreso03').show();

    });
}






function subirArchivos4() {

$("#pic4").upload('subir_archivo4.php', { nombre_archivo: $("#nombre_archivo").val() }, function(data) {

$("#barra_de_progreso4").val(0);

if (data.respuesta === 1) {
$("#img04").css({'background-image': 'url(pictures/'+data.nombre_thumbnail +')'});
$("#img04").css({'background-repeat': 'no-repeat'});
$("#img04").css({'border-style': 'solid'});
$("#img04").css({'border-color': '#043370'});
$('#progreso04').hide();
$("#pic4").removeAttr('disabled');
$("#pic4").css({'cursor': 'pointer'});
$("#pic4ruta").attr('value','pictures/'+data.nombre_thumbnail+'');
} else {
    mostrarRespuesta('El archivo NO se ha podido subir.', false);
}

    }, function(progreso, valor) {

        $("#barra_de_progreso4").val(valor);
        $("#img04").css({'background-image': 'url(img/ajax.gif)'});
        $("#img04").css({'background-repeat': 'no-repeat'});
        $("#img04").css({'background-position': 'center'});
        $('#progreso04').show();

    });
}



function subirArchivos5() {

$("#pic5").upload('subir_archivo5.php', { nombre_archivo: $("#nombre_archivo").val() }, function(data) {

$("#barra_de_progreso5").val(0);

if (data.respuesta === 1) {
$("#img05").css({'background-image': 'url(pictures/'+data.nombre_thumbnail +')'});
$("#img05").css({'background-repeat': 'no-repeat'});
$("#img05").css({'border-style': 'solid'});
$("#img05").css({'border-color': '#043370'});
$('#progreso05').hide();
$("#pic5").removeAttr('disabled');
$("#pic5").css({'cursor': 'pointer'});
$("#pic5ruta").attr('value','pictures/'+data.nombre_thumbnail+'');
} else {
    mostrarRespuesta('El archivo NO se ha podido subir.', false);
}

    }, function(progreso, valor) {

        $("#barra_de_progreso5").val(valor);
        $("#img05").css({'background-image': 'url(img/ajax.gif)'});
        $("#img05").css({'background-repeat': 'no-repeat'});
        $("#img05").css({'background-position': 'center'});
        $('#progreso05').show();

    });
}






$(document).ready(function() {

if (window.webkitURL) {
   $("#archivo").attr('title', ' ');
   $("#pic2").attr('title', ' ');
   $("#pic3").attr('title', ' ');
   $("#pic4").attr('title', ' ');
   $("#pic5").attr('title', ' ');
}
else {
   $("#archivo").attr('title', '');
   $("#pic2").attr('title', '');
   $("#pic3").attr('title', '');
   $("#pic4").attr('title', '');
   $("#pic5").attr('title', '');
}


$('#progreso01').hide();
$('#progreso02').hide();
$('#progreso03').hide();
$('#progreso04').hide();
$('#progreso05').hide();



$("#archivo").on('change', function() {
    subirArchivos();
    $("#img01").css({'border-style': 'solid'});
    $("#img01").css({'border-color': '#EAF8F4'});
    $("#archivo").css({'cursor': 'wait'});
    $("#archivo").attr('disabled','disabled');
});

$("#pic2").on('change', function() {
subirArchivos2();
    $("#img02").css({'border-style': 'solid'});
    $("#img02").css({'border-color': '#EAF8F4'});
    $("#pic2").css({'cursor': 'wait'});
    $("#pic2").attr('disabled','disabled');
});

$("#pic3").on('change', function() {
subirArchivos3();
    $("#img03").css({'border-style': 'solid'});
    $("#img03").css({'border-color': '#EAF8F4'});
    $("#pic3").css({'cursor': 'wait'});
    $("#pic3").attr('disabled','disabled');
});

$("#pic4").on('change', function() {
subirArchivos4();
    $("#img04").css({'border-style': 'solid'});
    $("#img04").css({'border-color': '#EAF8F4'});
    $("#pic4").css({'cursor': 'wait'});
    $("#pic4").attr('disabled','disabled');
});

$("#pic5").on('change', function() {
subirArchivos5();
    $("#img05").css({'border-style': 'solid'});
    $("#img05").css({'border-color': '#EAF8F4'});
    $("#pic5").css({'cursor': 'wait'});
    $("#pic5").attr('disabled','disabled');
});




});

</script>




<script>
$(document).ready(function() {




});
</script>





<style type="text/css">
div.upload {
    width: 672px;
    height: 494px;
    background: url(img/big-img.png);
    overflow: hidden;
}

div.upload input {
    display: block !important;
    width: 672px !important;
    height: 494px !important;
    opacity: 0 !important;
    overflow: hidden !important;
}
</style>

</head>
<body>




       <div class="container2">
			<div class="header-container">
				<div style="margin:28px 0 0 0" class="left">
					<img src="img/logo_estrella.png" alt="INSTITUTO INGENES">
				</div>
				<div class="middle">
					<p>Tu estrella puede ser la nueva imagen institucional Ingenes</p>
					<img src="img/estrellas.png" alt="INSTITUTO INGENES">
				</div>
				<div class="right">
					<img style="margin: 58px 10px 0 0;" src="img/logo.png" alt="INSTITUTO INGENES">
				</div>
					
			</div>














<?php
if(!isset($_SESSION['logged_in']))
{
	/*
    echo '<div id="results">';
    echo '<!-- results will be placed here -->';
    echo '</div>';
    echo '<div id="LoginButton">';
	echo '<a href="#" rel="nofollow" class="fblogin-button" onClick="javascript:CallAfterLogin();return false;">Login with Facebook</a>';
    echo '</div>';
*/

echo '
			<div class="centro">
				<p class="green">Participa mandando fotos de tu bebé</p>
				<p class="blue">puedes ganar una sesión de fotos</p>
';


    echo '<div id="results">';
    echo '<!-- results will be placed here -->';
    echo '</div>';
    echo '<div id="LoginButton">';
	  echo '<a href="#" rel="nofollow" class="fblogin-button" onClick="javascript:CallAfterLogin();return false;"></a>';
    echo '</div>';
echo '</div>';
}
else
{
	//echo 'Hi '. $_SESSION['user_name'].'! You are Logged in to facebook, <a href="?logout=1">Log Out</a>.';
	//echo 'no se que pasa jaja';
?>
<form id="formulario_condiciones" action="" method="post">
<input type="hidden" name="facebookiduser" id="facebookiduser" value="<?php echo $_SESSION['facebookiduser']; ?>" readonly />




<div class="centro2">
              <div class="margin">
                <h3 class="blue2">Acepta las bases para participar</h3>
                <p class="justify">Fecha límite para recepción de fotografías 5 de noviembre 2014</p>
                
                <p class="justify">Sólo participan bebés Ingenes</p>
                
                <p class="justify">No hay límite de edad</p>
                
                <p class="justify">Todas las fotografías participan</p>
                
                <p class="justify">En caso de mas de un bebé, subir las fotos de manera individual</p>
                
                <p class="justify">Las fotografías pueden ser de cara o cuerpo completo</p>
                <p class="justify">Las fotografías no deben tener algún tipo de efecto o filtro</p>
                <p class="justify">Las fotografías seleccionadas serán parte de la imagen corporativa de Ingenes</p>
                <p class="justify">Las fotografías no seleccionadas para imagen corporativa podrán utilizarse en alguna otra campaña con previo aviso a los papás</p>
                <p class="justify">A quienes resulten seleccionados se les realizará una sesión fotográfica el sábado 08 de noviembre de 2014 de 10 de la mañana a 2 de la tarde, Ingenes indicará el lugar exacto al contactarlos</p>
                <p class="justify">Los derechos de uso de las fotografías quedan reservados a nombre de Ingenes</p>
                <p class="justify">Los bebés seleccionados recibirán la sesión fotográfica de cortesía  además de un regalo sorpresa</p>
                
              <div class="next">
               <div class="text-left" style="float:left">
               <a href="index.php" ><img src="img/back_bttn.png" alt="no_acepto"></a>
                <a href="?logout=1"><img src="img/no-acepto.png" alt="no_acepto"></a>
                <input type=image src="img/acepto.png" width="150px" height="34px" >

               </div>
               <div style="float:right">
               	<input id="avisos" type="checkbox" style="width:20px" value="He leído los avisos de privacidad" required><label>He leído el aviso de privacidad</label>
                <a href="http://www.ingenes.com/MX.pdf">D.F.</a> | <a href="http://www.ingenes.com/GDL.pdf">Guadalajara</a>
               </div>
              </div>
              </div><!-- margin -->
            </div>







</form>
<?php } ?>





			<div class="footer2">
				<p>Reservados todos los derechos 2014 Instituto Ingenes</p>
			</div>
	   </div><!-- container -->






<div id="fb-root"></div>
<script type="text/javascript">
window.fbAsyncInit = function() {
	FB.init({
		appId: '<?php echo $appId; ?>',
		cookie: true,xfbml: true,
		channelUrl: '<?php echo $return_url; ?>channel.php',
		oauth: true
		});
	};
(function() {
	var e = document.createElement('script');
	e.async = true;e.src = document.location.protocol +'//connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);}());

function CallAfterLogin(){
	FB.login(function(response) {		
		if (response.status === "connected") 
		{
			LodingAnimate(); //Animate login
			FB.api('/me', function(data) {
				
			  if(data.email == null)
			  {
					//Facbeook user email is empty, you can check something like this.
					alert("You must allow us to access your email id!"); 
					ResetAnimate();

			  }else{
					AjaxResponse();
			  }
			  
		  });
		 }
	},
	{scope:'<?php echo $fbPermissions; ?>'});
}

//functions
function AjaxResponse()
{
	 //Load data from the server and place the returned HTML into the matched element using jQuery Load().
	 $( "#results" ).load( "process_facebook.php" );
}

//Show loading Image
function LodingAnimate() 
{
	$("#LoginButton").hide(); //hide login button once user authorize the application
	$("#results").html('<img src="img/ajax-loader.gif" /> Please Wait Connecting...'); //show loading image while we process user
}

//Reset User button
function ResetAnimate() 
{
	$("#LoginButton").show(); //Show login button 
	$("#results").html(''); //reset element html
}

</script>

</body>
</html>