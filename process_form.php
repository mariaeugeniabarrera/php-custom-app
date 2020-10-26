<?php
//header("Content-Type: text/html; charset=utf-8");
include_once("config.php");


if(!empty($_POST)) {

    if (isset($_POST["facebookiduser"])) {
	    if (!empty($_POST["facebookiduser"])) {
		   $_POST["facebookiduser"] = filter_var($_POST["facebookiduser"], FILTER_SANITIZE_NUMBER_INT);
		   if (!empty($_POST["facebookiduser"])) {
			   $facebookiduser = $_POST["facebookiduser"];
		   }
	    }
    }


    if (isset($_POST["nombre"])) {
	    if (!empty($_POST["nombre"])) {
		   $_POST["nombre"] = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["nombre"])) {
			   $nombre = $_POST["nombre"];
		   }
	    }
    }
		$nombre = utf8_decode($nombre);


    if (isset($_POST["apellido"])) {
	    if (!empty($_POST["apellido"])) {
		   $_POST["apellido"] = filter_var($_POST["apellido"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["apellido"])) {
			   $apellido = $_POST["apellido"];
		   }
	    }
    }
		$apellido = utf8_decode($apellido);


    if (isset($_POST["email"])) {
	    if (!empty($_POST["email"])) {
		   $_POST["email"] = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
		   if (!empty($_POST["email"])) {
			   $email = $_POST["email"];
		   }
	    }
    }
		$email = utf8_decode($email);


    if (isset($_POST["nombrebebe"])) {
	    if (!empty($_POST["nombrebebe"])) {
		   $_POST["nombrebebe"] = filter_var($_POST["nombrebebe"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["nombrebebe"])) {
			   $nombrebebe = $_POST["nombrebebe"];
		   }
	    }
    }
		$nombrebebe = utf8_decode($nombrebebe);


    if (isset($_POST["telcasa"])) {
	    if (!empty($_POST["telcasa"])) {
		   $_POST["telcasa"] = filter_var($_POST["telcasa"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["telcasa"])) {
			   $telcasa = $_POST["telcasa"];
		   }
	    }
    }
		$telcasa = utf8_decode($telcasa);


    if (isset($_POST["telcel"])) {
	    if (!empty($_POST["telcel"])) {
		   $_POST["telcel"] = filter_var($_POST["telcel"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["telcel"])) {
			   $telcel = $_POST["telcel"];
		   }
	    }
    }
		$telcel = utf8_decode($telcel);


    if (isset($_POST["clavenhc"])) {
	    if (!empty($_POST["clavenhc"])) {
		   $_POST["clavenhc"] = filter_var($_POST["clavenhc"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["clavenhc"])) {
			   $clavenhc = $_POST["clavenhc"];
		   }
	    }
    }
		$clavenhc = utf8_decode($clavenhc);

    if (isset($_POST["archivoruta1"])) {
	    if (!empty($_POST["archivoruta1"])) {
		   $_POST["archivoruta1"] = filter_var($_POST["archivoruta1"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["archivoruta1"])) {
			   $archivoruta1 = $_POST["archivoruta1"];
		   }
	    }
    }
		$archivoruta1 = utf8_decode($archivoruta1);


    if (isset($_POST["pic2ruta"])) {
	    if (!empty($_POST["pic2ruta"])) {
		   $_POST["pic2ruta"] = filter_var($_POST["pic2ruta"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["pic2ruta"])) {
			   $pic2ruta = $_POST["pic2ruta"];
		   }
	    }
    }
		$pic2ruta = utf8_decode($pic2ruta);


    if (isset($_POST["pic3ruta"])) {
	    if (!empty($_POST["pic3ruta"])) {
		   $_POST["pic3ruta"] = filter_var($_POST["pic3ruta"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["pic3ruta"])) {
			   $pic3ruta = $_POST["pic3ruta"];
		   }
	    }
    }
		$pic3ruta = utf8_decode($pic3ruta);


    if (isset($_POST["pic4ruta"])) {
	    if (!empty($_POST["pic4ruta"])) {
		   $_POST["pic4ruta"] = filter_var($_POST["pic4ruta"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["pic4ruta"])) {
			   $pic4ruta = $_POST["pic4ruta"];
		   }
	    }
    }
		$pic4ruta = utf8_decode($pic4ruta);


    if (isset($_POST["pic5ruta"])) {
	    if (!empty($_POST["pic5ruta"])) {
		   $_POST["pic5ruta"] = filter_var($_POST["pic5ruta"], FILTER_SANITIZE_STRING);
		   if (!empty($_POST["pic5ruta"])) {
			   $pic5ruta = $_POST["pic5ruta"];
		   }
	    }
    }
		$pic5ruta = utf8_decode($pic5ruta);



/* connect to mysql using mysqli */

	$mysqli = new mysqli($hostname, $db_username, $db_password,$db_name);
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	//Check user id in our database
	$UserCount = $mysqli->query("SELECT COUNT(id) as usercount FROM usertable WHERE fbid=$facebookiduser")->fetch_object()->usercount;

if($UserCount)
{

$mysqli->query("UPDATE usertable SET bebename='$nombrebebe',padrenombre='$nombre',padreapellido='$apellido',telefonocasa='$telcasa',telefonocelular='$telcel',nhc='$clavenhc',email='$email',pic1='$archivoruta1',pic2='$pic2ruta',pic3='$pic3ruta',pic4='$pic4ruta',pic5='$pic5ruta' WHERE fbid=$facebookiduser");




//$mysqli->query("INSERT INTO usertable (fbid, fullname, email) VALUES ($uid, '$fullname','$email')");
}
else
{
		// Insert user into Database.
		//$mysqli->query("INSERT INTO usertable (fbid, fullname, email) VALUES ($uid, '$fullname','$email')");
}

$mysqli->close();




   echo json_encode(array(
                'error' => false,
            ));
            exit;
} else {
	   echo json_encode(array(
                'error' => true,
                'msg'   => "You haven't completed all required fileds!"
            ));
            exit;
}


?>