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
            'skills'      => 'Programmer, Video Editor, Musician',
            'hobbies'     => 'Gaming, Volleyball, Playing Instruments, Reading',

            'description' => '
                Neo Cire Magnaye is a highly skilled and motivated individual with a passion for technology and creativity. 
                With a strong background in programming, video editing, and music, Neo has developed a diverse skill set that allows him to excel in various areas. 
                He is known for his dedication, attention to detail, and ability to think critically, making him a valuable asset in any team or project. 
                Neo is constantly seeking new challenges and opportunities to expand his knowledge and expertise, and he is committed to delivering high-quality results in everything he does.',

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

        $data['studentHomeUrl'] ='/student';
        $data['studentProfileUrl'] ='/student/profile';

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

        $data['studentHomeUrl'] ='/student';
        $data['studentProfileUrl'] ='/student/profile';

        $this->call->view('student/profile', $data);
    }
}    