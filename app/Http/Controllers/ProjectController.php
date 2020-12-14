<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\SaveProjectRequest;

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
        return view('projects.index', [
            'projects' => Project::with(['user','note','tags'])->paginate(10)
        ]);
    }

    public function show(Project $project)
    {
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
        // $project = Project::create( $request->validated() );

        // if(auth()->check())
        // {
        //     auth()->user()->projects()->save($project);
        // }

        auth()->user()->projects()->create( $request->validated() );

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
        return redirect()->route('projects.index')->with('status','The project has been deleted successfully');
    }
}
