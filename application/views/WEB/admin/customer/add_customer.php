<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li><a href="<?= WEB_URL . 'web' ?>">Dashboard</a><i class="fa fa-circle"></i></li>
                <li><span>Add Customer</span></li>
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
                            <span class="caption-subject font-red bold uppercase">Add Customer</span>
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
                                                    <label class="control-label col-md-3">Name<span class="required"> * </span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">GST No<span class="required"> * </span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="gstno" class="form-control" placeholder="GST No" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">State<span class="required"> * </span></label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="state_id" required>
                                                            <option>-- Select --</option>
                                                            <option>Gujarat</option>
                                                            <option>Haryana</option>
                                                            <option>Punjab</option>
                                                            <option>Andhra Pradesh</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">City</label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="city" class="form-control" placeholder="City" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Address</label>
                                                    <div class="col-md-8">
                                                        <textarea rows="4" name="address" placeholder="Address" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Mobile No<span class="required"> * </span></label>
                                                    <div class="col-md-8">
                                                        <input name="mobile" type="text" placeholder="Mobile No" class="form-control"  required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Mobile No 2</label>
                                                    <div class="col-md-8">
                                                        <input name="mobile2" type="text" placeholder="Mobile No 2" class="form-control"/>
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
                                                    <label class="control-label col-md-3">Phone No</label>
                                                    <div class="col-md-8">
                                                        <input name="phoneno" type="text" placeholder="Phone Number" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Other Details</label>
                                                    <div class="col-md-8">
                                                        <textarea rows="4" name="other_detail" placeholder="Other Details" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Compony Logo</label>
                                                    <div class="col-md-8">
                                                        <div class="img-preview" style="height:200px;width:200px;cursor:pointer;" onclick="$('#avatar').click();">
                                                            <img src="http://localhost/vgcpl/uploads/user/base_image.jpg" class="img-responsive" style="min-width: 200px">
                                                        </div><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="button" class="btn grey-salsa btn-outline" name="cancel_btn">Cancel</button>
                                                        <button type="submit" class="btn green" name="save_btn">Save and Continue</button>
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