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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['home'] = 'Home';
$route['about-us'] = 'home/about_us';
$route['courses'] = 'Courses';
$route['courses/offline-courses/group-I'] = 'Courses/group_I';
$route['courses/offline-courses/group-II'] = 'Courses/group_II';
$route['courses/offline-courses/group-III'] = 'Courses/group_III';
$route['courses/offline-courses/group-IV'] = 'Courses/group_IV';
$route['courses/offline-courses/si-pc'] = 'Courses/si_pc';
$route['courses/offline-courses/gurukul-dsc'] = 'Courses/gurukul_dsc';
$route['courses/offline-courses/tet'] = 'Courses/tet';
$route['courses/offline-courses/ctet'] = 'Courses/ctet';
$route['courses/offline-courses/pedagogy-social-studies'] = 'Courses/pedagogy_social_studies';
$route['courses/offline-courses/ethics-teaching-aptitude'] = 'Courses/ethics_teaching_aptitude';

$route['courses/online-courses/group-I-prelims'] = 'Courses/group_I_prelims';
$route['courses/online-courses/group-II'] = 'Courses/group_II_online';
$route['courses/online-courses/group-IV'] = 'Courses/group_IV_online';
$route['courses/online-courses/si-pc'] = 'Courses/si_pc_online';
$route['courses/online-courses/gurukul'] = 'Courses/gurukul';

$route['courses/offline-courses'] = 'courses/offline_courses';
$route['courses/online-courses'] = 'courses/online_courses';
$route['gallery'] = 'home/gallery';
$route['team'] = 'home/team';
$route['blog'] = 'home/blog';
$route['contact-us'] = 'home/contact_us';
