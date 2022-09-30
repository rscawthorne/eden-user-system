<?php // All pages must include 'include_head.php' at the start, and 'include_tail.php' at the end ?>

<!-- page head -->
<?php include_once('include_head.php');?>

<?php // function to make form input component
include_once('include_makeforminput.php');?>

<!-- page specific code here -->

<?php
    // check if logged in
    if(!$db_user){
        // return to homepage
        header("location: /");
    }
    
    echo '<h1>Your Details</h1>';
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <?php include_once('include_personal_form.php');?>

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
        <button class="btn btn-primary" type="submit">Save changes</button>
    </div>
</form>

<?php
    echo '<br><br>USER: ';          print_r($db_user);
    echo '<br><br>PERSONAL: ';      print_r($db_personal);
    echo '<br><br>COLLEAGUE: ';     print_r($db_colleague);
    echo '<br><br>PERMISSIONS: ';   print_r($db_permissions);
?>

<!-- page tail -->
<?php include_once('include_tail.php');?>