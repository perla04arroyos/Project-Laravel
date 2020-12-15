<?php

namespace App\Repositories;

use App\Project;

class Projects implements ProjectsInterface
{
    public function getPaginated()
    {
        return Project::with(['user','note','tags'])->latest()->paginate(10);
    }

    public function store($request) 
    {
        $project = Project::create( $request->validated() );

        if(auth()->check())
        {
            auth()->user()->projects()->save($project);
        }

        return $project;
    }

    public function update($project, $request)
    {
        $project->update( $request->validated() );

        return $project;
    }

    public function destroy($project)
    {
        $project->delete();

        return $project;
    }
}

?>