<style type="text/css">
    .img-preview {
        border-radius:50% !important;
    }
    .img-preview {
        /*        float:right;*/
        overflow: hidden;
        height: 100px;
        width: 100px;
        cursor: pointer;
        border: 1px solid #E0E0E0;
        box-shadow: 0px 1px 10px 0px rgba(50, 50, 50, 0.2);
    }
    .img-responsive {
        /*width: 128px;*/
    }
    #div1 {
        max-height: 400px;
    }
    .img_fav_cause {
        margin-right: 5px;
    }
    .image-c-preview {
        height: 100% !important;
        width: 100% !important;
    }
</style>

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
                    <a href="<?= WEB_URL . 'user' ?>">Users list</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Add User</span>
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
                            <span class="caption-subject font-red bold uppercase">Add User</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form class="form-horizontal" role="form" id="add_item_id" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6" >
                                    <div class="row">
                                        <div class="portlet-body">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Name
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="name" placeholder="Name" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Mobile No
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input name="mobile" type="text" placeholder="Mobile No" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input name="email" type="email" placeholder="Email" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Gender</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <div class="icheck-list" style="margin-top: 8px;">
                                                                <label class="">
                                                                    <div class="iradio_flat-blue">
                                                                        <input type="radio" name="gender" class="icheck" value="Male" data-radio="iradio_flat-blue">
                                                                        <ins class="iCheck-helper"></ins>
                                                                    </div> Male

                                                                    <div class="iradio_flat-blue" style="position: relative;">
                                                                        <input type="radio" name="gender" class="icheck" value="Female" data-radio="iradio_flat-blue">
                                                                        <ins class="iCheck-helper" ></ins>
                                                                    </div> Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Password
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input name="password" type="password" placeholder="Password" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <div class="icheck-list">
                                                                <label class="">
                                                                    <div class="icheckbox_flat-blue" style="position: relative;">
                                                                        <input type="checkbox" class="icheck" name="is_driver" data-checkbox="icheckbox_flat-blue" style="position: absolute; opacity: 0;">
                                                                        <ins class="iCheck-helper">
                                                                        </ins>
                                                                    </div> Is Driver
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Profile Photo
                                                    </label>
                                                    <div class="col-md-8">
                                                        <div class="img-preview" style="height:200px;width:200px;cursor:pointer;" onclick="$('#avatar').click();">
                                                            <img src="http://localhost/vgcpl/uploads/user/base_image.jpg" class="img-responsive" style="min-width: 200px">
                                                        </div><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6" >
                                    <div class="row">
                                        <div class="portlet-body">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">User for Plant
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input name="user_for_plant" type="text" placeholder="User for Plant" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Role</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="role" multiple>
                                                            <option value="Accountant">Accountant</option>
                                                            <option value="Manager">Manager</option>
                                                            <option value="Operator">Operator</option>
                                                            <option value="Handler">Handler</option>
                                                            <option value="Supplier">Supplier</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Bio Info</label>
                                                    <div class="col-md-8">
                                                        <textarea rows="4" name="bio_info" placeholder="Bio Info" class="form-control"></textarea><br>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">D.O.B.
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="date" name="date_of_birth" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Document Photo
                                                    </label>
                                                    <div class="col-md-8">
                                                        <div style="height:200px;width:200px;cursor:pointer;" onclick="$('#avatar').click();">
                                                            <img src="http://localhost/vgcpl/uploads/user/base_image.jpg" class="img-responsive" style="min-width: 200px">
                                                        </div>
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