<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {   
        $key = "projects.page." . request('page',1);

        $projects = Cache::rememberForever($key, function(){
            return Project::with(['user','note','tags'])->latest()->paginate(10);
        });

        return view('projects.index',['projects'=>$projects]);
    }

    public function show(Project $project)
    {
        // $project_ = Cache::remember("projects.{$project->id}", 120, function() use ($project){
        //     return Project::findOrFail($project->id);
        // });

        return view('projects.show',[
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        $project = Project::create( $request->validated() );

        if(auth()->check())
        {
            auth()->user()->projects()->save($project);
        }

        Cache::flush();

        // auth()->user()->projects()->create( $request->validated() );

        return redirect()->route('projects.index')->with('status','The project has been created succesfully');
    }

    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update( $request->validated() );

        return redirect()->route('projects.show', $project)->with('status','The project has been updated successfully');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        Cache::flush();

        return redirect()->route('projects.index')->with('status','The project has been deleted successfully');
    }
}
