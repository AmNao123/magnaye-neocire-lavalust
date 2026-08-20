<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get(
<<<<<<< HEAD
    '/views/student',
=======
    '/views/student/',
>>>>>>> 0b527345fda277eb95a866c60db8bfd4bf6dd71d
    'StudentController::index'
); 

$router->get(
    '/views/student/profile',
    'StudentController::profile'
);
