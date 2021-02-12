<!-- Navigation -->
<?php $page = $this->uri->segment(2) ;?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top" style="border-bottom: solid 1px #363636 !important;">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('web2')?>">
            <img src="<?php echo base_url('logo3.png')?>" class="img-responsive" style="height: 65px;">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web2')?>" style="color: <?php echo ($page == '' ? '#ff924c' : '#363636') ;?>">
                        <i class="fa fa-home"></i>
                        &nbsp;
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web2/verify')?>" style="color: <?php echo ($page == 'verify' ? '#ff924c' : '#363636') ;?>">
                        <i class="fa fa-check-circle"></i>
                        &nbsp;
                        Verify Membership
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web2/about')?>" style="color: <?php echo ($page == 'about' ? '#ff924c' : '#363636') ;?>">
                        <i class="fa fa-history"></i>
                        &nbsp;
                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web2/contact')?>" style="color: <?php echo ($page == 'contact' ? '#ff924c' : '#363636') ;?>">
                        <i class="fa fa-fa fa-address-book-o"></i>
                        &nbsp;
                        Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('web2/events')?>" style="color: <?php echo ($page == 'events' ? '#ff924c' : '#363636') ;?>">
                        <i class="fa fa-fa fa-empire"></i>
                        &nbsp;
                        ODM Events
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-bottom: 5px;">
                    <a class="btn" id="btn_bg_nav" href="<?php echo base_url('web2/login')?>" style="margin-right: 10px; width: auto !important;">
                        <i class="fa fa-sign-in"></i>
                        &nbsp;
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn" id="btn_bg_inverse_nav" href="<?php echo base_url('web2/signup')?>" style="width: auto !important;">
                        <i class="fa fa-lock"></i>
                        &nbsp;
                        Sign Up
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>