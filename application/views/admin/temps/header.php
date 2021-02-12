<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
			<div class="align-content-center">
				<a class="navbar-brand" href="<? echo base_url('admin/dashboard') ?>">
					<b>
						<img src="<?php echo base_url(); ?>assets/images/logo2.png" alt="Logo"
							 class="img-responsive dark-logo"/>
					</b>
				</a>
			</div>

        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <!-- This is  -->
                <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                        href="javascript:void(0)"><i class="sl-icon-menu"></i></a></li>
                <li class="nav-item"><a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark"
                                        href="javascript:void(0)"><i class="sl-icon-menu"></i></a></li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"> <i class="icon-Bell"></i>
                        <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" style="height: 170px !important;">
                        <ul>
                            <li>
                                <div class="drop-title">Notification (s)</div>
                            </li>
                            <li>
                                <div class="message-center" style="padding: 20px  !important;">

                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item dropdown u-pro">

                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">

                        <img src="<?php echo base_url() ?>assets/images/profile.png" alt="user" class=""/>
                        <span class="hidden-md-down">
                           <?php echo $details->fname . " " . $details->other_names; ?> &nbsp;<i class="fa fa-angle-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-text">
                                        <h4> <?php echo $details->email; ?></h4>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url() ?>admin/logout"><i class="fa fa-power-off"></i>
                                    Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
