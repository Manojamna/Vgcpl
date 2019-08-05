<?php
if (isset($this->session->userdata['user_data']) && !empty($this->session->userdata['user_data'])) {
    $session_data = $this->session->userdata['user_data'];
    $allMenu = $this->session->prevision_data;
    $allMenuBak = $this->session->prevision_data;
    $itemsArray = array('WEB');
}
?>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="nav-item <?=is_menu_active('dashboard');?>">
                <a href="<?=WEB_URL.'dashboard'?>" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Home </span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item <?php echo is_menu_active('manager');?>">
                <a href="" class="nav-link nav-toggle">
                    <i class="fa fa-black-tie"></i>
                    <span class="title">Manager</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?=is_menu_active('manager');?> ">
                        <a href="<?=WEB_URL.'manager'?>" class="nav-link ">
                            <span class="title">List Manager</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo is_menu_active('addcustomer'); echo is_menu_active('customer'); echo is_menu_active('customersite');?>">
                <a href="<?=WEB_URL.'customer'?>" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Customer</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?=is_menu_active('addcustomer');?>">
                        <a href="<?=WEB_URL.'addcustomer'?>" class="nav-link ">
                            <span class="title">Add Customer</span>
                        </a>
                    </li>
                    <li class="nav-item  <?=is_menu_active('customer');?>">
                        <a href="<?=WEB_URL.'customer'?>" class="nav-link ">
                            <span class="title">List Customer</span>
                        </a>
                    </li>
                    <li class="nav-item  <?=is_menu_active('customersite');?>">
                        <a href="<?=WEB_URL.'customersite'?>" class="nav-link ">
                            <span class="title">Customer Site</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo is_menu_active('adduser'); echo is_menu_active('user');?>">
                <a href="<?=WEB_URL.'user'?>" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">User</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?=is_menu_active('adduser');?>">
                        <a href="<?=WEB_URL.'adduser'?>" class="nav-link ">
                            <span class="title">Add User</span>
                        </a>
                    </li>
                    <li class="nav-item <?=is_menu_active('user');?> ">
                        <a href="<?=WEB_URL.'user'?>" class="nav-link ">
                            <span class="title">List Users</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo is_menu_active('addsupplier'); echo is_menu_active('supplier');?>">
                <a href="<?=WEB_URL.'supplier'?>" class="nav-link nav-toggle">
                    <i class="fa fa-send-o"></i>
                    <span class="title">Supplier</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?=is_menu_active('addsupplier');?> ">
                        <a href="<?=WEB_URL.'addsupplier'?>" class="nav-link ">
                            <span class="title">Add Supplier</span>
                        </a>
                    </li>
                    <li class="nav-item <?=is_menu_active('supplier');?> ">
                        <a href="<?=WEB_URL.'supplier'?>" class="nav-link ">
                            <span class="title">List Supplier</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo is_menu_active('addfleet'); echo is_menu_active('fleet');?>">
                <a href="<?=WEB_URL.'fleet'?>" class="nav-link nav-toggle">
                    <i class="fa fa-car"></i>
                    <span class="title">Fleet</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?=is_menu_active('addfleet');?>">
                        <a href="<?=WEB_URL.'addfleet'?>" class="nav-link ">
                            <span class="title">Add Fleet</span>
                        </a>
                    </li>
                    <li class="nav-item  <?=is_menu_active('fleet');?>">
                        <a href="<?=WEB_URL.'fleet'?>" class="nav-link ">
                            <span class="title">List Fleet</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo is_menu_active('addplant'); echo is_menu_active('plant');?>">
                <a href="<?=WEB_URL.'plant'?>" class="nav-link nav-toggle">
                    <i class="fa fa-area-chart"></i>
                    <span class="title">Plant</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?=is_menu_active('addplant');?>">
                        <a href="<?=WEB_URL.'addplant'?>" class="nav-link ">
                            <span class="title">Add Plant</span>
                        </a>
                    </li>
                    <li class="nav-item  <?=is_menu_active('plant');?>">
                        <a href="<?=WEB_URL.'plant'?>" class="nav-link ">
                            <span class="title">List Plant</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo is_menu_active('addproduct'); echo is_menu_active('product');?>">
                <a href="<?=WEB_URL.'product'?>" class="nav-link nav-toggle">
                    <i class="fa fa-object-group"></i>
                    <span class="title">Product</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?=is_menu_active('addproduct');?>">
                        <a href="<?=WEB_URL.'addproduct'?>" class="nav-link ">
                            <span class="title">Add Product</span>
                        </a>
                    </li>
                    <li class="nav-item  <?=is_menu_active('product');?>">
                        <a href="<?=WEB_URL.'product'?>" class="nav-link ">
                            <span class="title">List Products</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo is_menu_active('addrole');?>">
                <a href="<?=WEB_URL.'role'?>" class="nav-link nav-toggle">
                    <i class="fa fa-laptop"></i>
                    <span class="title">Role</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?=is_menu_active('addrole');?>">
                        <a href="<?=WEB_URL.'addrole'?>" class="nav-link ">
                            <span class="title">Add Role</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo is_menu_active('addsitet1'); echo is_menu_active('addsitet2');?>">
                <a href="<?=WEB_URL.'site'?>" class="nav-link nav-toggle">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Site</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?=is_menu_active('addsitet1');?>">
                        <a href="<?=WEB_URL.'addsitet1'?>" class="nav-link ">
                            <span class="title">Add Site Type1</span>
                        </a>
                    </li>
                    <li class="nav-item  <?=is_menu_active('addsitet2');?>">
                        <a href="<?=WEB_URL.'addsitet2'?>" class="nav-link ">
                            <span class="title">Add Site Type2</span>
                        </a>
                    </li>
                </ul>
            </li>

            <?php if(!empty($allMenu)) :?>
            <?php foreach ($allMenu as $item):?>
                <?php if ( $item['is_header'] === '1' ) :
                    $itemsArray = array('WEB');?>

                    <?php foreach ($allMenuBak as $itemBak):?>
                            <?php if ($item['pv_id'] == $itemBak['parent_id']) :
                                    $itemsArray[] = $itemBak['pv_url'] ?>
                                <?php endif; ?>
                    <?php endforeach; ?>
                    <li class="nav-item start <?= in_array($this->uri->segment(1), $itemsArray) ? is_menu_active($this->uri->segment(1)).' open' : '';?>"> <!-- active open -->
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-docs"></i>
                            <span class="title"><?= $item['pv_name']?></span>
                            <span class="arrow <?= in_array($this->uri->segment(1), $itemsArray) ? 'open' : '';?>"></span> <!-- open -->
                        </a>
                        <ul class="sub-menu" style="display: <?= in_array($this->uri->segment(1), $itemsArray) ? 'block' : 'none';?>;">

                            <?php foreach ($allMenuBak as $itemBak):?>
                                <?php if ($item['pv_id'] == $itemBak['parent_id']) : ?>
                                    <li class="nav-item start <?= in_array($this->uri->segment(1), array($itemBak['pv_url'])) ? is_menu_active($this->uri->segment(1)) : '';?>"> <!-- active open -->
                                        <a href="<?=WEB_URL.$itemBak['pv_url']?>" class="nav-link ">
                                            <i class="fa fa-file-text-o"></i>
                                            <span class="title"><?= $itemBak['pv_name']?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </ul>
                    </li>
                <?php endif; ?>
            <?php endforeach;?>
            <?php endif; ?>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->