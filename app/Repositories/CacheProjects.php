<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Cache;

class CacheProjects implements ProjectsInterface
{
    protected $projects;

    public function __construct(Projects $projects)
    {
        $this->projects = $projects;
    }

    public function getPaginated()
    {
        $key = "projects.page." . request('page',1);

        return Cache::tags('projects')
        ->rememberForever($key, function(){
            return $this->projects->getPaginated();
        });
    }

    public function store($request) 
    {
        $project = $this->projects->store($request);

        Cache::tags('projects')->flush();

        return $project;
    }

    public function update($project, $request)
    {
        $project = $this->projects->update($project, $request);

        Cache::tags('projects')->flush();

        return $project;
    }

    public function destroy($project)
    {
        $project = $this->projects->destroy($project);

        Cache::tags('projects')->flush();

        return $project;

    }
}

?>