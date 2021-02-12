<div class="container-fluid">
    <?php $this->load->view('admin/pages/head_info') ;?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>
                                Clients
                            </h5>
                            <hr>
                        </div>

                        <div class="col-md-4">
                            <h5>
                                Total Clients : &nbsp; (<b><?php echo count($client_details);?></b>)
                            </h5>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive m-t-10">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th> Client Name.</th>
                                        <th> Tin Pin </th>
                                        <th> Passport </th>
                                        <th> Date </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($client_details as $value) {?>
                                        <tr>
                                            <td>
                                                <?php echo $value->fname?>
                                            </td>
                                            <td>
                                                <?php echo $value->tin_pin?>
                                            </td>
                                            <td>
                                                <?php echo $value->passport?>
                                            </td>

                                            <td>
                                                <?php echo date_format(date_create($value->date), 'jS M, Y') ;?>
                                            </td>
                                            <td>
                                                <a class="btn btn-inverse btn-sm">
                                                    View Details
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th> Client Name.</th>
                                        <th> Tin Pin </th>
                                        <th> Passport </th>
                                        <th> Date </th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
