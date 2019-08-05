<?php $session_data = $this->session->userdata['user_data']; ?>
<style>
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
<!-- Model for image croping -->
<div class="modal" id="myModal">
    <div class="modal-dialog pull-right">
        <div class="modal-content">
            <div class="modal-body">
                <div id="div1"></div>
            </div>
            <div class="modal-footer">        
                <button type="button" class="btn red" id="cancel_image">Cancel</button>   
                <button type="button" id="done" class="btn btn-primary">Save changes</button>
            </div>
        </div>    
    </div>
</div>
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
                    <a href="<?= WEB_URL . 'web' ?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Account</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> Admin Profile</h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->

                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Profile/Account</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            <form role="form" id="edit_admin_profile" enctype="multipart/form-data" method="post">
                                                <?php echo form_hidden('id', $u_id); ?>
                                                <div class="form-group">
                                                    <label class="control-label">Fiest name</label>
                                                    <input type="text" placeholder="Title" name="name" class="form-control" value="<?php echo (!empty($records['name'])) ? $records['name'] : set_value('name'); ?>"/> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" placeholder="Email" name="email" class="form-control" readonly="" value="<?php echo (!empty($records['email'])) ? $records['email'] : set_value('email'); ?>"/> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="number" placeholder="Mobile" name="mobile" class="form-control" value="<?php echo (!empty($records['mobile'])) ? $records['mobile'] : set_value('mobile'); ?>"/> </div>

                                                
                                                <div class="form-group">
                                                    <label class="control-label">Image</label>
                                                    <div style="display:none">
                                                        <input type="hidden" name="old_image" value="<?php echo (isset($records['profile_image']) && !empty($records['profile_image'])) ? $records['profile_image'] : '' ?>"/>
                                                        <input type="file" name="image" id="avatar" style="display:none" accept='image/x-png,image/jpeg' />
                                                        <input type="hidden" id="x1" name="x1" />
                                                        <input type="hidden" id="y1" name="y1" />
                                                        <input type="hidden" id="x2" name="x2" />
                                                        <input type="hidden" id="y2" name="y2" />
                                                        <input type="hidden" id="w" name="w" />
                                                        <input type="hidden" id="h" name="h" />                            
                                                    </div>
                                                    <div class="img-preview" style="height:200px;width:200px;cursor:pointer;" onclick="$('#avatar').click();">
                                                        <img src="<?= $records['profile_image'] ?>" class="img-responsive" style="min-width: 200px">
                                                    </div>
                                                    <br>
                                                    <small style="color : #ddb03e">(Only .jpg, .jpeg, .png allowed)</small>
                                                </div>
                                                <div class="margiv-top-10">
                                                    <input type="submit" name="submit" value="Save Changes" class="btn green"/>
                                                    <a href="<?= WEB_URL ?>dashboard" class="btn default"> Cancel </a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- END PERSONAL INFO TAB -->
                                        <!-- CHANGE AVATAR TAB -->

                                        <!-- END CHANGE AVATAR TAB -->
                                        <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane" id="tab_1_3">
                                            <form method="post" id="change_password">
                                                <div class="form-group">
                                                    <label class="control-label">Current Password</label>
                                                    <input type="password" name="current_password" id="current_password" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">New Password</label>
                                                    <input type="password" name="new_password" id="new_password" class="form-control" /> </div>
                                                <div class="form-group">
                                                    <label class="control-label">Confirm Password</label>
                                                    <input type="password" name="confirm_password" class="form-control" /> </div>
                                                <div class="margin-top-10">
                                                    <button type="submit" class="btn green"> Change Password </button>
                                                    <a href="<?= WEB_URL ?>dashboard" class="btn default"> Cancel </a>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- END CHANGE PASSWORD TAB -->
                                        <!-- PRIVACY SETTINGS TAB -->

                                        <!-- END PRIVACY SETTINGS TAB -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- END DASHBOARD STATS 1-->

    </div>
    <!-- END CONTENT BODY -->
</div>