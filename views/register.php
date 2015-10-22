<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<div id="hideme" class="modal-content login-modal">
    <div class="modal-header login-modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="loginModalLabel">EventHub Users</h4>
    </div>

    <div class="modal-body">
        <div class="text-center">
            <div role="tabpanel" class="login-tab">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="signin-taba" aria-controls="home" role="tab" data-toggle="tab">Sign Up</a></li>
                    <li role="presentation"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Log In</a></li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active text-center" id="home">
                        &nbsp;&nbsp;
                        <span id="login_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
                        <div class="clearfix"></div>
                        <!-- register form -->

                        <form method="post" action="register.php" name="registerform">
                            <!-- Username -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username" required />
                                </div>
                                <span class="help-block has-error" data-error='0' id="username-error"></span>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input id="login_input_email" class="login_input form-control" type="email" name="user_email" placeholder="Email" required />
                                </div>
                                <span class="help-block has-error" data-error='0' id="remail-error"></span>
                            </div>

                            <!-- Password and Repeat Password -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" pattern=".{6,}" placeholder="Password (min. 6 characters)" required autocomplete="off" />
                                </div>
                                <span class="help-block has-error" data-error='0' id="username-error"></span>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-check"></i></div>
                                    <input id="login_input_password_repeat" class="login_input form-control" type="password" name="user_password_repeat" pattern=".{6,}" placeholder="Repeat Password" required autocomplete="off" />
                                </div>
                                <span class="help-block has-error" data-error='0' id="username-error"></span>
                            </div>
                            <input type="submit" id="register_btn" class="btn btn-block bt-login"  name="register" value="Register" />

                        </form>
                    </div>

                    <!-- Log In tab -->
                    <div role="tabpanel" class="tab-pane text-center" id="profile">
                        &nbsp;&nbsp;
                        <span id="login_fail" class="response_error" style="display: none;">Log in failed, please try again.</span>
                        <div class="clearfix"></div>

                        <!-- Log in form -->
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
        </div>
    </div> <!-- END MODAL-BODY -->      
        
</div>

        
