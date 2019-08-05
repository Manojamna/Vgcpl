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
                    <span>Users</span>
                </li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject font-red bold uppercase">User Listing</span>
                        </div>
                        <a href="<?=WEB_URL.'adduser'?>" class="btn btn blue pull-right">Add User</a>
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
                                        <th> ID </th>
                                        <th >Name </th>
                                        <th>Mobile </th>
                                        <th >E-Mail </th>
                                        <th> Gender </th>
                                        <th> D.O.B. </th>
                                        <th> Actions </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX odd" role="row">
                                            <td> 1 </td>
                                            <td> 50 </td>
                                            <td>Amolika Narine</td>
                                            <td><a href="tel:8555604295">8555604295</a> </td>
                                            <td><a href="mailto:JasminWalla@gmail.com">JasminWalla@gmail.com</a> </td>
                                            <td>Female</td>
                                            <td>25-10-1994</td>
                                            <td><a href="#" class="btn btn blue"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="btn btn red"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <tr class="gradeX odd" role="row">
                                            <td> 2 </td>
                                            <td> 51 </td>
                                            <td>Gautam Chauhan</td>
                                            <td><a href="tel:9956478532">9956478532</a> </td>
                                            <td><a href="mailto:GautamChauhan@gmail.com">GautamChauhan@gmail.com</a> </td>
                                            <td>Female</td>
                                            <td>25-10-1994</td>
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
</div>