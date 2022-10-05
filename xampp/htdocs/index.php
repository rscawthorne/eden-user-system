<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<!-- page specific code here -->
<?php
    if($db_user){
        echo 'Welcome, ' . $db_personal['first_name'] . ' ' . $db_personal['last_name'] . '!';
    }else{
        echo 'Please login or register to see more content.';
    }
?>

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>

