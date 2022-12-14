<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */
$route['default_controller'] = 'IndexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

$route['login']['GET'] = 'IndexController/login';
$route['register']['GET'] = 'IndexController/register';
$route['login-user']['POST'] = 'LoginController/login';
$route['login-customer']['POST'] = 'IndexController/login_customer';
$route['logout']['GET'] = 'IndexController/logout';
$route['sign-up']['POST'] = 'IndexController/sign_up';
$route['confirm-checkout']['POST'] = 'IndexController/confirm_checkout';
$route['search']['GET'] = 'IndexController/search';
$route['user']['GET'] = 'IndexController/user';

$route['category/(:any)']['GET'] = 'IndexController/category/$1';
$route['category']['GET'] = 'IndexController/listCategories';

$route['product/(:any)']['GET'] = 'IndexController/products/$1';
$route['cart']['GET'] = 'IndexController/cart';
$route['checkout']['GET'] = 'IndexController/checkout';
$route['add-to-cart']['POST'] = 'IndexController/add_to_cart';
$route['add-to-checkout']['POST'] = 'IndexController/add_to_checkout';
$route['delete-item/(:any)']['GET'] = 'IndexController/delete_item/$1';
$route['update_cart']['POST'] = 'IndexController/update_cart';
$route['category/(:num)'] = 'IndexController/category/$1';
$route['category/(:any)/(:any)'] = 'IndexController/category/$1/$2';
$route['category/(:any)/(:any)'] = 'IndexController/fetch_data/$1/$2';

$route['listAllProducts'] = 'IndexController/allProducts';
$route['listAllProducts/(:num)'] = 'IndexController/allProducts/$1';
$route['allSaleProducts'] = 'IndexController/allSaleProducts';
$route['allSaleProducts/(:num)'] = 'IndexController/allSaleProducts/$1';