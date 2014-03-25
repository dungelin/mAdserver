<?php
define('ROOT_INDEX', true);

if($_SERVER['APPLICATION_ENV'] == 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', true);
}

// Require the initialisation file
require_once 'init.php';

// Required files
require_once MAD_PATH . '/functions/adminredirect.php';

// Redirect to the admin interface
if (MAD_INSTALLATION_STATUS == MAD_INSTALLATION_STATUS_INSTALLED)
{
        MAD_Admin_Redirect::redirect();
}

?>
