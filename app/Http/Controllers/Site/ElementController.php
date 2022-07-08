<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function element1()
    {
        return view('elements.element_1.index');
    }

    public function element2()
    {
        return view('elements.element_2.index');
    }
}
