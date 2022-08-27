<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidateProjectForm;

class ProjectController extends Controller
{
    public function updatedTitle($value)
    {
        $this->slug = SlugService::createSlug(Post::class, 'slug', $value);
    }

    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $categories = Category::all();
            $search = request()->query('search');
            if ($search) {
                $projects = Project::where('page_text', 'LIKE', "%{$search}%")
                    ->orWhere('title', 'LIKE', "%{$search}%")
                    ->latest()
                    ->paginate(6);
            } else {
                $projects = Project::latest()->paginate(10);
                $projects->withPath('/admin/projects');
            }
        return view('admin.projects.index', compact('projects', 'categories'));
        } else {
            return redirect('/')
                ->with('error', 'У вас нет необходимых прав');
        }
    }

    public function create()
    {
        if (Auth::user()->hasRole('admin')) {
            $categories = Category::all();

            return view('admin.projects.create', [
                'categories' => $categories
            ]);
        }
    }

    public function store(ValidateProjectForm $request)
    {
        if (Auth::user()->hasRole('admin')) {
            $project = Project::create([
                'img'         => $request->img,
                'category_id' => $request->category_id,
                'title'       => $request->title,
                'description' => $request->description,
                'link'        => $request->link
            ]);

            return redirect('/admin/projects')
                ->with('success', 'Новый проект был успешно добавлен');
        }
    }

    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        if (Auth::user()->hasRole('admin')) {
            $categories = Category::all();

            return view('admin.projects.edit', [
                'project'    => $project,
                'categories' => $categories,
            ]);
        }
    }

    public function update(ValidateProjectForm $request, Project $project)
    {
        if (Auth::user()->hasRole('admin')) {
            $project->category_id   =  $request->category_id;
            $project->img           =  $request->img;
            $project->title         =  $request->title;
            $project->link          =  $request->link;
            $project->description   =  $request->description;
            $project->save();

            return redirect('/admin/projects')
                ->with('success', 'Проект был успешно обновлен.');
        } else {
            return redirect('/admin/projects')
            ->with('error', 'У вас нет необходимых прав');
        }
    }

    public function destroy(Project $project)
    {
        if (Auth::user()->hasRole('admin')) {
            $project->delete();
            return back()->with('success', 'Проект был успешно успешно удален.');
        }
    }

    public function updateStatus(Request $request, Project $project)
    {
        $project = Project::where('id', $request->id)->first();
        if (Auth::user()->hasRole('admin')) {
            if ($request->mode == 'true') {
                DB::table('projects')->where('id', $request->id)
                    ->update(['visability' => '1']);
            } else {
                DB::table('projects')->where('id', $request->id)
                    ->update(['visability' => '0']);
            }
            return response()->json([
                'message'      => 'Статус проекта успешно обновлен',
                'status'       => 200
            ]);
        } else {
            return redirect('/projects')
            ->with('error', 'У вас нет необходимых прав');
        }
    }
}
