<?php

namespace App\Repositories;

interface ProjectsInterface
{
    public function getPaginated();

    public function store($request);

    public function update($project, $request);

    public function destroy($project);
}

?>