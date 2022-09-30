<?php
	// ajax files are accessed directly - be careful

	// check user logged in: store user info in $db_user, $db_personal, $db_colleague, $db_permissions
	include_once('include_session.php');

    // check url parameters
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email =  mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        // SQL find user record
        $sql = "SELECT * FROM users WHERE email='$email';";
        $result = mysqli_query($db,$sql);
        
        // if email match was found
        if(mysqli_num_rows($result)){
            // Get row
            $row = mysqli_fetch_assoc($result);
            // verify password is correct
            if(password_verify($password, $row['password_hash'])){
                // store session id and create token from the password and auto generated salt
                $session_id = $row['id'];
                $session_token = password_hash($password, PASSWORD_DEFAULT);
                $cookie_days = 30;
                $cookie_expire = time() + (86400 * $cookie_days);
                // store session id and token
                setcookie('session_id',    $session_id,    $cookie_expire, "/");
                setcookie('session_token', $session_token, $cookie_expire, "/");
                // update db with user token
                $sql = "UPDATE users SET session_token='$session_token' WHERE id='$session_id';";
                $result = mysqli_query($db,$sql) or die("Error: " . mysqli_error($db));
				// based on successful authentication
				echo json_encode(array('success'=>1, 'message'=>'Login Successful.'));
            }else{
                echo json_encode(array('success'=>0, 'message'=>'Incorrect email or password'));
            }
        }else{
            echo json_encode(array('success'=>0, 'message'=>'Incorrect email or password'));
        }
    }
?>

