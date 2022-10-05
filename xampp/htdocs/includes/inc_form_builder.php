<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<?php 
    // make sure to have the name="paramName" attribute, to get/post parameters.

    // Make input text-field
    function buildForm_input($id, $label, $type, $value, $valid, $placeholder, $required, $invalid_text){
        if($placeholder  == ''){$placeholder = $label;}
        if($invalid_text == ''){$invalid_text = 'Please provide a valid ' . $label . '.';}
        
        echo PHP_EOL.'<div class="form-group mb-2 row">';
        echo PHP_EOL.'  <div class="col-sm-4">';
        echo PHP_EOL.'      <label 
                                for="'.$id.'" 
                                class="form-label"
                            >'.$label.'</label>';
        echo PHP_EOL.'  </div>';
        echo PHP_EOL.'  <div class="col-sm-8 input-group-sm">';
        echo PHP_EOL.'      <input 
                                type="'.$type.'" 
                                value="'.$value.'" 
                                id="'.$id.'" 
                                name="'.$id.'" 
                                class="form-control ' . $valid.'" 
                                '.$required.' 
                            >';
        echo PHP_EOL.'      <div 
                                id="'.$id.'_feedback" 
                                class="col-sm-4 invalid-feedback"
                            >'.$invalid_text.'</div>';
        echo PHP_EOL.'  </div>';
        echo PHP_EOL.'</div>';
        
        return;
    }

    // Make input selection-dropdown
    function buildForm_dropdown($id, $label, $type, $value, $valid, $placeholder, $required, $invalid_text, $options_array){
        echo PHP_EOL.'<div class="form-group mb-2 row">';
        echo PHP_EOL.'  <div class="col-sm-4">';
        echo PHP_EOL.'      <label 
                                for="'.$id.'" 
                                class="form-label"
                            >'.$label.'</label>';
        echo PHP_EOL.'  </div>';
        echo PHP_EOL.'  <div class="col-sm-4 input-group-sm">';
        echo PHP_EOL.'      <select 
                                value="'.$value.'" 
                                id="'.$id.'" 
                                name="'.$id.'" 
                                class="form-select ' . $valid.'" 
                                '.$required.' 
                            >';
        foreach($options_array as $option){
            echo PHP_EOL.'      <option ';
            if($option == $value){echo 'selected ';}
            echo PHP_EOL.'          value="'.$option.'"
                                >'
                                .$option.
                                '</option>';
        }
        echo PHP_EOL.'      </select>';
        echo PHP_EOL.'      <div 
                                id="'.$id.'_feedback" 
                                class="col-sm-4 invalid-feedback"
                            >'.$invalid_text.'</div>';
        echo PHP_EOL.'  </div>';
        echo PHP_EOL.'</div>';

        return;
    }

    // build a form for personal details
    function build_bot_check(){
        ?>
            <!-- bot check -->
            <div class="form-group row px-3 py-1">
                <div class="col-sm-4 form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="botcheck" required>
                    <label class="form-check-label" for="botcheck">I'm not a bot.</label>
                </div>
                <div id="botcheck_feedback" class="col-sm-6 invalid_feedback">You must agree before submitting.</div>
                <div class="col-sm-4"></div>
            </div>
        <?php
    }

    // get associative key value from $value if is set, otherwise create with '' value
    function getArrayKeyOrDefault($name, &$source, &$target, $default=''){
        // check if key exists
        if(isset($source[$name])){
            // create key with value taken from $source
            $target[$name] = $source[$name];
        }else{
            // create key with default '' value
            $target[$name] = $default;
        }
    }
    
    // build a form for personal details
    function build_personal_form($values=''){
        // if form_values not supplied, use default blank array
        $form_values = array();
        getArrayKeyOrDefault('email',            $values, $form_values);
        getArrayKeyOrDefault("title",            $values, $form_values);
        getArrayKeyOrDefault("first_name",       $values, $form_values);
        getArrayKeyOrDefault("last_name",        $values, $form_values);
        getArrayKeyOrDefault("preferred_name",   $values, $form_values);
        getArrayKeyOrDefault("address1",         $values, $form_values);
        getArrayKeyOrDefault("address2",         $values, $form_values);
        getArrayKeyOrDefault("town",             $values, $form_values);
        getArrayKeyOrDefault("county",           $values, $form_values);
        getArrayKeyOrDefault("postcode",         $values, $form_values);
        getArrayKeyOrDefault("dob",              $values, $form_values);
        getArrayKeyOrDefault("gender",           $values, $form_values);
        getArrayKeyOrDefault("home_tel",         $values, $form_values);
        getArrayKeyOrDefault("mobile_tel",       $values, $form_values);
        
        // email address input 
        buildForm_input('email', 'Email', 'email', $form_values['email'], '', 'Enter email', 'required', ''); 
        // title name 
        buildForm_input('title', 'Title', 'text', $form_values['title'], '', 'Mr/Mrs/etc.', 'required', ''); 
        // first name 
        buildForm_input('first_name', 'First name', 'text', $form_values['first_name'], '', '', 'required', ''); 
        // last name 
        buildForm_input('last_name', 'Last name', 'text', $form_values['last_name'], '', '', 'required', ''); 
        // preferred name 
        buildForm_input('preferred_name', 'Informal name', 'text', $form_values['preferred_name'], '', '', '', ''); 
        // address 1 
        buildForm_input('address1', 'Address 1', 'text', $form_values['address1'], '', '', 'required', 'Please provide a valid home address.'); 
        // address 2 
        buildForm_input('address2', 'Address 2', 'text', $form_values['address2'], '', '', '', ''); 
        // city/town 
        buildForm_input('town', 'City/Town', 'text', $form_values['town'], '', '', 'required', ''); 
        // county 
        buildForm_input('county', 'County/State', 'text', $form_values['county'], '', '', 'required', ''); 
        // postcode 
        buildForm_input('postcode', 'Postcode/Zip', 'text', $form_values['postcode'], '', '', 'required', ''); 
        // DOB 
        buildForm_input('dob', 'Date of Birth', 'date', $form_values['dob'], '', 'dd/mm/yyyy', 'required', ''); 
        // gender 
        $genders = array('', 'Male', 'Female', 'Other');
            buildForm_dropdown('gender', 'Gender', 'text', $form_values['gender'], '', '', 'required', '', $genders); 
        // home phone number 
        buildForm_input('home_tel', 'Home phone', 'text', $form_values['home_tel'], '', '', 'required', ''); 
        // mobile phone number 
        buildForm_input('mobile_tel', 'Mobile phone', 'text', $form_values['mobile_tel'], '', '', '', ''); 
    }

    // build a form for colleague details
    function build_colleague_form($values=''){
        // if form_values not supplied, use default blank array
        $form_values = array();
        getArrayKeyOrDefault("job_role",            $values, $form_values);
        getArrayKeyOrDefault("job_branch",          $values, $form_values);
        getArrayKeyOrDefault("ni_number",           $values, $form_values);
        getArrayKeyOrDefault("bank_name",           $values, $form_values);
        getArrayKeyOrDefault("bank_sortcode",       $values, $form_values);
        getArrayKeyOrDefault("bank_account_number", $values, $form_values);
        getArrayKeyOrDefault("nextofkin_name",      $values, $form_values);
        getArrayKeyOrDefault("nextofkin_phone",     $values, $form_values);
        getArrayKeyOrDefault("nextofkin_address",   $values, $form_values);

        // email address input 
        buildForm_input('job_role', 'Job role', 'text', $form_values['job_role'], '', '', 'required', ''); 
        // title name 
        buildForm_input('job_branch', 'Job branch', 'text', $form_values['job_branch'], '', '', 'required', ''); 
        // first name 
        buildForm_input('ni_number', 'NI number', 'text', $form_values['ni_number'], '', '', 'required', ''); 
        // last name 
        buildForm_input('bank_name', 'Bank name', 'text', $form_values['bank_name'], '', '', 'required', ''); 
        // preferred name 
        buildForm_input('bank_sortcode', 'Sort code', 'text', $form_values['bank_sortcode'], '', '', 'required', ''); 
        // address 1 
        buildForm_input('bank_account_number', 'Account Number', 'text', $form_values['bank_account_number'], '', '', 'required', ''); 
        // address 2 
        buildForm_input('nextofkin_name', 'Next of Kin Name', 'text', $form_values['nextofkin_name'], '', '', '', ''); 
        // city/town 
        buildForm_input('nextofkin_phone', 'Next of Kin Phone', 'text', $form_values['nextofkin_phone'], '', '', '', ''); 
        // county 
        buildForm_input('nextofkin_address', 'Next of Kin Address', 'text', $form_values['nextofkin_address'], '', '', '', '');
    }

    // build a form for colleague details
    function build_permissions_form($values=''){
        // if form_values not supplied, use default blank array
        $form_values = array();
        getArrayKeyOrDefault("preset_name",          $values, $form_values);
        getArrayKeyOrDefault("is_admin",             $values, $form_values);
        getArrayKeyOrDefault("can_modify_admin",     $values, $form_values);
        getArrayKeyOrDefault("can_view_colleague",   $values, $form_values);
        getArrayKeyOrDefault("can_modify_colleague", $values, $form_values);
        getArrayKeyOrDefault("can_view_personal",    $values, $form_values);
        getArrayKeyOrDefault("can_modify_personal",  $values, $form_values);

        // email address input 
        buildForm_input('preset_name', 'Preset name', 'text', $form_values['preset_name'], '', 'Enter email', 'required', ''); 
        // title name 
        buildForm_input('is_admin', 'Is Admin', 'text', $form_values['is_admin'], '', 'Mr/Mrs/etc.', 'required', ''); 
        // first name 
        buildForm_input('can_modify_admin', 'Can modify admin', 'text', $form_values['can_modify_admin'], '', '', 'required', ''); 
        // last name 
        buildForm_input('can_view_colleague', 'Can view colleague', 'text', $form_values['can_view_colleague'], '', '', 'required', ''); 
        // preferred name 
        buildForm_input('can_modify_colleague', 'Can modify colleague', 'text', $form_values['can_modify_colleague'], '', '', '', ''); 
        // address 1 
        buildForm_input('can_view_personal', 'Can view personal', 'text', $form_values['can_view_personal'], '', '', 'required', 'Please provide a valid home address.'); 
        // address 2 
        buildForm_input('can_modify_personal', 'Can modify personal', 'text', $form_values['can_modify_personal'], '', '', '', '');
    }
?>
