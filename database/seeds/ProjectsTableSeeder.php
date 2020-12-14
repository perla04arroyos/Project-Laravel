<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();
        for($i = 1; $i < 101; $i++){
            Project::create([
                'title' => "Proyecto {$i}",
                'url' => "proyecto-{$i}",
                'description' => "Este es el proyecto {$i}",
                'user_id' => 1,
            ]);
        } 
    }
}
