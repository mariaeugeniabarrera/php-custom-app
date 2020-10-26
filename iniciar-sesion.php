<?php 
	session_start();
	if(isset($_SESSION['logged_in'])){
		header('Location: '.'http://ingenes.xtrategia.net/ingenesbebe/');
		die();
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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
        <script>
			/*$(document).ready(function(e) {
                
				$('#loginForm').on('submit', function (e) {
				  e.preventDefault();
		
				  $.ajax({
					type: 'post',
					url: 'custom-login.php',
					data: $('form').serialize(),
					success: function (response) {
						console.log(response);
					  if(response == 1){
							window.location = "http://ingenes.xtrategia.net/ingenesbebe";
						}
					 if (response == 2){
							alert('El E-mail ingresado no existe');
					  }
					}
				  });
		
				});
				
            });*/
				
		
        </script>

</head>

<body>

 <body>
	
       <div class="container">
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
			

		


			<div class="centro">
            	<p class="green">Inicia sesión con tu E-mail</p>
				<form action="custom-login.php" method="POST" id="loginForm">
                    <input style="margin:5px 0 5px 0" type="email" name="email" id="email" placeholder="E-mail" required>
                    <div class="next">
						<input style="margin:10px 0; height:34px; width:163px; background-color:#FFF; background-image:url(img/iniciarsesion_bttn.png);border:none;" id="iniciar_sesion_bttn" type="submit" value=""><br>
                        <a href="index.php" ><img src="img/back_bttn.png" alt="no_acepto"></a>
                    </div>
                </form>
</div>









			
			<div class="footer">
				<p>Reservados todos los derechos 2014 Instituto Ingenes</p>
			</div>
	   </div><!-- container -->
	</body>












<div id="fb-root"></div>

</body>
</html>