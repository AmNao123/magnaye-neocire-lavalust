<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get(
    '/views/student',
    'StudentController::index'
); 

$router->get(
    '/views/student/profile',
    'StudentController::profile'
);