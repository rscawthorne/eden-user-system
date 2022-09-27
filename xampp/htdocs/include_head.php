<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS. Must be loaded before other CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!-- Load our CSS -->
	<link rel="stylesheet" href="assets/style.css">
    
    <!-- Browser window title -->
	<title>Eden User Project</title>
</head>

<body>
    <?php
        // connect to database, stored in $db
        include_once('include_database.php');
        // check user logged in, store user info in $db_user, $db_personal, $db_colleague, $db_permissions
        include_once('include_session.php');
        // create the navigation bar
        include_once('include_navbar.php');
    ?>

	<!-- start of main body section -->
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-12 col-lg-10">

