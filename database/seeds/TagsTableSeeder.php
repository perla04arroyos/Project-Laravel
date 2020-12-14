<?php

use App\Tag;
use App\User;
use App\Project;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        DB::table('taggables')->truncate();

        $tag = Tag::create([
            'name' => 'Morphed Tag'
        ]);
        
        $user = User::find(1);
        $project = Project::find(1);

        $tag->users()->save($user);
        $tag->projects()->save($project);
    }
}
