<!--
	FILE: newevent.php
	AUTHOR: Richard Mipana
	DESCRIPTION: Gathers user inputs from the create event form and inserts them into the MySQL DB
 -->

<?php

require_once 'config/db.php';

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

if(!$link) {

    die('could not connect: ' . mysql_error());
} 

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

/* prevent XSS. */
$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$event_name  = $_POST['event_name'];
$location    = $_POST['location'];
$start_date  = $_POST['start_date'];
$start_time  = $_POST['start_time'];
$end_date    = $_POST['end_date'];
$end_time    = $_POST['end_time'];
$descrip     = $_POST['descrip'];
$event_cost  = $_POST['event_cost'];
$free_event  = $_POST['free_event'];
$cat         = $_POST["cat"];
$org_name    = $_POST["org_name"];
$event_url   = $_POST["event_url"];
$org_email   = $_POST["org_email"];
$ticket_url  = $_POST["ticket_url"];
$banner      = $_POST["banner"];
$thumb       = $_POST["thumb"];

// print_r($_POST);

// write event info into databse
$sql = "INSERT INTO events (event_name, location, start_date, start_time, end_date, end_time, descrip, event_cost, free_event, cat, org_name, event_url, org_email, ticket_url, banner, thumb)
        VALUES('" . $event_name . "', '" . $location . "', '" . $start_date . "', '" . $start_time . "', '" . $end_date . "', '" . $end_time . "', '" . $descrip . "', '" . $event_cost . "', '" . $free_event . "', '" . $cat . "', '" . $org_name . "', '" . $event_url . "', '" . $org_email . "', '" . $ticket_url . "', '" . $banner . "', '" . $thumb . "');";

if (!mysql_query($sql)) {

    die('Error: ' . mysql_error());

} else {

    include("views/template/head.php");
    include("views/template/nav.php");
    include("views/new_event_info.php");
}



mysql_close();