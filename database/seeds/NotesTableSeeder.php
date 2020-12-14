<?php

use App\Note;
use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::truncate();

        Note::create([
            'body' => 'User Note',
            'notable_id' => 1,
            'notable_type' => 'App\User',
        ]);
        Note::create([
            'body' => 'Project Note',
            'notable_id' => 1,
            'notable_type' => 'App\Project',
        ]);
    }
}
