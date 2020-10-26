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

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
        <script type="text/javascript" src="js/form.js"> </script>


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
    width: 161px;
    height: 161px;
    background: url(img/cargar-fotos.png);
    overflow: hidden;
}

div.upload input {
    display: block !important;
    width: 161px !important;
    height: 161px !important;
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
<form id="formulariodatos" action="" method="post">

			<div class="centro2">
			  <div class="marginlist">


<?php
/* connect to mysql using mysqli */

$facebookiduser=$_SESSION['facebookiduser'];
$email = $_SESSION['email'];

  $mysqli = new mysqli($hostname, $db_username, $db_password,$db_name);
  if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }





//if ($resultado = $mysqli->query("SELECT * FROM usertable WHERE fbid=$facebookiduser")) {
   // printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    /* liberar el conjunto de resultados */
   // $resultado->close();
//}

if ($resultado = $mysqli->query("SELECT * FROM usertable WHERE email='$email'")) {

  $fila = $resultado -> fetch_array();

echo '<h1 class="blue2 weight">'.utf8_encode($fila["bebename"]).'</h1>';
echo "
<script type='text/javascript'>
$(document).ready(function() {


$('#img01').css({'background-image': 'url(".utf8_encode($fila["pic1"]).")'});
console.log('".utf8_encode($fila["pic1"])."');
$('#img01').css({'background-repeat': 'no-repeat'});
$('#img01').css({'border-style': 'solid'});
$('#img01').css({'border-color': '#043370'});

$('#img02').css({'background-image': 'url(".utf8_encode($fila["pic2"]).")'});
if('".utf8_encode($fila["pic2"])."' == ''){
	$('#img02').hide();
}
$('#img02').css({'background-repeat': 'no-repeat'});
$('#img02').css({'border-style': 'solid'});
$('#img02').css({'border-color': '#043370'});


$('#img03').css({'background-image': 'url(".utf8_encode($fila["pic3"]).")'});
if('".utf8_encode($fila["pic3"])."' == ''){
	$('#img03').hide();
}
$('#img03').css({'background-repeat': 'no-repeat'});
$('#img03').css({'border-style': 'solid'});
$('#img03').css({'border-color': '#043370'});


$('#img04').css({'background-image': 'url(".utf8_encode($fila["pic4"]).")'});
if('".utf8_encode($fila["pic4"])."' == ''){
	$('#img04').hide();
}
$('#img04').css({'background-repeat': 'no-repeat'});
$('#img04').css({'border-style': 'solid'});
$('#img04').css({'border-color': '#043370'});

$('#img05').css({'background-image': 'url(".utf8_encode($fila["pic5"]).")'});
if('".utf8_encode($fila["pic5"])."' == ''){
	$('#img05').hide();
}
$('#img05').css({'background-repeat': 'no-repeat'});
$('#img05').css({'border-style': 'solid'});
$('#img05').css({'border-color': '#043370'});



});
</script>
";

    /* liberar el conjunto de resultados */
    $resultado->close();
}




  //Check user id in our database
  $UserCount = $mysqli->query("SELECT COUNT(id) as usercount FROM usertable WHERE email='$email'")->fetch_object()->usercount;

if($UserCount)
{

//$mysqli->query("SELECT * FROM usertable WHERE fbid=$facebookiduser");




//$mysqli->query("INSERT INTO usertable (fbid, fullname, email) VALUES ($uid, '$fullname','$email')");
}
else
{
    // Insert user into Database.
    //$mysqli->query("INSERT INTO usertable (fbid, fullname, email) VALUES ($uid, '$fullname','$email')");
}

$mysqli->close();
?>

<input type="hidden" value="<?php echo $_SESSION['first_name']; ?>" size="20" name="nombre" id="nombre" required>
<input type="hidden" value="<?php echo $_SESSION['last_name']; ?>" size="20" name="apellido" id="apellido" required>
<input type="hidden" value="<?php echo $_SESSION['email']; ?>" size="20" name="email" id="email" readonly>
<input type="hidden" value="" size="20" name="nombrebebe" id="nombrebebe" required>
<input type="hidden" value="" size="20" name="telcasa" id="telcasa">
<input type="hidden" value="" size="20" name="telcel" id="telcel" required>
<input type="hidden" value="" size="20" name="clavenhc" id="clavenhc" required>


        <div class="content-img">
<!--
<form action="" method="post" id="contactForm" class="dl_form">
<form id="audioconferencia" action="javascript:validateCaptcha()" method="post">
-->

<input type="hidden" name="nombre_archivo" id="nombre_archivo" value="" readonly />
<input type="hidden" name="facebookiduser" id="facebookiduser" value="<?php echo $_SESSION['facebookiduser']; ?>" readonly />
<input type="hidden" name="archivoruta1" id="archivoruta1" value="" readonly />
<input type="hidden" name="pic2ruta" id="pic2ruta" value="" readonly />
<input type="hidden" name="pic3ruta" id="pic3ruta" value="" readonly />
<input type="hidden" name="pic4ruta" id="pic4ruta" value="" readonly />
<input type="hidden" name="pic5ruta" id="pic5ruta" value="" readonly />



            	<div class="grupoimg">
                    <div id="img01" class="upload">
                    <div id="archivo">
                    </div>
                    <!--input type="file" name="archivo" id="archivo" style="cursor:pointer" required/-->
					</div>
                    <div id="progreso01">
                     <progress id="barra_de_progreso" value="0" max="100"></progress>
                    </div>
                </div>


                <div class="grupoimg">
					<div id="img02" class="upload">
          <div id="pic2">
          </div>
					<!--input type="file" name="fotopic2" id="pic2" style="cursor:pointer"/-->
					</div>
                    <div id="progreso02">
                     <progress id="barra_de_progreso2" value="0" max="100"></progress>
                    </div>
                </div>


                <div class="grupoimg">
                    <div id="img03" class="upload">
                    <div id="pic3">
                    </div>
                    <!--input type="file" name="fotopic3" id="pic3" style="cursor:pointer"/-->
                    </div>
                    <div id="progreso03">
                     <progress id="barra_de_progreso3" value="0" max="100"></progress>
                    </div>
                </div>


                <div class="grupoimg">
                    <div id="img04" class="upload">
                    <div id="pic4">
                    </div>
                    <!--input type="file" name="fotopic4" id="pic4" style="cursor:pointer"/-->
                    </div>
                    <div id="progreso04">
                     <progress id="barra_de_progreso4" value="0" max="100"></progress>
                    </div>
                </div>


                <div class="grupoimg">
                    <div id="img05" class="upload">
                    <div id="pic5">
                    </div>
                    <!--input type="file" name="fotopic5" id="pic5" style="cursor:pointer"/-->
                    </div>
                    <div id="progreso05">
                     <progress id="barra_de_progreso5" value="0" max="100"></progress>
                    </div>
                </div>




				</div>



 <div class="next">
<!-- <input type=image src="img/siguiente.png" width="149px" height="34px"> -->
</form>
				</div>

<?php

echo'

			  </div><!-- margin -->


			</div>
';
}







?>


<div class="centro" style="height: 100px;">
                    	<a href="subirimagenes.php" style="float:left"><img src="img/back_bttn.png" alt="no_acepto"></a>
                            <div class="nextr">
                            <a href="datos_contacto.php"><img src="img/siguiente.png" alt="acepto"></a>
                            </div><!-- next -->
                    </div><!-- end centro -->

			<div class="footer">
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