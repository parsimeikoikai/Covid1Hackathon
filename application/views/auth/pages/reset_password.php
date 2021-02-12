<div class="container" style="margin-bottom: 25px; margin-top: 10vh; height: 68vh;">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center" style="margin-top: 1vh;">
                            Reset Password
                        </h3>
                        <hr>
                        <form id="reset_password" action="<?php echo base_url('auth/reset_pass_action')?>" method="post">
                            <div class="form-group">
                                <label for="pass1">
                                    Password
                                </label>
                                <input type="hidden" name="user_id" value="<?php echo $user_id ;?>">
                                <input type="password" id="pass1" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pass2">
                                    Confirm Password
                                </label>
                                <input type="password" id="pass2" name="password2" class="form-control" required>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-md" type="submit" id="auth_button" style="width: 100%; display: block;">
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
