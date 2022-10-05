<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<?php
    // check if logged in
    if(!$db_user || ($db_user == '')){
        // return to homepage
        header("location: /");
        die();
    }
?>
