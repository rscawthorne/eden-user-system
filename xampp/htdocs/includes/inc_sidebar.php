<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<?php
	function makeSideLink_checkActive($href, $text='NoNameLink') {
		// navbar active state
		$active_class = 'active';
		// page base url
		$self_url = htmlspecialchars($_SERVER["PHP_SELF"]);
		// hompage equivalents
		if($self_url == '/index.php'){$self_url = '/';}
		if($href     == '/index.php'){$href     = '/';}
		
		// prepend head html - 'a' tag open, class open
		echo PHP_EOL . "\t\t\t\t" . '<a ';
		// if match current page url with href - append 'active' class
		if($self_url == $href){
			echo 'class="'.$active_class.'" ';
		}
		
		// append tail html - class close, href url, 'a' close, link text, 'a' end tag
		echo 'href="'.$href.'">'.$text.'</a>';
	}
?>

    <!-- Side navigation -->
    <div class="sidebar">
        <h4>Menu</h4>
		<?php 
			makeSideLink_checkActive('/', 'Home');
			
			// check if the user is logged in
			if($db_user){
				// user logged in
				makeSideLink_checkActive('/dashboard.php', 'Dashboard');
				
				// if user is an admin
				if($db_permissions){if($db_permissions['is_admin']){
					echo '<br><h4>Admin Menu</h4>';
					makeSideLink_checkActive('/view_colleague.php', 'View Colleagues');
					makeSideLink_checkActive('/add_colleague.php', 'Add Colleague');
				}}
			}else{
				// user not logged in
			}

			// Login/Logout link
			echo '<br><br><h4>User</h4>';
			if($db_user){
				makeSideLink_checkActive('/details_personal.php',  'My Personal Details');
				makeSideLink_checkActive('/details_colleague.php', 'My Colleague Details');
				makeSideLink_checkActive('/details_admin.php',     'My Admin Details');

				makeSideLink_checkActive('/logout.php', 'Logout');
			}else{
				makeSideLink_checkActive('/register.php', 'Register');
				makeSideLink_checkActive('/login.php', 'Login');
			}
		?>
    </div>
