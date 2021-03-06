<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = '';
$route['login'] = "/main/login";
$route['logout'] = "main/logout";
$route['register'] = "/main/register";
$route['mainpage'] = "/main/mainpage";
$route['products'] = "/products";
$route['show'] = "/main/show";
$route['add'] = "/main/add";
$route['showproduct/(:any)'] = "products/show/$1";
$route['addproduct/(:any)'] = "carts/add/$1";
$route['cart'] = "carts";
$route['delete/(:any)'] = "carts/delete/$1";
$route['addorder/(:any)'] = "orders/create/$1";
$route['updatecart'] = "carts/update";
$route['products/mainpage_products_json_popularity/(:any)']='products/mainpage_products_json_popularity/$1';
$route['products/mainpage_products_json_price/(:any)']='products/mainpage_products_json_price/$1';
$route["products/search_json_sort_pop/(:any)"]="products/search_json_sort_pop/$1";
$route['products/search_json_sort_price/(:any)']='products/search_json_sort_price/$1';
$route['admin'] = "products/show_admin_products";
$route['products/category_json/(:any)'] ='products/category_json/$1';
$route['dashboard'] = "orders/dashboard_orders";
$route['edit_product/(:any)'] = "products/update_product/$1";
$route['add_new_product'] = "Products/add_product";
$route['delete_product/(:any)'] = "products/delete_product/$1";
$route['chargecard'] = "carts/charge_card";
$route['payment'] = "carts/show_payment";
//$route['updateorder/(:any)/(:any)'] = "orders/updatestatus/$1/$2";
//end of routes.php
