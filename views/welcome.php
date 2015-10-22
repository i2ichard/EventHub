<div class="container">
	<h3>Thank you for signing up with EventHub! You may now log in.</h3>
	<div class="row">
		<div class="col-lg-3 col-centered">
			<form method="post" action="index.php" name="loginform">

	            <!-- Username -->
	            <div class="form-group">
	                <div class="input-group">
	                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
	                    <input id="login_input_username" class="login_input form-control" type="text" name="user_name" placeholder="Username" required />
	                </div>
	                <span class="help-block has-error" data-error='0' id="username-error"></span>
	            </div>

	            <!-- Password -->
	            <div class="form-group">
	                <div class="input-group">
	                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
	                    <input id="login_input_password" class="login_input form-control" type="password" name="user_password" autocomplete="off" placeholder="Password" required />
	                </div>
	                <span class="help-block has-error" data-error='0' id="username-error"></span>
	            </div>
	            <input type="submit"  name="login" id="register_btn" class="btn btn-block bt-login" value="Log in" />

	        </form>
		</div>
			
	</div>
</div>