<?php // All pages must include 'inc_head.php' at the start, and 'inc_tail.php' at the end ?>

<!-- page head -->
<?php include_once('includes\inc_head.php');?>

<?php // function to make form input component
include_once('includes\inc_form_builder.php');?>

    <!-- page specific code here -->
    <b>Use these login credentials:</b>
    <br>email: admin@admin.com
    <br>password: 9n36F582b8JBLMny
    <!-- login form -->
    <form id="loginform" 
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
            method="post" 
            class="row py-3 needs-validation" 
            novalidate
    >
        <!-- error notification -->
        <div id="error_div" class="alert alert-danger d-none"></div>

        <!-- email address input -->
        <?php buildForm_input('email', 'Email', 'email', '', '', 'Enter email', 'required', 'Please provide a valid email address.'); ?>

        <!-- password input -->
        <?php buildForm_input('password', 'Password', 'password', '', '', 'Enter password', 'required', 'Please enter your password.'); ?>
        
        <!-- submit button -->
        <div class="col-12 py-2">
            <button class="btn btn-primary" type="submit">Submit</button>
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

        // AJAX submission
        $(document).ready(function() {
            $('#loginform').submit(function(e) {
                e.preventDefault();
                let $error_div = $('#error_div');
                $error_div.removeClass('d-none');
                $error_div.removeClass('alert-danger');
                // change colour and html of alert div
                $error_div.addClass('alert-success');
                $error_div.html('Logging in...');

                if (!this.checkValidity()) {
                    $error_div.removeClass('alert-success').addClass('alert-danger');
                    $error_div.html('Invalid inputs entered!');

                    return;
                }
                // create ajax
                $.ajax({
                    type: "POST",
                    url: 'ajax_login.php',
                    data: $(this).serialize()
                }).then(function(response){
                    // resolve/success callback
                    var jsonData = JSON.parse(response);
                    // user is logged in successfully in the back-end
                    if (jsonData.success == "1"){
                        // return to homepage
                        location.href = '/';
                    }else{
                        $error_div.removeClass('alert-success').addClass('alert-danger');
                        $error_div.html('Invalid Credentials! ' + jsonData.message);
                    }
                }).fail(function(response){
                    // reject/failure callback
                    $error_div.removeClass('alert-success').addClass('alert-danger');
                    $error_div.html('There was some error performing the AJAX call!');
                });
            });
        });
    </script>

<!-- page tail -->
<?php include_once('includes\inc_tail.php');?>