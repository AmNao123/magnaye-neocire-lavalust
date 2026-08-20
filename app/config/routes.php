<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get(
    '/student',
    'profile.php'
); 

$router->get(
    '/student/profile',
    'StudentController::profile'
);