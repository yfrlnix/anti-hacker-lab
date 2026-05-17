<?php

namespace Config;

use CodeIgniter\Config\Services;

$routes = Services::routes();

$routes->get('/', 'SecurityLab::index');
$routes->post('/submit', 'SecurityLab::submit');