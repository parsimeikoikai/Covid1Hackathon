
<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="nav-small-cap">--- DASHBOARD ---</li>

                <li class="<?php echo ($page == 'dashboard' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/dashboard') ?>" aria-expanded="false"><i class="icon-Home"></i>
                        <span class="hide-menu">
                           Dashboard
                        </span>
                    </a>
                </li>

                <li class="<?php echo ($page == 'events' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/events') ?>" aria-expanded="false"><i class="icon-Function"></i>
                        <span class="hide-menu">
                          ODM Events
                        </span>
                    </a>
                </li>

                <li class="<?php echo ($page == 'agents' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/agents') ?>" aria-expanded="false">
                        <i class="icon-Money-2"></i>
                        <span class="hide-menu">
                           Manage Agents
                        </span>
                    </a>
                </li>

                <li class="<?php echo ($page == 'tweets' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/tweets') ?>" aria-expanded="false"><i class="icon-Twitter"></i>
                        <span class="hide-menu">
                          ODM Tweets
                        </span>
                    </a>
                </li>


                <li class="nav-small-cap">--- ODM Members ---</li>

                <li class="<?php echo ($page == 'members' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/members') ?>" aria-expanded="false">
                        <i class="icon-User"></i>
                        <span class="hide-menu">
                          Active
                        </span>
                    </a>
                </li>

                <li class="<?php echo ($page == 'members_terminated' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/members_terminated') ?>" aria-expanded="false">
                        <i class="icon-Lock-User"></i>
                        <span class="hide-menu">
                          Terminated
                        </span>
                    </a>
                </li>

                <li class="nav-small-cap">--- User Roles ---</li>

                <li class="<?php echo ($page == 'create_roles' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/create_roles') ?>" aria-expanded="false">
                        <i class="icon-Administrator"></i>
                        <span class="hide-menu">
                           Create Roles
                        </span>
                    </a>
                </li>

                <li class="<?php echo ($page == 'assign_roles' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/assign_roles') ?>" aria-expanded="false">
                        <i class="icon-Add-UserStar"></i>
                        <span class="hide-menu">
                           Assign Roles
                        </span>
                    </a>
                </li>

                <li class="nav-small-cap">--- Messaging ---</li>

                <!--<li class="<?php /*echo ($page == 'send_emails' ? 'active' : '')*/?>">
                    <a class="waves-effect waves-dark" href="<?php /*echo base_url('admin/send_emails') */?>" aria-expanded="false">
                        <i class="icon-Email"></i>
                        <span class="hide-menu">
                           Send Emails
                        </span>
                    </a>
                </li>-->

                <li class="<?php echo ($page == 'send_sms' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/send_sms') ?>" aria-expanded="false">
                        <i class="icon-Envelope-2"></i>
                        <span class="hide-menu">
                           Send SMS
                        </span>
                    </a>
                </li>

                <li class="<?php echo ($page == 'subscriptions' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/subscriptions') ?>" aria-expanded="false">
                        <i class="icon-Envelope"></i>
                        <span class="hide-menu">
                           Subscriptions
                        </span>
                    </a>
                </li>

                <li class="nav-small-cap">--- Donations ---</li>

                <li class="<?php echo ($page == 'donations' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/donations') ?>" aria-expanded="false">
                        <i class="icon-Money-2"></i>
                        <span class="hide-menu">
                           ODM Donations
                        </span>
                    </a>
                </li>

                <li class="nav-small-cap">--- ODM Reports ---</li>

                <li class="<?php echo ($page == 'members_reports' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/members_reports') ?>" aria-expanded="false">
                        <i class="icon-Love-User"></i>
                        <span class="hide-menu">
                          ODM Members
                        </span>
                    </a>
                </li>
                <li class="<?php echo ($page == 'renewal_reports' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/renewal_reports') ?>" aria-expanded="false">
                        <i class="icon-Love-User"></i>
                        <span class="hide-menu">
                           Renewals
                        </span>
                    </a>
                </li>
                <li class="<?php echo ($page == 'finance_collections' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/finance_collections') ?>" aria-expanded="false">
                        <i class="icon-Love-User"></i>
                        <span class="hide-menu">
                          Finance Collection
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>


<div class="page-wrapper">