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

$route['app/landing_pages'] = 'LandingPagesController/index';
$route['app/landing_pages/update'] = 'LandingPagesController/update';

$route['app/galeri'] = 'GaleriController/index';
$route['app/galeri/create'] = 'GaleriController/create';
$route['app/galeri/store'] = 'GaleriController/store';
$route['app/galeri/edit/(:any)'] = 'GaleriController/edit/$1';
$route['app/galeri/delete/(:any)'] = 'GaleriController/delete/$1';
