<!-- NavBar -->
<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img class="hidden-xs" src="img/eventhub_logo.png" alt="EventHub">
                <img class="visible-xs" src="img/eventhub_logo.png" alt="EventHub">    
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-launch" href="register.php" data-toggle="modal" data-target="#loginModal">Sign Up or Log In</a>
                <li><a href="about.html">About</a></li>
                <li><a class="last" href="create_event.html" style="color: #83C4CB;">Create Event</a></li>
            </ul>
        </div>

    </div>
</nav> <!-- End NavBar -->


<!-- -Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content login-modal"></div>
    </div>
</div>
<!-- - Login Model Ends Here -->