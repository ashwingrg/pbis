<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
#login & logout
$route['default_controller'] = "login";
$route['login'] = "login";
$route ['logout'] = "login/logout";

#dshboard
$route['home'] = "dashboard";
$route['home/dashboard'] = "dashboard";

#staff 
$route['home/staffs'] = "staffs";
$route['home/staffs/newstaff'] = "staffs/newStaff";
$route['home/staffs/delete/(:num)'] = "staffs/deleteStaff/$1";
$route['home/staffs/edit/(:num)'] = "staffs/editStaff/$1";

#division
$route['home/divisions'] = "divisions";
$route['home/divisions/newdivision'] = "divisions/newDivision";
$route['home/divisions/delete/(:num)'] = "divisions/deleteDivision/$1";
$route['home/divisions/edit/(:num)'] = "divisions/editDivision/$1";

#ExCo Members
$route['home/exco'] = "excomember";
$route['home/exco/newmember'] = "excomember/newMember";
$route['home/exco/delete/(:num)'] = "excomember/deleteMember/$1";
$route['home/exco/update/(:num)'] = "excomember/updateMember/$1";

#user-loggedin
$route['home/userdetails'] = "loggedinuser";

#workplan-detail
$route['home/workplandetail/new'] = "workplandetail/newWorkplanDetail";
$route['home/workplandetail/filterquarter'] = "workplandetail/filterQarter";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */