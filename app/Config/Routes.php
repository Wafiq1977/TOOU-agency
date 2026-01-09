<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/services', 'Services::index');
$routes->get('/portfolio', 'Portfolio::index');
$routes->get('/about', 'About::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/orders', 'Admin::orders');
$routes->get('/admin/services', 'Admin::services');
$routes->post('/admin/orders/update/(:num)', 'Admin::updateOrderStatus/$1');
$routes->get('/order', 'Order::index');
$routes->post('/order/submit', 'Order::submit');
