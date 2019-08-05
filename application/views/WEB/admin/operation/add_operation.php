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
                    <a href="<?= WEB_URL . 'operation' ?>">Operation list</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Add Operation</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">  </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject font-red bold uppercase">Add Operation</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form class="form-horizontal" role="form" id="add_item_id" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Name</label>
                                            <div class="col-md-6">
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">URL</label>
                                            <div class="col-md-6">
                                                <input type="text" name="url" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-5">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="javascript:;" onclick="window.location = '<?= WEB_URL . 'role' ?>'" class="btn btn-default">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END SAMPLE FORM PORTLET-->
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- END DASHBOARD STATS 1-->
            </div>
            <!-- END CONTENT BODY -->
        </div>
    </div>
</div>