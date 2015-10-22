<!--
    FILE: create_event.php
    AUTHOR: Richard Mipana
    DESCRIPTION: Checks to see if user is logged in then loads the create event view and function.
 -->


<?php

/**
 * @author Panique
 * @link https://github.com/panique/php-login-minimal/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// load cloudinary api
require('cloudinary/Cloudinary.php');
require('cloudinary/Uploader.php');
require('cloudinary/Api.php');
require('cloudinary/configuration.php');

// load the new event class
// require_once("classes/Newevent.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    include("views/template/head_create.php");
    include("views/template/nav.php");
    include("views/create_event_logged_in.php");
    include("views/template/footer.php");



} else {
    include("views/not_logged_in.php");
}
