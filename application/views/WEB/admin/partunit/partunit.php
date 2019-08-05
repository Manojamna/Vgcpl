<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->

        <!-- END THEME PANEL -->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?= WEB_URL . 'web' ?>">Dashboard</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Part unit</span>
                </li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject font-red sbold uppercase">Partunit list</span>
                        </div>
                        <a href="<?=WEB_URL.'addpartunit'?>" class="btn btn blue pull-right">Add part unit</a>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-hover table-bordered" id="item_listing">
                            <thead>
                                <tr>
                                    <th> No </th>
                                    <th> Name </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
</div>