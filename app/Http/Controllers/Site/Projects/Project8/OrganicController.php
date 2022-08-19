<?php

namespace App\Http\Controllers\Site\Projects\Project8;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganicController extends Controller
{
    public function index()
    {
        return view('projects.project_8.index');
    }

    public function organicAbout()
    {
        return view('projects.project_8.pages.about');
    }

    public function organicProducts()
    {
        return view('projects.project_8.pages.products');
    }

    public function organicContacts()
    {
        return view('projects.project_8.pages.contacts');
    }

    public function organicReviews()
    {
        return view('projects.project_8.pages.reviews');
    }
}
