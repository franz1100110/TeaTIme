<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/index'] = 'admins/index';
$route['admin/create'] = 'admin/add';
$route['admin/update'] = 'admin/edit';
$route['admin/(:any)'] = 'admin/view/$1';
$route['admin'] = 'admin/index';

$route['default_controller'] = 'admin/index';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
