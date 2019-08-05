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
                    <a href="<?= WEB_URL . 'partunit' ?>">Partunit list</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Edit partunit</span>
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
                            <span class="caption-subject font-red bold uppercase">Edit partunit</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form class="form-horizontal" role="form" id="edit_chapter" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Name</label>
                                            <div class="col-md-6">
                                                <input type="text" name="name" value="<?=isset($data['name']) && !empty($data['name']) ? $data['name'] : ''?>" class="form-control">
                                                <input type="hidden" name="id" value="<?=isset($data['id']) && !empty($data['id']) ? $data['id'] : ''?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-5">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="javascript:;" onclick="window.location = '<?= WEB_URL . 'partunit' ?>'" class="btn btn-default">Cancel</a>
                                    </div>
                                </div>
                        </form>
                    </div>
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