<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\SaveProjectRequest;
use App\Repositories\ProjectsInterface;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $projects;

    public function __construct(ProjectsInterface $projects)
    {
        $this->projects = $projects;
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {   
        $projects = $this->projects->getPaginated();

        return view('projects.index',['projects'=>$projects]);
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
        $project = $this->projects->store($request);

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
        $project = $this->projects->update($project, $request);

        return redirect()->route('projects.show', $project)->with('status','The project has been updated successfully');
    }

    public function destroy(Project $project)
    {  
        $project = $this->projects->destroy($project);

        return redirect()->route('projects.index')->with('status','The project has been deleted successfully');
    }
}
