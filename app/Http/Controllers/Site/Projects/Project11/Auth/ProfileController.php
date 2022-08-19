<?php

namespace App\Http\Controllers\Site\Projects\Project11\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects\Project11\Work;
use App\Models\Projects\Project11\Cat;

class ProfileController extends Controller
{
    public function personalBlogProfile()
    {
        $works      = Work::latest()->get();
        $cats = Cat::latest()->get();

        return view('projects.project_11.auth.profile', compact('works', 'cats'));
    }
}
