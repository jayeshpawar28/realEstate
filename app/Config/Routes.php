<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Frontend::index');

 //front-end routs start
 $routes->get('index', 'Frontend::index');
 $routes->post('index', 'Frontend::index');

 $routes->get('contact', 'Frontend::contact');
 $routes->post('contact', 'Frontend::contact');

 $routes->get('/login', 'Frontend::login');
 $routes->post('/login', 'Frontend::login');

 $routes->get('welcome', 'Frontend::welcome');
 //$routes->post('welcome', 'Frontend::welcome');
 $routes->post('/welcome/(:num)', 'Frontend::welcome/$1');


 $routes->get('/logout', 'Frontend::index_logout');
 $routes->post('/logout', 'Frontend::index_logout');


 $routes->get('register', 'Frontend::register');
 $routes->post('register', 'Frontend::register');

 $routes->get('about', 'Frontend::about');

 $routes->get('services', 'Frontend::services');

 $routes->get('/details/(:num)', 'Frontend::details/$1');
 $routes->post('/details/(:num)', 'Frontend::details/$1');

 $routes->get('/search/(:any)', 'Frontend::searchData/$1');
 $routes->post('/search/(:any)', 'Frontend::searchData/$1');



 //front-end routs end


 //back-end routs start
$routes->get('create', 'Crud::index');
$routes->post('create', 'Crud::index');

$routes->get('read', 'Crud::read');

$routes->get('/delete/(:any)', 'Crud::delete/$1');

$routes->get('/update/(:any)', 'Crud::update/$1');
$routes->post('/update/(:any)', 'Crud::update/$1');

$routes->get('/admin-login', 'Admin::admin_login');
$routes->post('/admin-login', 'Admin::admin_login');

$routes->get('/admin-logout', 'Admin::logout');
$routes->post('/admin-logout', 'Admin::logout');


$routes->get('/dashboard', 'Admin::dashboard');
$routes->post('/dashboard', 'Admin::dashboard');

$routes->get('/add-broker', 'Broker::add');
$routes->post('/add-broker', 'Broker::add');

$routes->get('/manage-broker', 'Broker::manage');
$routes->post('/manage-broker', 'Broker::manage');

$routes->get('/update-broker/(:any)', 'Broker::edit/$1');
$routes->post('/update-broker/(:any)', 'Broker::edit/$1');

$routes->get('/delete-broker/(:any)', 'Broker::delete/$1');
$routes->post('/delete-broker/(:any)', 'Broker::delete/$1');

$routes->get('/add-property', 'Property::add');
$routes->post('/add-property', 'Property::add');

$routes->get('/manage-property', 'Property::manage');
$routes->post('/manage-property', 'Property::manage');

$routes->get('/update-property/(:any)', 'Property::edit/$1');
$routes->post('/update-property/(:any)', 'Property::edit/$1');

$routes->get('/delete-property/(:any)', 'Property::delete/$1');
$routes->post('/delete-property/(:any)', 'Property::delete/$1');

$routes->get('/add-contact', 'Contact::add_contact');
$routes->post('/add-contact', 'Contact::add_contact');

$routes->get('/manage-contact', 'Contact::manage_contact');
$routes->post('/manage-contact', 'Contact::manage_contact');

$routes->get('/update-contact/(:any)', 'Contact::update_contact/$1');
$routes->post('/update-contact/(:any)', 'Contact::update_contact/$1');

$routes->get('/delete-contact/(:any)', 'Contact::delete_contact/$1');
$routes->post('/delete-contact/(:any)', 'Contact::delete_contact/$1');

$routes->get('/user', 'User::user');
$routes->post('/user', 'User::user');

$routes->get('/manage-user', 'User::manage');
$routes->post('/manage-user', 'User::manage');

$routes->get('/update-user/(:any)', 'User::update/$1');
$routes->post('/update-user/(:any)', 'User::update/$1');

$routes->get('/delete-user/(:any)', 'User::delete/$1');
$routes->post('/delete-user/(:any)', 'User::delete/$1');

$routes->get('/enquiry', 'Enquiry::enquiry');
$routes->post('/enquiry', 'Enquiry::enquiry');

$routes->get('/manage-enquiry', 'Enquiry::manage_enquiry');
$routes->post('/manage-enquiry', 'Enquiry::manage_enquiry');

$routes->get('/update-enquiry/(:any)', 'Enquiry::update_enquiry/$1');
$routes->post('/update-enquiry/(:any)', 'Enquiry::update_enquiry/$1');

$routes->get('/delete-enquiry/(:any)', 'Enquiry::delete_enquiry/$1');
$routes->post('/delete-enquiry/(:any)', 'Enquiry::delete_enquiry/$1');



 //back-end routs end
