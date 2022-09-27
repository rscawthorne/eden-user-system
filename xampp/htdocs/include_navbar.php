
	<?php
        // page base url
        $self_url = htmlspecialchars($_SERVER["PHP_SELF"]);

        // navbar active states
        $navactive_home = $navactive_Link2 = $navactive_Link3 = $navactive_register = '';
        $navactive_class = 'bg-secondary text-light active';
        
		// set active class on current navbar button
		if(($self_url == '/index.php') || ($self_url == '/')){
			$navactive_home = $navactive_class;
		}else if($self_url == '/link2.php'){
			$navactive_Link2 = $navactive_class;
		}else if($self_url == '/link3.php'){
			$navactive_Link3 = $navactive_class;
		}else if($self_url == '/register.php'){
			$navactive_register = $navactive_class;
		}
	?>
	
    <!-- navigation bar start -->
	<nav class="navbar navbar-expand-lg navbar-light justify-content-between px-3" style="background-color: #fd8888;">
        <!-- logo and hompage link -->
        <a class="navbar-brand" href="/">
            <img src="assets/logo.jpg" width="50" height="50" class="d-inline-block" alt="">
            Eden User Project
        </a>

        <!-- collapsed navbar button on narrow screens -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>
		
        <!-- navbar links -->
		<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <!-- website page links, on the left -->
			<ul class="navbar-nav nav-pills">
				<a class="nav-link <?php echo $navactive_home; ?>" href="/">Home</a>
				<a class="nav-link <?php echo $navactive_Link2; ?>" href="#">Link2</a>
				<a class="nav-link <?php echo $navactive_Link3; ?>" href="#">Link3</a>
			</ul>

            <!-- profile/logout or login/register links, on the right -->
			<ul class="navbar-nav nav-pills">
				<?php
					if($db_user != ''){
                ?>
						<a class="nav-link" href="profile.php"><?php echo $db_personal['first_name'] . ' ' . $db_personal['last_name']?></a>
						<a class="nav-link" href="profile.php">Logout</a>
						<a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
				<?php
					}else{
                ?>
						<a class="nav-link" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a>
						<a class="nav-link <?php echo $navactive_register; ?>" href="register.php">Register</a>
				<?php
					}
				?>
			</ul>
		</div>
	</nav>