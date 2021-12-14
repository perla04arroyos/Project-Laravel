<?php

namespace App\Repositories;

use App\Project;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
            
            $image = Image::make(Storage::get($project->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();

            Storage::put($project->image, (string) $image);
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

            // Image:make(storage_path('app/public' . $project->image));
            $image = Image::make(Storage::get($project->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();

            Storage::put($project->image, (string) $image);
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