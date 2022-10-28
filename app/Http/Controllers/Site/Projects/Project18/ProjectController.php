<?php

namespace App\Http\Controllers\Site\Projects\Project18;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.project_18.public.index');
    }
}
