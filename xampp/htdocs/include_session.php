<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<?php
	// connect to database, stored in $db
	include_once('include_database.php');

	// initialize variables
	$db_user = '';
	$db_personal = '';
	$db_colleague = '';
	$db_permissions = '';
	// load the cookie
	session_start();
	//echo '<br>'; print_r($_COOKIE);
	
	// check if there exists a session cookie
	if(isset($_COOKIE['session_id'])){
		$session_id    = mysqli_real_escape_string($db, $_COOKIE['session_id']);
		$session_token = mysqli_real_escape_string($db, $_COOKIE['session_token']);
		// check for matching username and sessionkey
		$query = "select * from users where id='$session_id' AND session_token='$session_token';";
		//$query = "select * from users where id='1';";
		$result = mysqli_query($db, $query) or die("Error: " . mysqli_error($db));
		// Count the returned rows, 1 would mean user-id and session-token was found
		if(mysqli_num_rows($result)){
			// get USER row
			$db_user = mysqli_fetch_assoc($result);
			//echo '<br>USER: '; print_r($db_user);
			
			// get PERSONAL row from fk_personal in db_user
			if(isset($db_user['fk_personal'])){
				$fk_personal = $db_user['fk_personal'];
				$query = "select * from personal where id='$fk_personal';";
				$result = mysqli_query($db, $query) or die("Error: " . mysqli_error($db));
				if(mysqli_num_rows($result)){
					$db_personal = mysqli_fetch_assoc($result);
				}
			}
			//echo '<br>PERSONAL: '; print_r($db_personal);
			
			// get COLLEAGUE row from fk_colleague in db_user
			if(isset($db_user['fk_colleague'])){
				$fk_colleague = $db_user['fk_colleague'];
				$query = "select * from colleague where id='$fk_colleague';";
				$result = mysqli_query($db, $query) or die("Error: " . mysqli_error($db));
				if(mysqli_num_rows($result)){
					$db_colleague = mysqli_fetch_assoc($result);
				}
			}
			//echo '<br>COLLEAGUE: '; print_r($db_colleague);
			
			// get PERMISSIONS row from fk_permissions in db_user
			if(isset($db_user['fk_permissions'])){
				$fk_permissions = $db_user['fk_permissions'];
				$query = "select * from permissions where id='$fk_permissions';";
				$result = mysqli_query($db, $query) or die("Error: " . mysqli_error($db));
				if(mysqli_num_rows($result)){
					$db_permissions = mysqli_fetch_assoc($result);
				}
			}
			//echo '<br>PERMISSIONS: '; print_r($db_permissions);
		}else{
			// invalid cookie: user-id and/or session-token
			echo 'Invalid session';
			// destroy cookie
			session_destroy();
			// reload the cookie
			session_start();
		}
	}
?>
