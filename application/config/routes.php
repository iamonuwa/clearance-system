<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Pages
$route['pages/about'] 	= 'pages/about';
$route['pages/contact']	= 'pages/contact';

//User 
$route['register']		= 'home/create';
$route['login']			= 'home/login';
$route['reset']			= 'home/forgot';
$route['user/dashboard']= 'home/dashboard';
$route['user/modify']	= 'home/modify';
$route['user/profile']  = 'home/profile';
$route['user/change-password']	= 'home/reset_password';
$route['user/upload']	= 'home/change_image';
$route['user/logout']	= 'home/logout';

//Clearance
$route['clearance']		  = 'clearance/index';
$route['clearance/view']  = 'clearance/index';
$route['clearance/apply'] = 'clearance/create';
$route['clearance/modify/(:num)']= 'clearance/modify/$1';
$route['clearance/status/(:num)'] = 'clearance/status/$1';


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
