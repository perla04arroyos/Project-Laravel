<?php

namespace App\Repositories;

use App\Project;
use Illuminate\Support\Facades\Storage;

class Projects implements ProjectsInterface
{
    public function getPaginated()
    {
        return Project::with(['user','note','tags'])->latest()->paginate(10);
    }

    public function store($request) 
    {
        $project = new Project( $request->validated() );
        $project->image = $request->file('image')->store('images');
        
        //$project = Project::create( $request->validated() );

        if(auth()->check())
        {
            auth()->user()->projects()->save($project);
        }

        return $project;
    }

    public function update($project, $request)
    {
        if($request->hasFile('image'))
        {
            Storage::delete($project->image);

            $project = $project->fill( $request->validated() );

            $project->image = $request->file('image')->store('images');

            auth()->user()->projects()->save($project);
        }
        else
        {
            $project->update( array_filter($request->validated()) );
        }

        return $project;
    }

    public function destroy($project)
    {
        Storage::delete($project->image);

        $project->delete();

        return $project;
    }
}

?>