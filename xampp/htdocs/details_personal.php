<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<!-- page specific code here -->
<?php include_once('includes\inc_access_users.php'); // logged in users only ?>
<?php include_once('includes\inc_form_builder.php'); // form builder ?>

<!-- PERSONAL DETAILS -->
<h3>Your Personal Details</h3>You can view and make edits to your details here.

<form   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
        method="post" 
        class="row col-sm-10 col-lg-10 py-3"
>
    <?php 
        // personal form builder
        $values = array(
            "email"          => $db_user['email'],
            "title"          => $db_personal['title'],
            "first_name"     => $db_personal['first_name'],
            "last_name"      => $db_personal['last_name'],
            "preferred_name" => $db_personal['preferred_name'],
            "address1"       => $db_personal['address1'],
            "address2"       => $db_personal['address2'],
            "town"           => $db_personal['town'],
            "county"         => $db_personal['county'],
            "postcode"       => $db_personal['postcode'],
            "dob"            => $db_personal['dob'],
            "gender"         => $db_personal['gender'],
            "home_tel"       => $db_personal['home_tel'],
            "mobile_tel"     => $db_personal['mobile_tel']
        );
        build_personal_form($values);
    ?>

    <!-- submit button -->
    <div class="col-12 py-1">
        <button class="btn btn-primary" type="submit">Save changes</button>
    </div>
</form>

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>