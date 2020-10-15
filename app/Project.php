<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //protected $table = 'my_table';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function user()
    {   
        return $this->belongsTo(User::class);
    }

    public function note()
    {
        return $this->morphOne(Note::class, 'notable');
    }
}
