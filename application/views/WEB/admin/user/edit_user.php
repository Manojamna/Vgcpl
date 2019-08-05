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
                    <a href="<?= WEB_URL . 'user' ?>">Users list</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Edit User</span>
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
                            <span class="caption-subject font-red bold uppercase">Edit Operation</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form class="form-horizontal" role="form" id="edit_item_id" method="post" enctype="multipart/form-data">
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
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Mobile No</label>
                                            <div class="col-md-6">
                                                <input type="text" name="mobile" value="<?=isset($data['mobile']) && !empty($data['mobile']) ? $data['mobile'] : ''?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">E-Mail</label>
                                            <div class="col-md-6">
                                                <input type="text" name="email" value="<?=isset($data['email']) && !empty($data['email']) ? $data['email'] : ''?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Gender</label>
                                            <div class="col-md-6">
                                                <?php if($data['gender']=='male') { ?>
                                                <input checked type="radio" name="gender" value="male">Male
                                                    <input type="radio" name="gender" value="female">Female
                                                <?php } else{ ?>
                                                    <input  type="radio" name="gender" value="male">Male
                                                    <input checked type="radio" name="gender" value="female">Female
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Bio Info</label>
                                            <div class="col-md-6">
                                                <textarea rows="4" cols="50" name="bio_info" class="form-control"><?=isset($data['bio_info']) && !empty($data['bio_info']) ? $data['bio_info'] : ''?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Date of Birth</label>
                                            <div class="col-md-6">
                                                <input type="date" name="date_of_birth" value="<?=isset($data['date_of_birth']) && !empty($data['date_of_birth']) ? $data['date_of_birth'] : ''?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Profile Image</label>
                                            <div class="col-md-6">
                                                <input type="file" name="profile_image" value="<?=isset($data['profile_image']) && !empty($data['profile_image']) ? $data['profile_image'] : ''?>" class="form-control">
                                                <img src="../assets/images/<?php echo $data['profile_image']; ?>" height="30%" width="50%">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Password</label>
                                            <div class="col-md-6">
                                                <input type="password" name="password" value="<?=isset($data['password']) && !empty($data['password']) ? $data['password'] : ''?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-5 control-label">Order Index</label>
                                            <div class="col-md-6">
                                                <input type="number" name="order_index" value="<?=isset($data['order_index']) && !empty($data['order_index']) ? $data['order_index'] : ''?>" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-5">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="javascript:;" onclick="window.location = '<?= WEB_URL . 'user' ?>'" class="btn btn-default">Cancel</a>
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