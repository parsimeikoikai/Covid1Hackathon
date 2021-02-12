<div class="container" style="margin-bottom: 25px; margin-top: 10vh; height: 108vh;">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center" style="margin-top: 1vh;">
                            Password Recovery
                        </h3>
                        <hr>
                        <form   id="reset_password" action="<?php echo base_url('auth/recover_password')?>" method="post">
                            <div class="form-group">
                                <label for="user_email">
                                    Email Address
                                </label>
                                <input type="email" id="user_email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-md" type="submit" id="auth_button" style="width: 100%; display: block;">
                                    Recover Password
                                </button>
                            </div>
							<div class="form-group">
								<div class="text-center" id="loading" style="display: none;">
									<img src="<?php echo base_url('slide/loading.gif') ?>" class="img-responsive">
								</div>
								<div id="response_div" class="text-center">
								</div>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
