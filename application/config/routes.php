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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'auth/login';
$route['auth/login'] = 'auth/login';
$route['auth/profile'] = 'auth/profile';
$route['auth/update_profile'] = 'auth/update_profile';
$route['auth/forgot_password'] = 'auth/forgot_password';
$route['auth/register'] = 'auth/register';
// $route['user/dashboard'] = 'user/dashboard';
$route['auth/admin_login'] = 'auth/admin_login';
$route['admin/profile'] = 'auth/admin_profile';
// $route['admin/login'] = 'auth/admin_login';
// $route['admin/profile'] = 'admin/profile';
$route['admin/update_profile'] = 'auth/update_admin_profile';
$route['admin/customers'] = 'admin/customers';
$route['admin/customer_detail/(:num)'] = 'admin/customer_detail/$1';
$route['admin/edit_customer/(:num)'] = 'admin/edit_customer/$1';
$route['admin/update_customer/(:num)'] = 'admin/update_customer/$1';
$route['admin/delete_customer/(:num)'] = 'admin/delete_customer/$1';
$route['admin/confirm_delete/(:num)'] = 'admin/confirm_delete/$1';
$route['admin/customer_messages/(:num)'] = 'admin/customer_messages/$1';
$route['admin/all_message_history'] = 'admin/all_message_history';
$route['auth/logout'] = 'auth/logout';
$route['admin/logout'] = 'admin/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
