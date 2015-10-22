<!-- Footer -->
	<div id="footer">
		<footer>
			<div class="row">
				<div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-3 col-xs-offset-3 col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<img src="img/eventhub_logo.png" class="footer_logo" alt="">
				</div>
			</div>
		</footer>
	</div>
	
</div>
	<script>
	$(document).ready(function(){
		$(document).on('click','.signup-tab',function(e){
			e.preventDefault();
		    $('#signup-taba').tab('show');
		});	
		
		$(document).on('click','.signin-tab',function(e){
		   	e.preventDefault();
		    $('#signin-taba').tab('show');
		});
		    	
	});	
	</script>
	
</body>
</html>