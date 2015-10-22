<?php
// Load DB config
require_once 'config/db.php';

//connect to the DB
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

// if not connected -> error
if(!$link) {

    die('could not connect: ' . mysql_error());
}

// Select DB
$db_selected = mysql_select_db(DB_NAME, $link);

// If db not selected -> error
if (!$db_selected) {
    die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
} else {
	// mysql statement to select all from events table
	$sql = "SELECT * FROM events WHERE id = " . $_GET['id'];

	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result)){
		//print_r($_GET);
		
		//format date and time from mysql db
		$startdate = date_create($row['start_date']);
		$enddate = date_create($row['start_date']);
		$starttime = date_create($row['start_time']);
		$endtime = date_create($row['end_date']);
		
	?>
	<!-- MAP -->
    <script>
    	var marker;

		function initMap() {
		  var map = new google.maps.Map(document.getElementById('map'), {
		    zoom: <?php if(isset($row['lat'])) {
				  	echo '15';
				  } else {
					echo '11.4';
				  } ?>,
		    center: {lat: <?php if(isset($row['lat'])) { 
									echo $row['lat'];
								} else {
									echo '41.8797183';
								} ?>, 
					lng: <?php if(isset($row['lng'])) {
									echo $row['lng'];
								} else {
									echo '-87.6220567';
								} ?>}
		  });

		  marker = new google.maps.Marker({
		    map: map,
		    draggable: true,
		    animation: google.maps.Animation.DROP,
		    position: {lat: <?php if(isset($row['lat'])) {
									echo $row['lat'];
								} else {
									echo '41.8797183';
								} ?>, 
					lng: <?php if(isset($row['lng'])) {
									echo $row['lng'];
								} else {
									echo '-87.6220567';
								} ?>}
		  });
		  marker.addListener('click', toggleBounce);
		}

		function toggleBounce() {
		  if (marker.getAnimation() !== null) {
		    marker.setAnimation(null);
		  } else {
		    marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj2oEabzFYdkkloLW8sQhPJ6yxhaQ-bzE&callback=initMap"></script>
	
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="#"><?php echo $row['event_name']; ?></a></li>
</ol>

<div class="container-fluid banner info_banner">
	<div class="item">
        <img id="hero" src="<?php echo $row['banner']; ?>">
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<!-- <img src="img/event_imgs/lolla-logo.png" alt="Lolla Logo"> -->
			<p class="info"> <?php echo $row['descrip']; ?> </p>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 details">
					<h2>Details</h2>
					<p>When: <?php echo $row['start_date']; ?></p><br>
					<p>Time: <?php echo $row['start_time'] . " - " . $row['end_time']; ?></p><br>
					<p>Location: <?php echo $row['location']; ?></p><br>
					<p>Price of Admission: <?php echo $row['event_cost']; ?></p><br>
					<p>
						<?php
						if(empty($row['event_url'])){
							echo '';
						} else {
							echo '<a href="' . $row['event_url'] . '"target="_blank"><em>Official Page of Event</em></a>';
						}
						?>
					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 action_buttons">
					<?php 
						if(empty($row['ticket_url'])){
							echo '';
						} else {
							echo '<a href="' . $row['ticket_url'] . '"target="_blank"><button type="button" class="action">Buy Tickets</button></a><br>';
						}
					?>
					<?php
					echo '<a href="mailto:' . $row['org_email'] . '?subject=' . $row['event_name'] . '%20on%20' . date_format($startdate, 'm/d/Y') . '" target="_top"><button type="button" class="action">Contact Organizer</button></a><br>'
					?>
				</div>
			</div>

		</div>
		<div id="map" class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-12 map">
			
		</div>
	</div>
</div>



<?php
	}	
	mysql_close();
}
?>






