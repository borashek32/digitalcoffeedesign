<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project1()
    {
        return view('projects.project_1.index');
    }

    public function project2()
    {
        return view('projects.project_2.index');
    }

    public function project2_contact()
    {
        return view('projects.project_2.contact');
    }

    public function project2_services()
    {
        return view('projects.project_2.services');
    }

    public function project2_work()
    {
        return view('projects.project_2.work');
    }

    public function project3()
    {
        return view('projects.project_3.index');
    }

    public function project4()
    {
        return view('projects.project_4.index');
    }

    public function project5()
    {
        return view('projects.project_5.index');
    }

    public function project6()
    {
        return view('projects.project_6.index');
    }

    public function project7()
    {
        return view('projects.project_7.index');
    }
}
