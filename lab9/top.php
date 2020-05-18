<!--CS008 Lab 7 - top.php-->

<?php
	// parse the url into htmlentities to remove any suspicious vales that someone
	// may try to pass in. htmlentities helps avoid security issues.

	$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

	// break the url up into an array, then pull out just the filename
	$path_parts = pathinfo($phpSelf);

	// Database info
	$databaseName = 'BVENTURA_cs008-final';
	$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
	$dbUserName = "bventura_writer"; 
	$dbPassword = "0owdQGWyHD0x";
	$pdo = new PDO($dsn, $dbUserName, $dbPassword);
 ?>	

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Ben Ventura CS008</title>
		<meta charset="UTF-8">
		<meta name="author" content="Ben Ventura">
		<meta name="description" content="CS008 Class Lab Work">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/custom.css?version=1.0" type="text/css">
	</head>
	<?php
		// giving each body tag an id really helps with css later on
        print '<body id="' . $path_parts['filename'] . '">';
    ?>