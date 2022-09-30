<?php // All pages must include 'include_head.php' at the start, and 'include_tail.php' at the end ?>

<!-- page head -->
<?php include_once('include_head.php');?>

<?php // function to make form input component
include_once('include_makeforminput.php');?>

<!-- page specific code here -->
    <b>Use these login credentials:</b>
    <br>email: admin@admin.com
    <br>password: 9n36F582b8JBLMny
        <!-- login form -->
		<form id="loginform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <!-- email address input -->
            <?php makeFormInput('email', 'Email', 'email', 'is-invalid', 'Enter email', 'required', 'Please provide a valid email address.'); ?>

            <!-- password input -->
            <?php makeFormInput('password', 'Password', 'password', 'is-invalid', 'Enter password', 'required', 'Please enter your password.'); ?>
            
            <!-- submit button -->
			<div class="col-12 py-2">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</form>

        <!-- login form handler -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#loginform').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: 'ajax_login.php',
                        data: $(this).serialize()
                    }).then(
                        // resolve/success callback
                        function(response){
                            var jsonData = JSON.parse(response);

                            // user is logged in successfully in the back-end
                            if (jsonData.success == "1"){
                                //alert('Data from the server' + response);
                                // return to homepage
                                location.href = '/';
                            }else{
                                alert('Invalid Credentials! ' + jsonData.message);
                            }
                        },
                        // reject/failure callback
                        function(){
                            alert('There was some error performing the AJAX call!');
                        }
                    );
                });
            });
        </script>

<!-- page tail -->
<?php include_once('include_tail.php');?>