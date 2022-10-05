<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<!-- page specific code here -->
<?php include_once('includes\inc_form_builder.php'); // form builder ?>

This page doesn't do anything yet.
		<form 
                action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
                method="post"
            class="row col-sm-12 col-lg-10 py-3"
        >
            <?php 
                // personal form builder
                build_personal_form();
                // bot check
                build_bot_check();
            ?>

            <!-- submit button -->
			<div class="col-12 py-1">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</form>

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>