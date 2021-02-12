<div class="container" style="margin-bottom: 25px; margin-top: 10vh; height: 68vh;">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div>
				<div class="card">
					<div class="card-body">
						<h3 class="text-center" style="margin-top: 1vh;">

							User Login

						</h3>
						<hr>
						<form class="form-horizontal" method="post" id="login_form" action="<?php echo base_url('auth/login_action')?>">
							<div class="form-group">
								<label for="user_email">
									Email Address
								</label>
								<input type="email" id="user_email" name="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="password_login">
									Password
								</label>
								<input type="password" id="password_login" name="password" class="form-control" required>
							</div>
							<div class="form-group">
								<div class="text-center" id="loading" style="display: none;">
									<img src="<?php echo base_url('slide/loading.gif')?>" class="img-responsive">
								</div>
								<div id="response_div" class="text-center">
								</div>
								<button class="btn btn-md" type="submit" id="auth_button" style="width: 100%; display: block;">
									Login
								</button>
							</div>
							<div class="form-group m-b-5">
								<div class="col-sm-12 text-center">
									<a href="<?php echo base_url('auth/forgot_password')?>">
										Forgot Password?
									</a>
									<?php if($page === 'client' || $page === '') {?>
										<br><br>
										<a href="<?php echo base_url('auth/signup')?>">
											Don't have an account? Sign Up
										</a>
									<?php }?>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
