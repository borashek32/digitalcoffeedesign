<?php

namespace App\Http\Controllers\Site\Projects\Project11\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects\Project11\Work;
use App\Models\Projects\Project11\Cat;

class AuthController extends Controller
{
    public function personalBlogLogin()
    {
        $works      = Work::latest()->get();
        $categories = Cat::latest()->get();

        return view('projects.project_11.auth.login', compact('works', 'categories'));
    }

    public function personalBlogRegistration()
    {
        $works      = Work::latest()->get();
        $categories = Cat::latest()->get();

        return view('projects.project_11.auth.registration', compact('works', 'categories'));
    }


}
