<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'AuthController';
$route['logout'] = 'AuthController/logout';

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
$route['app/galeri/update/(:any)'] = 'GaleriController/update/$1';
$route['app/galeri/delete/(:any)'] = 'GaleriController/delete/$1';

$route['app/portofolio'] = 'PortofolioController/index';
$route['app/portofolio/create'] = 'PortofolioController/create';
$route['app/portofolio/store'] = 'PortofolioController/store';
$route['app/portofolio/edit/(:any)'] = 'PortofolioController/edit/$1';
$route['app/portofolio/update/(:any)'] = 'PortofolioController/update/$1';
$route['app/portofolio/delete/(:any)'] = 'PortofolioController/delete/$1';

$route['app/ucapan'] = 'UcapanController/index';
$route['app/ucapan/delete/(:any)'] = 'UcapanController/delete/$1';

$route['ucapan/contact_store'] = 'HomeController/contact_store';
