<!-- page head -->
<?php include_once('include_head.php');?>

<!-- page specific code here -->
		<form>
            <!-- email address -->
            <div class="form-group row py-2">
                <label for="validation1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control is-invalid" id="validation1" placeholder="Email" required>
                    <div id="validation1_feedback" class="invalid_feedback">
                        Please provide a valid email address.
                    </div>
				</div>
            </div>

            <!-- password -->
            <div class="form-group row py-2">
                <label for="validation1_1" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control is-invalid" id="validation1_1" placeholder="Password" required>
                    <div id="validation1_1_feedback" class="invalid_feedback">
                        Please provide a password of 8-20 characters.
                    </div>
				</div>
            </div>
            <!-- re-enter password -->
            <div class="form-group row py-2">
                <label for="validation1_2" class="col-sm-2 col-form-label">Re-enter Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="validation1_2" placeholder="Re-enter Password" required>
                    <div id="validation1_2_feedback" class="invalid_feedback">
                        Please re-enter the password which must match.
                    </div>
				</div>
            </div>

            <!-- title name -->
            <div class="form-group row py-2">
				<label for="validation_title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control" id="validation_title" placeholder="Mr/Mrs/etc.">
                    <div id="validation_title_feedback" class="invalid_feedback">
                        Please provide a valid title.
                    </div>
				</div>
			</div>

            <!-- first name -->
            <div class="form-group row py-2">
				<label for="validation2" class="col-sm-2 col-form-label">First name</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control is-invalid" id="validation2" placeholder="First name" required>
                    <div id="validation2_feedback" class="invalid_feedback">
                        Please provide a valid first name.
                    </div>
				</div>
			</div>

            <!-- last name -->
            <div class="form-group row py-2">
				<label for="validation3" class="col-sm-2 col-form-label">Last name</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control is-invalid" id="validation3" placeholder="Last name" required>
                    <div id="validation3_feedback" class="invalid_feedback">
                        Please provide a valid last name.
                    </div>
				</div>
			</div>
            
            <!-- preferred name -->
            <div class="form-group row py-2">
				<label for="validation_preferred_name" class="col-sm-2 col-form-label">Preferred name</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control" id="validation_preferred_name" placeholder="Preferred name">
                    <div id="validation_preferred_name_feedback" class="invalid_feedback">
                        Please provide a valid name.
                    </div>
				</div>
			</div>

            <!-- address 1 -->
            <div class="form-group row py-2">
				<label for="validation4_1" class="col-sm-2 col-form-label">Address 1</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control is-invalid" id="validation4_1" placeholder="Address 1" required>
                    <div id="validation4_1_feedback" class="invalid_feedback">
                        Please provide a valid home address.
                    </div>
				</div>
			</div>
            <!-- address 2 -->
            <div class="form-group row py-2">
				<label for="validation4_2" class="col-sm-2 col-form-label">Address 2</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control" id="validation4_2" placeholder="Address 2">
				</div>
			</div>
            
            <!-- city/town -->
            <div class="form-group row py-2">
				<label for="validation4" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control is-invalid" id="validation4" placeholder="City" required>
                    <div id="validation4_feedback" class="invalid_feedback">
                        Please provide a valid city.
                    </div>
				</div>
			</div>

            <!-- county -->
            <div class="form-group row py-2">
				<label for="validation5" class="col-sm-2 col-form-label">County/State</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control is-invalid" id="validation5" placeholder="County" required>
                    <div id="validation5_feedback" class="invalid_feedback">
                        Please select a valid county.
                    </div>
				</div>
			</div>

            <!-- postcode -->
            <div class="form-group row py-2">
				<label for="validation6" class="col-sm-2 col-form-label">Postcode/Zip</label>
                <div class="col-sm-10">
				    <input type="text" class="form-control is-invalid" id="validation6" placeholder="Postcode" required>
                    <div id="validation6_feedback" class="invalid_feedback">
                        Please provide a valid postcode.
                    </div>
				</div>
			</div>
            
            <!-- DOB -->
            <div class="form-group row py-2">
				<label for="validation6_1" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
				    <input type="date" class="form-control is-invalid" id="validation6_1" placeholder="Date of Birth" required>
                    <div id="validation6_1_feedback" class="invalid_feedback">
                        Please provide a valid Date of Birth.
                    </div>
				</div>
			</div>
            
            <!-- gender -->
            <div class="form-group row py-2">
				<label for="validation_gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select class="form-select is-invalid" id="validation_gender" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <div id="validation_gender_feedback" class="invalid_feedback">
                        Please provide a valid gender.
                    </div>
				</div>
			</div>
            
            <!-- home phone number -->
            <div class="form-group row py-2">
				<label for="validation6_3" class="col-sm-2 col-form-label">Home phone</label>
                <div class="col-sm-10">
				    <input type="tel" class="form-control is-invalid" id="validation6_3" placeholder="Home phone number" required>
                    <div id="validation6_3_feedback" class="invalid_feedback">
                        Please provide a valid home phone number.
                    </div>
				</div>
			</div>
            
            <!-- mobile phone number -->
            <div class="form-group row py-2">
				<label for="validation6_2" class="col-sm-2 col-form-label">Mobile phone</label>
                <div class="col-sm-10">
				    <input type="tel" class="form-control" id="validation6_2" placeholder="Mobile phone number">
                    <div id="validation6_2_feedback" class="invalid_feedback">
                        Please provide a valid mobile phone number.
                    </div>
				</div>
			</div>

            <!-- bot check -->
			<div class="col-12 py-2">
				<div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                        I'm not a bot.
                    </label>
                    <div id="invalidCheck3_feedback" class="invalid_feedback">
                        You must agree before submitting.
                    </div>
				</div>
			</div>

            <!-- submit button -->
			<div class="col-12 py-2">
				<button class="btn btn-primary" type="submit">Submit form</button>
			</div>
		</form>

<!-- page tail -->
<?php include_once('include_tail.php');?>