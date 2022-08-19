<?php

namespace App\Http\Controllers\Site\Projects\Project11;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects\Project11\Post;
use App\Models\Projects\Project11\Work;
use App\Models\Projects\Project11\Cat;
use App\Models\Projects\Project11\Story;

class ProjectController extends Controller
{
    public function personalBlog()
    {
        $stories6 = Story::latest()->limit('6')->get();
        $stories4 = Story::latest()->limit('4')->get();
        $stories2 = Story::latest()->limit('2')->get();

        $works    = Work::latest()->get();

        $cats = Cat::latest()->get();

        $search = request()->query('search');
        if ($search) {
            $posts = Post::where('title', 'LIKE', "%{$search}%")
                ->orWhere('desc', 'LIKE', "%{$search}%")
                ->latest()
                ->get();

            return view('projects.project_11.search', compact(
                'stories6',
                'stories4',
                'stories2',
                'posts',
                'cats',
                'works',
                'search'
            ));
        } else {
            $posts = Post::latest()->get();

            return view('projects.project_11.index', compact(
                'stories6',
                'stories4',
                'stories2',
                'posts',
                'cats',
                'works',
                'search'
            ));
        }
    }

    public function personalBlogPost($id)
    {
        $post     = Post::where('id', $id)->first();
        $articles = Post::latest()->get();
        $cats = Cat::latest()->get();
        $works    = Work::latest()->get();

        return view('projects.project_11.post-one', compact(
            'post',
            'articles',
            'cats',
            'works'
        ));
    }

    public function personalBlogAbout()
    {
        $articles = Post::latest()->get();
        $cats     = Cat::latest()->get();
        $works    = Work::latest()->get();

        return view('projects.project_11.about', compact(
            'articles',
            'cats',
            'works'
        ));
    }

    public function personalBlogOneWork($id)
    {
        $work       = Work::where('id', $id)->first();
        $cats = Cat::latest()->get();
        $works      = Work::latest()->get();

        return view('projects.project_11.work-one', compact('work', 'cats', 'works'));
    }

    public function personalBlogStore(Request $request)
    {
        Post::create([
            'cat_id'      => $request->cat_id,
            'desc'        => $request->desc
        ]);
        return redirect('/personal-blog');
    }

    public function personalBlogCategory($id)
    {
        $cat   = Cat::where('id', $id)->first();
        $articles   = Post::latest()->get();
        $cats = Cat::latest()->get();
        $works      = Work::latest()->get();

        return view('projects.project_11.category', compact(
            'articles',
            'cats',
            'works',
            'cat'
        ));
    }
}
