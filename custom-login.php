<?php 
	
	session_start();
	include_once("config.php"); //Include configuration file.
	$u_email = $_POST['email'];
	
	$mysqli = new mysqli($hostname, $db_username, $db_password,$db_name);
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	$result = $mysqli->query("SELECT id FROM usertable");
	$sql = "SELECT id FROM usertable";
	$result=mysql_query($sql);

	if($result!=NULL){
	   if(mysql_num_rows($result)>0){
		  while($row=mysql_fetch_array($result)){
			 //here you can work with the results...
			 echo "ID: ".$row['id'];
		  }
	   }else{
		  //no results, you can put a message here...
	   }
	   mysql_free_result($result);
	}
	
	mysql_close();

?>