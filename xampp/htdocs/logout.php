<?php // All pages must include 'include_head.php' at the start, and 'include_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\include_head.php');?>

<!-- page specific code here -->
<?php
    // clear value to '', and set time to 0
    setcookie('session_id',    '', 0, "/");
    setcookie('session_token', '', 0, "/");
    // cookie alias
    setcookie('cookie_id',    '', 0, "/");
    setcookie('cookie_token', '', 0, "/");

    // success message
    echo '<br>Logout Successful.';
    // return to homepage
    header("location: /");
?>

<!-- page tail -->
<?php include_once('includes\include_tail.php');?>