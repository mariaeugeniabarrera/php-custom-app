<?php 
	
	session_start();
	include_once("config.php"); //Include configuration file.
	
	$u_fname = $_POST['first_name'];
	$u_lname = $_POST['last_name'];
	$u_email = $_POST['email'];
	$u_fullname = $u_fname.' '.$u_lname;
	
	$mysqli = new mysqli($hostname, $db_username, $db_password,$db_name);
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	$result = $mysqli->query("SELECT id FROM usertable WHERE email = '$u_email'");
	
	if ($result->num_rows > 0) {
    // output data of each row
	$response = 1;
    echo $response; //"Ya registrado";
	} else {
		$response = 2;
		if($mysqli->query("INSERT INTO usertable (fbid, fullname, email) VALUES (0, '$u_fullname','$u_email')")){
			//echo "Success";
			$_SESSION['logged_in']= true;
			$_SESSION['user_name']=$u_fullname;
			$_SESSION['email']=$u_email;
			$_SESSION['first_name']=$u_fname;
			$_SESSION['last_name']=$u_lname;
			$_SESSION['facebookiduser']=0;
			$mysqli->close();
			echo $response;
		}else{
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
	}
	$mysqli->close();

?>