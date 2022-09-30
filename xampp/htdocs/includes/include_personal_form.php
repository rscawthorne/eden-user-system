<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<?php // function to make form input component
    include_once('includes\include_make_form_component.php');?>

            <!-- email address input -->
            <?php makeForm_input('email', 'Email', 'email', $db_user['email'], '', 'Enter email', 'required', ''); ?>
            <!-- password input -->
            <?php makeForm_input('password1', 'Password', 'password', '*****', '', 'Enter password', 'required', ''); ?>
            <!-- re-enter password -->
            <?php makeForm_input('password2', 'Re-enter Password', 'password', '*****', '', 'Re-enter password', 'required', 'Please re-enter your password.'); ?>
            <!-- title name -->
            <?php makeForm_input('title', 'Title', 'text', $db_personal['title'], '', 'Mr/Mrs/etc.', 'required', ''); ?>
            <!-- first name -->
            <?php makeForm_input('first_name', 'First name', 'text', $db_personal['first_name'], '', '', 'required', ''); ?>
            <!-- last name -->
            <?php makeForm_input('last_name', 'Last name', 'text', $db_personal['last_name'], '', '', 'required', ''); ?>
            <!-- preferred name -->
            <?php makeForm_input('preferred_name', 'Informal name', 'text', $db_personal['preferred_name'], '', '', '', ''); ?>
            <!-- address 1 -->
            <?php makeForm_input('address1', 'Address 1', 'text', $db_personal['address'], '', '', 'required', 'Please provide a valid home address.'); ?>
            <!-- address 2 -->
            <?php makeForm_input('address2', 'Address 2', 'text', '', '', '', '', ''); ?>
            <!-- city/town -->
            <?php makeForm_input('town', 'City/Town', 'text', $db_personal['town'], '', '', 'required', ''); ?>
            <!-- county -->
            <?php makeForm_input('county', 'County/State', 'text', $db_personal['county'], '', '', 'required', ''); ?>
            <!-- postcode -->
            <?php makeForm_input('postcode', 'Postcode/Zip', 'text', $db_personal['postcode'], '', '', 'required', ''); ?>
            <!-- DOB -->
            <?php makeForm_input('dob', 'Date of Birth', 'date', $db_personal['dob'], '', 'dd/mm/yyyy', '', ''); ?>
            <!-- gender -->
            <?php //makeForm_dropdown('gender', 'Gender', 'text', $db_personal['gender'], '', '', '', ''); ?>
            <div class="form-group row py-1">
				<label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-6">
                    <select class="form-select " id="gender" name="gender" required>
                        <option selected value="<?php echo $db_personal['gender'];?>"><?php echo $db_personal['gender'];?></option>
                        <option value="Male"  >Male</option>
                        <option value="Female">Female</option>
                        <option value="Other" >Other</option>
                    </select>
				</div>
                <div id="gender_feedback" class="col-sm-4 invalid_feedback invisible">Please provide a valid gender.</div>
			</div>
            <!-- home phone number -->
            <?php makeForm_input('home_tel', 'Home phone', 'text', $db_personal['home_tel'], '', '', 'required', ''); ?>
            <!-- mobile phone number -->
            <?php makeForm_input('mobile_tel', 'Mobile phone', 'text', $db_personal['mobile_tel'], '', '', '', ''); ?>

