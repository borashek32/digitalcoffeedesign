<?php

namespace App\Http\Controllers\Site\Projects\Project11\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects\Project11\Cat;
use App\Models\Projects\Project11\Work;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works    = Work::latest()->get();
        $cats     = Cat::latest()->get();

        return view('projects.project_11.cats.index', compact(
            'cats',
            'works'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works    = Work::latest()->get();
        $cats     = Cat::latest()->get();

        return view('projects.project_11.cats.create', compact(
            'cats',
            'works'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = Cat::create([
            'name'  => $request->name
        ]);
        return redirect('/personal-blog/dashboard/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat      = Cat::find($id);
        $cats     = Cat::all();
        $works    = Work::latest()->get();

        return view('projects.project_11.cats.edit', [
            'works'      => $works,
            'cats'       => $cats,
            'cat'        => $cat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat        = Cat::find($id);
        $cat->name  =  $request->name;
        $cat->save();

        return redirect('/personal-blog/dashboard/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::find($id);
        $cat->delete();
        return redirect('/personal-blog/dashboard/categories');
    }
}
