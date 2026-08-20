<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get(
    '/student/index',
    'StudentController::index'
); 

$router->get(
    '/student/profile',
    'StudentController::profile'
);