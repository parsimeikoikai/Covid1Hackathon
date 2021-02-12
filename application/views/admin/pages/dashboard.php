<div class="container-fluid">
    <?php $this->load->view('admin/pages/head_info') ;?>
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="<?php echo base_url('cgk/record_sales')?>">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center">
                                <h2 class="number" id="members_active_div">

                                </h2>
                                <h5 class="text-muted m-b-0">
                                    New Record
                                </h5>
                            </div>
                            <div class="align-self-center display-6 ml-auto"><i class="text-success icon-Printer"></i>
                            </div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                             aria-valuemax="100" style="width:100%; height:3px;"><span
                                class="sr-only"></span></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="<?php echo base_url('rwi/inspections')?>">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center">
                                <h2 class="number" id="members_active_div">

                                </h2>
                                <h5 class="text-muted m-b-0">
                                    Total Sales
                                </h5>
                            </div>
                            <div class="align-self-center display-6 ml-auto"><i
                                    class="text-primary icon-Upgrade"></i></div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                             aria-valuemax="100" style="width:100%; height:3px;"><span
                                class="sr-only"></span></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="<?php echo base_url('admin/paid_invoices')?>">
                    <div class="card-body">
                        <div class="d-flex p-10 no-block">
                            <div class="align-slef-center">
                                <h2 class="number" id="members_active_div">

                                </h2>
                                <h5 class="text-muted m-b-0">
                                    Reports
                                </h5>
                            </div>
                            <div class="align-self-center display-6 ml-auto"><i class="text-danger icon-Money"></i>
                            </div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                             aria-valuemax="100" style="width:100%; height:3px;"><span
                                class="sr-only"></span></div>
                    </div>
                </a>
            </div>
        </div>
    </div>


</div>
