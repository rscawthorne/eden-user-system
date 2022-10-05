<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<!-- page specific code here -->
<?php include_once('includes\inc_form_builder.php'); // form builder ?>
<?php include_once('includes\inc_access_admins.php'); // logged in admins only ?>

<h1>Add Colleague</h1>
This form is not implemented yet. Validation works on inputs, but does not create a database record.

<form 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
    method="post"
    class="row py-3 needs-validation" 
    novalidate
>
    <!-- error notification -->
    <div id="error_div" class="alert alert-danger d-none"></div>

    <h5>Enter the personal details below.</h5>
    <?php 
        // personal form builder
        build_personal_form();
    ?>
    <h5><br>Enter the colleague details below.</h5>
    <?php
        // colleague form builder
        build_colleague_form();
    ?>

    <!-- submit button -->
    <div class="col-12 py-1">
        <button class="btn btn-primary" type="submit">Save changes</button>
    </div>
</form>

    <!-- login form handler -->
    <script type="text/javascript">
        // Form validation feedback
        // Starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const formComponents = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(formComponents).forEach((formItem) => {
                formItem.addEventListener('submit', (event) => {
                    if (!formItem.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    formItem.classList.add('was-validated');
                }, false);
            });
        })();
    </script>

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>