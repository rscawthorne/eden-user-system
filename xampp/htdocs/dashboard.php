<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<!-- page specific code here -->
<?php include_once('includes\inc_access_users.php'); // logged in users only ?>

Main activities will be performed here. The interface will be updated live using AJAX.

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>