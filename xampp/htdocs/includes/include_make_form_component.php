<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

<?php 
    /*
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
            </div>
        </div>
    */
    // make sure inputs have the name="paramName" attribute, to get/post parameters.
    function makeForm_input($id, $label, $type, $value, $valid, $placeholder, $required, $invalid_text){
        if($placeholder == ''){$placeholder = $label;}
        if($invalid_text == ''){$invalid_text = 'Please provide a valid ' . $label . '.';}
        
        echo PHP_EOL.'<div class="form-group mb-2 row">';
        //echo PHP_EOL.'   <div class="form-outline">';
        echo PHP_EOL.'   <label for="'.$id.'" class="col-sm-2 form-label">'.$label.'</label>';
        echo PHP_EOL.'   <div class="col-sm-6">';
        echo PHP_EOL.'       <input type="'.$type.'" value="'.$value.'" id="'.$id.'" name="'.$id . '" class="col-sm-6 form-control' . $valid.'" '.$required.' >';
        echo PHP_EOL.'       <div id="'.$id.'_feedback" class="col-sm-4 invalid-feedback">'.$invalid_text.'</div>';
        echo PHP_EOL.'   </div>';
        //echo PHP_EOL.'   </div>';
        echo PHP_EOL.'</div>';
        
        return;
    }

    function makeForm_dropdown($id, $label, $type, $value, $valid, $placeholder, $required, $invalid_text){
        return;
    }
?>
