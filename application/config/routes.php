<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['app/dashboard'] = 'DashboardController/index';

$route['app/acara'] = 'AcaraController/index';
$route['app/acara/update'] = 'AcaraController/update';

$route['app/sosial_media'] = 'SosialMediaController/index';
$route['app/sosial_media/update'] = 'SosialMediaController/update';

$route['user'] = 'UserController/index';
$route['user/create'] = 'UserController/create';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/delete/(:any)'] = 'UserController/delete/$1';
