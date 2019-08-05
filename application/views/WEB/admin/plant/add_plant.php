<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?= WEB_URL . 'web' ?>">Dashboard</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Plant</span>
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
                            <span class="caption-subject font-red bold uppercase">Add Plant</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form class="form-horizontal" role="form" id="add_item_id" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12" >
                                    <div class="row">
                                        <div class="portlet-body">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Plant Name
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="name" placeholder="Plant Name" class="form-control"  required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Address
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <textarea rows="4" class="form-control" name="address" placeholder="Provide Address" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact Number
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="contact" placeholder="Contact Number" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">State<span class="required"> * </span></label>
                                                    <div class="col-md-4">
                                                        <select name="state_id" id="state_list" class="form-control" required>
                                                            <option value="">-- Select --</option>
                                                            <option value="01">Gujarat</option>
                                                            <option value="02">Maharastra</option>
                                                            <option value="03">Punjab</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">City<span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input name="city" type="text" placeholder="City" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                                        <button type="submit" class="btn green">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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