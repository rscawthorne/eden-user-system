<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<!-- page specific code here -->
<?php include_once('includes\inc_access_users.php'); // logged in users only ?>
<?php include_once('includes\inc_form_builder.php'); // form builder ?>

<?php // If the the user is a colleague
    if(isset($db_colleague) && ($db_colleague != '')){
?>
        <!-- COLLEAGUE DETAILS -->
        <h3>Your Colleague Details</h3>
        You can view and make edits to your details here.

        <form   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
                method="post" 
                class="row col-sm-10 col-lg-10 py-3"
        >
            <?php 
                // colleague form builder
                $values = array(
                    "job_role"            => $db_colleague['job_role'],
                    "job_branch"          => $db_colleague['job_branch'],
                    "ni_number"           => $db_colleague['ni_number'],
                    "bank_name"           => $db_colleague['bank_name'],
                    "bank_sortcode"       => $db_colleague['bank_sortcode'],
                    "bank_account_number" => $db_colleague['bank_account_number'],
                    "nextofkin_name"      => $db_colleague['nextofkin_name'],
                    "nextofkin_phone"     => $db_colleague['nextofkin_phone'],
                    "nextofkin_address"   => $db_colleague['nextofkin_address']
                );
                build_colleague_form($values);
            ?>

            <!-- submit button -->
            <div class="col-12 py-1">
                <button class="btn btn-primary" type="submit">Save changes</button>
            </div>
        </form>
<?php 
    } // End If the the user is a colleague
?>

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>