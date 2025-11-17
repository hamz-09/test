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

defined('BASEPATH') OR exit('No direct script access allowed');

// Route default ke method index di controller Home
$route['default_controller'] = 'home';

// Routes untuk navigasi (point ke method di Home)
$route['home'] = 'home/index';
$route['profil'] = 'home/profil';
$route['artikel'] = 'home/artikel';
$route['absen'] = 'home/absen';
$route['informasi'] = 'home/informasi';
$route['kontak'] = 'home/kontak';

$route['absen/add_karyawan'] = 'home/add_karyawan';
$route['absen/update_karyawan'] = 'home/update_karyawan';
$route['absen/toggle_absen'] = 'home/toggle_absen';
$route['absen/delete_karyawan'] = 'home/delete_karyawan';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
