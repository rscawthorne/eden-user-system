<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<?php // function to make form input component
include_once('include_makeforminput.php');?>

            <!-- email address input -->
            <?php makeFormInput('email', 'Email', 'email', 'is-invalid', 'Enter email', 'required', ''); ?>
            <!-- password input -->
            <?php makeFormInput('password1', 'Password', 'password', 'is-invalid', 'Enter password', 'required', ''); ?>
            <!-- re-enter password -->
            <?php makeFormInput('password2', 'Re-enter Password', 'password', 'is-invalid', 'Re-enter password', 'required', 'Please re-enter your password.'); ?>
            <!-- title name -->
            <?php makeFormInput('title', 'Title', 'text', '', 'Mr/Mrs/etc.', 'required', ''); ?>
            <!-- first name -->
            <?php makeFormInput('firstName', 'First name', 'text', 'is-invalid', '', 'required', ''); ?>
            <!-- last name -->
            <?php makeFormInput('LastName', 'Last name', 'text', 'is-invalid', '', 'required', ''); ?>
            <!-- preferred name -->
            <?php makeFormInput('informalName', 'Informal name', 'text', '', '', '', ' '); ?>
            <!-- address 1 -->
            <?php makeFormInput('address1', 'Address 1', 'text', 'is-invalid', '', 'required', 'Please provide a valid home address.'); ?>
            <!-- address 2 -->
            <?php makeFormInput('address2', 'Address 2', 'text', '', '', '', ' '); ?>
            <!-- city/town -->
            <?php makeFormInput('city', 'City', 'text', 'is-invalid', '', 'required', ''); ?>
            <!-- county -->
            <?php makeFormInput('county', 'County/State', 'text', 'is-invalid', '', 'required', ''); ?>
            <!-- postcode -->
            <?php makeFormInput('postcode', 'Postcode/Zip', 'text', 'is-invalid', '', 'required', ''); ?>
            <!-- DOB -->
            <?php makeFormInput('dob', 'Date of Birth', 'date', '', 'dd/mm/yyyy', '', ''); ?>
            <!-- gender -->
            <div class="form-group row py-1">
				<label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-6">
                    <select class="form-select is-invalid" id="validation_gender" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
				</div>
                <div id="gender_feedback" class="col-sm-4 invalid_feedback">Please provide a valid gender.</div>
			</div>
            <!-- home phone number -->
            <?php makeFormInput('homephone', 'Home phone', 'text', 'is-invalid', '', 'required', ''); ?>
            <!-- mobile phone number -->
            <?php makeFormInput('mobilephone', 'Mobile phone', 'text', '', '', '', ''); ?>

