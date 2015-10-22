<?php

define("DB_HOST", "localhost");
define("DB_NAME", "event_hub");
define("DB_USER", "root");
define("DB_PASS", "root");

//connect to the DB
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

if(!$link) {

    die('could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
} else {
	$sql = "SELECT * FROM events WHERE id = " . $_GET['id'];

	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Styles and Themes -->
	
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/dropzone.min.css">
	<link rel="stylesheet" href="./css/custom.css">
	
	<!-- JS -->
	<script src="./js/dropzone.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  	<!-- Favicon -->
	<link rel="icon" type="image/png" href="http://res.cloudinary.com/lhmjwgaqs/image/upload/v1444948985/favicon-16x16_txrzal.png" sizes="16x16" />

	<!-- Dynamic Event Page Title -->
	<title><?php echo $row['event_name']; ?></title>
</head>
<body>

<?php
		
	}

	
	mysql_close();
}



?>
