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
                    <span>Add Product</span>
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
                            <span class="caption-subject font-red bold uppercase">Add Product</span>
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
                                                    <label class="control-label col-md-4">Name of Product
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="name" class="form-control" placeholder="Name of Supplier" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Product Type
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="type" required>
                                                            <option>-- Select --</option>
                                                            <option>Type 1</option>
                                                            <option>Type 2</option>
                                                            <option>Type 3</option>
                                                            <option>Type 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Product Description</label>
                                                    <div class="col-md-4">
                                                        <textarea rows="4" name="product_desc" placeholder="Description" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Product SKU
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" name="sku" class="form-control" placeholder="SKU"  required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Image
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="img-preview" style="height:200px;width:200px;cursor:pointer;" onclick="$('#avatar').click();">
                                                            <img src="http://localhost/vgcpl/uploads/user/base_image.jpg" class="img-responsive" style="min-width: 200px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-8">
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