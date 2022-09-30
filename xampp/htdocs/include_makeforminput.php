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
        echo PHP_EOL . '    <div class="form-group row py-2">';
        echo PHP_EOL . '        <label for="$id" class="col-sm-2 col-form-label">$label</label>';
        echo PHP_EOL . '        <div class="col-sm-6">';
        echo PHP_EOL . '            <input type="$type" id="$id" name="$id" class="form-control $valid" placeholder="$placeholder" $required>';
        echo PHP_EOL . '        </div>';
        echo PHP_EOL . '        <div id="$id_feedback" class="col-sm-4 invalid_feedback invisible">$invalid_text</div>';
        echo PHP_EOL . '    </div>';
    */
    function makeFormInput($id, $label, $type, $valid, $placeholder, $required, $invalid_text){
        if($placeholder == ''){$placeholder = $label;}
        if($invalid_text == ''){$invalid_text = 'Please enter a valid ' . $label . '.';}
        // row
        echo PHP_EOL . '    <div class="form-group row py-1">';
        // label
        echo PHP_EOL . '        <label for="' . $id . '" class="col-sm-2 col-form-label">' . $label . '</label>';
        // column
        echo PHP_EOL . '        <div class="col-sm-6">';
        // input component
        echo PHP_EOL . '            <input type="' . $type . '" id="' . $id . '" name="' . $id . '" class="form-control ' . $valid . '" placeholder="' . $placeholder . '" ' . $required . '>';
        // end column
        echo PHP_EOL . '        </div>';
        // invalid feedback
        echo PHP_EOL . '        <div id="' . $id . '_feedback" class="col-sm-4 invalid_feedback">' . $invalid_text . '</div>';
        // end row
        echo PHP_EOL . '    </div>';
    }
?>
