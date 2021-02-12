
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

                <li class="nav-small-cap">--- Sales ---</li>

                <li class="<?php echo ($page == 'inspections' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('cgk/record_sales') ?>" aria-expanded="false">
                        <i class="icon-Upgrade"></i>
                        <span class="hide-menu">
                           New Record
                        </span>
                    </a>
                </li>

                <li class="nav-small-cap">--- Total Sales ---</li>

                <li class="<?php echo ($page == 'invoices' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/paid_invoices') ?>" aria-expanded="false">
                        <i class="icon-Upgrade"></i>
                        <span class="hide-menu">
                           Total Sales
                        </span>
                    </a>
                </li>
                <li class="nav-small-cap">--- Users ---</li>

                <li class="<?php echo ($page == 'invoices' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/paid_invoices') ?>" aria-expanded="false">
                        <i class="icon-Upgrade"></i>
                        <span class="hide-menu">
                           System Users
                        </span>
                    </a>
                </li>
                <li class="nav-small-cap">--- REPORTS ---</li>

                <li class="<?php echo ($page == 'invoices' ? 'active' : '')?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/operations_reports') ?>" aria-expanded="false">
                        <i class="icon-Upgrade"></i>
                        <span class="hide-menu">
                           Operations Reports
                        </span>
                    </a>
                </li>
              


            </ul>
        </nav>
    </div>

</aside>


<div class="page-wrapper">