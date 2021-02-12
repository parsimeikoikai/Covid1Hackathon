<div class="container" style="margin-bottom: 25px; margin-top: 10vh; height: 68vh;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('auth/reg_action')?>" id="signup_form">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center">
                                    User Sign Up
                                </h3>
                                <hr>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="user_fname">
                                        First Name
                                    </label>
                                    <input type="text" name="fname" class="form-control" id="user_fname" required oninput="check_fname()">
                                    <span class="text-danger" id="fname_error" style="display: none;">
                                        First name should contain letters only
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="user_other_names">
                                        Other Names
                                    </label>
                                    <input type="text" name="other_names" class="form-control" id="user_other_names" required oninput="check_other_names()">
                                    <span class="text-danger" id="other_names_error" style="display: none;">
                                        Other names should contain letters only
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="user_email">
                                        Email Address
                                    </label>
                                    <input type="email" name="email" class="form-control" id="user_email" required oninput="check_email()">
                                    <span class="text-danger" id="email_error" style="display: none;">
                                       Enter correct email address
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="user_phone">
                                        Phone Number
                                    </label>
                                    <input type="number" name="phone" class="form-control" id="user_phone" required oninput="check_phone()">
                                    <span class="text-danger" id="phone_error" style="display: none;">
                                        Enter correct phone number
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="user_passport">
                                        Passport No.
                                    </label>
                                    <input type="number" name="passport" class="form-control" id="user_passport" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="user_tin">
                                        TIN No.
                                    </label>
                                    <input type="number" name="tin" class="form-control" id="user_tin" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_address">
                                        Postal Address
                                    </label>
                                    <input type="text" name="p_address" class="form-control" id="p_address" required>
                                </div>
                                <div class="form-group">
                                    <label for="p_code">
                                        Postal Code
                                    </label>
                                    <input type="number" name="p_code" class="form-control" id="p_code" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_pass1">
                                        Password
                                    </label>
                                    <input type="password" name="password" class="form-control" id="user_pass1" required oninput="check_pass1()">
                                    <span class="text-danger" id="pass1_error" style="display: none;">
                                        Password must be at least 6 characters
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="user_pass2">
                                        Confirm Password
                                    </label>
                                    <input type="password" name="password2" class="form-control" id="user_pass2" required oninput="check_pass2()">
                                    <span class="text-danger" id="pass_mismatch" style="display: none;">
                                        Password do not match
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="text-center" id="loading" style="display: none;">
                                    <img src="<?php echo base_url('slide/loading.gif')?>" class="img-responsive">
                                </div>
                                <div id="response_div" class="text-center">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-secondary" id="auth_button" type="submit">
                                        <i class="fa fa-lock"></i>
                                        &nbsp;
                                        Sign Up
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
