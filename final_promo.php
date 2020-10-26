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
<?php
/* connect to mysql using mysqli */

$facebookiduser=$_SESSION['facebookiduser'];

  $mysqli = new mysqli($hostname, $db_username, $db_password,$db_name);
  if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }





//if ($resultado = $mysqli->query("SELECT * FROM usertable WHERE fbid=$facebookiduser")) {
   // printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    /* liberar el conjunto de resultados */
   // $resultado->close();
//}

if ($resultado = $mysqli->query("SELECT * FROM usertable WHERE fbid=$facebookiduser")) {

  $fila = $resultado -> fetch_array();

  $nombre_bebe = utf8_encode($fila["bebename"]);
  $foto_bebe = utf8_encode($fila["pic1"]);
  $foto_bebe = "http://ingenes.xtrategia.net/ingenesbebe/$foto_bebe";

    /* liberar el conjunto de resultados */
    $resultado->close();
}


  //Check user id in our database
  $UserCount = $mysqli->query("SELECT COUNT(id) as usercount FROM usertable WHERE fbid=$facebookiduser")->fetch_object()->usercount;

if($UserCount)
{

}
else
{

}

$mysqli->close();
?>

<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en-gb" lang="en-gb" >
<head>

        <title>INSTITUTO INGENES</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">





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
              <div class="margin2">
                    <p class="big strong">¡Felicidades!</p>
                    <h2 class="blue2">Gracias por participar.<br>Estaremos en contacto contigo para que tu estrella sea parte de la <span class="green2">imagen institucional</span></h2>
                    
                    
                    <div class="content-img">
                        <div class="caja-img">
                            <img src="img/foto_bebe.jpg" alt="INSTITUTO INGENES">
                        </div><!-- caja-img -->
                    </div><!-- content-img -->

                    <?php
                    $url_facebook= "http://www.facebook.com/sharer.php?u=http://ingenes.xtrategia.net/ingenesbebe/index.php&p[images][0]=$foto_bebe";
                    ?>
                      <div class="next">
                      <a href="javascript:void();" onclick="window.open('<?php echo $url_facebook; ?>','','width=650,height=350');">
                        <img src="img/compartir_en_muro.png" alt="INSTITUTO INGENES">
                      </a>
                      <div>
                      	<a href="index.php"><img src="img/new_bttn.png" alt="Nuevo registro"></a>
                      <a href="http://www.ingenes.com/"><img src="img/goto_bttn.png" alt="ingenes.com"></a>
                      </div>
                      </div><!-- next -->
                      
              </div><!-- margin -->
            </div><!-- centro2 -->







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