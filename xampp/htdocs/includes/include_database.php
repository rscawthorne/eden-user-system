<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<?php
	//connect to database
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'eden_exercise');
	define('DB_PASSWORD', '9n36F582b8JBLMny');
	define('DB_DATABASE', 'eden_exercise');
    // store database connection
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
