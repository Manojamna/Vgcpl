<link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
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
                    <span>Add New Site</span>
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
                <div class="portlet light bordered" id="form_wizard_1">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-red"></i>
                            <span class="caption-subject font-red bold uppercase"> Form -<span class="step-title"> Step 1 of 4 </span></span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form class="form-horizontal" action="#" id="submit_form" method="POST">
                            <div class="form-wizard">
                                <div class="form-body">
                                    <ul class="nav nav-pills nav-justified steps">
                                        <li>
                                            <a href="#tab1" data-toggle="tab" class="step">
                                                <span class="number"> 1 </span>
                                                <span class="desc"><i class="fa fa-check"></i> Create Site</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab" class="step">
                                                <span class="number"> 2 </span>
                                                <span class="desc"><i class="fa fa-check"></i> Site Manager </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                <span class="number"> 3 </span>
                                                <span class="desc"><i class="fa fa-check"></i> Quotation </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab4" data-toggle="tab" class="step">
                                                <span class="number"> 4 </span>
                                                <span class="desc"><i class="fa fa-check"></i> Review </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                        <div class="progress-bar progress-bar-success"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="alert alert-danger display-none">
                                            <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                        <div class="alert alert-success display-none">
                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                        <div class="tab-pane active" id="tab1">
                                            <h3 class="block">Provide details</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Customer Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="customer_id"  required>
                                                        <option>-- Select --</option>
                                                        <option>Ramesh</option>
                                                        <option>Hitesh</option>
                                                        <option>Rohit</option>
                                                        <option>Suresh</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Site type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="site_type_id"  required>
                                                        <option>-- Select --</option>
                                                        <option value="Construction">Construction</option>
                                                        <option value="RMC">RMC</option>
                                                        <option value="Fleet">Fleet</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Site Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="name" class="form-control" placeholder="Site Name"  required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Site Address</label>
                                                <div class="col-md-4">
                                                    <textarea rows="4" name="address" placeholder="Please type here..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-actions" align="right">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> Create and Next
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab2">
                                            <h3 class="block">Site Manager at NameOfSite</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Select from Existing Name</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="manager_name" class="form-control" placeholder="Enter Name"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">
                                                </label>
                                                <div class="col-md-4">
                                                    <a href="javascript:;" class="btn btn-info">
                                                        <i class="fa fa-plus"></i> Add Manager</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">OR
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Add New Manager
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Manager Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" name="manager_name" class="form-control" placeholder="Enter Name"  required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Manager Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="mobile" placeholder="Enter Number"  required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Email
                                                </label>
                                                <div class="col-md-4">
                                                    <input name="email" type="email" placeholder="yourmail@email.com" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Other Details</label>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" placeholder="Please provide here" rows="3" name="other_detail"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Profile Photo
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="img-preview" style="height:200px;width:200px;cursor:pointer;" onclick="$('#avatar').click();">
                                                        <img src="http://localhost/vgcpl/uploads/user/base_image.jpg" class="img-responsive" style="min-width: 200px">
                                                    </div><br>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> Add
                                                            <i class="fa fa-angle-right"></i>
                                                        </a><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="dataTables_length" id="sample_1_length">
                                                                <label>Show <select name="sample_1_length" aria-controls="sample_1" class="form-control input-sm input-xsmall input-inline">
                                                                        <option value="5">5</option>
                                                                        <option value="15">15</option>
                                                                        <option value="20">20</option>
                                                                        <option value="-1">All</option>
                                                                    </select>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div id="sample_1_filter" class="dataTables_filter">
                                                                <label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-scrollable">
                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
                                                            <thead>
                                                            <tr role="row">
                                                                <th>No </th>
                                                                <th>Manager Name </th>
                                                                <th>Mobile </th>
                                                                <th>E-Mail </th>
                                                                <th>Other Details </th>
                                                                <th>Photo </th>
                                                                <th>Actions </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr class="gradeX odd" role="row">
                                                                <td> 1 </td>
                                                                <td>Amolika Narine</td>
                                                                <td><a href="tel:8555604295">8555604295</a> </td>
                                                                <td><a href="mailto:AmolikaNarine@gmail.com">AmolikaNarine@gmail.com</a> </td>
                                                                <td>details of manager</td>
                                                                <td>image</td>
                                                                <td><a href="#" class="btn btn blue"><i class="fa fa-pencil-square-o"></i></a>
                                                                    <a href="#" class="btn btn red"><i class="fa fa-trash-o"></i></a></td>
                                                            </tr>
                                                            <tr class="gradeX odd" role="row">
                                                                <td> 2 </td>
                                                                <td>Gautam Chauhan</td>
                                                                <td><a href="tel:9956478532">9956478532</a> </td>
                                                                <td><a href="mailto:GautamChauhan@gmail.com">GautamChauhan@gmail.com</a> </td>
                                                                <td>Manager details</td>
                                                                <td>image</td>
                                                                <td><a href="#" class="btn btn blue"><i class="fa fa-pencil-square-o"></i></a>
                                                                    <a href="#" class="btn btn red"><i class="fa fa-trash-o"></i></a></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-5">
                                                            <div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing 1 to 5 of 25 records</div>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7">
                                                            <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                                                <ul class="pagination" style="visibility: visible;">
                                                                    <li class="prev disabled"><a href="#" title="First"><i class="fa fa-angle-double-left"></i></a></li>
                                                                    <li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li>
                                                                    <li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li>
                                                                    <li><a href="#">4</a></li>
                                                                    <li><a href="#">5</a></li>
                                                                    <li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                    <li class="next"><a href="#" title="Last"><i class="fa fa-angle-double-right"></i></a></li>
                                                                </ul><br><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions" align="right">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous">
                                                            <i class="fa fa-angle-left"></i> Back </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> Save and Next
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="tab-pane" id="tab3">
                                            <h3 class="block">Site Price of NameOfSite</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Product Sell
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="site_parameter_id">
                                                        <option>-- Select --</option>
                                                        <option value="Parameter 1">Parameter 1</option>
                                                        <option value="Parameter 2">Parameter 2</option>
                                                        <option value="Parameter 3">Parameter 3</option>
                                                        <option value="Parameter 4">Parameter 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Quantity
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="number" name="qty" class="form-control" placeholder="Quantity" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Rate
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="number" name="rate" class="form-control" placeholder="$" required />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Rate of Unit
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="unit_id">
                                                        <option>-- Select --</option>
                                                        <option value="Rate 1">Rate 1</option>
                                                        <option value="Rate 2">Rate 2</option>
                                                        <option value="Rate 3">Rate 3</option>
                                                        <option value="Rate 4">Rate 4</option>
                                                    </select><br><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3"></label>
                                                <div class="col-md-4">
                                                    <a href="javascript:;" class="btn btn-outline green button-next"> Add
                                                        <i class="fa fa-angle-right"></i>
                                                    </a><br><br><br>
                                                </div>

                                                <div class="col-md-12">
                                                    <div>
                                                        <table class="table table-striped table-hover table-bordered dataTable no-footer" id="sample_editable_1" role="grid" aria-describedby="sample_editable_1_info">
                                                            <thead>
                                                            <tr role="row">
                                                                <th rowspan="1" colspan="1" style="width: 153px;"> Product </th>
                                                                <th rowspan="1" colspan="1" style="width: 171px;"> Quantity </th>
                                                                <th rowspan="1" colspan="1" style="width: 107px;"> Rate </th>
                                                                <th rowspan="1" colspan="1" style="width: 112px;"> Rate of Unit </th>
                                                                <th rowspan="1" colspan="1" style="width: 110px;"> Delete </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr role="row" class="odd">
                                                                <td> 1 </td>
                                                                <td> 500 </td>
                                                                <td> 100 </td>
                                                                <td> M. Cube </td>
                                                                <td><a class="delete" href="javascript:;"> Delete </a></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td> 2 </td>
                                                                <td> 200 </td>
                                                                <td> 500 </td>
                                                                <td> M. Cube </td>
                                                                <td><a class="delete" href="javascript:;"> Delete </a></td>
                                                            </tr>
                                                            </tbody>
                                                        </table><br><br>
                                                    </div>
                                                    <div class="form-actions" align="right">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <a href="javascript:;" class="btn default button-previous">
                                                                    <i class="fa fa-angle-left"></i> Back </a>
                                                                <a href="javascript:;" class="btn green button-submit"> Submit and Review
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab4">
                                            <h3 class="block">Confirm your Details</h3>
                                            <h4 class="form-section">Site</h4>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Customer Name:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="customer_id"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Site Type:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="site_type_id"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Site Name:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Site Address:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <h4 class="form-section">Manager</h4>
                                            <div>
                                                <table class="table table-striped table-hover table-bordered dataTable no-footer" id="sample_editable_1" role="grid" aria-describedby="sample_editable_1_info">
                                                    <thead>
                                                    <tr role="row">
                                                        <th rowspan="1" colspan="1" style="width: 153px;"> Manager Name </th>
                                                        <th rowspan="1" colspan="1" style="width: 171px;"> Number </th>
                                                        <th rowspan="1" colspan="1" style="width: 107px;"> Email </th>
                                                        <th rowspan="1" colspan="1" style="width: 112px;"> Other Details </th>
                                                        <th rowspan="1" colspan="1" style="width: 110px;"> City/Town </th>
                                                        <th rowspan="1" colspan="1" style="width: 110px;"> Profile Photo </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="odd">
                                                        <td> Vikram Chauhan </td>
                                                        <td> 6574958321 </td>
                                                        <td> mail@gmail.com </td>
                                                        <td> other detail </td>
                                                        <td> Bhuj </td>
                                                        <td> Image </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td> Bhavya Chauhan </td>
                                                        <td> 9846532549 </td>
                                                        <td> someone@gmail.com </td>
                                                        <td> other detail </td>
                                                        <td> Mandvi </td>
                                                        <td> Image </td>
                                                    </tr>
                                                    </tbody>
                                                </table><br><br>
                                            </div>
                                            <h4 class="form-section">Price</h4>
                                            <div>
                                                <table class="table table-striped table-hover table-bordered dataTable no-footer" id="sample_editable_1" role="grid" aria-describedby="sample_editable_1_info">
                                                    <thead>
                                                    <tr role="row">
                                                        <th rowspan="1" colspan="1" style="width: 153px;"> Product Sell </th>
                                                        <th rowspan="1" colspan="1" style="width: 171px;"> Quantity </th>
                                                        <th rowspan="1" colspan="1" style="width: 107px;"> Rate </th>
                                                        <th rowspan="1" colspan="1" style="width: 112px;"> Rate of Unit </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="odd">
                                                        <td> 25 </td>
                                                        <td> 10 </td>
                                                        <td> 50 </td>
                                                        <td> Ltr. </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td> 45 </td>
                                                        <td> 5 </td>
                                                        <td> 70 </td>
                                                        <td> Ltr. </td>
                                                    </tr>
                                                    </tbody>
                                                </table><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
</div>
