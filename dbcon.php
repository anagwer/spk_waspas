<?php
	$conn = new mysqli('localhost', 'root', '', 'db_spk_waspas');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	
<?php
// Database configuration 	
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname   = "db_spk_waspas";
 
$con = new mysqli($hostname, $username, $password, $dbname); 
 
if ($con->connect_error) { 
	die("Connection failed: " . $con->connect_error); 
}

?>