<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['abouts'] = 'Welcome/demo';

$route['home'] = 'Page';
$route['about'] = 'Page/aboutus';

// $route['blog/(:any)'] = 'Page/blog/$1';
$route['blog/(:num)'] = 'Page/blog/$1';

// ========================================
$route['employee'] = 'Frontend/Employee/index';
$route['employee/add'] = 'Frontend/Employee/create';
$route['employee/store'] = 'Frontend/Employee/store';
$route['employee/edit/(:any)'] = 'Frontend/Employee/edit/$1';
$route['employee/update/(:any)'] = 'Frontend/Employee/update/$1';
$route['employee/delete/(:any)'] = 'Frontend/Employee/delete/$1';
$route['employee/confirmdelete/(:any)']['DELETE'] = 'Frontend/Employee/delete/$1';

