<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome/all';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'Admin/index';
$route['admin/dashboard'] = 'Admin/dashboard';
$route['forget-password'] = 'Admin/forget_password';
$route['create-password'] = 'Admin/create_password';

$route['super_admin/dashboard'] = 'Admin/dashboard';


$route['ending'] = 'Ending/index';
$route['ending/verify'] = 'Ending/verify';




$route['(:any)'] = 'Welcome/all/$1';