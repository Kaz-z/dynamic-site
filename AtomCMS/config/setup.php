<?php

// Setup file:

error_reporting(0);

# Database Connection:
include('config/connection.php');

# Constants:

define("D_TEMPLATE", "template");

# Functions:
include('functions/data.php');
include('functions/template.php');

# Site setup:
$debug = data_setting_value($dbc, 'debug-status');

$site_title = "Atom CMS 2.0";

if (isset($_GET['page'])) {

	$pageid = $_GET['page']; // Set $pageid to equal the value given in the URL

} else {
	
	$pageid = 'home'; // Set $pageid equal to 1 or the HomePage
}

// Page Setup
$page = data_page($dbc, $pageid);

?>