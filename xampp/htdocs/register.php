<?php // All pages must include 'include_head.php' at the start, and 'include_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\include_head.php');?>

<?php // function to make form input component
include_once('includes\include_make_form_component.php');?>

<!-- page specific code here -->
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <?php include_once('includes\include_personal_form.php');?>

            <!-- bot check -->
            <div class="form-group row px-3 py-1">
				<div class="col-sm-2 form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="botcheck" required>
                    <label class="form-check-label" for="botcheck">I'm not a bot.</label>
				</div>
                <div id="botcheck_feedback" class="col-sm-6 invalid_feedback">You must agree before submitting.</div>
                <div class="col-sm-4"></div>
			</div>

            <!-- submit button -->
			<div class="col-12 py-1">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</form>

<!-- page tail -->
<?php include_once('includes\include_tail.php');?>