<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once APP_DIR . 'middlewares/StudentMiddleware.php';

class StudentController extends Controller
{
    private function studentData()
    {
       return [
            'student_id'  => '2024-01622',
            'name'        => 'Neo Cire Magnaye',
            'course'      => 'BS Information Technology',
            'year'        => '3rd Year',
            'section'     => '3 F-6',
            'email'       => 'magnayeneo@gmail.com',

            'address'     => 'Santa. Rita, Pinamalayan, Oriental Mindoro',
            'contact'     => '0916 554 4080',
            'skills'      => 'Database',
            'hobbies'     => 'Gaming, Volleyball, Playing Instruments, Reading',

            'description' => 'A BS Information Technology student interested in web development, programming, and learning new technologies.',

            'social_media' => [
            'facebook' => 'https://www.facebook.com/fugginidiot',
            'instagram' => 'https://www.instagram.com/heyim_nao/',
            ]
        ];
    }


    public function index()
    {
        $data['student'] = $this->studentData();

        $data['title'] = 'Neo Magnaye | Student Portal';

        $this->call->view('student/index', $data);
    }


    public function profile()
    {
        $middleware = new StudentMiddleware();

        if ($middleware->handle() !== true) {
        return;
        }

        $data['student'] = $this->studentData();

        $data['title'] = 'Neo Magnaye | Student Profile';

        $this->call->view('student/profile', $data);
    }
}    