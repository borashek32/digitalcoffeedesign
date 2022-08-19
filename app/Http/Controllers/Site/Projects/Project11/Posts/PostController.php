<?php

namespace App\Http\Controllers\Site\Projects\Project11\Posts;

use App\Models\Projects\Project11\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects\Project11\Post;
use App\Models\Projects\Project11\Work;

class PostController extends Controller
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
        $posts = Post::latest()->get();

        return view('projects.project_11.posts.index', compact(
            'posts',
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

        return view('projects.project_11.posts.create', compact(
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
       $post = Post::create([
            'title'       => $request->title,
            'desc'        => $request->desc,
            'img'         => $request->img,
            'video'       => $request->video,
            'cat_id'      => $request->cat_id,
            'desc'        => $request->desc
        ]);
        return redirect('/personal-blog/dashboard/posts');
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
    public function edit(Post $post)
    {
        $cats     = Cat::all();
        $works    = Work::latest()->get();

        return view('projects.project_11.posts.edit', [
            'works'      => $works,
            'post'       => $post,
            'cats'       => $cats,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->cat_id        =  $request->cat_id;
        $post->img           =  $request->img;
        $post->video         =  $request->video;
        $post->title         =  $request->title;
        $post->desc          =  $request->desc;
        $post->save();

        return redirect('/personal-blog/dashboard/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/personal-blog/dashboard/posts');
    }
}
