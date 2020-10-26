<?php
session_start();
include_once("config.php");

if(isset($_GET["logout"]) && $_GET["logout"]==1)
{
	//Cerrar sesion, destrulle todas las variables de sesion.
	session_destroy();
	header('Location: '.$return_url);
}
?>


<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en-gb" lang="en-gb" >
<head>

        <title>INSTITUTO INGENES - PROMOCIÓN BEBÉ INGENES</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


<meta property="og:title" content="INSTITUTO INGENES - PROMOCIÓN BEBÉ INGENES" />
<meta property="og:description" content="Sube la foto de tú bebé y participa para ser el próximo Bebé Ingenes" />
<meta property="og:image" content="http://www.ingenes.xtrategia.net/ingenesbebe/img/foto_bebe.jpg" />


<link rel="image_src" href="http://www.ingenes.xtrategia.net/ingenesbebe/img/foto_bebe.jpg" />


        <meta name="description" content="Sube la foto de tú bebé y participa para ser el próximo Bebé Ingenes">
        <meta name="viewport" content="width=device-width, initial-scale=1">

				<link href="style/buttonstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
        <script>
        </script>

</head>

<body>

 <body>
	
       <div class="container">
			<div class="header-container">
				<div id="logobebe" class="left">
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
// Botón de inicio de sesión

echo '
			<div class="centro">
				<p class="green">Ingenes inaugurará las instalaciones<br> más modernas y grandes de Latinoamérica</p>
				<div id="results"></div>
				<!--<p class="blue">puedes ganar una sesión de fotos</p>-->
';

    echo '<div id="LoginButton">';
	  echo '<a href="#" rel="nofollow" class="fblogin-button" onClick="javascript:CallAfterLogin();return false;"></a>';
    echo '</div>';
	echo '<div id="registerButton">';
	  echo '<a href="register.php" class="register-button" ></a>';
    echo '</div>';
echo '</div>';
}
else
{
// Si ya esta logeado se ejecuta esta parte del código fuente
// echo 'Hi '. $_SESSION['user_name'].'! You are Logged in to facebook, <a href="?logout=1">Log Out</a>.';
// echo 'no se que pasa jaja';

echo '
			<div class="centro">
				<p class="green">Ingenes inaugurará las instalaciones<br> más modernas y grandes de Latinoamérica<br><br>
Hola de Nuevo... '.$_SESSION['user_name'].'
				</p>
				<!--<p class="blue">puedes ganar una sesión de fotos</p>-->
';
echo '

<div class="next">
<a href="bases_para_participar.php"> <img src="img/siguiente.png" alt="siguiente"></a>
</div>
';
echo '</div>';
}
?>








			
			<div class="footer">
				<p>Reservados todos los derechos 2014 Instituto Ingenes</p>
			</div>
	   </div><!-- container -->
	</body>












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
	$("#results").html('<img src="img/ajax-loader.gif" /> Conectando... por favor espere un momento.'); //show loading image while we process user
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