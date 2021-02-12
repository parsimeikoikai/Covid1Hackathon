<div class="app-main__outer overflow-hidden">
	<div class="app-main__inner">
		<div class="app-page-title">
			<div class="page-title-wrapper">
				<div class="page-title-heading">
					<div class="page-title-icon">
						<i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
						</i>
					</div>
					<div>Profile Management
						<div class="page-title-subheading text-warning">
							<b><i>Update User Information & Password.</i></b>
						</div>
					</div>
				</div>

			</div>
		</div>
		<form id="update_profile" action="<?php echo base_url('actions/update_profile') ?>">
		<div class="row">

				<div class="col-md-4">
					<div class="position-relative form-group">
						<label for="role" class="">First Names</label>
						<input name="role" readonly value="<?php echo $profile_details->fname ?> " id="role"
							   required type="text" class="form-control">
						<input name="row_id"  id="row_id"
							   required type="hidden" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">
						<label for="role" class="">Last Name</label>
						<input name="role"  readonly value="<?php echo $profile_details->other_names ?> "  id="role"
							   required type="text" class="form-control">

					</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">
						<label for="role" class="">Email Address</label>
						<input name="role"  readonly value="<?php echo $profile_details->email ?>"  id="role"
							   required type="text" class="form-control">

					</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">
						<label for="role" class="">Role </label>
						<input name="role"  readonly id="role" value="<?php echo $this->AdminModel->get_names('tbl_roles','id','role',$profile_details->role);?>"
							   required type="text" class="form-control">

					</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">
						<label for="role" class="">Program Manager</label>
						<input name="role"  readonly value="<?php echo $this->AdminModel->get_names('tbl_programs','id','program',$profile_details->role);?>" id="role"
							   required type="text" class="form-control">

					</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">
						<label for="role" class="">Branch </label>
						<input name="role" readonly value="<?php echo $this->AdminModel->get_names('tbl_branches','id','branch',$profile_details->branch_id);?>"  id="role"
							   required type="text" class="form-control">

					</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">
						<label for="role" class="">Password</label>
						<input type="password" name="password" class="form-control" id="user_pass1" required oninput="check_pass1()">
						<span class="text-danger" id="pass1_error" style="display: none;">
                                        Password must be at least 6 characters
                                    </span>
				</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">
						<label for="role" class="">Repeat Password</label>
						<input type="password" name="password2" class="form-control" id="user_pass2" required oninput="check_pass2()">
						<span class="text-danger" id="pass_mismatch" style="display: none;">
                                        Password do not match
                                    </span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">


					</div>
				</div>
				<div class="col-md-4">
					<div class="position-relative form-group">
						<label></label>
						<br />
						<button id="pass_btn" type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i>&nbsp;Save</button>

					</div>
				</div>
			<div class="form-group">
				<div class="text-center" id="loading_div" style="display: none;">
					<img src="<?php echo base_url('slide/loading.gif') ?>" class="img-responsive">
				</div>
				<div id="response_div" class="text-center">
				</div>
			</div>


		</div>
		</form>
	</div>
</div>
</div>
