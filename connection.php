<?php
 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'php_crud' ) or die(mysqli_error($db));
?>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "php_crud";
	//Create connection
	$con = mysqli_connect($servername,$username,$password,$database);
	//Check connection
	if($con===FALSE)
	{
		die("Connection Failed! ".$con->connect_error);
	}
?>