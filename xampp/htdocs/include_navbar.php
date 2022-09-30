<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

	<?php
		function makeNavLink_checkActive($href, $text='NoNameLink') {
			// navbar active state
			$navactive_class = ' bg-secondary text-light active';
			// page base url
			$self_url = htmlspecialchars($_SERVER["PHP_SELF"]);
			// hompage equivalents
			if($self_url == '/index.php'){$self_url = '/';}
			if($href     == '/index.php'){$href     = '/';}
			
			// prepend head html - 'a' tag open, class open
			echo PHP_EOL . "\t\t\t\t" . '<a class="nav-link px-3 py-3';
			// if match current url with href - append to class
			if($self_url == $href){
				echo $navactive_class;
			}

			// special cases for $text, prepend glyphicon
			if($text == 'Login'){
				$text = '<span class="glyphicon glyphicon-log-in"></span>' . $text;
			}else if($text == 'Logout'){
				$text = '<span class="glyphicon glyphicon-log-out"></span>' . $text;
			}
			
			// append tail html - class close, href url, 'a' close, link text, 'a' end tag
			echo '" href="' . $href . '">' . $text . '</a>';
		}
	?>
	
    <!-- navigation bar start -->
	<nav class="navbar navbar-expand-lg navbar-light justify-content-between px-0 py-0" height="60" style="background-color: #fd8888;">
        <!-- logo and hompage link -->
        <a class="navbar-brand py-0" href="/">
            <img src="assets/logo.jpg" width="auto" height="50" class="d-inline-block" alt="">
            Eden User Project
        </a>

        <!-- collapsed navbar button on narrow screens -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
        <!-- navbar links -->
		<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <!-- website page links, on the left -->
			<ul class="navbar-nav mr-auto">
				<?php
					makeNavLink_checkActive('/', 'Home');
					if($db_user){
						makeNavLink_checkActive('/add_colleague.php', 'Add Colleague');
						makeNavLink_checkActive('/profile.php', 'My Profile');
					}
				?>
			</ul>
            <!-- profile/logout or login/register links, on the right -->
			<ul class="navbar-nav">
				<?php
					if($db_user != ''){
						makeNavLink_checkActive('/profile.php', $db_personal['first_name'] . ' ' . $db_personal['last_name']);
						makeNavLink_checkActive('/logout.php', 'Logout');
					}else{
						makeNavLink_checkActive('/login.php', 'Login');
						//makeNavLink_checkActive('/register.php', 'Register');
					}
				?>
			</ul>
		</div>
	</nav>