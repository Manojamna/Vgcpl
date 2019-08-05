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
                    <span>Add Role</span>
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
                            <span class="caption-subject font-red bold uppercase">Add Role</span>
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
                                                    <label class="control-label col-md-4">Role Name
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="name" class="form-control" placeholder="Role Name" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Role Permission
                                                    </label>
                                                    <div class="col-md-3">
                                                        <fieldset>
                                                            <label class="control-label">User :</label>
                                                            <div class="icheck-list">
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="add_user" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">

                                                                        </ins>
                                                                    </div> Add User
                                                                </label>
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="edit_user" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">

                                                                        </ins>
                                                                    </div> Edit User
                                                                </label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <fieldset>
                                                            <label class="control-label">Customer :</label>
                                                            <div class="icheck-list">
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="add_customer" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">

                                                                        </ins>
                                                                    </div> Add Customer
                                                                </label>
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="edit_customer" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">

                                                                        </ins>
                                                                    </div> Edit Customer
                                                                </label>
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="view_customer" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">

                                                                        </ins>
                                                                    </div> View Customer
                                                                </label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"></label>
                                                    <div class="col-md-3">
                                                        <fieldset>
                                                            <label class="control-label">Report :</label>
                                                            <div class="icheck-list">
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="challan_report" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">

                                                                        </ins>
                                                                    </div> Challan Report
                                                                </label>
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="edit_customer" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">

                                                                        </ins>
                                                                    </div> Edit Report
                                                                </label>
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="view_customer" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">
                                                                        </ins>
                                                                    </div> View Report
                                                                </label>
                                                            </div>
                                                        </fieldset>
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