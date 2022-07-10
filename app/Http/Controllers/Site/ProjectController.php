<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('site.index', compact('projects'));
    }

    // public function project($slug)
    // {
    //     $project = Project::where('slug', $slug)->first();
    //     return view('projects.' . $project->slug . '.' . $project->slug, compact('project'));
    // }

    public function freelanceCamp()
    {
        return view('projects.project_1.index');
    }

    public function creativeAgency()
    {
        return view('projects.project_2.index');
    }

    public function creativeAgencyContact()
    {
        return view('projects.project_2.contact');
    }

    public function creativeAgencyServices()
    {
        return view('projects.project_2.services');
    }

    public function creativeAgencyWork()
    {
        return view('projects.project_2.work');
    }

    public function somePortfolioSite()
    {
        return view('projects.project_3.index');
    }

    public function chooseYourColors()
    {
        return view('projects.project_4.index');
    }

    public function relvise()
    {
        return view('projects.project_5.index');
    }

    public function gocorona()
    {
        return view('projects.project_6.index');
    }

    public function designerPortfolioSite()
    {
        return view('projects.project_7.index');
    }

    public function flexBox()
    {
        return view('elements.element_1.index');
    }

    public function menuBurger()
    {
        return view('elements.element_2.index');
    }
}
