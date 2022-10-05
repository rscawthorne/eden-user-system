<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<!-- page specific code here -->
<?php include_once('includes\inc_access_admins.php'); // logged in admins only ?>
<?php include_once('includes\inc_access_users.php'); // logged in users only ?>
<?php include_once('includes\inc_form_builder.php'); // form builder ?>

<?php // If the the user is a colleague
    if(isset($db_colleague) && ($db_colleague != '')){
        // If the the user is an admin
        if(user_is_admin()){
    ?>
            <!-- ADMIN DETAILS -->
            <h3>Your Admin Details</h3>
            You can view and make edits to your details here.

            <form   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
                    method="post" 
                    class="row col-sm-10 col-lg-10 py-3"
            >
                <?php 
                    // permissions form builder
                    $values = array(
                        "preset_name"           => $db_permissions['preset_name'],
                        "is_admin"              => $db_permissions['is_admin'],
                        "can_modify_admin"      => $db_permissions['can_modify_admin'],
                        "can_view_colleague"    => $db_permissions['can_view_colleague'],
                        "can_modify_colleague"  => $db_permissions['can_modify_colleague'],
                        "can_view_personal"     => $db_permissions['can_view_personal'],
                        "can_modify_personal"   => $db_permissions['can_modify_personal']
                    );
                    build_permissions_form($values);
                ?>

                <!-- submit button -->
                <div class="col-12 py-1">
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </form>
<?php 
        } // End If the the user is an admin
    } // End If the the user is a colleague
?>

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>