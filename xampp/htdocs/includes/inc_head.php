<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<!doctype html>
<html lang="en">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
    <!-- Bootstrap CSS. Must be loaded before other CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!-- Load our CSS -->
	<link rel="stylesheet" href="/assets/style.css">
    
    <!-- Browser window title -->
	<title>Eden User Project</title>
    <!-- website favourite icon -->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
</head>

<body>
    <?php
        // connect to database, stored in $db
        include_once('includes\inc_database.php');
        // check user logged in: store user info in $db_user, $db_personal, $db_colleague, $db_permissions
        include_once('includes\inc_session.php');
        // create the side navigation
        include_once('includes\inc_sidebar.php');
        // create the navigation bar
        include_once('includes\inc_navbar.php');
    ?>

	<!-- start of main body content div's -->
    <div class="container">
        <div class="row content">
            <!-- body content, col-10 for sidebar -->
            <div class="">

