<?php // All pages must include 'include_head.php' at the start, and 'include_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\include_head.php');?>

<!-- page specific code here -->
<?php
    // check if logged in
    if(!$db_user){
        // return to homepage
        header("location: /");
    }
?>
<?php // another navbar for personal/colleague/permissions selection ?>
<div class="row">
    <div class="col-sm-6">
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <a href="/"><button type="button" class="btn btn-outline-primary">Personal Details</button></a>
            <button type="button" class="btn btn-outline-primary">Colleague Details</button>
            <button type="button" class="btn btn-outline-primary">Admin Permissions</button>
        </div>
    </div>
</div>

<h1>Your Details</h1>
You can view and make edits to your details here.

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <?php include_once('includes\include_personal_form.php');?>

    <!-- submit button -->
    <div class="col-12 py-1">
        <button class="btn btn-primary" type="submit">Save changes</button>
    </div>
</form>

<?php
    echo '<br><br>COLLEAGUE: ';     print_r($db_colleague);
    echo '<br><br>PERMISSIONS: ';   print_r($db_permissions);
?>

<!-- page tail -->
<?php include_once('includes\include_tail.php');?>