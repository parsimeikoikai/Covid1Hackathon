<div class="container">
	<div style="margin-top: 90px;">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="main-card mb-3 card">
					<div class="card-header alert alert-info"><h5 class="card-title">Login Here</h5></div>
					<div class="card-body">


						<form class="form-horizontal" method="post" id="login_form"
							  action="<?php echo base_url('auth/login_action') ?>">
							<div class="form-row">
								<div class="col-md-12">
									<div class="position-relative form-group"><label for="user_email"
																					 class="">Email</label>
										<input type="email" id="user_email" name="email" class="form-control" required>

									</div>
								</div>
								<div class="col-md-12">
									<div class="position-relative form-group"><label for="password_login"
																					 class="">Password</label>
										<input type="password" id="password_login" name="password" class="form-control"
											   required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="text-center" id="loading" style="display: none;">
									<img src="<?php echo base_url('slide/loading.gif') ?>" class="img-responsive">
								</div>
								<div id="response_div" class="text-center">
								</div>
							</div>
							<div class="form-group">
								<a href="<?php echo base_url('auth/forgot_password')?>">
									Forgot Password?
								</a>
							</div>
							<small>
								<div class="form-group">Dont have an account?contact
									<a href="mailto:info@cancokenya.net">
										administrator
									</a>
								</div>
							</small>


							<button id="auth_button" class="mt-2 btn btn-primary" style="width: 100%; display: block;">Sign in</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

