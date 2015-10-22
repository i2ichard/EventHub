<!-- Cloudinary Image upload scripts -->
<?php echo cloudinary_js_config(); ?>
<?php
  if (array_key_exists('REQUEST_SCHEME', $_SERVER)) {
    $cors_location = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] .
  dirname($_SERVER["SCRIPT_NAME"]) . "/cloudinary_cors.html";
  } else {
    $cors_location = "http://" . $_SERVER["HTTP_HOST"] . "/cloudinary_cors.html";
  }
?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="top_header">Create An Event</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9 move-right">
			<form method="post" action="newevent.php">

				<div class="form-group">
			    	<label for="eventName">Event Name <em class="required">(required)</em></label>
			    	<input type="text" name="event_name" class="form-control" id="eventName" placeholder="What would you like to call your event?" required>
			  	</div>
				<br>
			  	<div class="form-group">
				    <label for="eventLoc">Where <em class="required">(required)</em></label>
				    <input type="text" name="location" class="form-control" id="eventLoc" placeholder="Type an address or a venue" required>
			 	</div>
			  	<br>
			  	<div>
			  		<p class="when">When <em class="required">(required)</em></p>
			 	</div>
			  	
			  	<div class="row">
				  	<div class="col-md-2">
				  		<div class="form-group center-text">
						    <label for="eventTime" class="time">Start Date</label>
						    <input type="text" name="start_date" class="form-control when-input" id="eventTime" placeholder="mm/dd/yyyy" required>
						</div>
			  		</div>

				  	<div class="col-md-2">
				  		<div class="form-group center-text">
						    <label for="eventTime" class="time">Start Time</label>
						    <input type="text" name="start_time" class="form-control when-input" id="eventTime" placeholder="9:00am" required>
						</div>
				  	</div>

				  	<div class="col-md-offset-1 col-md-2">
				  		<div class="form-group center-text">
						    <label for="eventTime" class="time">End Date</label>
						    <input type="text" name="end_date" class="form-control when-input" id="eventTime" placeholder="mm/dd/yyyy">
						</div>
				  	</div>

				  	<div class="col-md-2">
				  		<div class="form-group center-text">
						    <label for="eventTime" class="time">End Time</label>
						    <input type="text" name="end_time" class="form-control when-input" id="eventTime" placeholder="9:00am">
						</div>
				  	</div>
			 	</div>
				
				<br>
				<div class="form-group">
				    <label for="eventLoc">Event Description <em class="required">(required)</em></label>
				    <textarea class="form-control" name="descrip" rows="8" placeholder="Let people know what the event is about" required></textarea>
			 	</div>
				<br>
			 	<div class="form-group">
				    <label for="eventCost">Event Admission <em class="required">(required)</em></label>
				    <input type="text" name="event_cost" class="form-control eventCost" id="eventCost" placeholder="How much will it cost to attend this event?" required>
			 	</div>

			 	<div class="checkbox">
					<label class="freeEvent">
				    <input name="free_event" type="checkbox" value="free">
				    This is a FREE event.
				  	</label>
				</div>
				<br>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
						    <label for="eventCat">Event Category <em class="required">(required)</em></label>
						    <select name="category" class="form-control" required>
						    	<option value="null">Please select an event category</option>
								<option value="Festival">Festival</option>
							 	<option value="Fair">Fair</option>
							  	<option value="Public">Public</option>
							  	<option value="Networking">Networking</option>
							  	<option value="Sports">Sports</option>
							  	<option value="Arts">Arts</option>
							  	<option value="Seminar">Seminar</option>
							  	<option value="Party">Party</option>
							  	<option value="Expo">Expo</option>
							  	<option value="Music">Music</option>
							  	<option value="Conference">Conference</option>
							  	<option value="Tournament">Tournament</option>
							  	<option value="Other">Other</option>
							</select>
					 	</div>
					</div>

					<div class="col-md-5">
						<div class="form-group">
						    <label for="eventOrg">Organizer's Name <em class="required">(required)</em></label>
						    <input type="text" name="org_name" class="form-control" id="eventOrg" placeholder="Who’s setting up this event?" required>
					 	</div>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
						    <label for="eventPage">Event Official Page</label>
						    <input type="text" name="event_url" class="form-control" id="eventOrg" placeholder="URL of the event’s official page">
					 	</div>
					</div>

					<div class="col-md-5">
						<div class="form-group">
						    <label for="eventPage">Organizer's Email <em class="required">(required)</em></label>
						    <input type="email" name="org_email" class="form-control" id="orgEmail" placeholder="What’s the organizer’s email address?" required>
					 	</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
						    <label for="eventPage">Event Ticket Purchasing Page</label>
						    <input type="text" name="ticket_url" class="form-control" id="eventOrg" placeholder="URL to purchase tickets">
					 	</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
						    <label for="eventPage">Banner Image URL</label>
						    <input type="text" name="banner" class="form-control" id="banner" placeholder="URL of Banner Image">
					 	</div>
					</div>

					<div class="col-md-5">
						<div class="form-group">
						    <label for="eventPage">Thumbnail Image URL</label>
						    <input type="text" name="thumb" class="form-control" id="thumb" placeholder="URL of Thumb Image">
					 	</div>
					</div>

				</div>
				<br>

				<button type="submit" class="btn btn-default form-submit">Publish This Event</button>
				<br>
				<br>

			</form>
			<!-- <div class="row"> -->

				<!-- <div class="col-md-5">
					<p style="text-align: center">Event Banner</p>
					<div class="border">
						<form action="uploaded.php" method="post" class="dropzone" name='banner' id="my-awesome-dropzone">
							<?php // echo cl_image_upload_tag('image_id', array("callback" => $cors_location)); ?>
						</form>
					</div>
				</div> -->

				<!-- <div class="col-md-5">
					<p style="text-align: center">Event Thumbnail</p>
					<div class="border">
						<form action="uploaded.php" method="post" class="dropzone" name="thumb" id="my-awesome-dropzone">
							<?php // echo cl_image_upload_tag('image_id', array("callback" => $cors_location)); ?>
						</form>
					</div>
				</div> -->
			<!-- </div> -->
			<br>
		</div>
	</div>
</div>
