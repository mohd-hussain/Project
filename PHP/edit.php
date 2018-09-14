<?php 



function fix_name($name){
	$name=trim($name);
	$name=ucfirst($name);
	$name=addslashes($name);
	return $name;
}

function fix_email($email){
	$email=trim($email);
	$email=ucfirst($email);
	$$email=addslashes($email);
	return $email;
}

function fix_address($address){
	$adress=trim($address);
	$adress=ucfirst($address);
	$$adress=addslashes($address);
	return $address;
}




$link=null;

/*function connectdB(){

	$db_host="localhost";

	$db_user="root";

	$db_password="root";

	$db_name='AIKTC';

	global $link;
	$link=mysql_connect($db_host,$db_user,$db_password) or die(mysqli_error());

	mysql_select_db($link,$db_name) or die(mysqli_error());
}

function queryMysql($query){
	connectdB();
	global $link;
	$result= mysqli_query($link,$query);
	if($result){
		echo '<div class="alert alert-danger">Failed to execute query<br>Mysql Error: '.mysqli_error($link).'</div>';
		die();
	}
	mysql_close($link);
	return $result;
}
	}
}

?>