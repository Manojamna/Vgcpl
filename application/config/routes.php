<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Adminlogin/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//$route['test'] = 'test';

$route['dashboard']="WEB/dashboard/index";
$route['web']="Adminlogin/index";

$route['user'] = "WEB/user/index";
$route['adduser'] = "WEB/user/add_user";
$route['userdetail/(:any)'] = "WEB/user/user_detail/$1";

$route['customer'] = "WEB/customer/index";
$route['addcustomer'] = "WEB/customer/add_customer";
$route['customersite'] = "WEB/customer/customer_site";

$route['fleet'] = "WEB/fleet/index";
$route['addfleet'] = "WEB/fleet/add_fleet";

$route['plant'] = "WEB/plant/index";
$route['addplant'] = "WEB/plant/add_plant";

$route['product'] = "WEB/product/index";
$route['addproduct'] = "WEB/product/add_product";

$route['role'] = "WEB/role/index";
$route['addrole'] = "WEB/role/add_role";

$route['site'] = "WEB/site/index";
$route['addsitet1'] = "WEB/site/add_sitet1";
$route['addsitet2'] = "WEB/site/add_sitet2";

$route['supplier'] = "WEB/supplier/index";
$route['addsupplier'] = "WEB/supplier/add_supplier";

$route['manager'] = "WEB/manager/index";

$route['operation'] = "WEB/operation/index";
$route['addoperation'] = "WEB/operation/add_operation";
$route['operationdetail/(:any)'] = "WEB/operation/operation_detail/$1";

$route['assign_role']="WEB/assign_role/index";
$route['add']="WEB/assign_role/insert_data";

$route['partunit'] = "WEB/Partunit/index";
$route['addpartunit'] = "WEB/Partunit/add_partunit";
$route['partunitdetail/(:any)'] = "WEB/Partunit/partunit_detail/$1";