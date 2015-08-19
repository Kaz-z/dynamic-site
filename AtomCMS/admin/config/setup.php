<?php

// Setup file:

# Database Connection:
include('../config/connection.php');


# Constants:

define("D_TEMPLATE", "template");

# Functions:
include('functions/data.php');
include('functions/template.php');

# Site setup:
$debug = data_setting_value($dbc, 'debug-status'); // Debug Array

$site_title = "Atom CMS 2.0";

if (isset($_GET['page'])) {
	
	$pageid = $_GET['page']; // Set $pageid to equal the value given in the URL
	
} else {
	
	$pageid = 1; // Set $pageid equal to 1 or the HomePage
	
}

// Page Setup
$page = data_page($dbc, $pageid); // Page Array

if(isset($_GET['id'])) {
	
	$opened = data_page($dbc, $_GET['id']);
	
}

// User Setup
$user = data_user($dbc, $_SESSION['username']); // User Array

?>