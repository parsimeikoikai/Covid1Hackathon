<div class="row page-titles">
    <div class="col-md-10 align-self-center">
        <h4 class="text-themecolor">
            <b>
                <b>
                    Admin > &nbsp;
                </b>
            </b>
            &nbsp;<?php echo ucwords(strtolower(str_replace('_', ' ', $page)), "")?>
        </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                </a></li>
        </ol>
    </div>
    <div class="col-md-2 align-self-center d-block d-md-block">
        <h4>
            <i class="fa fa-calendar"></i>
            &nbsp;
            <?php echo date_format(date_create(date('Y')), 'jS M, Y') ;?>
        </h4>
    </div>
</div>