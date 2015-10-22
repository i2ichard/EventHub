<?php
require_once 'config/db.php';


//connect to the DB
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error) {
    die('could not connect: ' . $conn->connect_error);
} else {

	if(isset($_GET['category']) && isset($_GET['price'])){

		$category = $conn->escape_string($_GET['category']);
		$price = $conn->escape_string($_GET['price']);
		// $when = $conn->escape_string($_GET['when']);

		$query = $conn->query("
				SELECT id, thumb, event_name, location, descrip 
				FROM events
				WHERE cat = '$category'
				AND event_cost <= $price
			;");

	}
	?>
	<ol class="breadcrumb">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="#" class="disabled" onclick='location.reload(true); return false;'>Filtered Results</a></li>
	</ol>

	<div class="container">
		<div class="row">
			<h3>Found <?php echo $query->num_rows; ?> filtered result(s).</h3>
		</div>
		
	</div>

<?php
	if($query->num_rows){
		while($r = $query->fetch_object()) {
			?>
			<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 events">
				<?php echo "<a href=eventinfo.php?id='" . $r->id . "'><img class='thumb' src='" . $r->thumb . "' alt='" . $r->event_name . "'></a>"; ?>
			</div>


<?php
	}
  }
}		
?>